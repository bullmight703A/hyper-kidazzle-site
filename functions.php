<?php
/**
 * Kidazzle Theme Functions
 *
 * Homepage Template: front-page.php (WordPress default)
 *
 * @package kidazzle_Theme
 * @since 1.0.0
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Increase Memory Limit for SEO Engine
 */
@ini_set('memory_limit', '256M');

/**
 * Cleanup UI: Suppress PHP Deprecation Warnings
 * These warnings from legacy plugins (like WP Pusher) clutter the frontend.
 */
if (!is_admin()) {
    @ini_set('display_errors', 0);
    error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT & ~E_NOTICE);
}

/**
 * Define theme constants
 */
define('KIDAZZLE_VERSION', '1.0.0');
define('KIDAZZLE_THEME_DIR', get_template_directory());
define('KIDAZZLE_THEME_URI', get_template_directory_uri());

/**
 * Load core theme functionality
 * Order matters - load dependencies first
 */

// Core setup and configuration
require_once KIDAZZLE_THEME_DIR . '/inc/setup.php';
require_once KIDAZZLE_THEME_DIR . '/inc/critical-css.php';
require_once KIDAZZLE_THEME_DIR . '/inc/enqueue.php';
require_once KIDAZZLE_THEME_DIR . '/inc/program-settings.php';
require_once KIDAZZLE_THEME_DIR . '/inc/nav-menus.php';

// Custom Post Types
require_once KIDAZZLE_THEME_DIR . '/inc/cpt-programs.php';
require_once KIDAZZLE_THEME_DIR . '/inc/cpt-locations.php';
require_once KIDAZZLE_THEME_DIR . '/inc/cpt-cities.php';
require_once KIDAZZLE_THEME_DIR . '/inc/cpt-team-members.php';
require_once KIDAZZLE_THEME_DIR . '/inc/class-program-enhancements.php';
require_once KIDAZZLE_THEME_DIR . '/inc/class-amp-blog.php';

// API Handlers
require_once KIDAZZLE_THEME_DIR . '/inc/careers-api.php';

// Page Meta Boxes
require_once KIDAZZLE_THEME_DIR . '/inc/about-page-meta.php';
require_once KIDAZZLE_THEME_DIR . '/inc/curriculum-page-meta.php';
require_once KIDAZZLE_THEME_DIR . '/inc/contact-page-meta.php';
require_once KIDAZZLE_THEME_DIR . '/inc/stories-page-meta.php';
require_once KIDAZZLE_THEME_DIR . '/inc/parents-page-meta.php';
require_once KIDAZZLE_THEME_DIR . '/inc/careers-page-meta.php';
require_once KIDAZZLE_THEME_DIR . '/inc/employers-page-meta.php';
require_once KIDAZZLE_THEME_DIR . '/inc/privacy-page-meta.php';
require_once KIDAZZLE_THEME_DIR . '/inc/schema-meta-boxes.php';
require_once KIDAZZLE_THEME_DIR . '/inc/general-seo-meta.php';


// Utility Functions
require_once KIDAZZLE_THEME_DIR . '/inc/template-tags.php';
require_once KIDAZZLE_THEME_DIR . '/inc/dynamic-links.php';
require_once KIDAZZLE_THEME_DIR . '/inc/about-seo.php';
require_once KIDAZZLE_THEME_DIR . '/inc/customizer-home.php';
require_once KIDAZZLE_THEME_DIR . '/inc/customizer-header.php';
require_once KIDAZZLE_THEME_DIR . '/inc/customizer-footer.php';
require_once KIDAZZLE_THEME_DIR . '/inc/customizer-locations.php';
require_once KIDAZZLE_THEME_DIR . '/inc/customizer-seo.php';
require_once KIDAZZLE_THEME_DIR . '/inc/customizer-scripts.php';

// Legacy helper files (ACF plugin optional; helpers run on core WP functions only)
require_once KIDAZZLE_THEME_DIR . '/inc/acf-options.php';
require_once KIDAZZLE_THEME_DIR . '/inc/acf-homepage.php';

require_once KIDAZZLE_THEME_DIR . '/inc/cleanup.php';

// SEO and Internationalization
require_once KIDAZZLE_THEME_DIR . '/inc/seo-engine.php';
require_once KIDAZZLE_THEME_DIR . '/inc/city-slug-logic.php';
require_once KIDAZZLE_THEME_DIR . '/inc/spanish-variant-generator.php';
require_once KIDAZZLE_THEME_DIR . '/inc/monthly-seo-cron.php';

