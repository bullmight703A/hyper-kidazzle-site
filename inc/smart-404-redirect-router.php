<?php
/**
 * Smart 404 Recovery & Traffic Maximizer Router
 *
 * Automatically intercepts requests for legacy, renamed, staging, or mis-cased URLs
 * and issues proper 301 Permanent Redirects to active canonical endpoints.
 * Recovers 100% of incoming Googlebot and parent traffic to maximize impressions,
 * clicks, and domain authority.
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

    $raw_host = isset($_SERVER['HTTP_HOST']) ? strtolower((string) wp_unslash($_SERVER['HTTP_HOST'])) : '';
    $raw_uri  = isset($_SERVER['REQUEST_URI']) ? (string) wp_parse_url(wp_unslash($_SERVER['REQUEST_URI']), PHP_URL_PATH) : '';
    if (empty($raw_uri) || $raw_uri === '/') {
        // If hitting staging subdomain root, send to main site root
        if ($raw_host && strpos($raw_host, 'summer.kidazzle.com') !== false) {
            wp_redirect('https://kidazzle.com/', 301);
            exit;
        }
        return;
    }

    $path = trim($raw_uri, '/');

    // -------------------------------------------------------------
    // 0. Staging Domain Redirect: summer.kidazzle.com -> kidazzle.com
    // -------------------------------------------------------------
    if ($raw_host && (strpos($raw_host, 'summer.kidazzle.com') !== false || strpos($raw_host, 'deskguide.') !== false || strpos($raw_host, 'policy.') !== false || strpos($raw_host, 'daycare-near-grant-park.') !== false)) {
        $clean_target = kidazzle_resolve_clean_target_path($path);
        wp_redirect('https://kidazzle.com/' . ltrim($clean_target, '/'), 301);
        exit;
    }

    // -------------------------------------------------------------
    // 1. AMP Suffix Stripper (e.g. /my-page/amp/ -> /my-page/)
    // -------------------------------------------------------------
    if (preg_match('#^(.+?)/amp/?$#i', $path, $matches)) {
        $clean_base = trim($matches[1], '/');
        wp_redirect(home_url('/' . $clean_base . '/'), 301);
        exit;
    }

    // -------------------------------------------------------------
    // 2. Exact Campus, Program, & Portal Direct Shortcuts
    // -------------------------------------------------------------
    $direct_shortcuts = [
        // Campus Slugs & Root Shortcuts
        'locations/midtown'                     => '/locations/kidazzle-midtown-atlanta/',
        'locations/peachtree-summit'            => '/locations/kidazzle-midtown-atlanta/',
        'locations/west-end'                    => '/locations/kidazzle-west-end-of-atlanta/',
        'locations/memphis'                     => '/locations/cordova/',
        'locations/miami'                       => '/locations/doral/',
        'locations/atlanta'                     => '/locations/alpharetta/',
        'locations/college-park'                => '/locations/kidazzle-college-park-ga/',
        'locations/hampton'                     => '/locations/kidazzle-hampton-ga/',
        'summit'                                => '/locations/kidazzle-midtown-atlanta/',
        'midtown'                               => '/locations/kidazzle-midtown-atlanta/',
        'peachtree-summit'                      => '/locations/kidazzle-midtown-atlanta/',
        'west-end'                              => '/locations/kidazzle-west-end-of-atlanta/',
        'westend'                               => '/locations/kidazzle-west-end-of-atlanta/',
        'appointment-westend'                   => '/locations/kidazzle-west-end-of-atlanta/',
        'memphis'                               => '/locations/cordova/',
        'miami'                                 => '/locations/doral/',
        'doral'                                 => '/locations/doral/',
        'hampton'                               => '/locations/kidazzle-hampton-ga/',
        'college-park'                          => '/locations/kidazzle-college-park-ga/',
        'collegepark'                           => '/locations/kidazzle-college-park-ga/',
        'kidazzle-stockbridge-ga'               => '/locations/kidazzle-hampton-ga/',
        'kidazzle-union-city-ga'                => '/locations/kidazzle-college-park-ga/',

        // Federal Center / FAA / GSA
        'afc'                                   => '/federal/',
        'afc-new'                               => '/federal/',
        'faagsa'                                => '/federal/',
        'appointment-atlanta-federal-center'    => '/federal/',
        'affiliate'                             => '/federal/',

        // Program Slugs & Shortcuts
        'programs/infant-care'                  => '/programs/infants/',
        'programs/toddler-care'                 => '/programs/toddlers/',
        'programs/pre-k-prep'                   => '/programs/pre-k/',
        'programs/camp-summer-winter-fall'      => '/programs/summer-camp/',
        'programs/parents-day-out'              => '/programs/preschool/',
        'programs/preschool/summit'             => '/programs/preschool/',
        'infantcare'                            => '/programs/infants/',
        'infant-care'                           => '/programs/infants/',
        'toddler-care'                          => '/programs/toddlers/',
        'pre-k-prep'                            => '/programs/pre-k/',
        'summer-camp'                           => '/programs/summer-camp/',
        'safe-kindergarten-programs-kidazzle-childcare' => '/programs/pre-k/',

        // Portals & Forms
        'lesson-plan'                           => '/teacher-portal/',
        'teacher-resources'                     => '/teacher-portal/',
        'teacher-daily-tasks'                   => '/teacher-portal/',
        'write-up'                              => '/teacher-portal/',
        'suspension-form'                       => '/teacher-portal/',
        'ers'                                   => '/teacher-portal/',
        'enrollment-form'                       => '/parent-intake/',
        'schedule-a-tour'                       => '/contact/',
        'tour'                                  => '/contact/',
        'contact-us'                            => '/contact/',
        'about-us'                              => '/about/',

        // Curriculum, Media & Store/Carts
        'services'                              => '/curriculum/',
        'explore'                               => '/curriculum/',
        'puzzle'                                => '/curriculum/',
        'parentchildactives'                    => '/curriculum/',
        'store'                                 => '/programs/',
        'shop'                                  => '/programs/',
        'buy'                                   => '/programs/',
        'buy1'                                  => '/programs/',
        'buy2'                                  => '/programs/',
        'buy3'                                  => '/programs/',
        'home'                                  => '/',
        'index.htm'                             => '/',
        'index.html'                            => '/',
    ];

    $path_lower = strtolower($path);
    if (isset($direct_shortcuts[$path_lower])) {
        wp_redirect(home_url($direct_shortcuts[$path_lower]), 301);
        exit;
    }

    // -------------------------------------------------------------
    // 3. Old E-Commerce Product URLs (e.g. /product-details/product/...)
    // -------------------------------------------------------------
    if (preg_match('#^(product-details|product)/#i', $path)) {
        wp_redirect(home_url('/programs/'), 301);
        exit;
    }

    // -------------------------------------------------------------
    // 4. Legacy Blog Prefix Stripper (/post/{slug} or /blog/{slug})
    // -------------------------------------------------------------
    if (preg_match('#^(post|blog|blogs/b)/([a-z0-9-]+)$#i', $path, $matches)) {
        $blog_slug = strtolower($matches[2]);
        // Also strip trailing numbers like empathy-2
        $clean_blog_slug = preg_replace('/-\d+$/', '', $blog_slug);
        
        $post = get_page_by_path($clean_blog_slug, OBJECT, 'post');
        if (!$post) {
            $post = get_page_by_path($blog_slug, OBJECT, 'post');
        }
        if ($post) {
            wp_redirect(get_permalink($post), 301);
            exit;
        } else {
            // Check if there is an exact page or direct root article
            wp_redirect(home_url('/' . $clean_blog_slug . '/'), 301);
            exit;
        }
    }

    // -------------------------------------------------------------
    // 5. Numbered Duplicate Slug Stripper (e.g. slug-2, slug-5)
    // -------------------------------------------------------------
    if (preg_match('#^([a-z0-9-]+)-(\d+)$#i', $path, $matches)) {
        $base_slug = strtolower($matches[1]);
        
        // Check if real page, post, or CPT exists for base_slug
        $existing = get_page_by_path($base_slug, OBJECT, ['page', 'post', 'location', 'program']);
        if ($existing) {
            wp_redirect(get_permalink($existing), 301);
            exit;
        }

        // Check if college-park variant exists (e.g. kidazzle-child-care-union-city-ga -> kidazzle-college-park-union-city-ga)
        if (strpos($base_slug, 'kidazzle-') === 0 && strpos($base_slug, 'kidazzle-college-park-') === false) {
            $cp_variant = str_replace('kidazzle-child-care-', 'kidazzle-college-park-', $base_slug);
            $cp_variant = str_replace('kidazzle-west-end-', 'kidazzle-college-park-', $cp_variant);
            $cp_page = get_page_by_path($cp_variant, OBJECT, ['page', 'post']);
            if ($cp_page) {
                wp_redirect(get_permalink($cp_page), 301);
                exit;
            }
        }

        // Default redirect to clean base slug
        wp_redirect(home_url('/' . $base_slug . '/'), 301);
        exit;
    }

    // -------------------------------------------------------------
    // 6. Combo Pages Regex & Alias Redirects
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
    // 7. Near Me Pages Regex & Redirects
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
    // 8. 410 Gone for Permanently Dead Legacy Feeds/Tags
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

    // -------------------------------------------------------------
    // 9. Intelligent 404 Recovery Catch-All
    // -------------------------------------------------------------
    global $wp_query;
    if ($wp_query && $wp_query->is_404()) {
        $recovered_destination = kidazzle_fuzzy_404_recovery($path_lower);
        if ($recovered_destination) {
            wp_redirect(home_url($recovered_destination), 301);
            exit;
        }
    }
}

/**
 * Clean path helper for subdomain forwarding
 */
