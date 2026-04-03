<?php
/**
 * The template for displaying all single Vanity Blogs.
 *
 * @package kidazzle_Theme
 */

get_header();

// Get the associated Vanity Location taxonomy terms
$locations = get_the_terms(get_the_ID(), 'vanity_location');
$target_location_url = home_url('/locations/');
$target_location_name = 'Our Campuses';

if ($locations && !is_wp_error($locations)) {
    // If a location is tagged (e.g. 'Atlanta Federal Center'), try to build a smart URL or just link to the archive
    $target_location_name = $locations[0]->name;
    // Map the vanity term slug to standard location slug if possible, else standard location directory
    $target_location_url = home_url('/locations/' . $locations[0]->slug . '/');
}
?>

<main id="primary" class="site-main bg-[#FDFBF7]">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        
        <!-- Hero Header -->
        <header class="relative pt-32 pb-24 px-4 overflow-hidden border-b border-[#EAE0D5] bg-slate-900 text-center">
            <?php if (has_post_thumbnail()) : ?>
                <div class="absolute inset-0 z-0">
                    <?php the_post_thumbnail('full', ['class' => 'w-full h-full object-cover opacity-30']); ?>
                    <div class="absolute inset-0 bg-slate-900/60 mix-blend-multiply"></div>
                </div>
            <?php else : ?>
                <div class="absolute inset-0 z-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')]"></div>
            <?php endif; ?>

            <div class="relative z-10 max-w-4xl mx-auto">
                <div class="flex items-center justify-center gap-2 mb-6">
                    <span class="bg-indigo-500/20 text-indigo-300 border border-indigo-500/30 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-widest">
                        Local Guide
                    </span>
                    <?php if ($locations) : ?>
                        <span class="bg-white/10 text-white px-3 py-1 rounded-full text-xs font-bold uppercase tracking-widest backdrop-blur-sm">
                            <i class="fa-solid fa-map-pin mr-1"></i> <?php echo esc_html($target_location_name); ?>
                        </span>
                    <?php endif; ?>
                </div>

                <?php the_title('<h1 class="text-4xl md:text-6xl font-extrabold text-white mb-6 tracking-tight drop-shadow-lg leading-tight">', '</h1>'); ?>
                
                <div class="flex items-center justify-center gap-4 text-slate-300 text-sm font-medium">
                    <span class="uppercase tracking-widest font-bold text-[10px]"><i class="fa-regular fa-clock"></i> <?php echo get_the_date(); ?></span>
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <div class="max-w-4xl mx-auto px-4 py-16">
            <div class="bg-white p-8 md:p-16 rounded-[3rem] shadow-xl border border-slate-100 -mt-24 relative z-20">
                <div class="post-content prose prose-lg prose-headings:font-extrabold prose-headings:text-slate-900 prose-p:text-slate-600 prose-p:mb-6 prose-a:text-indigo-600 hover:prose-a:text-indigo-800 prose-blockquote:border-indigo-500 prose-blockquote:bg-indigo-50 prose-blockquote:p-8 prose-blockquote:rounded-3xl prose-img:rounded-3xl max-w-none transition-all">
                    <?php
                    while (have_posts()) :
                        the_post();
                        the_content();
                    endwhile;
                    ?>
                </div>
            </div>

            <!-- Pre-Coded Automated Kidazzle Childcare Backlink Infrastructure -->
            <div class="mt-12 p-8 bg-indigo-50/50 rounded-[3rem] border border-indigo-100/50 flex flex-col md:flex-row items-center gap-8 shadow-sm">
                <div class="w-24 h-24 bg-white rounded-full flex items-center justify-center overflow-hidden shrink-0 shadow-md">
                    <img src="https://storage.googleapis.com/msgsndr/ZR2UvxPL2wlZNSvHjmJD/media/64ef561bad8c716760dfd435.png" alt="Kidazzle Emblem" class="w-16 h-auto object-contain">
                </div>
                <div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-2">Looking for Trusted Child Care in <?php echo esc_html($target_location_name); ?>?</h3>
                    <p class="text-slate-600 font-medium mb-4 leading-relaxed text-sm">
                        As you explore all that the area has to offer, remember that quality early childhood education is right around the corner. Kidazzle Child Care provides industry-leading curriculums and elite safety protocols for families working and living in the <strong><?php echo esc_html($target_location_name); ?></strong> radius.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <a href="<?php echo esc_url($target_location_url); ?>" class="bg-indigo-600 text-white px-6 py-2 rounded-xl text-xs font-bold tracking-widest uppercase hover:bg-indigo-700 transition shadow-md">
                            View <?php echo esc_html($target_location_name); ?> Campus
                        </a>
                        <a href="<?php echo esc_url(home_url('/programs/')); ?>" class="bg-white text-indigo-600 border border-indigo-200 px-6 py-2 rounded-xl text-xs font-bold tracking-widest uppercase hover:bg-indigo-50 transition shadow-sm">
                            Explore Programs
                        </a>
                        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="bg-transparent text-slate-500 hover:text-slate-800 px-6 py-2 rounded-xl text-xs font-bold tracking-widest uppercase transition">
                            Book A Tour
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </article>
</main>

<style>
	.post-content h2, .post-content h3 {
		color: #0f172a !important; /* slate-900 */
		margin-top: 2.5rem !important;
		margin-bottom: 1.25rem !important;
	}
	.post-content blockquote p {
		font-style: italic !important;
		font-size: 1.15rem !important;
		color: #4338ca !important; /* indigo-700 */
	}
	.post-content > p:first-of-type::first-letter {
		font-size: 3.5rem;
		font-weight: 800;
		color: #4f46e5; /* indigo-600 */
		float: left;
		margin-right: 0.75rem;
		line-height: 1;
		margin-top: 0.25rem;
	}
</style>

<?php get_footer(); ?>
