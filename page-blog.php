<?php
/**
 * Template Name: Blog Page
 *
 * Blog page template matching exact HTML design with proper SEO structure
 *
 * @package kidazzle
 */

get_header();

?>
<style>
    html {
        scroll-behavior: smooth;
    }

    .bg-ombre-purple {
        background: linear-gradient(135deg, #4c1d95 0%, #7c3aed 50%, #c026d3 100%);
    }

    .animate-fade-in {
        animation: fadeIn 0.8s ease-out forwards;
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
</style>

<main id="main-content" role="main" class="view-section active block">
    <?php get_template_part('template-parts/kidazzle/blog-content'); ?>
</main>

<?php
get_footer();
