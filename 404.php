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

	<!-- Hero 404 Action Section -->
	<section class="relative pt-20 pb-16 lg:pt-32 lg:pb-24 bg-white overflow-hidden text-center rounded-b-[4rem] border-b border-brand-ink/5 shadow-sm">
		<div
			class="absolute top-0 left-0 w-full h-full bg-[radial-gradient(circle_at_top_right,_var(--tw-gradient-stops))] from-kidazzle-red/10 via-transparent to-transparent">
		</div>

		<div class="max-w-4xl mx-auto px-4 relative z-10">
			<div class="text-[8rem] leading-none md:text-[12rem] font-serif font-black text-kidazzle-red/20 mb-[-2rem] md:mb-[-4rem] animate-pulse">
				404
			</div>
			<div class="inline-flex items-center gap-2 bg-kidazzle-red text-white px-4 py-1.5 rounded-full text-[11px] uppercase tracking-[0.2em] font-bold shadow-md mb-6 relative z-20">
				<i class="fa-solid fa-compass"></i> Let's Get You Back
			</div>

			<h1 class="font-serif text-4xl md:text-6xl text-brand-ink mb-6 relative z-20">
				Oops! This page is playing <span class="text-kidazzle-red italic">hide & seek.</span>
			</h1>

			<p class="text-lg text-brand-ink/90 max-w-2xl mx-auto mb-10 relative z-20">
				We've checked the toy bins and looked under the rugs, but we can't find the page you're looking for. Instead of turning back, let's connect you directly with one of our campuses below!
			</p>
            
            <div class="flex flex-wrap justify-center gap-4 relative z-20">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="px-8 py-4 bg-brand-ink text-white font-bold rounded-full uppercase tracking-widest text-xs hover:bg-kidazzle-blue hover:text-white hover:-translate-y-1 transition-all duration-300 shadow-float">Go Back Home</a>
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