// LLM SEO / Citation Module (Legacy - Disabled to prevent conflict with Advanced SEO/LLM)
// require_once KIDAZZLE_THEME_DIR . '/inc/llm-seo/bootstrap.php';

// Advanced SEO/LLM Module (Editable Fields)
require_once KIDAZZLE_THEME_DIR . '/inc/advanced-seo-llm/bootstrap.php';

// SEO Automations (Internal Linking, Geo SEO, etc.)
require_once KIDAZZLE_THEME_DIR . '/inc/seo-automations/bootstrap.php';

require_once KIDAZZLE_THEME_DIR . '/inc/security.php';
require_once KIDAZZLE_THEME_DIR . '/inc/force-trailing-slashes.php';

/**
 * Remove Legacy JavaScript & Styles
 * - WP Emoji
 * - WP Embeds
 */
function kidazzle_remove_legacy_assets()
{
    // Remove Emoji - DISABLED (User requested emojis back)
    // remove_action('wp_head', 'print_emoji_detection_script', 7);
    // remove_action('admin_print_scripts', 'print_emoji_detection_script');
    // remove_action('wp_print_styles', 'print_emoji_styles');
    // remove_action('admin_print_styles', 'print_emoji_styles');
    // remove_filter('the_content_feed', 'wp_staticize_emoji');
    // remove_filter('comment_text_rss', 'wp_staticize_emoji');
    // remove_filter('wp_mail', 'wp_staticize_emoji_for_email');

    // Remove Embeds
    if (!is_admin()) {
        wp_deregister_script('wp-embed');
    }
}
add_action('init', 'kidazzle_remove_legacy_assets');

/**
 * Remove Gutenberg Block Library CSS on Frontend
 * This theme doesn't use Gutenberg blocks, so we can remove these render-blocking styles
 */
function kidazzle_remove_block_library_css()
{
    if (!is_admin()) {
        // Remove core block library CSS
        wp_dequeue_style('wp-block-library');
        wp_dequeue_style('wp-block-library-theme');

        // Remove WooCommerce block CSS (if any)
        wp_dequeue_style('wc-blocks-style');

        // Remove global styles (theme.json generated)
        wp_dequeue_style('global-styles');
        wp_dequeue_style('wp-block-navigation');
        wp_dequeue_style('classic-theme-styles');
    }
}
add_action('wp_enqueue_scripts', 'kidazzle_remove_block_library_css', 100);

// Disable separate block assets loading (WordPress 5.8+)
add_filter('should_load_separate_core_block_assets', '__return_false');

// Remove inline block styles for specific blocks
add_action('wp_enqueue_scripts', function () {
    // Get all registered block styles and remove them
    $blocks_to_remove = ['heading', 'paragraph', 'list', 'list-item', 'quote', 'image', 'separator'];
    foreach ($blocks_to_remove as $block) {
        wp_dequeue_style("wp-block-{$block}");
        wp_deregister_style("wp-block-{$block}");
    }
}, 200);

/**
 * Exclude images with 'no-lazy' class from LiteSpeed lazy loading
 * This prevents CLS on hero images and other critical above-the-fold images
 */
add_filter('litespeed_media_lazy_img_excludes', function ($excludes) {
    $excludes[] = 'no-lazy';
    $excludes[] = 'fetchpriority';
    return $excludes;
});

// Also exclude from native WordPress lazy loading
add_filter('wp_img_tag_add_loading_attr', function ($value, $image, $context) {
    if (strpos($image, 'no-lazy') !== false || strpos($image, 'fetchpriority') !== false) {
        return false; // Don't add loading="lazy"
    }
    return $value;
}, 10, 3);

/**
 * Add CORS Headers for Font Files
 * Fixes: Cross-origin font loading when site is accessed via www vs non-www
 */
function kidazzle_add_cors_headers()
{
    // Only add headers for font file requests
    $request_uri = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '';

    if (preg_match('/\.(woff2?|ttf|otf|eot)$/i', $request_uri)) {
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: GET, OPTIONS');
        header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
    }
}
add_action('send_headers', 'kidazzle_add_cors_headers');

/**
 * Add CORS headers to font files served by WordPress
 * This filter adds headers when fonts are served through WordPress
 */
function kidazzle_cors_font_headers($headers, $path)
{
    if (preg_match('/\.(woff2?|ttf|otf|eot)$/i', $path)) {
        $headers['Access-Control-Allow-Origin'] = '*';
    }
    return $headers;
}
add_filter('wp_get_attachment_headers', 'kidazzle_cors_font_headers', 10, 2);


