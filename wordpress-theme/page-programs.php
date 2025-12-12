<?php get_header(); ?>

<!-- HERO -->
<section class="relative py-24 bg-indigo-900 text-white overflow-hidden">
    <div class="absolute inset-0 opacity-20">
        <img src="https://images.unsplash.com/photo-1549488347-cb2cb2aa993a" class="w-full h-full object-cover"
            alt="Programs Background">
    </div>
    <div class="relative max-w-7xl mx-auto px-6 text-center">
        <h1 class="text-5xl font-extrabold mb-6">Programs for Every Stage</h1>
        <p class="text-xl text-indigo-200 max-w-2xl mx-auto">
            From first steps to first grade prep, our Creative Curriculum® is designed to spark curiosity and build
            lifelong confidence.
        </p>
    </div>
</section>

<!-- MAIN CONTENT (Editable in WordPress) -->
<section class="py-20">
    <div class="max-w-7xl mx-auto px-6">
        <?php
        while (have_posts()):
            the_post();
            the_content();
        endwhile;
        ?>
    </div>
</section>

<?php get_footer(); ?>