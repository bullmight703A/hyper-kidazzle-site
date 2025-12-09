<?php
/**
 * KIDazzle Theme Functions
 */

function kidazzle_scripts() {
    // Enqueue the main Tailwind compiled CSS
    wp_enqueue_style( 'kidazzle-style', get_template_directory_uri() . '/assets/css/output.css', array(), '1.0.0' );

    // Enqueue the custom JS
    wp_enqueue_script( 'kidazzle-script', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'kidazzle_scripts' );

// Add title tag support
function kidazzle_theme_setup() {
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'kidazzle_theme_setup' );