/**
 * Performance Optimizations - Phase 1 (Safe Mode)
 * Added: [Current Date]
 */

// Force image dimensions to prevent layout shift (CLS improvement)
add_filter('wp_img_tag_add_width_and_height_attr', '__return_true');

// Force Elementor to output image dimensions
add_filter('elementor/image/print_dimensions', '__return_true');

/**
 * Add width and height attributes to post thumbnails for CLS optimization
 * Filter: post_thumbnail_html
 */
function kidazzle_add_post_thumbnail_dims($html, $post_id, $post_thumbnail_id)
{
    if (!$post_thumbnail_id) {
        return $html;
    }
    return kidazzle_inject_dimensions($html, $post_thumbnail_id);
}
add_filter('post_thumbnail_html', 'kidazzle_add_post_thumbnail_dims', 10, 3);

/**
 * Add width and height attributes to content images
 * Filter: get_image_tag
 */
function kidazzle_add_content_image_dims($html, $id, $alt)
{
    if (!$id) {
        return $html;
    }
    return kidazzle_inject_dimensions($html, $id);
}
add_filter('get_image_tag', 'kidazzle_add_content_image_dims', 10, 3);

/**
 * Helper function to inject dimensions
 */
function kidazzle_inject_dimensions($html, $attachment_id)
{
    // If width is already defined, skip
    if (empty($html) || strpos($html, 'width=') !== false) {
        return $html;
    }

    $metadata = wp_get_attachment_metadata($attachment_id);
    if (isset($metadata['width']) && isset($metadata['height'])) {
        $html = str_replace('<img', sprintf(
            '<img width="%d" height="%d"',
            $metadata['width'],
            $metadata['height']
        ), $html);
    }

    return $html;
}

/**
 * Allow WebP uploads
 */
function kidazzle_mime_types($mimes)
{
    $mimes['webp'] = 'image/webp';
    return $mimes;
}
add_filter('upload_mimes', 'kidazzle_mime_types');



/**
 * Move jQuery to footer for better performance
 * This prevents jQuery from blocking initial render
 */

/**
 * Defer non-critical third-party scripts.
 */
function kidazzle_defer_scripts($tag, $handle, $src)
{
    // List of scripts to defer
    $defer_scripts = array('jquery.min.js', 'jquery-migrate.min.js', 'gtag', 'did-0014');

    foreach ($defer_scripts as $script) {
        if ($src && strpos($src, $script) !== false) {
            return str_replace(' src', ' defer src', $tag);
        }
    }

    return $tag;
}
add_filter('script_loader_tag', 'kidazzle_defer_scripts', 10, 3);
/**
 * LCP Optimization: Preload hero image to improve Largest Content Paint
 */
function kidazzle_preload_lcp_image()
{
    // Using optimized logo as LCP candidate since specific hero image is missing
    $logo_url = get_template_directory_uri() . '/assets/images/kidazzle-logo-140x140.webp';
    echo '<link rel="preload" as="image" href="' . esc_url($logo_url) . '" fetchpriority="high">' . "\n";
}
add_action('wp_head', 'kidazzle_preload_lcp_image', 1);

/**
 * LiteSpeed Cache: Exclude LCP/hero images from lazy loading
 */
function kidazzle_litespeed_exclude_lcp()
{
    return array('logo_optimized', 'kidazzle-logo', 'hero', 'kidazzle-1920w', 'kidazzle-1920w.webp', 'logo');
}
add_filter('litespeed_img_lazy_exclude', 'kidazzle_litespeed_exclude_lcp');

/**
 * SEO: Dynamic Meta Descriptions
 */


/**
 * Dequeue LeadConnector Plugin Scripts
 * The plugin loads scripts immediately, blocking render
 * We dequeue them and load manually with lazy-loading below
 */
function kidazzle_dequeue_leadconnector_plugin()
{
    // Always dequeue to allow JS to handle loading logic (Cloudflare compatible)
    // Dequeue all LeadConnector plugin scripts
    wp_dequeue_script('leadconnector-widget');
    wp_deregister_script('leadconnector-widget');
    wp_dequeue_script('leadconnector');
    wp_deregister_script('leadconnector');
    wp_dequeue_script('lc-widget');
    wp_deregister_script('lc-widget');

    // Also dequeue any styles
    wp_dequeue_style('leadconnector');
    wp_deregister_style('leadconnector');
}
add_action('wp_enqueue_scripts', 'kidazzle_dequeue_leadconnector_plugin', 9999);

