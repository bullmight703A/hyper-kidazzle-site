<?php
/**
 * Chroma Excellence Theme Functions
 *
 * Homepage Template: front-page.php (WordPress default)
 *
 * @package Chroma_Excellence
 * @since 1.0.0
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
	exit;
}

/**
 * Define theme constants
 */
define('CHROMA_VERSION', '1.0.0');
define('CHROMA_THEME_DIR', get_template_directory());
define('CHROMA_THEME_URI', get_template_directory_uri());

/**
 * Load core theme functionality
 * Order matters - load dependencies first
 */

// Core setup and configuration
require_once CHROMA_THEME_DIR . '/inc/setup.php';
require_once CHROMA_THEME_DIR . '/inc/enqueue.php';
require_once CHROMA_THEME_DIR . '/inc/program-settings.php';
require_once CHROMA_THEME_DIR . '/inc/nav-menus.php';

// Custom Post Types
require_once CHROMA_THEME_DIR . '/inc/cpt-programs.php';
require_once CHROMA_THEME_DIR . '/inc/cpt-locations.php';
require_once CHROMA_THEME_DIR . '/inc/cpt-team-members.php';

// Page Meta Boxes
require_once CHROMA_THEME_DIR . '/inc/about-page-meta.php';
require_once CHROMA_THEME_DIR . '/inc/curriculum-page-meta.php';
require_once CHROMA_THEME_DIR . '/inc/contact-page-meta.php';
require_once CHROMA_THEME_DIR . '/inc/stories-page-meta.php';
require_once CHROMA_THEME_DIR . '/inc/parents-page-meta.php';
require_once CHROMA_THEME_DIR . '/inc/careers-page-meta.php';
require_once CHROMA_THEME_DIR . '/inc/employers-page-meta.php';
require_once CHROMA_THEME_DIR . '/inc/privacy-page-meta.php';
require_once CHROMA_THEME_DIR . '/inc/schema-meta-boxes.php';

// Utility Functions
require_once CHROMA_THEME_DIR . '/inc/template-tags.php';
require_once CHROMA_THEME_DIR . '/inc/about-seo.php';
require_once CHROMA_THEME_DIR . '/inc/customizer-home.php';
require_once CHROMA_THEME_DIR . '/inc/customizer-header.php';
require_once CHROMA_THEME_DIR . '/inc/customizer-footer.php';

// Legacy helper files (ACF plugin optional; helpers run on core WP functions only)
require_once CHROMA_THEME_DIR . '/inc/acf-options.php';
require_once CHROMA_THEME_DIR . '/inc/acf-homepage.php';

require_once CHROMA_THEME_DIR . '/inc/cleanup.php';

// SEO and Internationalization
require_once CHROMA_THEME_DIR . '/inc/seo-engine.php';
require_once CHROMA_THEME_DIR . '/inc/city-slug-logic.php';
require_once CHROMA_THEME_DIR . '/inc/spanish-variant-generator.php';
require_once CHROMA_THEME_DIR . '/inc/monthly-seo-cron.php';

require_once CHROMA_THEME_DIR . '/inc/security.php';

/**
 * Performance Optimizations - Phase 1
 * Added: [Current Date]
 */

// Force image dimensions to prevent layout shift (CLS improvement)
add_filter('wp_img_tag_add_width_and_height_attr', '__return_true');

// Force Elementor to output image dimensions
add_filter('elementor/image/print_dimensions', '__return_true');

/**
 * Add width and height attributes to post thumbnails for CLS optimization
 */
function chroma_add_thumbnail_dimensions($html, $post_id, $attachment_id) {
    if (!$attachment_id) {
        return $html;
    }
    
    $attachment = get_post($attachment_id);
    if ($attachment && $attachment->post_type === 'attachment') {
        $metadata = wp_get_attachment_metadata($attachment_id);
        
        if (isset($metadata['width']) && isset($metadata['height'])) {
            // Only add if not already present
            if (strpos($html, 'width=') === false) {
                $html = str_replace('<img', sprintf(
                    '<img width="%d" height="%d"',
                    $metadata['width'],
                    $metadata['height']
                ), $html);
            }
        }
    }
    
    return $html;
}
add_filter('post_thumbnail_html', 'chroma_add_thumbnail_dimensions', 10, 3);
add_filter('get_image_tag', 'chroma_add_thumbnail_dimensions', 10, 3);

