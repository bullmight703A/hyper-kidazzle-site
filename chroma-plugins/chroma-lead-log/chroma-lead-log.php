<?php
/**
 * Plugin Name: Chroma Lead Log
 * Description: Lead logging system for tour and acquisition inquiries
 * Version: 1.0.0
 * Author: Chroma Development Team
 * Text Domain: chroma-lead-log
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
	exit;
}

/**
 * Register Lead Log CPT
 */
function chroma_register_lead_log_cpt()
{
	$labels = array(
		'name' => 'Lead Log',
		'singular_name' => 'Lead',
		'menu_name' => 'Lead Log',
		'all_items' => 'All Leads',
		'view_item' => 'View Lead',
		'search_items' => 'Search Leads',
	);

	$args = array(
		'label' => 'Lead',
		'labels' => $labels,
		'supports' => array('title'),
		'public' => false,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_icon' => 'dashicons-list-view',
		'menu_position' => 25,
		'capability_type' => 'post',
		'capabilities' => array(
			'create_posts' => 'do_not_allow',
		),
		'map_meta_cap' => true,
	);

	register_post_type('lead_log', $args);
}
add_action('init', 'chroma_register_lead_log_cpt', 0);

/**
 * Add Admin Columns
 */
function chroma_lead_log_columns($columns)
{
	$new_columns = array();
	$new_columns['cb'] = $columns['cb'];
	$new_columns['title'] = 'Lead';
	$new_columns['lead_type'] = 'Type';
	$new_columns['lead_name'] = 'Name';
	$new_columns['lead_email'] = 'Email';
	$new_columns['lead_phone'] = 'Phone';
	$new_columns['date'] = 'Date';

	return $new_columns;
}
add_filter('manage_lead_log_posts_columns', 'chroma_lead_log_columns');

/**
 * Populate Admin Columns
 */
function chroma_lead_log_column_content($column, $post_id)
{
	switch ($column) {
		case 'lead_type':
			echo esc_html(ucfirst(get_post_meta($post_id, 'lead_type', true)));
			break;
		case 'lead_name':
			echo esc_html(get_post_meta($post_id, 'lead_name', true));
			break;
		case 'lead_email':
			$email = get_post_meta($post_id, 'lead_email', true);
			echo $email ? '<a href="mailto:' . esc_attr($email) . '">' . esc_html($email) . '</a>' : '—';
			break;
		case 'lead_phone':
			echo esc_html(get_post_meta($post_id, 'lead_phone', true) ?: '—');
			break;
	}
}
add_action('manage_lead_log_posts_custom_column', 'chroma_lead_log_column_content', 10, 2);

/**
 * Make columns sortable
 */
function chroma_lead_log_sortable_columns($columns)
{
	$columns['lead_type'] = 'lead_type';
	return $columns;
}
add_filter('manage_edit-lead_log_sortable_columns', 'chroma_lead_log_sortable_columns');

/**
 * Add Meta Box for Lead Details
 */
function chroma_lead_log_add_meta_boxes()
{
	add_meta_box(
		'chroma_lead_details',
		'Lead Details',
		'chroma_lead_log_render_details',
		'lead_log',
		'normal',
		'high'
	);
}
add_action('add_meta_boxes', 'chroma_lead_log_add_meta_boxes');

function chroma_lead_log_render_details($post)
{
	$payload_json = get_post_meta($post->ID, 'lead_payload', true);
	$payload = json_decode($payload_json, true);

	if (!$payload || !is_array($payload)) {
		echo '<p>No detailed data available.</p>';
		return;
	}

	echo '<table class="widefat fixed" cellspacing="0">';
	echo '<thead><tr><th style="width: 30%;">Field</th><th>Value</th></tr></thead>';
	echo '<tbody>';

	foreach ($payload as $label => $value) {
		// Handle location ID to title conversion if needed (though usually stored as title/value in payload)
		// But the tour form stores raw values, so let's check if it looks like a location ID
		$display_value = esc_html($value);

		echo '<tr>';
		echo '<td><strong>' . esc_html($label) . '</strong></td>';
		echo '<td>' . $display_value . '</td>';
		echo '</tr>';
	}

	echo '</tbody>';
	echo '</table>';
}
