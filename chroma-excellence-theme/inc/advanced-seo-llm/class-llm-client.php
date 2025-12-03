<?php
/**
 * LLM Client
 * Handles communication with OpenAI API
 *
 * @package Chroma_Excellence
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

class Chroma_LLM_Client
{
    private $api_key;
    private $model = 'gpt-4o-mini'; // Default cost-effective model

    public function __construct()
    {
        $this->api_key = get_option('chroma_openai_api_key', '');

        // Register AJAX actions for saving key and testing connection
        add_action('wp_ajax_chroma_save_llm_settings', [$this, 'ajax_save_settings']);
        add_action('wp_ajax_chroma_test_llm_connection', [$this, 'ajax_test_connection']);
        add_action('wp_ajax_chroma_generate_schema', [$this, 'ajax_generate_schema']);
    }

    /**
     * Render Settings Section
     */
    public function render_settings()
    {
        $key = $this->api_key;
        $masked_key = $key ? substr($key, 0, 3) . '...' . substr($key, -4) : '';
        ?>
        <div class="chroma-seo-card">
            <h2>🤖 AI Integration (OpenAI)</h2>
            <p>Connect to OpenAI to auto-generate schema and citation facts.</p>

            <table class="form-table">
                <tr>
                    <th scope="row">OpenAI API Key</th>
                    <td>
                        <div style="display: flex; gap: 10px;">
                            <input type="password" id="chroma_openai_api_key" value="<?php echo esc_attr($key); ?>"
                                class="regular-text" placeholder="sk-..." autocomplete="off">
                            <button id="chroma-save-llm" class="button button-primary">Save Key</button>
                        </div>
                        <p class="description">Your key is stored securely. We recommend using a restricted key.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Connection Status</th>
                    <td>
                        <button id="chroma-test-llm" class="button button-secondary">Test Connection</button>
                        <span id="chroma-llm-status" style="margin-left: 10px; font-weight: bold;"></span>
                    </td>
                </tr>
            </table>
        </div>

        <script>
            jQuery(document).ready(function ($) {
                // Save Key
                $('#chroma-save-llm').on('click', function (e) {
                    e.preventDefault();
                    var btn = $(this);
                    btn.prop('disabled', true).text('Saving...');

                    $.post(ajaxurl, {
                        action: 'chroma_save_llm_settings',
                        api_key: $('#chroma_openai_api_key').val()
                    }, function (response) {
                        btn.prop('disabled', false).text('Save Key');
                        if (response.success) {
                            alert('API Key saved!');
                        } else {
                            alert('Error saving key.');
                        }
                    });
                });

                // Test Connection
                $('#chroma-test-llm').on('click', function (e) {
                    e.preventDefault();
                    var btn = $(this);
                    var status = $('#chroma-llm-status');

                    btn.prop('disabled', true).text('Testing...');
                    status.text('').removeClass('text-green-600 text-red-600');

                    $.post(ajaxurl, {
                        action: 'chroma_test_llm_connection'
                    }, function (response) {
                        btn.prop('disabled', false).text('Test Connection');
                        if (response.success) {
                            status.text('✅ Connected successfully!').css('color', 'green');
                        } else {
                            status.text('❌ Connection failed: ' + response.data.message).css('color', 'red');
                        }
                    });
                });
            });
        </script>
        <?php
    }

    /**
     * AJAX: Save Settings
     */
    public function ajax_save_settings()
    {
        if (!current_user_can('manage_options')) {
            wp_send_json_error(['message' => 'Permission denied']);
        }

        $key = sanitize_text_field($_POST['api_key']);
        update_option('chroma_openai_api_key', $key);

        wp_send_json_success();
    }

    /**
     * AJAX: Test Connection
     */
    public function ajax_test_connection()
    {
        if (!current_user_can('manage_options')) {
            wp_send_json_error(['message' => 'Permission denied']);
        }

        if (!$this->api_key) {
            wp_send_json_error(['message' => 'No API Key found. Please save your key first.']);
        }

        $response = $this->make_request([
            'messages' => [
                ['role' => 'user', 'content' => 'Say "Hello" if you can hear me.']
            ]
        ]);

        if (is_wp_error($response)) {
            wp_send_json_error(['message' => $response->get_error_message()]);
        }

        wp_send_json_success(['message' => 'Connected!']);
    }

    /**
     * AJAX: Generate Schema from Content
     */
    public function ajax_generate_schema()
    {
        if (!current_user_can('edit_posts')) {
            wp_send_json_error(['message' => 'Permission denied']);
        }

        $post_id = intval($_POST['post_id']);
        $schema_type = sanitize_text_field($_POST['schema_type']);

        if (!$post_id || !$schema_type) {
            wp_send_json_error(['message' => 'Missing parameters']);
        }

        $post = get_post($post_id);
        if (!$post) {
            wp_send_json_error(['message' => 'Post not found']);
        }

        // Prepare prompt based on schema type
        $prompt = "Analyze the following content and extract data for a Schema.org '{$schema_type}' object.\n";
        $prompt .= "Return ONLY valid JSON. Do not include markdown formatting.\n\n";
        $prompt .= "Content:\n" . strip_tags($post->post_content);

        $response = $this->make_request([
            'messages' => [
                ['role' => 'system', 'content' => 'You are an SEO expert assistant. You extract structured data from text.'],
                ['role' => 'user', 'content' => $prompt]
            ],
            'response_format' => ['type' => 'json_object']
        ]);

        if (is_wp_error($response)) {
            wp_send_json_error(['message' => $response->get_error_message()]);
        }

        if (!isset($response['choices'][0]['message']['content'])) {
            wp_send_json_error(['message' => 'Invalid API response format']);
        }

        $content = $response['choices'][0]['message']['content'];
        $json = json_decode($content, true);

        if (!$json) {
            wp_send_json_error(['message' => 'Failed to parse AI response']);
        }

        wp_send_json_success($json);
    }

    /**
     * Make Request to OpenAI
     */
    private function make_request($data)
    {
        $url = 'https://api.openai.com/v1/chat/completions';

        $body = array_merge([
            'model' => $this->model,
            'temperature' => 0.7,
        ], $data);

        $args = [
            'body' => json_encode($body),
            'headers' => [
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer ' . $this->api_key
            ],
            'timeout' => 30
        ];

        $response = wp_remote_post($url, $args);

        if (is_wp_error($response)) {
            return $response;
        }

        $code = wp_remote_retrieve_response_code($response);
        $body = wp_remote_retrieve_body($response);
        $data = json_decode($body, true);

        if ($code !== 200) {
            $msg = isset($data['error']['message']) ? $data['error']['message'] : 'Unknown API Error';
            return new WP_Error('api_error', $msg);
        }

        return $data;
    }
}
