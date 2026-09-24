<?php
/**
 * Universal Domain & Canonical Sanitizer
 *
 * Enforces https://kidazzle.com across all WordPress core options, permalinks,
 * REST endpoints, canonical headers, and DOM output, permanently eliminating
 * any leaks of the legacy staging domain (summer.kidazzle.com).
 *
 * @package kidazzle_Theme
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * 1. Force WordPress Core Site & Home Options
 */
add_filter('pre_option_home', function ($value) {
    return 'https://kidazzle.com';
}, 9999);

add_filter('pre_option_siteurl', function ($value) {
    return 'https://kidazzle.com';
}, 9999);

/**
 * 2. Sanitize all WordPress URL functions
 */
function kidazzle_purge_staging_domain($url) {
    if (!is_string($url) || empty($url)) {
        return $url;
    }
    return str_replace(
        ['https://summer.kidazzle.com', 'http://summer.kidazzle.com', 'summer.kidazzle.com'],
        ['https://kidazzle.com', 'https://kidazzle.com', 'kidazzle.com'],
        $url
    );
}

// Global URL filters
add_filter('home_url', 'kidazzle_purge_staging_domain', 9999);
add_filter('site_url', 'kidazzle_purge_staging_domain', 9999);
add_filter('wp_get_canonical_url', 'kidazzle_purge_staging_domain', 9999);
add_filter('wpseo_canonical', 'kidazzle_purge_staging_domain', 9999);
add_filter('wpseo_opengraph_url', 'kidazzle_purge_staging_domain', 9999);
add_filter('post_link', 'kidazzle_purge_staging_domain', 9999);
add_filter('page_link', 'kidazzle_purge_staging_domain', 9999);
add_filter('post_type_link', 'kidazzle_purge_staging_domain', 9999);
add_filter('term_link', 'kidazzle_purge_staging_domain', 9999);
add_filter('attachment_link', 'kidazzle_purge_staging_domain', 9999);
add_filter('rest_url', 'kidazzle_purge_staging_domain', 9999);
add_filter('plugins_url', 'kidazzle_purge_staging_domain', 9999);
add_filter('content_url', 'kidazzle_purge_staging_domain', 9999);
add_filter('theme_file_uri', 'kidazzle_purge_staging_domain', 9999);
add_filter('get_the_guid', 'kidazzle_purge_staging_domain', 9999);
add_filter('robots_txt', function ($output, $public = true) {
    $output = kidazzle_purge_staging_domain($output);
    if (strpos($output, 'summer.kidazzle.com') !== false) {
        $output = str_replace(
            ['https://summer.kidazzle.com', 'http://summer.kidazzle.com', 'summer.kidazzle.com'],
            ['https://kidazzle.com', 'https://kidazzle.com', 'kidazzle.com'],
            $output
        );
    }
    if (strpos($output, 'sitemap_index.xml') === false && strpos($output, 'sitemap.xml') === false) {
        $output .= "\nSitemap: https://kidazzle.com/sitemap_index.xml\n";
    }
    return $output;
}, 9999, 2);

/**
 * 3. Update Database Options Permanently (wp_options) & Physical robots.txt
 */
add_action('init', function () {
    // Check raw options from DB without pre_option filter
    remove_filter('pre_option_home', '__return_false', 9999);
    remove_filter('pre_option_siteurl', '__return_false', 9999);
    
    global $wpdb;
    if ($wpdb) {
        $raw_siteurl = $wpdb->get_var("SELECT option_value FROM {$wpdb->options} WHERE option_name = 'siteurl' LIMIT 1");
        $raw_home = $wpdb->get_var("SELECT option_value FROM {$wpdb->options} WHERE option_name = 'home' LIMIT 1");

        if ($raw_siteurl && strpos($raw_siteurl, 'summer.kidazzle.com') !== false) {
            $wpdb->update($wpdb->options, ['option_value' => 'https://kidazzle.com'], ['option_name' => 'siteurl']);
        }
        if ($raw_home && strpos($raw_home, 'summer.kidazzle.com') !== false) {
            $wpdb->update($wpdb->options, ['option_value' => 'https://kidazzle.com'], ['option_name' => 'home']);
        }
    }

    // Clean physical robots.txt in ABSPATH if present
    if (defined('ABSPATH') && file_exists(ABSPATH . 'robots.txt')) {
        $r_content = @file_get_contents(ABSPATH . 'robots.txt');
        if ($r_content && strpos($r_content, 'summer.kidazzle.com') !== false) {
            @file_put_contents(ABSPATH . 'robots.txt', str_replace(
                ['https://summer.kidazzle.com', 'http://summer.kidazzle.com', 'summer.kidazzle.com'],
                ['https://kidazzle.com', 'https://kidazzle.com', 'kidazzle.com'],
                $r_content
            ));
        }
    }
}, 1);

/**
 * 4. DOM Output Buffer: Cleanse any remaining summer.kidazzle.com strings
 * in hardcoded HTML, Elementor payloads, and Schema JSON-LD.
 */
function kidazzle_clean_output_buffer($buffer) {
    if (is_admin() || wp_doing_ajax() || (defined('REST_REQUEST') && REST_REQUEST)) {
        return $buffer;
    }
    return str_replace(
        ['https://summer.kidazzle.com', 'http://summer.kidazzle.com', 'summer.kidazzle.com'],
        ['https://kidazzle.com', 'https://kidazzle.com', 'kidazzle.com'],
        $buffer
    );
}

add_action('template_redirect', function () {
    if (!is_admin() && !wp_doing_ajax()) {
        ob_start('kidazzle_clean_output_buffer');
    }
}, 1);
