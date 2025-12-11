<?php get_header(); ?>

<main class="mt-20">
    <div class="max-w-7xl mx-auto px-6 py-20">
        <?php
        if (have_posts()):
            while (have_posts()):
                the_post();
                ?>
                <h1 class="text-5xl font-extrabold text-slate-900 mb-8"><?php the_title(); ?></h1>
                <div class="prose max-w-none text-slate-600">
                    <?php the_content(); ?>
                </div>
                <?php
            endwhile;
        endif;
        ?>
    </div>
</main>

<?php get_footer(); ?>