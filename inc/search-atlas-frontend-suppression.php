<?php
/**
 * Keep Search Atlas/OTTO from controlling frontend SEO output.
 *
 * Search Atlas can remain installed for reports, but the theme owns public
 * titles, descriptions, links, and schema so GitHub changes deploy cleanly.
 *
 * @package kidazzle_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Upgrade stale global SEO defaults without requiring a database change first.
 *
 * @param mixed  $value Existing setting value.
 * @param string $key   Setting key.
 * @return mixed
 */
function kidazzle_upgrade_stale_global_seo_setting($value, $key)
{
    if ('global_seo_default_title' === $key && is_string($value)) {
        $stale_titles = array(
            'KIDazzle Child Care | Where Learning is Fun!',
            'Where Learning is Fun!',
        );

        if (in_array(trim($value), $stale_titles, true)) {
            return 'KIDazzle Child Care | Daycare, Preschool & Early Learning';
        }
    }

    if ('global_seo_default_description' === $key && is_string($value)) {
        $stale_descriptions = array(
            'Where Learning is Fun!',
            'KIDazzle Child Care in Atlanta: Early learning programs where fun meets education. Schedule a tour today!',
        );

        if (in_array(trim($value), $stale_descriptions, true)) {
            return 'KIDazzle provides safe, nurturing daycare, preschool, Pre-K, and after-school programs for families across metro Atlanta. Find your nearest location and schedule a tour.';
        }
    }

    return $value;
}
add_filter('kidazzle_global_setting', 'kidazzle_upgrade_stale_global_seo_setting', 10, 2);

/**
 * Determine whether frontend Search Atlas suppression should run.
 *
 * @return bool
 */
function kidazzle_should_suppress_search_atlas_frontend()
{
    if (is_admin() || wp_doing_ajax() || is_feed() || is_robots() || is_trackback()) {
        return false;
    }

    if (defined('REST_REQUEST') && REST_REQUEST) {
        return false;
    }

    return true;
}

/**
 * Start output filtering early enough to catch plugin-injected head markup.
 *
 * @return void
 */
function kidazzle_start_search_atlas_frontend_suppression()
{
    if (!kidazzle_should_suppress_search_atlas_frontend()) {
        return;
    }

    ob_start('kidazzle_strip_search_atlas_frontend_output');
}
add_action('template_redirect', 'kidazzle_start_search_atlas_frontend_suppression', 0);

/**
 * Strip Search Atlas/OTTO public tags while preserving theme-managed SEO tags.
 *
 * @param string $html Full rendered HTML.
 * @return string
 */
function kidazzle_strip_search_atlas_frontend_output($html)
{
    if (!is_string($html) || '' === $html) {
        return $html;
    }

    $html = preg_replace('/\smetasync_optimized\b/i', '', $html);

    $patterns = array(
        '/<meta\b[^>]*data-metasync-otto[^>]*>\s*/i',
        '/<meta\b[^>]*data-otto=["\']true["\'][^>]*>\s*/i',
        '/<meta\b[^>]*data-otto-pixel[^>]*>\s*/i',
        '/<meta\b[^>]*name=["\']otto["\'][^>]*>\s*/i',
        '/<link\b[^>]*sa\.searchatlas\.com[^>]*>\s*/i',
        '/<script\b[^>]*sa\.searchatlas\.com[^>]*>.*?<\/script>\s*/is',
        '/<script\b[^>]*data-otto-pixel[^>]*>.*?<\/script>\s*/is',
        '/<script>\s*window\.__SA_DYO_INITIALIZED__\s*=\s*true;\s*<\/script>\s*/i',
    );

    return preg_replace($patterns, '', $html);
}
