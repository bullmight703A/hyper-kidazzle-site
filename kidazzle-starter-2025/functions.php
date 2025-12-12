<?php
/**
 * KIDazzle Starter 2025 - Theme Functions
 *
 * @package KIDazzle_Starter_2025
 * @version 1.0.0
 */

// Theme Setup
function kidazzle_theme_setup()
{
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        'height' => 100,
        'width' => 300,
        'flex-width' => true,
        'flex-height' => true,
    ));
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'kidazzle-starter-2025'),
        'footer' => __('Footer Menu', 'kidazzle-starter-2025'),
    ));
}
add_action('after_setup_theme', 'kidazzle_theme_setup');

// Enqueue scripts and styles
function kidazzle_enqueue_scripts()
{
    // Theme stylesheet
    wp_enqueue_style('kidazzle-style', get_stylesheet_uri(), array(), '1.0.0');
}
add_action('wp_enqueue_scripts', 'kidazzle_enqueue_scripts');

// Add custom body classes
function kidazzle_body_classes($classes)
{
    $classes[] = 'kidazzle-theme';
    if (is_front_page()) {
        $classes[] = 'kidazzle-home';
    }
    return $classes;
}
add_filter('body_class', 'kidazzle_body_classes');
?>