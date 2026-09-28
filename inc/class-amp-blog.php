<?php
/**
 * AMP Deprecation & Canonical 301 Redirect Router
 *
 * Removes legacy rel="amphtml" tags across all blog posts and safely
 * 301 redirects any incoming /amp/ requests to their canonical standard URLs,
 * resolving Google Search Console's "Referenced AMP URL is not an AMP" errors.
 *
 * @package kidazzle_Theme
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

class kidazzle_AMP_Blog
{
    const ENDPOINT = 'amp';

    public function __construct() {
        // Intercept any legacy /amp/ requests and redirect 301 to the canonical post
        add_action('template_redirect', [$this, 'redirect_legacy_amp_requests'], 1);
    }

    /**
     * Safely redirect any legacy /amp or /amp/ URLs to their canonical post permalink
     */
    public function redirect_legacy_amp_requests() {
        $request_uri = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '';
        
        // Match any URL ending in /amp or /amp/ (with optional query parameters)
        if (preg_match('#^(.+)/amp/?(\?.*)?$#i', $request_uri, $matches)) {
            $canonical_base = $matches[1];
            $query_string = isset($matches[2]) ? $matches[2] : '';
            
            // Clean trailingslash on canonical path
            $target_url = home_url(trailingslashit(ltrim($canonical_base, '/')) . $query_string);
            
            wp_safe_redirect($target_url, 301);
            exit;
        }
    }

    /**
     * Backward-compatible helper returning canonical permalink
     *
     * @param int|null $post_id Optional post ID
     * @return string Canonical post URL
     */
    public static function get_amp_url($post_id = null) {
        $post_id = $post_id ?: get_the_ID();
        return get_permalink($post_id);
    }
}

new kidazzle_AMP_Blog();