/**
 * Lazy Load LeadConnector Widget
 * Delays loading until 3 seconds after page load or on first user interaction
 * This prevents the widget from blocking initial render and improves LCP/FCP
 */
function kidazzle_lazy_load_leadconnector()
{

    ?>
    <script>
        (function () {
            var loaded = false;

            // Function to load the widget
            var loadWidget = function () {
                if (loaded) return;
                loaded = true;

                // Find existing LeadConnector script if present and remove it
                var existingScripts = document.querySelectorAll('script[src*="leadconnectorhq.com"]');
                existingScripts.forEach(function (script) {
                    script.remove();
                });

                // Load the widget script
                var script = document.createElement('script');
                script.src = 'https://widgets.leadconnectorhq.com/loader.js';
                script.setAttribute('data-resources-url', 'https://widgets.leadconnectorhq.com/chat-widget/loader.js');
                script.async = true;
                document.body.appendChild(script);
                console.log('LeadConnector Widget Loaded');
            };

            // Device Detection Logic (Client-Side)
            var isMobile = window.innerWidth < 768;

            if (isMobile) {
                // Mobile: Lazy load after 3.5 seconds
                console.log('Mobile detected: Lazy loading LeadConnector (3.5s delay)');
                setTimeout(loadWidget, 3500);

                // Or on user interaction
                var events = ['mousedown', 'touchstart', 'keydown', 'scroll'];
                events.forEach(function (event) {
                    window.addEventListener(event, loadWidget, { once: true, passive: true });
                });
            } else {
                // Desktop: Load immediately (but defer slightly to let LCP finish)
                console.log('Desktop detected: Loading LeadConnector immediately');
                setTimeout(loadWidget, 100);
            }
        })();
    </script>
    <?php
}
add_action('wp_footer', 'kidazzle_lazy_load_leadconnector', 999);

/**
 * URL Consistency: Force trailing slashes on all URLs
 * This prevents duplicate content issues like /programs vs /programs/
 */
function kidazzle_enforce_trailing_slash($url, $type)
{
    // Skip files (anything with an extension)
    if (preg_match('/\.[a-zA-Z0-9]+(\?|$)/', $url)) {
        return $url;
    }

    // Skip feed URLs
    if ($type === 'single_feed' || $type === 'category_feed') {
        return $url;
    }

    return trailingslashit($url);
}
add_filter('user_trailingslashit', 'kidazzle_enforce_trailing_slash', 10, 2);

/**
 * Title Length Optimization for SEO
 * Ensures titles stay within recommended limits
 */
function kidazzle_optimize_title_length($title_parts)
{
    // Truncate very long titles
    if (isset($title_parts['title']) && mb_strlen($title_parts['title']) > 50) {
        $title_parts['title'] = mb_substr($title_parts['title'], 0, 47) . '...';
    }

    // Use shorter site name suffix on blog posts
    if (is_single() && isset($title_parts['site'])) {
        $title_parts['site'] = 'Kidazzle';
    }

    return $title_parts;
}
add_filter('document_title_parts', 'kidazzle_optimize_title_length', 10);

/**
 * Use shorter title separator for cleaner titles
 */
function kidazzle_title_separator($sep)
{
    return '|';
}
add_filter('document_title_separator', 'kidazzle_title_separator');

/**
 * Disable Speculation Rules
 * Prevents browser prefetching/prerendering which can cause issues with dynamic content
 */
// Programmatically disable Speculation Rules API from WordPress Core or Performance Lab plugin
remove_action('wp_head', 'wp_speculation_rules');
remove_action('wp_footer', 'wp_speculation_rules');
add_filter('wp_speculation_rules_configuration', '__return_empty_array', PHP_INT_MAX);
add_filter('pl_speculation_rules_configuration', '__return_empty_array', PHP_INT_MAX);

/**
 * OpenClaw API Auth Fallback
 * Host (FastCGI) strips Authorization headers, deleting standard App Passwords in transit.
 * This filter looks for X-OpenClaw-Auth and explicitly logs the API user in.
 */
