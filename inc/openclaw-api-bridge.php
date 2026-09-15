<?php
/**
 * OpenClaw Agent Fleet API Bridge
 * Allows autonomous agents to interact directly with WordPress, bypassing N8N.
 */

if (!defined('ABSPATH')) {
    exit;
}

class OpenClaw_API_Bridge {

    // Hardcoded Secure Token for OpenClaw Fleet
    private $auth_token = 'OC_BULLMIGHT_SECURE_9942_XX';

    public function __construct() {
        add_action('rest_api_init', array($this, 'register_endpoints'));
        add_action('init', array($this, 'handle_sso_login'));
        add_filter('option_siteurl', array($this, 'filter_url_for_current_host'));
        add_filter('option_home', array($this, 'filter_url_for_current_host'));
    }

    public function filter_url_for_current_host($url) {
        if (!empty($_SERVER['HTTP_HOST'])) {
            $host = $_SERVER['HTTP_HOST'];
            if (strpos($host, 'summer.kidazzle.com') !== false || strpos($host, 'wpdns.site') !== false) {
                return 'https://' . $host;
            }
        }
        return $url;
    }

    public function register_endpoints() {
        register_rest_route('openclaw/v1', '/publish', array(
            'methods' => 'POST',
            'callback' => array($this, 'handle_publish'),
            'permission_callback' => array($this, 'verify_token')
        ));

        register_rest_route('openclaw/v1', '/telemetry', array(
            'methods' => 'GET',
            'callback' => array($this, 'handle_telemetry'),
            'permission_callback' => array($this, 'verify_token')
        ));

        register_rest_route('openclaw/v1', '/wp-diagnostics', array(
            'methods' => 'GET',
            'callback' => array($this, 'handle_diagnostics'),
            'permission_callback' => array($this, 'verify_token')
        ));

        register_rest_route('openclaw/v1', '/generate-sso-link', array(
            'methods' => 'POST',
            'callback' => array($this, 'handle_generate_sso_link'),
            'permission_callback' => array($this, 'verify_token')
        ));

        register_rest_route('openclaw/v1', '/city-pages', array(
            'methods' => 'GET, POST',
            'callback' => array($this, 'handle_city_pages'),
            'permission_callback' => array($this, 'verify_token')
        ));

        register_rest_route('openclaw/v1', '/update-page', array(
            'methods' => 'POST',
            'callback' => array($this, 'handle_update_page'),
            'permission_callback' => array($this, 'verify_token')
        ));

        register_rest_route('openclaw/v1', '/update-file', array(
            'methods' => 'POST',
            'callback' => array($this, 'handle_update_file'),
            'permission_callback' => array($this, 'verify_token')
        ));

        register_rest_route('openclaw/v1', '/update-siteurl', array(
            'methods' => 'POST',
            'callback' => array($this, 'handle_update_siteurl'),
            'permission_callback' => array($this, 'verify_token')
        ));
    }

    public function verify_token($request) {
        $header_token = $request->get_header('x-openclaw-token');
        if ($header_token === $this->auth_token) {
            return true;
        }
        return new WP_Error('rest_forbidden', esc_html__('OpenClaw Authentication Failed.', 'openclaw'), array('status' => 401));
    }

    public function handle_publish($request) {
        $params = $request->get_json_params();
        
        $post_title = sanitize_text_field($params['title'] ?? '');
        $post_content = wp_kses_post($params['content'] ?? '');
        $post_type = sanitize_text_field($params['post_type'] ?? 'post');
        $post_status = sanitize_text_field($params['status'] ?? 'publish');

        if (empty($post_title) || empty($post_content)) {
            return new WP_REST_Response(['error' => 'Title and Content are required.'], 400);
        }

        $post_data = array(
            'post_title'    => $post_title,
            'post_content'  => $post_content,
            'post_status'   => $post_status,
            'post_type'     => $post_type,
            'post_author'   => 1 
        );

        if (!empty($params['slug'])) {
            $post_data['post_name'] = sanitize_title($params['slug']);
        }
        if (!empty($params['template'])) {
            $post_data['page_template'] = sanitize_text_field($params['template']);
        }

        $post_id = wp_insert_post($post_data);

        if (is_wp_error($post_id)) {
            return new WP_REST_Response(['error' => $post_id->get_error_message()], 500);
        }

        if (!empty($params['template'])) {
            update_post_meta($post_id, '_wp_page_template', sanitize_text_field($params['template']));
        }

        if (!empty($params['image_url'])) {
            $this->attach_remote_image($post_id, $params['image_url']);
        }

        return new WP_REST_Response([
            'success' => true,
            'post_id' => $post_id,
            'url' => get_permalink($post_id)
        ], 200);
    }

