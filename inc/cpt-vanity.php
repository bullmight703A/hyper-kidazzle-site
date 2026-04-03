<?php
/**
 * Custom Post Type: Vanity Blogs (Location-Driven SEO Pages)
 *
 * @package kidazzle_Theme
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Register Vanity Blog CPT
 */
function kidazzle_register_vanity_blog_cpt() {
    $labels = array(
        'name'                  => _x('Vanity Blogs', 'Post Type General Name', 'kidazzle-theme'),
        'singular_name'         => _x('Vanity Blog', 'Post Type Singular Name', 'kidazzle-theme'),
        'menu_name'             => __('Vanity Blogs', 'kidazzle-theme'),
        'name_admin_bar'        => __('Vanity Blog', 'kidazzle-theme'),
        'archives'              => __('Vanity Archive', 'kidazzle-theme'),
        'attributes'            => __('Vanity Attributes', 'kidazzle-theme'),
        'parent_item_colon'     => __('Parent Vanity Blog:', 'kidazzle-theme'),
        'all_items'             => __('All Vanity Blogs', 'kidazzle-theme'),
        'add_new_item'          => __('Add New Vanity Blog', 'kidazzle-theme'),
        'add_new'               => __('Add New', 'kidazzle-theme'),
        'new_item'              => __('New Vanity Blog', 'kidazzle-theme'),
        'edit_item'             => __('Edit Vanity Blog', 'kidazzle-theme'),
        'update_item'           => __('Update Vanity Blog', 'kidazzle-theme'),
        'view_item'             => __('View Vanity Blog', 'kidazzle-theme'),
        'view_items'            => __('View Vanity Blogs', 'kidazzle-theme'),
        'search_items'          => __('Search Vanity Blogs', 'kidazzle-theme'),
        'not_found'             => __('Not found', 'kidazzle-theme'),
        'not_found_in_trash'    => __('Not found in Trash', 'kidazzle-theme'),
        'featured_image'        => __('Featured Image', 'kidazzle-theme'),
        'set_featured_image'    => __('Set featured image', 'kidazzle-theme'),
        'remove_featured_image' => __('Remove featured image', 'kidazzle-theme'),
        'use_featured_image'    => __('Use as featured image', 'kidazzle-theme'),
        'insert_into_item'      => __('Insert into vanity blog', 'kidazzle-theme'),
        'uploaded_to_this_item' => __('Uploaded to this vanity blog', 'kidazzle-theme'),
        'items_list'            => __('Vanity Blogs list', 'kidazzle-theme'),
        'items_list_navigation' => __('Vanity Blogs list navigation', 'kidazzle-theme'),
        'filter_items_list'     => __('Filter vanity blogs list', 'kidazzle-theme'),
    );
    $args = array(
        'label'                 => __('Vanity Blog', 'kidazzle-theme'),
        'description'           => __('Location-driven SEO vanity pages.', 'kidazzle-theme'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail', 'excerpt', 'author', 'custom-fields'),
        'taxonomies'            => array('vanity_location'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 8,
        'menu_icon'             => 'dashicons-location-alt', 
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => 'local-guides',
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => true, // Enables Gutenberg and REST API
        'rest_base'             => 'vanity_blog' // Custom endpoint for N8N payload fetching
    );
    register_post_type('vanity_blog', $args);
}
add_action('init', 'kidazzle_register_vanity_blog_cpt', 0);

/**
 * Register Vanity Location Taxonomy
 */
function kidazzle_register_vanity_location_tax() {
    $labels = array(
        'name'                       => _x('Locations', 'Taxonomy General Name', 'kidazzle-theme'),
        'singular_name'              => _x('Location', 'Taxonomy Singular Name', 'kidazzle-theme'),
        'menu_name'                  => __('Locations', 'kidazzle-theme'),
        'all_items'                  => __('All Locations', 'kidazzle-theme'),
        'parent_item'                => __('Parent Location', 'kidazzle-theme'),
        'parent_item_colon'          => __('Parent Location:', 'kidazzle-theme'),
        'new_item_name'              => __('New Location Name', 'kidazzle-theme'),
        'add_new_item'               => __('Add New Location', 'kidazzle-theme'),
        'edit_item'                  => __('Edit Location', 'kidazzle-theme'),
        'update_item'                => __('Update Location', 'kidazzle-theme'),
        'view_item'                  => __('View Location', 'kidazzle-theme'),
        'separate_items_with_commas' => __('Separate locations with commas', 'kidazzle-theme'),
        'add_or_remove_items'        => __('Add or remove locations', 'kidazzle-theme'),
        'choose_from_most_used'      => __('Choose from the most used', 'kidazzle-theme'),
        'popular_items'              => __('Popular Locations', 'kidazzle-theme'),
        'search_items'               => __('Search Locations', 'kidazzle-theme'),
        'not_found'                  => __('Not Found', 'kidazzle-theme'),
        'no_terms'                   => __('No locations', 'kidazzle-theme'),
        'items_list'                 => __('Locations list', 'kidazzle-theme'),
        'items_list_navigation'      => __('Locations list navigation', 'kidazzle-theme'),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'show_in_rest'               => true, // Exposes to REST API for N8N targeting
    );
    register_taxonomy('vanity_location', array('vanity_blog'), $args);
}
add_action('init', 'kidazzle_register_vanity_location_tax', 0);
