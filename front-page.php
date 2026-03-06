<?php
/**
 * Front Page Template - Kidazzle
 *
 * @package kidazzle
 */

get_header();
?>

<main>
    <?php
    // Load the custom Kidazzle HTML design
    get_template_part('template-parts/kidazzle/home-content');
    ?>
</main>

<style>
    .bg-ombre-purple {
        background: linear-gradient(135deg, #4c1d95 0%, #7c3aed 50%, #c026d3 100%);
    }

    .graph-bar {
        transition: height 1s cubic-bezier(0.4, 0, 0.2, 1);
    }

    html {
        scroll-behavior: smooth;
    }

    .animate-fade-in {
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
</style>

<?php
get_footer();