    public function handle_telemetry($request) {
        $stats = array(
            'total_posts' => wp_count_posts('post')->publish,
            'total_pages' => wp_count_posts('page')->publish,
            'wp_version' => get_bloginfo('version'),
            'theme_name' => wp_get_theme()->get('Name')
        );
        return new WP_REST_Response($stats, 200);
    }

    public function handle_diagnostics($request) {
        $admins = get_users(array('role' => 'administrator'));
        $admin_list = array_map(function($u) {
            return array('id' => $u->ID, 'login' => $u->user_login, 'email' => $u->user_email);
        }, $admins);

        $lc_options = get_option('leadconnector_options');
        $lc_key = get_option('leadconnector_api_key');

        return new WP_REST_Response(array(
            'siteurl' => get_option('siteurl'),
            'home' => get_option('home'),
            'whl_page' => get_option('whl_page'),
            'whl_redirect_admin' => get_option('whl_redirect_admin'),
            'active_plugins' => get_option('active_plugins'),
            'admins' => $admin_list,
            'leadconnector' => array(
                'options' => $lc_options,
                'has_key' => !empty($lc_key)
            )
        ), 200);
    }

    public function handle_generate_sso_link($request) {
        $params = $request->get_json_params() ?: array();
        $email = $params['email'] ?? 'roberthill@kidazzle.com';
        $user = get_user_by('email', $email) ?: get_user_by('login', 'iro');
        if (!$user) {
            $admins = get_users(array('role' => 'administrator'));
            $user = !empty($admins) ? $admins[0] : null;
        }

        if (!$user) {
            return new WP_REST_Response(array('error' => 'No administrator found.'), 404);
        }

        $token = wp_generate_password(32, false);
        set_transient('openclaw_sso_' . $token, $user->ID, 15 * MINUTE_IN_SECONDS);

        $target_domain = $params['domain'] ?? 'https://summer.kidazzle.com';
        $sso_url = trailingslashit($target_domain) . '?openclaw_sso_token=' . $token;

        return new WP_REST_Response(array(
            'success' => true,
            'user' => $user->user_login,
            'email' => $user->user_email,
            'sso_url' => $sso_url,
            'expires_in' => '15 minutes'
        ), 200);
    }

    public function handle_sso_login() {
        if (!isset($_GET['openclaw_sso_token']) || empty($_GET['openclaw_sso_token'])) {
            return;
        }

        $token = sanitize_text_field($_GET['openclaw_sso_token']);
        $user_id = get_transient('openclaw_sso_' . $token);

        if (!$user_id) {
            wp_die('Invalid or expired login link. Please request a new link.');
        }

        delete_transient('openclaw_sso_' . $token);

        wp_clear_auth_cookie();
        wp_set_current_user($user_id);
        wp_set_auth_cookie($user_id, true);

        $admin_destination = admin_url();
        if (!empty($_SERVER['HTTP_HOST']) && (strpos($_SERVER['HTTP_HOST'], 'summer.kidazzle.com') !== false || strpos($_SERVER['HTTP_HOST'], 'wpdns.site') !== false)) {
            $admin_destination = 'https://' . $_SERVER['HTTP_HOST'] . '/wp-admin/';
        }

        wp_redirect($admin_destination);
        exit;
    }

