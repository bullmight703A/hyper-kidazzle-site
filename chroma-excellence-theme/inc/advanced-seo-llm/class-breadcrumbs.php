<?php
/**
 * Breadcrumbs Module
 * Handles frontend output and dashboard settings
 *
 * @package Chroma_Excellence
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

class Chroma_Breadcrumbs
{
    /**
     * Initialize
     */
    public function init()
    {
        add_action('chroma_breadcrumbs', [$this, 'output']);
        add_action('wp_head', [$this, 'output_schema']);
        add_action('wp_ajax_chroma_save_breadcrumb_settings', [$this, 'ajax_save_settings']);
    }

    /**
     * Output Breadcrumbs HTML
     */
    public function output()
    {
        if (is_front_page()) {
            return;
        }

        $enabled = get_option('chroma_breadcrumbs_enabled', 'yes');
        if ($enabled !== 'yes') {
            return;
        }

        $items = $this->get_breadcrumb_items();
        
        echo '<nav class="chroma-breadcrumbs max-w-7xl mx-auto px-4 lg:px-6 py-4 text-sm text-gray-500" aria-label="Breadcrumb">';
        echo '<ol class="list-none p-0 inline-flex flex-wrap gap-2 items-center">';
        
        foreach ($items as $index => $item) {
            $is_last = $index === count($items) - 1;
            
            echo '<li class="flex items-center">';
            if ($index > 0) {
                echo '<span class="mx-2 text-gray-300">/</span>';
            }
            
            if ($is_last) {
                echo '<span class="text-gray-900 font-medium" aria-current="page">' . esc_html($item['label']) . '</span>';
            } else {
                echo '<a href="' . esc_url($item['url']) . '" class="hover:text-chroma-blue transition-colors">' . esc_html($item['label']) . '</a>';
            }
            echo '</li>';
        }
        
        echo '</ol>';
        echo '</nav>';
    }

    /**
     * Output Schema JSON-LD
     */
    public function output_schema()
    {
        if (is_front_page()) {
            return;
        }

        $items = $this->get_breadcrumb_items();
        $schema_items = [];

        foreach ($items as $index => $item) {
            $schema_items[] = [
                '@type' => 'ListItem',
                'position' => $index + 1,
                'name' => $item['label'],
                'item' => $item['url']
            ];
        }

        $schema = [
            '@context' => 'https://schema.org',
            '@type' => 'BreadcrumbList',
            'itemListElement' => $schema_items
        ];

        echo '<script type="application/ld+json">' . json_encode($schema) . '</script>' . "\n";
    }

    /**
     * Get Breadcrumb Items
     * @return array
     */
    private function get_breadcrumb_items()
    {
        global $post;
        $items = [];

        // Home
        $items[] = [
            'label' => get_option('chroma_breadcrumbs_home_text', 'Home'),
            'url' => home_url('/')
        ];

        if (is_home()) {
            $items[] = [
                'label' => 'Blog',
                'url' => get_post_type_archive_link('post')
            ];
        } elseif (is_singular()) {
            $post_type = get_post_type();
            
            // CPT Archives
            if ($post_type !== 'page' && $post_type !== 'post') {
                $post_type_obj = get_post_type_object($post_type);
                if ($post_type_obj->has_archive) {
                    $items[] = [
                        'label' => $post_type_obj->labels->name,
                        'url' => get_post_type_archive_link($post_type)
                    ];
                } elseif ($post_type === 'city') {
                     // Special case for City CPT which has no archive but we might want a fake parent?
                     // Or just link to "Locations" if conceptually related?
                     // For now, no parent.
                }
            } elseif ($post_type === 'post') {
                $items[] = [
                    'label' => 'Blog',
                    'url' => get_post_type_archive_link('post')
                ];
            }

            // Parents
            if ($post->post_parent) {
                $ancestors = array_reverse(get_post_ancestors($post->ID));
                foreach ($ancestors as $ancestor) {
                    $items[] = [
                        'label' => get_the_title($ancestor),
                        'url' => get_permalink($ancestor)
                    ];
                }
            }

            $items[] = [
                'label' => get_the_title(),
                'url' => get_permalink()
            ];
        } elseif (is_archive()) {
            $items[] = [
                'label' => get_the_archive_title(),
                'url' => '' // Current page
            ];
        } elseif (is_search()) {
            $items[] = [
                'label' => 'Search Results for "' . get_search_query() . '"',
                'url' => ''
            ];
        } elseif (is_404()) {
            $items[] = [
                'label' => 'Page Not Found',
                'url' => ''
            ];
        }

        return $items;
    }

    /**
     * Render Settings Tab in Dashboard
     */
    public function render_settings()
    {
        $enabled = get_option('chroma_breadcrumbs_enabled', 'yes');
        $home_text = get_option('chroma_breadcrumbs_home_text', 'Home');
        ?>
        <div class="chroma-seo-card">
            <h2>Breadcrumbs Configuration</h2>
            <p>Manage how breadcrumbs appear on your site.</p>
            
            <table class="form-table">
                <tr>
                    <th scope="row">Enable Breadcrumbs</th>
                    <td>
                        <label>
                            <input type="checkbox" id="chroma_breadcrumbs_enabled" value="yes" <?php checked($enabled, 'yes'); ?>>
                            Show breadcrumbs on site
                        </label>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Home Link Text</th>
                    <td>
                        <input type="text" id="chroma_breadcrumbs_home_text" value="<?php echo esc_attr($home_text); ?>" class="regular-text">
                        <p class="description">The text for the first link in the breadcrumb trail.</p>
                    </td>
                </tr>
            </table>

            <p class="submit">
                <button id="chroma-save-breadcrumbs" class="button button-primary">Save Settings</button>
            </p>
        </div>

        <script>
        jQuery(document).ready(function($) {
            $('#chroma-save-breadcrumbs').on('click', function(e) {
                e.preventDefault();
                var btn = $(this);
                btn.prop('disabled', true).text('Saving...');

                $.post(ajaxurl, {
                    action: 'chroma_save_breadcrumb_settings',
                    enabled: $('#chroma_breadcrumbs_enabled').is(':checked') ? 'yes' : 'no',
                    home_text: $('#chroma_breadcrumbs_home_text').val()
                }, function(response) {
                    btn.prop('disabled', false).text('Save Settings');
                    if(response.success) {
                        alert('Settings saved!');
                    } else {
                        alert('Error saving settings.');
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
            wp_send_json_error();
        }

        update_option('chroma_breadcrumbs_enabled', sanitize_text_field($_POST['enabled']));
        update_option('chroma_breadcrumbs_home_text', sanitize_text_field($_POST['home_text']));

        wp_send_json_success();
    }
}
