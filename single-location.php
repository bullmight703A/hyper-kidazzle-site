<?php
/**
 * Single Location Template
 * 
 * KIDazzle Child Care Theme
 * 
 * @package Kidazzle
 */

if (!defined('ABSPATH')) {
	exit;
}

get_header();

// Get Location Data
$fields = kidazzle_get_location_fields();
$address_line = $fields['address'];
$city = $fields['city'];
$state = $fields['state'];
$zip = $fields['zip'];
$full_address = $address_line . ', ' . $city . ', ' . $state . ' ' . $zip;
$phone = $fields['phone'];
$email = $fields['email'];
$hours = $fields['hours'];
$map_embed = $fields['maps_embed'];
$director_name = $fields['director_name'];
$director_bio = $fields['director_bio'];
$director_photo = $fields['director_photo'];
$tagline = $fields['tagline'];
$tour_link = $fields['tour_link'];

// Badges/Programs
$programs_raw = get_post_meta(get_the_ID(), 'location_special_programs', true);
$programs = $programs_raw ? array_map('trim', explode(',', $programs_raw)) : [];

// Pickups
$pickups_raw = get_post_meta(get_the_ID(), 'location_school_pickups', true);
$pickups = $pickups_raw ? preg_split('/\r\n|\r|\n/', $pickups_raw) : [];

?>

<!-- HERO SECTION -->
<div class="bg-slate-900 py-24 text-white relative overflow-hidden">
	<div class="absolute inset-0 z-0">
		<?php if (has_post_thumbnail()): ?>
			<img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title_attribute(); ?>"
				class="w-full h-full object-cover opcacity-20">
		<?php else: ?>
			<img src="https://storage.googleapis.com/msgsndr/ZR2UvxPL2wlZNSvHjmJD/media/694489509b0de40cdd3adafb.png"
				alt="<?php the_title_attribute(); ?>" class="w-full h-full object-cover opacity-20">
		<?php endif; ?>
		<div class="absolute inset-0 bg-slate-900/80"></div>
	</div>
	<div class="container mx-auto px-4 text-center relative z-10">
		<span
			class="bg-white/20 text-white px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wide mb-6 inline-block backdrop-blur-sm border border-white/10">
			<?php echo esc_html($city ? $city . ', ' . $state : 'Locations'); ?>
		</span>
		<h1 class="text-5xl md:text-6xl font-extrabold mb-4"><?php the_title(); ?></h1>
		<?php if ($tagline): ?>
			<p class="text-xl max-w-2xl mx-auto text-slate-300"><?php echo esc_html($tagline); ?></p>
		<?php else: ?>
			<p class="text-xl max-w-2xl mx-auto text-slate-300"><?php echo esc_html(get_the_excerpt()); ?></p>
		<?php endif; ?>
	</div>
</div>

