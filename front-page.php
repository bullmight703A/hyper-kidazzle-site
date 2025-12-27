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
<?php get_template_part('template-parts/home/hero'); ?>

<!-- Southeast Powerhouse - Regional Locations -->
<?php get_template_part('template-parts/home/southeast-powerhouse'); ?>

<!-- Legacy & Origin Story -->
<?php get_template_part('template-parts/home/legacy-origin'); ?>

<!-- KIDazzle Difference - 4 Pillars -->
<?php get_template_part('template-parts/home/kidazzle-difference'); ?>

<!-- Growth Journey Graph -->
<?php get_template_part('template-parts/home/growth-journey'); ?>

<!-- Contact CTA with Lead Connector Form -->
<?php get_template_part('template-parts/home/contact-cta'); ?>

<?php get_footer(); ?>
