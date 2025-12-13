<?php
/**
 * Generic page template
 * @package KIDWEB
 */
get_header();
?>
<main class="container mx-auto px-4 py-12">
    <?php while (have_posts()):
        the_post(); ?>
        <article <?php post_class(); ?>>
            <h1 class="text-4xl font-extrabold text-slate-900 mb-8"><?php the_title(); ?></h1>
            <div class="prose max-w-none"><?php the_content(); ?></div>
        </article>
    <?php endwhile; ?>
</main>
<?php get_footer(); ?>