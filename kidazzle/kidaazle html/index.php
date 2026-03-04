<?php
/**
 * The main template file
 *
 * @package Kidazzle
 */

// If there's an index.html file, let's include it for the homepage.
if (is_front_page() || is_home()) {
    $html_file = get_stylesheet_directory() . '/index.html';
    if (file_exists($html_file)) {
        include $html_file;
        exit;
    }
}

// Otherwise, fallback to the page template layout.
include get_stylesheet_directory() . '/page.php';