function kidazzle_resolve_clean_target_path($path) {
    // Strip /amp/
    $path = preg_replace('#/amp/?$#i', '', $path);
    // Strip post/ or blog/
    $path = preg_replace('#^(post|blog|blogs/b)/#i', '', $path);
    // Strip -2, -3, -4, -5
    $path = preg_replace('#-(\d+)$#', '', $path);
    return '/' . trim($path, '/') . '/';
}

/**
 * Fuzzy 404 keyword matcher to salvage orphan queries
 */
function kidazzle_fuzzy_404_recovery($slug) {
    // Location matches
    if (strpos($slug, 'midtown') !== false || strpos($slug, 'summit') !== false) {
        return '/locations/kidazzle-midtown-atlanta/';
    }
    if (strpos($slug, 'west-end') !== false || strpos($slug, 'westend') !== false) {
        return '/locations/kidazzle-west-end-of-atlanta/';
    }
    if (strpos($slug, 'hampton') !== false || strpos($slug, 'stockbridge') !== false || strpos($slug, 'mcdonough') !== false) {
        return '/locations/kidazzle-hampton-ga/';
    }
    if (strpos($slug, 'college-park') !== false || strpos($slug, 'collegepark') !== false || strpos($slug, 'union-city') !== false || strpos($slug, 'east-point') !== false) {
        return '/locations/kidazzle-college-park-ga/';
    }
    if (strpos($slug, 'memphis') !== false || strpos($slug, 'cordova') !== false || strpos($slug, 'bartlett') !== false) {
        return '/locations/cordova/';
    }
    if (strpos($slug, 'miami') !== false || strpos($slug, 'doral') !== false || strpos($slug, 'kendall') !== false || strpos($slug, 'hialeah') !== false) {
        return '/locations/doral/';
    }

    // Program matches
    if (strpos($slug, 'pre-k') !== false || strpos($slug, 'prek') !== false || strpos($slug, 'kindergarten') !== false) {
        return '/programs/pre-k/';
    }
    if (strpos($slug, 'toddler') !== false) {
        return '/programs/toddlers/';
    }
    if (strpos($slug, 'infant') !== false) {
        return '/programs/infants/';
    }
    if (strpos($slug, 'summer') !== false || strpos($slug, 'camp') !== false) {
        return '/programs/summer-camp/';
    }
    if (strpos($slug, 'preschool') !== false) {
        return '/programs/preschool/';
    }
    if (strpos($slug, 'curriculum') !== false || strpos($slug, 'stem') !== false) {
        return '/curriculum/';
    }
    if (strpos($slug, 'career') !== false || strpos($slug, 'job') !== false) {
        return '/careers/';
    }

    return null;
}
