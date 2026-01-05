<?php
/**
 * Template Name: Careers Page
 * Employment opportunities and application
 * 
 * KIDazzle Child Care Theme
 * 
 * @package Kidazzle
 */

if (!defined('ABSPATH')) {
	exit;
}

get_header();
?>

<!-- Hero Banner -->
<div class="rounded-[3rem] overflow-hidden relative h-[500px] shadow-lg group bg-slate-900">
	<div class="absolute inset-0 z-0">
		<?php if (has_post_thumbnail()): ?>
			<img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title_attribute(); ?>"
				class="w-full h-full object-cover transition duration-[3000ms] group-hover:scale-105 opacity-50">
		<?php else: ?>
			<img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80"
				alt="<?php esc_attr_e('Diverse group of teachers smiling', 'kidazzle'); ?>"
				class="w-full h-full object-cover transition duration-[3000ms] group-hover:scale-105 opacity-50">
		<?php endif; ?>
		<div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/40 to-transparent"></div>
	</div>

	<div class="absolute inset-0 z-10 flex flex-col justify-center items-center text-center p-8 md:p-16">
		<div
			class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md border border-white/20 text-white px-4 py-2 rounded-full mb-6">
			<span class="w-2 h-2 rounded-full bg-orange-500 animate-pulse"></span>
			<span
				class="font-bold text-xs uppercase tracking-widest"><?php esc_html_e('Now Hiring Passionate Educators', 'kidazzle'); ?></span>
		</div>
		<h1 class="text-5xl md:text-7xl font-extrabold text-white mb-6 drop-shadow-xl tracking-tight">
			<?php esc_html_e('Shape the', 'kidazzle'); ?> <span
				class="text-orange-400"><?php esc_html_e('Future', 'kidazzle'); ?></span>
		</h1>
		<p class="text-lg md:text-2xl text-white/90 font-medium max-w-2xl leading-relaxed drop-shadow-md">
			<?php esc_html_e('Build a career, not just a job. Join a family of independent schools dedicated to excellence since 1994.', 'kidazzle'); ?>
		</p>
		<div class="mt-8 flex gap-4">
			<a href="#openings"
				class="bg-white text-slate-900 px-8 py-3 rounded-full font-bold hover:bg-orange-400 hover:text-white transition shadow-lg"><?php esc_html_e('View Openings', 'kidazzle'); ?></a>
		</div>
	</div>
</div>

<div class="text-center pt-12 pb-8">
	<h2 class="text-3xl font-extrabold text-slate-900"><?php esc_html_e('Why Choose KIDazzle?', 'kidazzle'); ?></h2>
</div>

<!-- Benefits Grid -->
<div class="grid md:grid-cols-3 gap-6">
	<div
		class="module-card bg-white p-8 rounded-[2.5rem] border border-slate-200 text-center flex flex-col items-center">
		<div class="w-16 h-16 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center mb-6">
			<i data-lucide="trending-up" class="w-8 h-8"></i>
		</div>
		<h3 class="text-xl font-bold text-slate-900 mb-2"><?php esc_html_e('Professional Growth', 'kidazzle'); ?></h3>
		<p class="text-slate-500 text-sm">
			<?php esc_html_e('We invest in your future with ongoing training, CDA assistance, and leadership pathways.', 'kidazzle'); ?>
		</p>
	</div>

	<div
		class="module-card bg-white p-8 rounded-[2.5rem] border border-slate-200 text-center flex flex-col items-center">
		<div class="w-16 h-16 bg-orange-50 text-orange-600 rounded-2xl flex items-center justify-center mb-6">
			<i data-lucide="heart" class="w-8 h-8"></i>
		</div>
		<h3 class="text-xl font-bold text-slate-900 mb-2"><?php esc_html_e('Supportive Culture', 'kidazzle'); ?></h3>
		<p class="text-slate-500 text-sm">
			<?php esc_html_e('We are a family-owned network, not a franchise. You are a name, not a number.', 'kidazzle'); ?>
		</p>
	</div>

	<div
		class="module-card bg-white p-8 rounded-[2.5rem] border border-slate-200 text-center flex flex-col items-center">
		<div class="w-16 h-16 bg-purple-50 text-purple-600 rounded-2xl flex items-center justify-center mb-6">
			<i data-lucide="zap" class="w-8 h-8"></i>
		</div>
		<h3 class="text-xl font-bold text-slate-900 mb-2"><?php esc_html_e('Modern Tools', 'kidazzle'); ?></h3>
		<p class="text-slate-500 text-sm">
			<?php esc_html_e('Say goodbye to burnout. We use AI lesson planning and digital tools to make your job easier.', 'kidazzle'); ?>
		</p>
	</div>
</div>

