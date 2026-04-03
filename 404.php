<?php
/**
 * 404 Error Page Template (Comprehensive Landing Page)
 *
 * @package kidazzle_Theme
 */

get_header();

// Get all published locations for the action grid
$locations_query = new WP_Query(array(
	'post_type' => 'location',
	'posts_per_page' => -1,
	'post_status' => 'publish',
	'orderby' => 'title',
	'order' => 'ASC',
));

?>

<main class="bg-brand-cream pb-20">

	<!-- Minified 404 Warning -->
	<div class="bg-kidazzle-red text-white py-4 text-center px-4 relative z-50 shadow-md">
		<p class="font-bold text-sm md:text-base tracking-widest uppercase"><i class="fa-solid fa-triangle-exclamation mr-2"></i> 404 Error | Oops! This page is playing hide & seek. Let's get you back on track below!</p>
	</div>

    <!-- HERO SECTION From Homepage -->
    <header class="relative w-full h-[550px] md:h-[650px] flex items-center overflow-hidden pt-0 mt-0">
        <div class="absolute inset-0 z-0">
            <!-- Vibrant image of children playing -->
            <img src="https://images.unsplash.com/photo-1596464716127-f2a82984de30?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80"
                alt="Vibrant children playing together" class="w-full h-full object-cover">
            <!-- 50% Faded Overlay -->
            <div class="absolute inset-0 bg-white/60"></div>
        </div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-xl bg-white/70 backdrop-blur-md p-6 md:p-10 rounded-[3rem] shadow-2xl border border-white/50">
                <div class="flex items-center gap-3 mb-4">
                    <span class="bg-yellow-400 text-slate-900 px-4 py-1.5 rounded-full text-xs font-extrabold uppercase tracking-wider shadow-sm">Let's Connect</span>
                </div>
                <h1 class="text-5xl md:text-7xl font-extrabold leading-tight mb-6 text-slate-900">Where Learning <br /><span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 via-purple-600 to-cyan-700">Is
                        Fun!</span></h1>
                <p class="text-lg text-slate-900 mb-8 font-bold leading-relaxed max-w-lg">From Memphis to Miami to Atlanta,
                    we are an independent academy nurturing bright minds for over 31 years. You may be lost, but you've found the right place.</p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="/locations/"
                        class="bg-yellow-400 hover:bg-yellow-500 text-slate-900 font-bold py-4 px-10 rounded-2xl shadow-lg transition flex items-center justify-center gap-2 transform hover:-translate-y-1 text-center">Find
                        Your Center <i class="fa-solid fa-chevron-right ml-1"></i></a>
                    <a href="<?php echo esc_url(home_url('/')); ?>"
                        class="bg-white/90 text-slate-900 border-2 border-slate-900 hover:border-indigo-600 hover:text-indigo-700 font-bold py-4 px-10 rounded-2xl transition flex items-center justify-center text-center">Go To Home</a>
                </div>
            </div>
        </div>
    </header>

    <!-- REGIONAL POWERHOUSE From Homepage -->
    <section class="py-24 bg-slate-50 relative">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <span class="text-cyan-600 font-extrabold tracking-widest uppercase text-sm block mb-2">Footprint</span>
                <h2 class="text-4xl md:text-5xl font-extrabold text-slate-900">Regional Excellence</h2>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Card 1: Memphis -->
                <a href="/locations/memphis/"
                    class="group bg-white rounded-[2.5rem] overflow-hidden shadow-lg hover:shadow-2xl transition-all border border-slate-200">
                    <div class="h-56 relative overflow-hidden">
                        <img src="https://storage.googleapis.com/msgsndr/ZR2UvxPL2wlZNSvHjmJD/media/693c7cb5dbed99e0b07c8310.png"
                            class="w-full h-full object-cover transition group-hover:scale-110" alt="Memphis">
                        <div class="absolute inset-0 bg-indigo-900/10 group-hover:bg-transparent transition"></div>
                    </div>
                    <div class="p-8">
                        <span
                            class="bg-indigo-100 text-indigo-700 px-3 py-1 rounded-full text-xs font-bold uppercase mb-4 inline-block tracking-wide">Tennessee</span>
                        <h3 class="text-2xl font-bold text-slate-900 mb-2">Memphis</h3>
                        <p class="text-slate-500 text-sm mb-4">Soul, Rhythm, & Rigor.</p>
                        <span class="text-indigo-600 font-bold text-sm flex items-center gap-2">View Center <i
                                class="fa-solid fa-arrow-right w-4 h-4"></i></span>
                    </div>
                </a>
                <!-- Card 2: Atlanta -->
                <a href="/locations/"
                    class="group bg-white rounded-[2.5rem] overflow-hidden shadow-2xl border-4 border-white -mt-4 relative z-10 transition-all">
                    <div class="h-64 relative overflow-hidden">
                        <img src="https://storage.googleapis.com/msgsndr/ZR2UvxPL2wlZNSvHjmJD/media/693c7ddeb4f42080d1d6f342.png"
                            class="w-full h-full object-cover transition group-hover:scale-110" alt="Atlanta">
                        <div
                            class="absolute top-4 right-4 bg-white text-orange-600 px-4 py-2 rounded-full text-xs font-extrabold shadow-lg">
                            <i class="fa-solid fa-star w-3 h-3 inline-block mr-1 text-orange-600"></i> HQ
                        </div>
                    </div>
                    <div class="p-8">
                        <span
                            class="bg-orange-100 text-orange-700 px-3 py-1 rounded-full text-xs font-bold uppercase mb-4 inline-block tracking-wide">Georgia</span>
                        <h3 class="text-3xl font-bold text-slate-900 mb-2">Atlanta</h3>
                        <p class="text-slate-500 text-sm mb-4">5 Locations - Our Home Base.</p>
                        <span class="text-orange-600 font-bold text-sm flex items-center gap-2">View All Locations <i
                                class="fa-solid fa-arrow-right w-4 h-4"></i></span>
                    </div>
                </a>
                <!-- Card 3: Doral -->
                <a href="/locations/miami/"
                    class="group bg-white rounded-[2.5rem] overflow-hidden shadow-lg hover:shadow-2xl transition-all border border-slate-200">
                    <div class="h-56 relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1535498730771-e735b998cd64?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                            class="w-full h-full object-cover transition group-hover:scale-110" alt="Doral">
                        <div class="absolute inset-0 bg-cyan-900/10 group-hover:bg-transparent transition"></div>
                    </div>
                    <div class="p-8">
                        <span
                            class="bg-cyan-100 text-cyan-700 px-3 py-1 rounded-full text-xs font-bold uppercase mb-4 inline-block tracking-wide">Florida</span>
                        <h3 class="text-2xl font-bold text-slate-900 mb-2">Doral</h3>
                        <p class="text-slate-500 text-sm mb-4">Sunshine & STEM focus.</p>
                        <span class="text-cyan-600 font-bold text-sm flex items-center gap-2">View Center <i
                                class="fa-solid fa-arrow-right w-4 h-4"></i></span>
                    </div>
                </a>
            </div>
        </div>
    </section>

	<!-- Call To Action Grid: All Campuses -->
	<section class="pt-16 lg:pt-24 px-4 max-w-7xl mx-auto">
		<div class="text-center mb-16">
			<h2 class="font-serif text-3xl md:text-5xl text-brand-ink mb-4">Connect With A Campus</h2>
			<p class="text-brand-ink/70">Find the contact information for all KIDazzle locations below.</p>
		</div>

		<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-10" id="locations-grid">
			<?php
			if ($locations_query->have_posts()):
				while ($locations_query->have_posts()):
					$locations_query->the_post();
					$location_id = get_the_ID();
					$location_fields = kidazzle_get_location_fields($location_id);
					$location_name = get_the_title();

					// Get location meta
					$city = $location_fields['city'];
					$state = $location_fields['state'];
					$zip = $location_fields['zip'];
					$address = kidazzle_location_address_line($location_id);
					$phone = $location_fields['phone'];

                    // Cycle Colors for variety
                    $brand_colors = [
                        ['bg' => 'kidazzle-red', 'text' => 'kidazzle-red', 'border' => 'kidazzle-red'],
                        ['bg' => 'kidazzle-orange', 'text' => 'kidazzle-orange', 'border' => 'kidazzle-orange'],
                        ['bg' => 'kidazzle-yellow', 'text' => 'kidazzle-yellow', 'border' => 'kidazzle-yellow'],
                        ['bg' => 'kidazzle-green', 'text' => 'kidazzle-green', 'border' => 'kidazzle-green'],
                        ['bg' => 'kidazzle-blue', 'text' => 'kidazzle-blue', 'border' => 'kidazzle-blue'],
                    ];
                    $color_idx = $locations_query->current_post % count($brand_colors);
                    $colors = $brand_colors[$color_idx];

					?>

					<div class="location-card group">
						<div class="bg-white rounded-[2rem] p-6 shadow-card border border-brand-ink/5 hover:border-<?php echo esc_attr($colors['border']); ?>/30 transition-all hover:-translate-y-1 h-full flex flex-col relative overflow-hidden">

							<div class="flex justify-between items-start mb-4 mt-2">
								<span class="bg-brand-ink text-white px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-wide">
									Campus Directory
								</span>
							</div>

							<h2 class="font-serif text-2xl font-bold text-brand-ink mb-2 group-hover:text-<?php echo esc_attr($colors['text']); ?> transition-colors">
								<?php echo esc_html($location_name); ?>
							</h2>

							<div class="text-sm text-brand-ink/90 mb-4 flex-grow">
								<p class="mb-2"><i class="fa-solid fa-location-dot text-brand-ink/50 mr-2 border border-brand-ink/10 p-1.5 rounded-full"></i> <?php echo esc_html($address); ?>, <?php echo esc_html("$city, $state $zip"); ?></p>
                                <p class="mb-2"><i class="fa-solid fa-phone text-brand-ink/50 mr-2 border border-brand-ink/10 p-1.5 rounded-full"></i> <a href="tel:<?php echo esc_attr(preg_replace('/[^0-9]/', '', $phone)); ?>" class="hover:text-kidazzle-blue transition-colors font-bold"><?php echo esc_html($phone); ?></a></p>
							</div>

							<div class="grid grid-cols-2 gap-3 mt-auto relative z-20">
								<a href="<?php the_permalink(); ?>" class="flex items-center justify-center py-3 rounded-xl border border-brand-ink/20 text-brand-ink text-xs font-bold uppercase tracking-wider hover:bg-brand-ink hover:text-white transition-colors">
									View Campus
								</a>
                                <a href="<?php echo esc_url(get_post_meta($location_id, 'location_tour_booking_link', true) ?: home_url('/contact')); ?>" class="flex items-center justify-center py-3 rounded-xl border border-<?php echo esc_attr($colors['border']); ?> text-<?php echo esc_attr($colors['text']); ?> text-xs font-bold uppercase tracking-wider hover:bg-<?php echo esc_attr($colors['text']); ?> hover:text-white transition-colors">
									Contact
								</a>
							</div>
						</div>
					</div>

				<?php endwhile;
				wp_reset_postdata();
			endif;
			?>
		</div>
	</section>
</main>

<?php get_footer(); ?>