<div class="container mx-auto px-4 py-16">
	<div class="grid lg:grid-cols-3 gap-12">
		<div class="lg:col-span-2 space-y-12">

			<!-- About / SEO Content (Top) -->
			<section>
				<h2 class="text-3xl font-bold text-slate-900 mb-6"><?php esc_html_e('About This Center', 'kidazzle'); ?>
				</h2>
				<div class="text-slate-600 leading-relaxed text-lg mb-8 content-area">
					<?php the_content(); ?>
				</div>

				<!-- Dynamic Features Grid (Badges) -->
				<?php if (!empty($programs)): ?>
					<div class="grid md:grid-cols-3 gap-4 mb-8">
						<?php foreach ($programs as $program): ?>
							<?php if ($program): ?>
								<div
									class="bg-slate-50 p-6 rounded-2xl border border-slate-200 text-center hover:bg-slate-100 transition group cursor-pointer">
									<i data-lucide="check-circle" class="w-8 h-8 mx-auto mb-3 text-indigo-500"></i>
									<h4 class="font-bold text-slate-900"><?php echo esc_html($program); ?></h4>
								</div>
							<?php endif; ?>
						<?php endforeach; ?>
					</div>
				<?php endif; ?>
			</section>

			<!-- Director Section -->
			<?php if ($director_name): ?>
				<section class="bg-indigo-50 p-8 rounded-3xl border border-indigo-100 flex flex-col md:flex-row gap-8 items-center md:items-start text-center md:text-left">
					<?php if ($director_photo): ?>
						<img src="<?php echo esc_url($director_photo); ?>" alt="<?php echo esc_attr($director_name); ?>" class="w-32 h-32 rounded-full object-cover border-4 border-white shadow-md shrink-0">
					<?php endif; ?>
					<div>
						<h3 class="text-2xl font-bold text-indigo-900 mb-2"><?php echo esc_html($director_name); ?></h3>
						<p class="text-indigo-600 font-bold uppercase text-sm tracking-wider mb-4"><?php esc_html_e('Campus Director', 'kidazzle'); ?></p>
						<p class="text-slate-700 leading-relaxed"><?php echo nl2br(esc_html($director_bio)); ?></p>
					</div>
				</section>
			<?php endif; ?>

			<!-- School Pickups -->
			<?php if (!empty($pickups) && $pickups[0]): ?>
				<section>
					<h3 class="text-2xl font-bold text-slate-900 mb-6 flex items-center gap-3">
						<i data-lucide="bus" class="text-yellow-500"></i>
						<?php esc_html_e('School Pickups', 'kidazzle'); ?>
					</h3>
					<div class="grid sm:grid-cols-2 gap-4">
						<?php foreach ($pickups as $school): ?>
							<?php if (trim($school)): ?>
								<div class="flex items-center gap-3 bg-white p-4 rounded-xl border border-slate-100 shadow-sm">
									<div class="bg-yellow-100 p-2 rounded-lg text-yellow-600">
										<i data-lucide="school" class="w-5 h-5"></i>
									</div>
									<span class="font-bold text-slate-700"><?php echo esc_html(trim($school)); ?></span>
								</div>
							<?php endif; ?>
						<?php endforeach; ?>
					</div>
				</section>
			<?php endif; ?>

			<!-- Calendar / Map -->
			<div class="bg-white p-8 rounded-[2rem] shadow-xl border-t-8 border-yellow-400" id="tour">
				<h3 class="text-2xl font-bold text-slate-900 mb-6 flex items-center gap-2"><i data-lucide="calendar"
						class="text-yellow-500"></i> <?php esc_html_e('Book a Tour', 'kidazzle'); ?></h3>
				
				<?php if ($tour_link): ?>
					<div class="text-center py-12 bg-slate-50 rounded-2xl border border-dashed border-slate-200">
						<p class="text-lg text-slate-600 mb-6"><?php esc_html_e('Ready to see our campus? Schedule your visit today.', 'kidazzle'); ?></p>
						<a href="<?php echo esc_url($tour_link); ?>" target="_blank" class="inline-flex items-center gap-2 bg-indigo-600 text-white px-8 py-4 rounded-xl font-bold text-lg hover:bg-indigo-700 transition shadow-lg">
							<i data-lucide="calendar-check"></i>
							<?php esc_html_e('Schedule Tour Online', 'kidazzle'); ?>
						</a>
					</div>
				<?php else: ?>
					<!-- Fallback Default Calendar -->
					<div class="bg-slate-50 border-2 border-dashed border-slate-200 rounded-[2rem] min-h-[800px] flex items-center justify-center relative p-6">
						<iframe src="https://api.leadconnectorhq.com/widget/booking/QGN3ewkDzTOKKsOH93q6" style="width: 100%; height: 100%; border:none; overflow: hidden;" id="msgsndr-calendar"></iframe>
					</div>
				<?php endif; ?>
			</div>

			<!-- Map (Bottom) -->
			<?php if ($map_embed): ?>
				<section
					class="bg-slate-100 rounded-[2rem] h-96 flex items-center justify-center text-slate-400 border-2 border-slate-200 overflow-hidden relative">
					<?php echo $map_embed; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
				</section>
			<?php endif; ?>
		</div>

		<!-- Sidebar -->
		<div class="space-y-8">
			<div class="bg-slate-900 p-8 rounded-[2rem] text-white shadow-xl relative overflow-hidden">
				<div class="relative z-10">
					<h3 class="text-xl font-bold mb-6 border-b border-slate-700 pb-4"><?php esc_html_e('Contact Info', 'kidazzle'); ?></h3>
					<div class="space-y-6 text-base">
						<?php if ($full_address): ?>
							<div class="flex items-start gap-4">
								<i data-lucide="map-pin" class="text-red-400 mt-1 shrink-0"></i>
								<span class="text-slate-300"><?php echo esc_html($full_address); ?></span>
							</div>
						<?php endif; ?>
						
						<?php if ($phone): ?>
							<div class="flex items-center gap-4">
								<i data-lucide="phone" class="text-green-400 shrink-0"></i> 
								<a href="tel:<?php echo esc_attr(preg_replace('/[^0-9]/', '', $phone)); ?>" class="font-bold hover:text-white transition"><?php echo esc_html($phone); ?></a>
							</div>
						<?php endif; ?>
						
						<?php if ($email): ?>
							<div class="flex items-center gap-4">
								<i data-lucide="mail" class="text-cyan-400 shrink-0"></i>
								<a href="mailto:<?php echo esc_attr($email); ?>" class="hover:text-white transition break-all"><?php echo esc_html($email); ?></a>
							</div>
						<?php endif; ?>

						<?php if ($hours): ?>
							<div class="flex items-center gap-4 pt-4 border-t border-slate-700">
								<i data-lucide="clock" class="text-yellow-400 shrink-0"></i>
								<span class="text-slate-300"><?php echo esc_html($hours); ?></span>
							</div>
						<?php endif; ?>
					</div>
				</div>
			</div>

			<!-- Enroll CTA -->
			<div class="bg-gradient-to-br from-indigo-600 to-purple-700 p-8 rounded-[2rem] shadow-lg text-white text-center">
				<h3 class="text-xl font-bold mb-4"><?php esc_html_e('Join Our Family', 'kidazzle'); ?></h3>
				<p class="text-indigo-100 mb-6 text-sm"><?php esc_html_e('Spaces are limited. Apply today to secure your spot.', 'kidazzle'); ?></p>
				<a href="<?php echo esc_url(home_url('/enrollment/')); ?>" class="block w-full bg-white text-indigo-700 font-bold py-3 rounded-xl hover:bg-slate-50 transition shadow-md">
					<?php esc_html_e('Apply Now', 'kidazzle'); ?>
				</a>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>