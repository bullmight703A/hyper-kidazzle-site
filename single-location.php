<?php
/**
 * Template Name: Single Location
 * Template Post Type: location, page
 * 
 * A fully dynamic location template that uses WordPress custom fields
 * for all location-specific data. Compatible with ACF or native meta.
 * 
 * Custom Fields Expected:
 * - location_city (text) - e.g., "Atlanta, GA"
 * - location_tagline (text) - e.g., "Rooted in culture, bursting with creativity."
 * - location_address (textarea) - Full address
 * - location_phone (text) - Phone number
 * - location_email (text) - Email address
 * - location_accent_color (text) - e.g., "green", "cyan", "purple"
 * - location_booking_widget_id (text) - LeadConnector widget ID
 * - location_hero_icon (text) - Lucide icon name, e.g., "map-pin", "plane"
 * - location_features (repeater/serialized array) - Array of feature objects
 * 
 * @package Kidazzle
 */

if (!defined('ABSPATH')) {
	exit;
}

get_header();

// Start the Loop.
while (have_posts()):
	the_post();

	// Get custom fields with defaults
	$location_city = get_post_meta(get_the_ID(), 'location_city', true) ?: 'Atlanta, GA';
	$location_tagline = get_post_meta(get_the_ID(), 'location_tagline', true) ?: 'Where learning meets love.';
	$location_address = get_post_meta(get_the_ID(), 'location_address', true) ?: '100 Alabama St SW, Atlanta, GA 30303';
	$location_phone = get_post_meta(get_the_ID(), 'location_phone', true) ?: '877-410-1002';
	$location_email = get_post_meta(get_the_ID(), 'location_email', true) ?: 'info@kidazzle.com';
	$accent_color = get_post_meta(get_the_ID(), 'location_accent_color', true) ?: 'green';
	$booking_widget_id = get_post_meta(get_the_ID(), 'location_booking_widget_id', true) ?: 'QGN3ewkDzTOKKsOH93q6';
	$hero_icon = get_post_meta(get_the_ID(), 'location_hero_icon', true) ?: 'map-pin';
	$google_map_embed = get_post_meta(get_the_ID(), 'location_map_embed', true);

	// Get features - can be ACF repeater or serialized array
	$features_raw = get_post_meta(get_the_ID(), 'location_features', true);

	// Default features if none set
	$default_features = array(
		array(
			'icon' => 'heart',
			'color' => 'red',
			'title' => 'Loving Care',
			'subtitle' => 'Family Environment'
		),
		array(
			'icon' => 'book-open',
			'color' => 'blue',
			'title' => 'Creative Curriculum',
			'subtitle' => 'Research-Based'
		),
		array(
			'icon' => 'graduation-cap',
			'color' => 'green',
			'title' => 'GA Pre-K',
			'subtitle' => 'Lottery Funded'
		)
	);

	$features = !empty($features_raw) && is_array($features_raw) ? $features_raw : $default_features;

	// Clean phone for tel: link
	$phone_clean = preg_replace('/[^0-9]/', '', $location_phone);
	?>

	<!-- Hero Section -->
	<div class="rounded-[3rem] overflow-hidden relative h-[500px] shadow-lg group bg-slate-900 mt-6 mx-4 md:mx-0">
		<div class="absolute inset-0 z-0">
			<?php if (has_post_thumbnail()): ?>
				<?php the_post_thumbnail('full', array('class' => 'w-full h-full object-cover transition duration-[3000ms] group-hover:scale-105 opacity-60', 'alt' => get_the_title())); ?>
			<?php else: ?>
				<img src="https://storage.googleapis.com/msgsndr/ZR2UvxPL2wlZNSvHjmJD/media/694489509b0de40cdd3adafb.png"
					alt="<?php the_title_attribute(); ?>"
					class="w-full h-full object-cover transition duration-[3000ms] group-hover:scale-105 opacity-60">
			<?php endif; ?>
			<div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-transparent to-transparent"></div>
		</div>

		<div class="absolute inset-0 z-10 flex flex-col justify-center items-center text-center p-8 md:p-16">
			<div
				class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md border border-white/20 text-white px-4 py-2 rounded-full mb-6">
				<i data-lucide="<?php echo esc_attr($hero_icon); ?>"
					class="w-4 h-4 text-<?php echo esc_attr($accent_color); ?>-400"></i>
				<span class="font-bold text-xs uppercase tracking-widest"><?php echo esc_html($location_city); ?></span>
			</div>
			<h1 class="text-5xl md:text-7xl font-extrabold text-white mb-4 drop-shadow-xl tracking-tight">
				<?php the_title(); ?> <span
					class="text-<?php echo esc_attr($accent_color); ?>-400"><?php esc_html_e('Center', 'kidazzle'); ?></span>
			</h1>
			<p class="text-lg md:text-2xl text-white/90 font-medium max-w-2xl leading-relaxed drop-shadow-md">
				<?php echo esc_html($location_tagline); ?>
			</p>
		</div>
	</div>

	<!-- Main Content Grid -->
	<div class="grid lg:grid-cols-12 gap-6 pt-4 mx-4 md:mx-0">

		<!-- Left Column (8 cols) -->
		<div class="lg:col-span-8 space-y-6">

			<!-- About This Center -->
			<div class="bg-white p-8 md:p-12 rounded-[2.5rem] border border-slate-200 shadow-sm">
				<h2 class="text-3xl font-extrabold text-slate-900 mb-6">
					<?php esc_html_e('About This Center', 'kidazzle'); ?></h2>
				<div class="text-lg text-slate-600 leading-relaxed mb-8 entry-content">
					<?php the_content(); ?>
				</div>

				<!-- Dynamic Features Grid -->
				<div class="grid md:grid-cols-3 gap-4">
					<?php foreach ($features as $feature):
						$f_icon = isset($feature['icon']) ? $feature['icon'] : 'star';
						$f_color = isset($feature['color']) ? $feature['color'] : 'slate';
						$f_title = isset($feature['title']) ? $feature['title'] : 'Feature';
						$f_subtitle = isset($feature['subtitle']) ? $feature['subtitle'] : '';
						?>
						<div
							class="bg-<?php echo esc_attr($f_color); ?>-50 p-6 rounded-3xl border border-<?php echo esc_attr($f_color); ?>-100 text-center">
							<i data-lucide="<?php echo esc_attr($f_icon); ?>"
								class="w-8 h-8 mx-auto mb-3 text-<?php echo esc_attr($f_color); ?>-600"></i>
							<h4 class="font-bold text-slate-900"><?php echo esc_html($f_title); ?></h4>
							<?php if ($f_subtitle): ?>
								<p class="text-xs text-slate-500 mt-1"><?php echo esc_html($f_subtitle); ?></p>
							<?php endif; ?>
						</div>
					<?php endforeach; ?>
				</div>
			</div>

			<!-- Book a Tour -->
			<div
				class="bg-white p-8 md:p-12 rounded-[2.5rem] border-l-[12px] border-<?php echo esc_attr($accent_color); ?>-400 shadow-lg">
				<div class="flex items-center gap-4 mb-8">
					<div
						class="w-12 h-12 bg-<?php echo esc_attr($accent_color); ?>-100 rounded-full flex items-center justify-center text-<?php echo esc_attr($accent_color); ?>-600">
						<i data-lucide="calendar" class="w-6 h-6"></i>
					</div>
					<h2 class="text-3xl font-extrabold text-slate-900"><?php esc_html_e('Book a Tour', 'kidazzle'); ?></h2>
				</div>

				<div class="w-full h-[800px] rounded-2xl overflow-hidden border border-slate-100">
					<iframe src="https://api.leadconnectorhq.com/widget/booking/<?php echo esc_attr($booking_widget_id); ?>"
						style="width: 100%; height: 100%; border:none;" id="msgsndr-calendar">
					</iframe>
				</div>
			</div>

			<!-- Map Placeholder -->
			<div
				class="bg-slate-100 rounded-[2.5rem] h-80 flex items-center justify-center text-slate-400 border border-slate-200 relative overflow-hidden">
				<?php if ($google_map_embed): ?>
					<?php echo $google_map_embed; // Already sanitized iframe ?>
				<?php else: ?>
					<div class="text-center">
						<i data-lucide="map" class="w-12 h-12 mx-auto mb-2 opacity-50"></i>
						<p class="font-bold"><?php esc_html_e('Google Map Embed Placeholder', 'kidazzle'); ?></p>
						<p class="text-sm">(<?php echo esc_html($location_address); ?>)</p>
					</div>
				<?php endif; ?>
			</div>

		</div>

		<!-- Right Column (4 cols) -->
		<div class="lg:col-span-4 space-y-6">

			<!-- Contact Info Card -->
			<div class="bg-slate-900 p-8 rounded-[2.5rem] text-white shadow-xl">
				<h3 class="text-xl font-bold mb-6 flex items-center gap-2">
					<i data-lucide="info" class="text-<?php echo esc_attr($accent_color); ?>-400"></i>
					<?php esc_html_e('Contact Info', 'kidazzle'); ?>
				</h3>
				<div class="space-y-6">
					<div class="flex items-start gap-4">
						<div class="bg-white/10 p-2 rounded-lg"><i data-lucide="map-pin" class="w-5 h-5 text-red-400"></i>
						</div>
						<div>
							<span
								class="font-bold block text-sm text-slate-400 uppercase tracking-wide mb-1"><?php esc_html_e('Address', 'kidazzle'); ?></span>
							<span class="leading-relaxed"><?php echo nl2br(esc_html($location_address)); ?></span>
						</div>
					</div>
					<div class="flex items-start gap-4">
						<div class="bg-white/10 p-2 rounded-lg"><i data-lucide="phone" class="w-5 h-5 text-green-400"></i>
						</div>
						<div>
							<span
								class="font-bold block text-sm text-slate-400 uppercase tracking-wide mb-1"><?php esc_html_e('Phone', 'kidazzle'); ?></span>
							<span class="font-bold text-lg"><?php echo esc_html($location_phone); ?></span>
						</div>
					</div>
					<div class="flex items-start gap-4">
						<div class="bg-white/10 p-2 rounded-lg"><i data-lucide="mail" class="w-5 h-5 text-cyan-400"></i>
						</div>
						<div>
							<span
								class="font-bold block text-sm text-slate-400 uppercase tracking-wide mb-1"><?php esc_html_e('Email', 'kidazzle'); ?></span>
							<a href="mailto:<?php echo esc_attr($location_email); ?>"
								class="hover:text-white underline decoration-<?php echo esc_attr($accent_color); ?>-400"><?php echo esc_html($location_email); ?></a>
						</div>
					</div>
				</div>
				<div class="mt-8 pt-8 border-t border-slate-800">
					<a href="tel:<?php echo esc_attr($phone_clean); ?>"
						class="block w-full bg-<?php echo esc_attr($accent_color); ?>-500 hover:bg-<?php echo esc_attr($accent_color); ?>-400 text-slate-900 font-bold text-center py-4 rounded-xl transition">
						<?php esc_html_e('Call Now', 'kidazzle'); ?>
					</a>
				</div>
			</div>

			<!-- Questions Card -->
			<div class="bg-white p-8 rounded-[2.5rem] shadow-sm border border-slate-200">
				<h3 class="text-xl font-bold text-slate-900 mb-4"><?php esc_html_e('Have Questions?', 'kidazzle'); ?></h3>
				<p class="text-slate-500 text-sm mb-6">
					<?php esc_html_e('Send a quick message directly to the Center Director.', 'kidazzle'); ?></p>
				<div
					class="bg-slate-50 border-dashed border-2 border-slate-300 rounded-2xl h-64 flex items-center justify-center text-center p-6">
					<span
						class="text-slate-400 text-sm font-medium"><?php esc_html_e('Embed Location-Specific Form Here', 'kidazzle'); ?><br>(LeadConnector
						/ 123FormBuilder)</span>
				</div>
			</div>

			<!-- Explore More Card -->
			<div
				class="bg-<?php echo esc_attr($accent_color); ?>-600 p-8 rounded-[2.5rem] text-white shadow-lg text-center">
				<h3 class="font-bold text-lg mb-4"><?php esc_html_e('Explore More', 'kidazzle'); ?></h3>
				<div class="space-y-3">
					<a href="<?php echo esc_url(home_url('/locations/')); ?>"
						class="block bg-white/20 hover:bg-white/30 py-3 rounded-xl font-bold text-sm transition"><?php esc_html_e('View All Locations', 'kidazzle'); ?></a>
					<a href="<?php echo esc_url(home_url('/programs/')); ?>"
						class="block bg-white/20 hover:bg-white/30 py-3 rounded-xl font-bold text-sm transition"><?php esc_html_e('View Programs', 'kidazzle'); ?></a>
				</div>
			</div>

		</div>
	</div>

	<!-- CTA Section -->
	<div
		class="bg-gradient-to-br from-[#4c1d95] to-[#c026d3] rounded-[3rem] p-10 md:p-14 text-white shadow-2xl relative overflow-hidden mt-12 mb-8 mx-4 md:mx-0">
		<div class="relative z-10 flex flex-col md:flex-row items-center justify-between gap-8">
			<div class="text-left max-w-2xl">
				<h3 class="text-3xl md:text-4xl font-extrabold mb-3"><?php esc_html_e('Ready to Join?', 'kidazzle'); ?></h3>
				<p class="text-purple-100 text-lg">
					<?php printf(esc_html__('Secure your spot at our %s center today.', 'kidazzle'), get_the_title()); ?>
				</p>
			</div>
			<div class="flex flex-col sm:flex-row gap-4 shrink-0">
				<a href="<?php echo esc_url(home_url('/enrollment/')); ?>"
					class="bg-white text-purple-900 px-8 py-4 rounded-full font-bold hover:bg-yellow-400 hover:text-black transition shadow-lg whitespace-nowrap">
					<?php esc_html_e('Enroll Now', 'kidazzle'); ?>
				</a>
			</div>
		</div>
	</div>

<?php
endwhile; // End of the loop.

get_footer();
?>