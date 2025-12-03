<?php
/**
 * Advanced SEO/LLM Module - Bootstrap
 * Loads all modules and registers meta boxes / hooks
 *
 * @package Chroma_Excellence
 * @since 1.0.0
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
	exit;
}

/**
 * Helper to safely load files
 */
function chroma_safe_require($path)
{
	if (file_exists($path)) {
		require_once $path;
		return true;
	}
	return false;
}

/**
 * Load Base Classes & Helpers
 */
chroma_safe_require(__DIR__ . '/class-meta-box-base.php');
chroma_safe_require(__DIR__ . '/class-field-sanitizer.php');
chroma_safe_require(__DIR__ . '/class-fallback-resolver.php');

/**
 * Load Core Classes
 */
chroma_safe_require(__DIR__ . '/class-seo-dashboard.php');
chroma_safe_require(__DIR__ . '/class-citation-datasets.php');
chroma_safe_require(__DIR__ . '/class-image-alt-automation.php');
chroma_safe_require(__DIR__ . '/class-admin-help.php');
chroma_safe_require(__DIR__ . '/class-breadcrumbs.php');

/**
 * Load Meta Boxes
 */
$meta_boxes = [
	'class-location-events.php',
	'class-location-howto.php',
	'class-location-llm-context.php',
	'class-location-llm-prompt.php',
	'class-location-media.php',
	'class-location-pricing.php',
	'class-location-reviews.php',
	'class-location-service-area.php',
	'class-program-relationships.php',
	'class-universal-faq.php',
	'class-hreflang-options.php',
	'class-city-landing-meta.php',
	'class-location-citation-facts.php'
];

foreach ($meta_boxes as $file) {
	chroma_safe_require(__DIR__ . '/meta-boxes/' . $file);
}

/**
 * Load Endpoints
 */
chroma_safe_require(__DIR__ . '/endpoints/kml-endpoint.php');

/**
 * Load Schema Builders
 */
$schema_builders = [
	'class-event-builder.php',
	'class-howto-builder.php',
	'class-llm-context-builder.php',
	'class-schema-injector.php',
	'class-service-area-builder.php',
	'class-universal-faq-builder.php',
	'class-page-type-builder.php'
];

foreach ($schema_builders as $file) {
	chroma_safe_require(__DIR__ . '/schema-builders/' . $file);
}

/**
 * Initialize Modules
 */
function chroma_advanced_seo_init()
{
	// Core Modules
	if (class_exists('Chroma_SEO_Dashboard'))
		(new Chroma_SEO_Dashboard())->init();
	if (class_exists('Chroma_Citation_Datasets'))
		(new Chroma_Citation_Datasets())->init();
	if (class_exists('Chroma_Image_Alt_Automation'))
		(new Chroma_Image_Alt_Automation())->init();
	if (class_exists('Chroma_Admin_Help'))
		(new Chroma_Admin_Help())->init();
	if (class_exists('Chroma_Breadcrumbs'))
		(new Chroma_Breadcrumbs())->init();

	// Meta Boxes
	$meta_classes = [
		'Chroma_Location_Citation_Facts',
		'Chroma_Location_Events',
		'Chroma_Location_HowTo',
		'Chroma_Location_LLM_Context',
		'Chroma_Location_LLM_Prompt',
		'Chroma_Location_Media',
		'Chroma_Location_Pricing',
		'Chroma_Location_Reviews',
		'Chroma_Location_Service_Area',
		'Chroma_Program_Relationships',
		'Chroma_Universal_FAQ',
		'Chroma_Hreflang_Options',
		'Chroma_City_Landing_Meta'
	];

	foreach ($meta_classes as $class) {
		if (class_exists($class)) {
			(new $class())->register();
		}
	}

	// Schema Builders (Hooks)
	if (class_exists('Chroma_Event_Schema_Builder'))
		add_action('wp_head', ['Chroma_Event_Schema_Builder', 'output']);
	if (class_exists('Chroma_HowTo_Schema_Builder'))
		add_action('wp_head', ['Chroma_HowTo_Schema_Builder', 'output']);
	if (class_exists('Chroma_Schema_Injector'))
		add_action('wp_head', ['Chroma_Schema_Injector', 'output_person_schema']);
	if (class_exists('Chroma_Universal_FAQ_Builder'))
		add_action('wp_head', ['Chroma_Universal_FAQ_Builder', 'output']);
	if (class_exists('Chroma_Page_Type_Builder'))
		add_action('wp_head', ['Chroma_Page_Type_Builder', 'output']);
}
add_action('init', 'chroma_advanced_seo_init');

/**
 * Admin Assets
 */
function chroma_advanced_seo_admin_assets($hook)
{
	global $post;

	if (!$post || !in_array($post->post_type, ['location', 'program', 'page', 'post'])) {
		return;
	}

	// Inline CSS for Meta Boxes
	?>
	<style>
		.chroma-advanced-seo-meta-box {
			padding: 10px 0;
		}

		.chroma-field-wrapper {
			margin-bottom: 20px;
		}

		.chroma-field-wrapper label {
			display: block;
			font-weight: 600;
			margin-bottom: 5px;
		}

		.chroma-field-wrapper .description {
			margin-top: 5px;
			font-style: normal;
			color: #666;
		}

		.chroma-field-wrapper .fallback-notice {
			color: #2271b1;
			font-style: italic;
		}

		.chroma-repeater-field {
			border: 1px solid #ddd;
			padding: 15px;
			background: #f9f9f9;
		}

		.chroma-repeater-items {
			margin-bottom: 10px;
		}

		.chroma-repeater-item {
			display: flex;
			gap: 10px;
			margin-bottom: 8px;
			align-items: center;
		}

		.chroma-repeater-item input {
			flex: 1;
		}

		.chroma-remove-item {
			color: #b32d2e;
		}
	</style>
	<script>
		jQuery(document).ready(function ($) {
			// Repeater Add
			$(document).on('click', '.chroma-add-item', function (e) {
				e.preventDefault();
				var $wrapper = $(this).closest('.chroma-repeater-field');
				var $items = $wrapper.find('.chroma-repeater-items');
				var $clone = $items.find('.chroma-repeater-item').first().clone();
				$clone.find('input, textarea').val('');
				$items.append($clone);
			});

			// Repeater Remove
			$(document).on('click', '.chroma-remove-item', function (e) {
				e.preventDefault();
				if ($(this).closest('.chroma-repeater-items').find('.chroma-repeater-item').length > 1) {
					$(this).closest('.chroma-repeater-item').remove();
				} else {
					$(this).closest('.chroma-repeater-item').find('input, textarea').val('');
				}
			});
		});
	</script>
	<?php
}

add_action('admin_enqueue_scripts', 'chroma_advanced_seo_admin_assets');