<?php
/**
 * IDE HELPER FILE
 * 
 * This file is ONLY here to stop your code editor from showing red errors
 * for missing WordPress functions. It does not affect your live website.
 */

if (!function_exists('get_header')) {
    function get_header($name = null, $args = array())
    {
    }
}

if (!function_exists('get_footer')) {
    function get_footer($name = null, $args = array())
    {
    }
}

if (!function_exists('site_url')) {
    function site_url($path = '', $scheme = null)
    {
        return '';
    }
}

if (!function_exists('home_url')) {
    function home_url($path = '', $scheme = null)
    {
        return '';
    }
}

if (!function_exists('get_template_directory_uri')) {
    function get_template_directory_uri()
    {
        return '';
    }
}

if (!function_exists('has_custom_logo')) {
    function has_custom_logo($blog_id = 0)
    {
        return false;
    }
}

if (!function_exists('the_custom_logo')) {
    function the_custom_logo($blog_id = 0)
    {
    }
}

if (!function_exists('language_attributes')) {
    function language_attributes($doctype = 'html')
    {
    }
}

if (!function_exists('bloginfo')) {
    function bloginfo($show = '')
    {
    }
}

if (!function_exists('wp_title')) {
    function wp_title($sep = '&raquo;', $display = true, $seplocation = '')
    {
    }
}

if (!function_exists('wp_head')) {
    function wp_head()
    {
    }
}

if (!function_exists('body_class')) {
    function body_class($class = '')
    {
    }
}

if (!function_exists('wp_footer')) {
    function wp_footer()
    {
    }
}

// Added for loop compatibility
if (!function_exists('have_posts')) {
    function have_posts()
    {
        return false;
    }
}

if (!function_exists('the_post')) {
    function the_post()
    {
    }
}

if (!function_exists('the_content')) {
    function the_content($more_link_text = null, $strip_teaser = false)
    {
    }
}

// Added for functions.php
if (!function_exists('add_action')) {

    function add_action($hook_name, $callback, $priority = 10, $accepted_args = 1)
    {
    }
}

if (!function_exists('wp_enqueue_style')) {
    function wp_enqueue_style($handle, $src = '', $deps = array(), $ver = false, $media = 'all')
    {
    }
}

if (!function_exists('wp_enqueue_script')) {
    function wp_enqueue_script($handle, $src = '', $deps = array(), $ver = false, $in_footer = false)
    {
    }
}

if (!function_exists('get_stylesheet_uri')) {
    function get_stylesheet_uri()
    {
        return '';
    }
}

if (!function_exists('add_theme_support')) {
    function add_theme_support($feature, ...$args)
    {
    }
}