    public function handle_city_pages($request) {
        $method = $request->get_method();

        if ($method === 'GET') {
            $posts = get_posts(array(
                'post_type' => 'city',
                'posts_per_page' => -1,
                'post_status' => 'any'
            ));

            $result = array();
            foreach ($posts as $post) {
                $result[] = array(
                    'id' => $post->ID,
                    'title' => $post->post_title,
                    'slug' => $post->post_name,
                    'city_county' => get_post_meta($post->ID, 'city_county', true),
                    'city_neighborhoods' => get_post_meta($post->ID, 'city_neighborhoods', true),
                    'related_location_ids' => get_post_meta($post->ID, 'related_location_ids', true) ?: get_post_meta($post->ID, 'city_nearby_locations', true),
                    'city_intro_text' => get_post_meta($post->ID, 'city_intro_text', true)
                );
            }
            return new WP_REST_Response($result, 200);
        }

        if ($method === 'POST') {
            $params = $request->get_json_params();
            $post_id = intval($params['id'] ?? 0);

            if (!$post_id || get_post_type($post_id) !== 'city') {
                return new WP_REST_Response(['error' => 'Valid City Post ID is required.'], 400);
            }

            if (isset($params['city_intro_text'])) {
                update_post_meta($post_id, 'city_intro_text', $params['city_intro_text']);
            }
            if (isset($params['related_location_ids'])) {
                update_post_meta($post_id, 'related_location_ids', $params['related_location_ids']);
                update_post_meta($post_id, 'city_nearby_locations', $params['related_location_ids']);
            }
            if (isset($params['city_county'])) {
                update_post_meta($post_id, 'city_county', sanitize_text_field($params['city_county']));
            }

            return new WP_REST_Response(['success' => true], 200);
        }

        return new WP_REST_Response(['error' => 'Method not allowed.'], 405);
    }

    public function handle_update_page($request) {
        $params = $request->get_json_params();
        $post_id = intval($params['id'] ?? 0);

        if (!$post_id) {
            return new WP_REST_Response(['error' => 'Post ID is required.'], 400);
        }

        $post_data = array(
            'ID' => $post_id
        );

        if (isset($params['title'])) {
            $post_data['post_title'] = sanitize_text_field($params['title']);
        }
        if (isset($params['content'])) {
            $post_data['post_content'] = $params['content'];
        }

        $updated_id = wp_update_post($post_data);

        if (is_wp_error($updated_id)) {
            return new WP_REST_Response(['error' => $updated_id->get_error_message()], 500);
        }

        return new WP_REST_Response(['success' => true, 'post_id' => $updated_id], 200);
    }

    public function handle_update_file($request) {
        $params = $request->get_json_params();
        $file_name = sanitize_text_field($params['file'] ?? '');
        $file_content = $params['content'] ?? '';

        if (empty($file_name)) {
            return new WP_REST_Response(['error' => 'File name is required.'], 400);
        }

        // Restrict directory traversal to keep it safe inside theme folder
        $file_name = ltrim(str_replace(['..', '\\'], '', $file_name), '/');
        
        $theme_dir = get_stylesheet_directory();
        $target_path = $theme_dir . '/' . $file_name;

        // Ensure target directory exists
        $dir = dirname($target_path);
        if (!file_exists($dir)) {
            wp_mkdir_p($dir);
        }

        $written = file_put_contents($target_path, $file_content);

        if ($written === false) {
            return new WP_REST_Response(['error' => 'Failed to write file on server.'], 500);
        }

        return new WP_REST_Response([
            'success' => true,
            'file' => $file_name,
            'bytes' => $written
        ], 200);
    }

    public function handle_update_siteurl($request) {
        $params = $request->get_json_params() ?: array();
        $new_url = !empty($params['url']) ? esc_url_raw($params['url']) : 'https://summer.kidazzle.com';

        update_option('siteurl', $new_url);
        update_option('home', $new_url);

        return new WP_REST_Response(array(
            'success' => true,
            'siteurl' => get_option('siteurl'),
            'home' => get_option('home')
        ), 200);
    }

    private function attach_remote_image($post_id, $image_url) {
        require_once(ABSPATH . 'wp-admin/includes/media.php');
        require_once(ABSPATH . 'wp-admin/includes/file.php');
        require_once(ABSPATH . 'wp-admin/includes/image.php');
        
        $tmp = download_url($image_url);
        if (is_wp_error($tmp)) return;

        $file_array = array(
            'name' => basename($image_url),
            'tmp_name' => $tmp
        );

        $id = media_handle_sideload($file_array, $post_id);
        if (!is_wp_error($id)) {
            set_post_thumbnail($post_id, $id);
        } else {
            @unlink($tmp);
        }
    }
}

new OpenClaw_API_Bridge();