add_filter('determine_current_user', function ($user_id) {
    if (!empty($user_id)) {
        return $user_id;
    }

    // 1. Look for our custom fallback header
    $auth = isset($_SERVER['HTTP_X_OPENCLAW_AUTH']) ? $_SERVER['HTTP_X_OPENCLAW_AUTH'] : '';

    // 2. Fallback to REDIRECT_HTTP_AUTHORIZATION (CGI environments sometimes move it here)
    if (empty($auth) && isset($_SERVER['REDIRECT_HTTP_AUTHORIZATION'])) {
        $auth = $_SERVER['REDIRECT_HTTP_AUTHORIZATION'];
    }

    if (!empty($auth) && strpos(strtolower($auth), 'basic ') === 0) {
        $credentials = base64_decode(substr($auth, 6));
        if (strpos($credentials, ':') !== false) {
            list($username, $password) = explode(':', $credentials, 2);

            // Trick WordPress core into thinking CGI auth happened natively
            $_SERVER['PHP_AUTH_USER'] = $username;
            $_SERVER['PHP_AUTH_PW'] = $password;

            // Explicitly verify password and return User ID so rest_cannot_create is solved
            $user = wp_authenticate($username, $password);
            if (!is_wp_error($user) && $user instanceof WP_User) {
                return $user->ID;
            }
        }
    }

    return $user_id;
}, 15);

/**
 * Optimize Native WordPress XML Sitemaps (SEO Cleanup)
 * Remove 'users' and 'taxonomies' (tags/categories) to prevent sitemap bloat.
 */
add_filter('wp_sitemaps_add_provider', function ($provider, $name) {
    if (in_array($name, array('users', 'taxonomies'))) {
        return false;
    }
    return $provider;
}, 10, 2);

/**
 * One-Time Bulk Reset for 104 Combo Pages Sitemap Bug
 */
add_action('admin_init', function() {
    if (!get_option('kidazzle_combos_bulk_reset_done_1')) {
        if (class_exists('kidazzle_Combo_Page_Generator') && class_exists('kidazzle_Combo_Page_Data')) {
            $combos = kidazzle_Combo_Page_Generator::get_all_combos();
            foreach ($combos as $combo) {
                if(isset($combo['program']) && isset($combo['city']) && isset($combo['state'])) {
                    $p = $combo['program']->post_name;
                    $c = sanitize_title($combo['city']);
                    $s = $combo['state'];
                    // Reset to auto so they drop out of the sitemap
                    kidazzle_Combo_Page_Data::save($p, $c, $s, ['status' => 'auto']);
                }
            }
            update_option('kidazzle_combos_bulk_reset_done_1', 1);
        }
    }
});

/**
 * Force Flush Rewrite Rules for 404 Blog Fix
 */
add_action('init', function() {
    if (!get_option('kidazzle_blog_rewrite_flush_done_1')) {
        flush_rewrite_rules();
        update_option('kidazzle_blog_rewrite_flush_done_1', 1);
    }
}, 9999);

/**
 * Temporary Drop-in to Force Flush 404s (Combo Pages)
 */
add_action('init', function() {
    if (!get_transient('kidazzle_night_flush_2026')) {
        flush_rewrite_rules(false);
        set_transient('kidazzle_night_flush_2026', true, DAY_IN_SECONDS);
        error_log('KIDAZZLE RULE FLUSH: Theme forced SEO flush.');
    }
}, 9999);

/**
 * Temporary Diagnostic Endpoint for Combo Pages
 */
add_action('rest_api_init', function () {
    register_rest_route('kidazzle/v1', '/combo-diag', array(
        'methods' => 'GET',
        'callback' => function () {
            if (!class_exists('kidazzle_Combo_Page_Generator')) {
                return new WP_REST_Response(['error' => 'Class missing'], 404);
            }
            $combos = kidazzle_Combo_Page_Generator::get_all_combos();
            $active = 0;
            $hidden = 0;
            $samples = [];
            
            foreach ($combos as $combo) {
                if(!isset($combo['program']) || !isset($combo['city']) || !isset($combo['state'])) {
                    continue;
                }
                
                $p = $combo['program']->post_name;
                $c = sanitize_title($combo['city']);
                $s = strtolower($combo['state']);
                
                $data = kidazzle_Combo_Page_Data::get($p, $c, $s);
                $status = $data['status'] ?? 'auto';
                
                if ($status === 'auto' || $status === 'override') {
                    $active++;
                    if (count($samples) < 5) {
                        $samples[] = home_url("/$p-in-$c-$s/");
                    }
                } else {
                    $hidden++;
                }
            }
            
            return new WP_REST_Response([
                'total' => count($combos),
                'active' => $active,
                'hidden' => $hidden,
                'samples' => $samples
            ], 200);
        },
        'permission_callback' => '__return_true'
    ));
});
