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
    // 00. Direct Application Endpoint: Parent Intake & Enrollment Form
    // Never 404 when query parameters like ?location=hampton are present!
    // -------------------------------------------------------------
    if (in_array(strtolower($path), array('parent-intake', 'intake', 'enrollment-form', 'page-parent-intake'), true)) {
        global $wp_query;
        if ($wp_query) {
            $wp_query->is_404 = false;
            $wp_query->is_page = true;
        }
        status_header(200);
        $template = KIDAZZLE_THEME_DIR . '/page-parent-intake.php';
        if (file_exists($template)) {
            include $template;
            exit;
        }
    }

    // Never intercept essential dynamic application endpoints
    $essential_paths = array(
        'prek-dashboard', 'prek_dashboard',
        'prek-compliance', 'prek_compliance',
        'prek-portal', 'prek_portal', 'prek-upload',
        'ies', 'cacfp-ies', 'cacfp',
        'lesson-plans', 'lesson_plans',
        'apply', 'portal', 'digital-resources'
    );
    if (in_array(strtolower($path), $essential_paths, true)) {
        return;
    }

    // -------------------------------------------------------------
    // 0a. Serve Pristine Clean XML Sitemap (/sitemap.xml, /sitemap_clean.xml)
    // -------------------------------------------------------------
    if (in_array(strtolower($path), array('sitemap.xml', 'sitemap_clean.xml', 'sitemap-clean.xml'), true)) {
        $sitemap_file = KIDAZZLE_THEME_DIR . '/sitemap_clean.xml';
        if (file_exists($sitemap_file)) {
            status_header(200);
            header('Content-Type: application/xml; charset=utf-8');
            header('Cache-Control: public, max-age=3600');
            readfile($sitemap_file);
            exit;
        }
    }

    // -------------------------------------------------------------
    // 0. Crawl Traps, Asterisks & Malicious Scans (Return 410 Gone)
    // -------------------------------------------------------------
    if (strpos($raw_uri, '*') !== false || strpos($raw_uri, '%2a') !== false || preg_match('#^wp-content/(plugins|themes)/#i', $path)) {
        status_header(410);
        nocache_headers();
        echo '<!DOCTYPE html><html><head><title>410 Gone</title></head><body><h1>410 Gone</h1><p>This resource has been permanently removed.</p></body></html>';
        exit;
    }

    // -------------------------------------------------------------
    // 0b. Staging & Subdomain Redirects: summer, deskguide, policy
    // -------------------------------------------------------------
    if ($raw_host && (strpos($raw_host, 'summer.kidazzle.com') !== false || strpos($raw_host, 'deskguide.') !== false || strpos($raw_host, 'policy.') !== false || strpos($raw_host, 'daycare-near-grant-park.') !== false)) {
        if (strpos($raw_host, 'daycare-near-grant-park.') !== false) {
            wp_redirect('https://kidazzle.com/locations/kidazzle-midtown-atlanta/', 301);
            exit;
        }
        $clean_target = kidazzle_resolve_clean_target_path($path);
        // Verify if clean target has fuzzy match or exists
        $fuzzy = kidazzle_fuzzy_404_recovery(trim($clean_target, '/'));
        if ($fuzzy) {
            wp_redirect('https://kidazzle.com' . $fuzzy, 301);
            exit;
        }
        wp_redirect('https://kidazzle.com' . $clean_target, 301);
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
        // Critical Sitemap 404 & Redirect Rectifications
        'accredited-childcare-for-government-employees-smyrna-ga' => '/federal/',
        'daycares-near-me-hialeah-fl'                             => '/locations/doral/',
        'full-day-kindergarten-prep-summer-camp-sandy-springs-ga' => '/programs/summer-camp/',
        'kidazzle-child-care-miami-fl'                            => '/locations/doral/',
        'kidazzle-west-end-locust-grove-ga'                       => '/locations/kidazzle-hampton-ga/',
        'safe-kindergarten-programs-kidazzle-childcare'           => '/programs/pre-k/',
        'the-ultimate-guide-to-quality-rated-childcare-early-stem-in-west-end-atlanta-2026' => '/the-ultimate-guide-to-quality-rated-childcare-early-stem-in-west-end-atlanta/',
        'the-ultimate-guide-to-quality-rated-childcare-early-stem-in-west-end-atlanta-2026-2' => '/the-ultimate-guide-to-quality-rated-childcare-early-stem-in-west-end-atlanta/',
        'stories'                                                 => '/curriculum/',
        'fr'                                                      => '/',
        'es'                                                      => '/',

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
    // 4. Legacy Blog Prefix Stripper (/post/{slug}, /blog/{slug}, etc.)
    // -------------------------------------------------------------
    if (preg_match('#^(post|blog|blogs/b|vanity_blog)/([a-z0-9-]+)$#i', $path, $matches)) {
        $blog_slug = strtolower($matches[2]);
        $clean_blog_slug = preg_replace('/-\d+$/', '', $blog_slug);
        
        $post = get_page_by_path($clean_blog_slug, OBJECT, ['post', 'page']);
        if (!$post) {
            $post = get_page_by_path($blog_slug, OBJECT, ['post', 'page']);
        }
        if ($post) {
            wp_redirect(get_permalink($post), 301);
            exit;
        }

        // Fuzzy recovery for topical blog post (e.g. empathy, brain, pre-k, etc.)
        $fuzzy_target = kidazzle_fuzzy_404_recovery($clean_blog_slug);
        if ($fuzzy_target) {
            wp_redirect(home_url($fuzzy_target), 301);
            exit;
        }

        // Check if root page exists
        $root_page = get_page_by_path($clean_blog_slug, OBJECT, ['page', 'program', 'location']);
        if ($root_page) {
            wp_redirect(get_permalink($root_page), 301);
            exit;
        }

        // Canonical destination for all remaining legacy parenting/childcare blogs:
        wp_redirect(home_url('/curriculum/'), 301);
        exit;
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

        // Check if college-park or midtown variant exists
        if (strpos($base_slug, 'kidazzle-') === 0 && strpos($base_slug, 'kidazzle-college-park-') === false) {
            $cp_variant = str_replace('kidazzle-child-care-', 'kidazzle-college-park-', $base_slug);
            $cp_variant = str_replace('kidazzle-west-end-', 'kidazzle-college-park-', $cp_variant);
            $cp_page = get_page_by_path($cp_variant, OBJECT, ['page', 'post', 'location']);
            if ($cp_page) {
                wp_redirect(get_permalink($cp_page), 301);
                exit;
            }
        }

        // Run fuzzy recovery for base_slug
        $fuzzy_target = kidazzle_fuzzy_404_recovery($base_slug);
        if ($fuzzy_target) {
            wp_redirect(home_url($fuzzy_target), 301);
            exit;
        }

        // If it was a location slug, route to main locations index
        if (strpos($base_slug, 'kidazzle-') === 0 || strpos($base_slug, 'daycare') !== false) {
            wp_redirect(home_url('/locations/'), 301);
            exit;
        }

        // If it was a thank-you slug, route to home
        if (strpos($base_slug, 'thank-you') !== false) {
            wp_redirect(home_url('/'), 301);
            exit;
        }

        // Fallback to home instead of dead 404
        wp_redirect(home_url('/'), 301);
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
    $path = preg_replace('#^(post|blog|blogs/b|vanity_blog)/#i', '', $path);
    // Strip -2, -3, -4, -5
    $path = preg_replace('#-(\d+)$#', '', $path);
    return '/' . trim($path, '/') . '/';
}

/**
 * Fuzzy 404 keyword matcher to salvage orphan queries
 */
function kidazzle_fuzzy_404_recovery($slug) {
    $slug = strtolower($slug);

    // Location matches
    if (strpos($slug, 'midtown') !== false || strpos($slug, 'summit') !== false || strpos($slug, 'grant-park') !== false || strpos($slug, 'smyrna') !== false) {
        return '/locations/kidazzle-midtown-atlanta/';
    }
    if (strpos($slug, 'west-end') !== false || strpos($slug, 'westend') !== false) {
        return '/locations/kidazzle-west-end-of-atlanta/';
    }
    if (strpos($slug, 'hampton') !== false || strpos($slug, 'stockbridge') !== false || strpos($slug, 'locust-grove') !== false || strpos($slug, 'mcdonough') !== false || strpos($slug, 'henry') !== false) {
        return '/locations/kidazzle-hampton-ga/';
    }
    if (strpos($slug, 'college-park') !== false || strpos($slug, 'collegepark') !== false || strpos($slug, 'union-city') !== false || strpos($slug, 'east-point') !== false || strpos($slug, 'fairburn') !== false) {
        return '/locations/kidazzle-college-park-ga/';
    }
    if (strpos($slug, 'memphis') !== false || strpos($slug, 'cordova') !== false || strpos($slug, 'bartlett') !== false || strpos($slug, 'southaven') !== false || strpos($slug, 'west-memphis') !== false) {
        return '/locations/cordova/';
    }
    if (strpos($slug, 'miami') !== false || strpos($slug, 'doral') !== false || strpos($slug, 'kendall') !== false || strpos($slug, 'hialeah') !== false) {
        return '/locations/doral/';
    }
    if (strpos($slug, 'alpharetta') !== false || strpos($slug, 'fulton') !== false) {
        return '/locations/alpharetta/';
    }

    // Program matches
    if (strpos($slug, 'pre-k') !== false || strpos($slug, 'prek') !== false || strpos($slug, 'kindergarten') !== false || strpos($slug, 'lottery') !== false) {
        return '/programs/pre-k/';
    }
    if (strpos($slug, 'toddler') !== false || strpos($slug, 'potty') !== false) {
        return '/programs/toddlers/';
    }
    if (strpos($slug, 'infant') !== false || strpos($slug, 'baby') !== false || strpos($slug, 'crawler') !== false) {
        return '/programs/infants/';
    }
    if (strpos($slug, 'summer') !== false || strpos($slug, 'camp') !== false) {
        return '/programs/summer-camp/';
    }
    if (strpos($slug, 'preschool') !== false) {
        return '/programs/preschool/';
    }
    if (strpos($slug, 'curriculum') !== false || strpos($slug, 'stem') !== false || strpos($slug, 'steam') !== false || strpos($slug, 'math') !== false || strpos($slug, 'science') !== false) {
        return '/curriculum/';
    }
    if (strpos($slug, 'career') !== false || strpos($slug, 'job') !== false || strpos($slug, 'hiring') !== false) {
        return '/careers/';
    }
    if (strpos($slug, 'federal') !== false || strpos($slug, 'government') !== false || strpos($slug, 'faa') !== false || strpos($slug, 'gsa') !== false) {
        return '/federal/';
    }

    // Parenting & Developmental Content Keywords (map to Curriculum/Brain Architecture)
    $parenting_keywords = [
        'empathy', 'tantrum', 'yell', 'calm', 'behavior', 'social', 'emotional',
        'reading', 'phonics', 'abc', 'critical-thinking', 'eating', 'habit',
        'nutrition', 'meal', 'chef', 'food', 'indoor', 'rainy', 'play',
        'activity', 'activities', 'creativity', 'coloring', 'routine',
        'sleep', 'nap', 'milestone', 'development', 'brain', 'tantrums'
    ];
    foreach ($parenting_keywords as $kw) {
        if (strpos($slug, $kw) !== false) {
            return '/curriculum/';
        }
    }

    return null;
}