<!-- Current Openings -->
<div id="openings" class="bg-white rounded-[2.5rem] p-10 md:p-12 border border-slate-200 shadow-sm mt-8">
	<div class="flex justify-between items-end mb-8">
		<div>
			<h2 class="text-3xl font-extrabold text-slate-900"><?php esc_html_e('Current Openings', 'kidazzle'); ?></h2>
			<p class="text-slate-500 mt-2">
				<?php esc_html_e('We are always looking for great talent in GA, TN, and FL.', 'kidazzle'); ?></p>
		</div>
	</div>

	<div class="space-y-4">
		<!-- Job 1 -->
		<div
			class="group flex flex-col md:flex-row items-center justify-between p-6 bg-slate-50 rounded-3xl border border-slate-100 hover:border-orange-200 hover:bg-white hover:shadow-md transition">
			<div class="mb-4 md:mb-0 text-center md:text-left">
				<h3 class="text-xl font-bold text-slate-900 group-hover:text-orange-600 transition">
					<?php esc_html_e('Lead Teacher (Pre-K)', 'kidazzle'); ?></h3>
				<div class="flex gap-4 justify-center md:justify-start mt-2 text-sm text-slate-500">
					<span class="flex items-center gap-1"><i data-lucide="map-pin" class="w-4 h-4"></i>
						<?php esc_html_e('Atlanta / Memphis', 'kidazzle'); ?></span>
					<span class="flex items-center gap-1"><i data-lucide="clock" class="w-4 h-4"></i>
						<?php esc_html_e('Full Time', 'kidazzle'); ?></span>
				</div>
			</div>
			<a href="#apply"
				class="bg-slate-900 text-white px-6 py-2 rounded-xl font-bold text-sm hover:bg-orange-500 transition"><?php esc_html_e('Apply Now', 'kidazzle'); ?></a>
		</div>

		<!-- Job 2 -->
		<div
			class="group flex flex-col md:flex-row items-center justify-between p-6 bg-slate-50 rounded-3xl border border-slate-100 hover:border-orange-200 hover:bg-white hover:shadow-md transition">
			<div class="mb-4 md:mb-0 text-center md:text-left">
				<h3 class="text-xl font-bold text-slate-900 group-hover:text-orange-600 transition">
					<?php esc_html_e('Assistant Director', 'kidazzle'); ?></h3>
				<div class="flex gap-4 justify-center md:justify-start mt-2 text-sm text-slate-500">
					<span class="flex items-center gap-1"><i data-lucide="map-pin" class="w-4 h-4"></i>
						<?php esc_html_e('All Locations', 'kidazzle'); ?></span>
					<span class="flex items-center gap-1"><i data-lucide="clock" class="w-4 h-4"></i>
						<?php esc_html_e('Full Time', 'kidazzle'); ?></span>
				</div>
			</div>
			<a href="#apply"
				class="bg-slate-900 text-white px-6 py-2 rounded-xl font-bold text-sm hover:bg-orange-500 transition"><?php esc_html_e('Apply Now', 'kidazzle'); ?></a>
		</div>

		<!-- Job 3 -->
		<div
			class="group flex flex-col md:flex-row items-center justify-between p-6 bg-slate-50 rounded-3xl border border-slate-100 hover:border-orange-200 hover:bg-white hover:shadow-md transition">
			<div class="mb-4 md:mb-0 text-center md:text-left">
				<h3 class="text-xl font-bold text-slate-900 group-hover:text-orange-600 transition">
					<?php esc_html_e('Nutrition Specialist (Cook)', 'kidazzle'); ?></h3>
				<div class="flex gap-4 justify-center md:justify-start mt-2 text-sm text-slate-500">
					<span class="flex items-center gap-1"><i data-lucide="map-pin" class="w-4 h-4"></i>
						<?php esc_html_e('College Park', 'kidazzle'); ?></span>
					<span class="flex items-center gap-1"><i data-lucide="clock" class="w-4 h-4"></i>
						<?php esc_html_e('Full Time', 'kidazzle'); ?></span>
				</div>
			</div>
			<a href="#apply"
				class="bg-slate-900 text-white px-6 py-2 rounded-xl font-bold text-sm hover:bg-orange-500 transition"><?php esc_html_e('Apply Now', 'kidazzle'); ?></a>
		</div>
	</div>
</div>

<!-- Application Form -->
<div id="apply" class="bg-gradient-to-br from-[#4c1d95] to-[#c026d3] rounded-[3rem] p-4 md:p-12 shadow-2xl mt-8">
	<div class="bg-white rounded-[2.5rem] p-8 md:p-16 max-w-4xl mx-auto shadow-inner text-center">

		<h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-6">
			<?php esc_html_e('Start Your Application', 'kidazzle'); ?></h2>
		<p class="text-lg text-slate-600 mb-10 max-w-2xl mx-auto">
			<?php esc_html_e('Fill out the form below to begin your journey with KIDazzle. Please have your resume ready.', 'kidazzle'); ?>
		</p>

		<?php
		// Check for custom form shortcode from page meta
		$form_shortcode = get_post_meta(get_the_ID(), 'kidazzle_form_shortcode', true);
		if ($form_shortcode) {
			echo do_shortcode($form_shortcode);
		} else {
			// Default embedded form
			?>
			<div class="w-full h-[900px] overflow-hidden rounded-2xl bg-slate-50 border border-slate-200">
				<iframe src="https://api.leadconnectorhq.com/widget/form/N8RYaUY1SuORexcyA6la"
					style="width:100%;height:100%;border:none;border-radius:20px" id="inline-N8RYaUY1SuORexcyA6la"
					data-layout="{'id':'INLINE'}" data-trigger-type="alwaysShow" data-trigger-value=""
					data-activation-type="alwaysActivated" data-activation-value="" data-deactivation-type="neverDeactivate"
					data-deactivation-value="" data-form-name="2023 New KIDazzel website contact" data-height="870"
					data-layout-iframe-id="inline-N8RYaUY1SuORexcyA6la" data-form-id="N8RYaUY1SuORexcyA6la"
					title="<?php esc_attr_e('Application Form', 'kidazzle'); ?>">
				</iframe>
			</div>
		<?php } ?>

	</div>
</div>

<?php get_footer(); ?>