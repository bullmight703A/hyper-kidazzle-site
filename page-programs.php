<?php
/**
 * Template Name: Programs Page
 *
 * Programs page template matching exact HTML design with proper SEO structure
 *
 * @package kidazzle
 */

get_header();

?>
<style>
    .fade-in {
        animation: fadeIn 0.5s ease-in forwards;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    html {
        scroll-behavior: smooth;
    }
</style>

<main id="main-content" role="main" class="view-section active block">
    <?php get_template_part('template-parts/kidazzle/programs-content'); ?>
</main>

<?php
get_footer();
