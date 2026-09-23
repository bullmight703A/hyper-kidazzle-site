<?php
/**
 * Smart 404 Recovery & 301 Redirect Router
 *
 * Automatically intercepts requests for legacy, renamed, or mis-cased URLs
 * and issues proper 301 Permanent Redirects to active canonical endpoints.
 * Also issues 410 Gone for permanently removed legacy taxonomies so Google
 * immediately drops them from crawl queues.
 *
 * @package kidazzle_Theme
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

add_action('template_redirect', 'kidazzle_smart_redirect_router', 1);

function kidazzle_smart_redirect_router() {
    if (is_admin() || wp_doing_ajax() || (defined('REST_REQUEST') && REST_REQUEST)) {
        return;
    }

    $raw_uri = isset($_SERVER['REQUEST_URI']) ? (string) wp_parse_url(wp_unslash($_SERVER['REQUEST_URI']), PHP_URL_PATH) : '';
    if (empty($raw_uri) || $raw_uri === '/') {
        return;
    }

    $path = trim($raw_uri, '/');

    // -------------------------------------------------------------
    // 1. Campus Slugs 301 Redirects
    // -------------------------------------------------------------
    $campus_redirects = [
        'locations/midtown'          => '/locations/kidazzle-midtown-atlanta/',
        'locations/peachtree-summit' => '/locations/kidazzle-midtown-atlanta/',
        'locations/west-end'         => '/locations/kidazzle-west-end-of-atlanta/',
        'locations/memphis'          => '/locations/cordova/',
        'locations/miami'            => '/locations/doral/',
        'locations/atlanta'          => '/locations/alpharetta/',
        'locations/college-park'     => '/locations/kidazzle-college-park-ga/',
        'locations/hampton'          => '/locations/kidazzle-hampton-ga/',
    ];

    if (isset($campus_redirects[$path])) {
        wp_redirect(home_url($campus_redirects[$path]), 301);
        exit;
    }

    // -------------------------------------------------------------
    // 2. Program Slugs 301 Redirects
    // -------------------------------------------------------------
    $program_redirects = [
        'programs/infant-care'            => '/programs/infants/',
        'programs/toddler-care'           => '/programs/toddlers/',
        'programs/pre-k-prep'             => '/programs/pre-k/',
        'programs/camp-summer-winter-fall'=> '/programs/summer-camp/',
        'programs/parents-day-out'        => '/programs/preschool/',
    ];

    if (isset($program_redirects[$path])) {
        wp_redirect(home_url($program_redirects[$path]), 301);
        exit;
    }

    // -------------------------------------------------------------
    // 3. Combo Pages Regex & Alias Redirects
    // Pattern: {program}-in-{city}-{state}
    // -------------------------------------------------------------
    if (preg_match('/^([a-z0-9-]+)-in-([a-z0-9-]+)-([a-zA-Z]{2})$/i', $path, $matches)) {
        $p = strtolower($matches[1]);
        $c = strtolower($matches[2]);
        $s = strtolower($matches[3]);

        $program_map = [
            'infant-care'            => 'infants',
            'toddler-care'           => 'toddlers',
            'pre-k-prep'             => 'pre-k',
            'camp-summer-winter-fall'=> 'summer-camp',
            'parents-day-out'        => 'preschool',
        ];

        $target_p = $program_map[$p] ?? $p;
        $canonical_combo = "/{$target_p}-in-{$c}-{$s}/";

        // If casing or program alias differed from the clean lowercase canonical
        if ($raw_uri !== $canonical_combo) {
            wp_redirect(home_url($canonical_combo), 301);
            exit;
        }
    }

    // -------------------------------------------------------------
    // 4. Near Me Pages Regex & Redirects
    // Pattern: {keyword}-near-{city}-{state}
    // -------------------------------------------------------------
    if (preg_match('/^([a-z0-9-]+)-near-([a-z0-9-]+)-([a-zA-Z]{2})$/i', $path, $matches)) {
        $kw = strtolower($matches[1]);
        $c = strtolower($matches[2]);
        $s = strtolower($matches[3]);

        $canonical_near = "/{$kw}-near-{$c}-{$s}/";
        if ($raw_uri !== $canonical_near) {
            wp_redirect(home_url($canonical_near), 301);
            exit;
        }
    }

    // -------------------------------------------------------------
    // 5. 410 Gone for Permanently Dead Legacy Feeds/Tags
    // -------------------------------------------------------------
    if (preg_match('/^(tag|category|author)\//i', $path)) {
        global $wp_query;
        if ($wp_query && $wp_query->is_404()) {
            status_header(410);
            nocache_headers();
            echo '<!DOCTYPE html><html><head><title>410 Gone</title></head><body><h1>410 Gone</h1><p>This resource has been permanently removed.</p></body></html>';
            exit;
        }
    }
}
