<?php
/**
 * Front Page Template (Homepage)
 * New KIDazzle homepage design
 *
 * @package kidazzle
 * @since 1.0.0
 */

get_header();
?>

<!-- Hero Section -->
<!-- Hero Section -->
<?php get_template_part('template-parts/home/hero'); ?>

<!-- Marquee Ticker -->
<?php get_template_part('template-parts/home/marquee'); ?>

<!-- Programs at a Glance -->
<?php get_template_part('template-parts/home/programs-grid'); ?>

<!-- Regional Footprint -->
<?php get_template_part('template-parts/home/southeast-powerhouse'); ?>

<!-- Legacy & Origin Story -->
<?php get_template_part('template-parts/home/legacy-origin'); ?>

<!-- KIDazzle Difference - Grid -->
<?php get_template_part('template-parts/home/kidazzle-difference'); ?>

<!-- Contact CTA with Lead Connector Form -->
<?php get_template_part('template-parts/home/contact-cta'); ?>

<?php get_footer(); ?>