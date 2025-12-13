<?php
/**
 * KIDWEB Theme Functions
 *
 * @package KIDWEB
 * @version 1.0.0
 */

// Theme Setup
function kidweb_theme_setup()
{
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

    register_nav_menus(array(
        'primary' => __('Primary Menu', 'kidweb'),
        'footer' => __('Footer Menu', 'kidweb'),
    ));
}
add_action('after_setup_theme', 'kidweb_theme_setup');

// Enqueue scripts and styles
function kidweb_enqueue_scripts()
{
    wp_enqueue_style('kidweb-style', get_stylesheet_uri(), array(), '1.0.0');
}
add_action('wp_enqueue_scripts', 'kidweb_enqueue_scripts');
?>