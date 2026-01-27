<?php
/**
 * The front page template.
 *
 * @package kidazzle-theme
 */

get_header(); ?>

<!-- Main Home Content View -->
<div id="view-home" class="view-section active block">

    <?php
    // Load home sections in sequence
    get_template_part('template-parts/home/hero');
    get_template_part('template-parts/home/southeast-powerhouse');
    get_template_part('template-parts/home/programs-preview');
    get_template_part('template-parts/home/stats-strip');
    get_template_part('template-parts/home/kidazzle-difference');
    get_template_part('template-parts/home/curriculum');
    get_template_part('template-parts/home/growth-journey');
    get_template_part('template-parts/home/legacy-origin');
    get_template_part('template-parts/home/tour-cta');

    ?>

</div>

<?php get_footer(); ?>