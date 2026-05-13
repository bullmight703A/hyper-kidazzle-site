<?php
/**
 * Essential page fallbacks for slugs that should never render as 404.
 *
 * These fallbacks serve the existing theme templates when the matching
 * WordPress page has not been created or published yet.
 *
 * @package kidazzle_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

function kidazzle_get_current_request_path()
{
    $request_uri = isset($_SERVER['REQUEST_URI']) ? wp_unslash($_SERVER['REQUEST_URI']) : '';
    $path = parse_url($request_uri, PHP_URL_PATH);

    return trim((string) $path, '/');
}

function kidazzle_get_essential_page_fallbacks()
{
    return array(
        'blog' => array(
            'template' => 'page-blog.php',
            'title' => 'Child Care Resources & Family Guides - KIDazzle Child Care',
            'description' => 'Explore KIDazzle child care resources, early learning guidance, classroom insight, and parent education for families across Atlanta.',
        ),
        'parents' => array(
            'template' => 'page-parents.php',
            'title' => 'Parent Resources - KIDazzle Child Care',
            'description' => 'Access parent resources, handbooks, safety guidance, family updates, and helpful tools for KIDazzle Child Care families.',
        ),
    );
}

function kidazzle_get_active_essential_fallback()
{
    global $kidazzle_active_essential_fallback;

    if (!empty($kidazzle_active_essential_fallback)) {
        return $kidazzle_active_essential_fallback;
    }

    if (!is_404()) {
        return false;
    }

    $fallbacks = kidazzle_get_essential_page_fallbacks();
    $path = kidazzle_get_current_request_path();

    if (!isset($fallbacks[$path])) {
        return false;
    }

    $kidazzle_active_essential_fallback = $fallbacks[$path];
    $kidazzle_active_essential_fallback['slug'] = $path;

    return $kidazzle_active_essential_fallback;
}

function kidazzle_template_include_essential_fallback($template)
{
    $path = kidazzle_get_current_request_path();

    if ($path === 'digital-resources') {
        $digital_resources_template = KIDAZZLE_THEME_DIR . '/page-digital-resources.php';

        if (file_exists($digital_resources_template)) {
            return $digital_resources_template;
        }
    }

    $fallback = kidazzle_get_active_essential_fallback();

    if (!$fallback) {
        return $template;
    }

    $fallback_template = KIDAZZLE_THEME_DIR . '/' . $fallback['template'];

    if (!file_exists($fallback_template)) {
        return $template;
    }

    global $wp_query;
    $wp_query->is_404 = false;
    status_header(200);

    return $fallback_template;
}
add_filter('template_include', 'kidazzle_template_include_essential_fallback', 20);

function kidazzle_essential_fallback_document_title($title)
{
    $fallback = kidazzle_get_active_essential_fallback();

    return $fallback ? $fallback['title'] : $title;
}
add_filter('pre_get_document_title', 'kidazzle_essential_fallback_document_title', 20);

function kidazzle_output_essential_fallback_meta()
{
    $fallback = kidazzle_get_active_essential_fallback();

    if (!$fallback) {
        return;
    }

    $canonical = home_url('/' . kidazzle_get_current_request_path() . '/');

    echo '<meta name="description" content="' . esc_attr($fallback['description']) . '">' . "\n";
    echo '<link rel="canonical" href="' . esc_url($canonical) . '">' . "\n";
}
add_action('wp_head', 'kidazzle_output_essential_fallback_meta', 2);
