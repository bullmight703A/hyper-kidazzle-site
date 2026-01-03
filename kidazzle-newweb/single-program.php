<?php
/**
 * The template for displaying all single program posts
 *
 * @package Kidazzle
 */

if (!defined('ABSPATH')) {
	exit;
}

get_header();

while (have_posts()):
	the_post();
	?>

	<?php
	// Get Program Data using legacy-compatible helper
	$fields = kidazzle_get_program_fields();
	$color_key = $fields['color']; // e.g., 'KIDazzle-red'
	$age_range = $fields['age_range'];
	
	// Construct dynamic classes
	$hero_bg_class = 'bg-' . $color_key . '/60'; // bg-KIDazzle-red/60
	$badge_bg_class = 'bg-' . $color_key . '/10';
	$badge_text_class = 'text-' . $color_key;
	$highlight_box_class = 'bg-' . $color_key . '/5';
	$highlight_border_class = 'border-' . $color_key . '/20';
	$highlight_title_class = 'text-' . $color_key; // Using main color for title
	$check_icon_class_text = 'text-' . $color_key;
	
	// Button classes
	$btn_class = 'bg-' . $color_key . ' hover:bg-' . $color_key . '/90';
	$outline_btn_hover_class = 'hover:border-' . $color_key . ' hover:text-' . $color_key;
	$link_color_class = 'text-' . $color_key;

	// Features
	$features_raw = get_post_meta(get_the_ID(), 'program_features', true);
	$features = $features_raw ? preg_split('/\r\n|\r|\n/', $features_raw) : [];
	?>

	<!-- Hero Section -->
	<div class="relative py-32 text-center overflow-hidden">
		<div class="absolute inset-0 z-0">
			<?php if (has_post_thumbnail()): ?>
				<img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title_attribute(); ?>"
					class="w-full h-full object-cover">
			<?php else: ?>
				<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/program-hero-default.jpg'); ?>"
					alt="<?php esc_attr_e('Program Hero', 'kidazzle'); ?>" class="w-full h-full object-cover">
			<?php endif; ?>
			<div class="absolute inset-0 <?php echo esc_attr($hero_bg_class); ?>"></div>
		</div>
		<div class="relative z-10 container mx-auto px-4 text-white">
			<span
				class="bg-white/20 px-4 py-1 rounded-full text-xs font-bold uppercase tracking-wider mb-4 inline-block backdrop-blur-sm border border-white/10">
				<?php echo esc_html($age_range ?: __('Our Program', 'kidazzle')); ?>
			</span>
			<h1 class="text-4xl md:text-6xl font-extrabold mb-6"><?php the_title(); ?></h1>
		</div>
	</div>

	<div class="container mx-auto px-4 py-16">
		<div class="grid lg:grid-cols-12 gap-8">

			<!-- Main Content -->
			<main class="lg:col-span-8 space-y-8 text-lg text-slate-700 leading-relaxed">
				<?php the_content(); ?>

				<div class="mt-12 p-8 <?php echo esc_attr($highlight_box_class); ?> rounded-3xl border <?php echo esc_attr($highlight_border_class); ?>">
					<h3 class="text-xl font-bold <?php echo esc_attr($highlight_title_class); ?> mb-6">
						<?php esc_html_e('Program Highlights', 'kidazzle'); ?></h3>
					
					<?php if (!empty($features)): ?>
						<div class="grid sm:grid-cols-2 gap-4">
							<?php foreach ($features as $feature): ?>
								<?php if (trim($feature)): ?>
									<div class="flex items-start gap-3">
										<i data-lucide="check-circle-2" class="w-5 h-5 <?php echo esc_attr($check_icon_class_text); ?> mt-1"></i>
										<span><?php echo esc_html(trim($feature)); ?></span>
									</div>
								<?php endif; ?>
							<?php endforeach; ?>
						</div>
					<?php else: ?>
						<!-- Fallback Features -->
						<div class="grid sm:grid-cols-2 gap-4">
							<div class="flex items-start gap-3">
								<i data-lucide="check-circle-2" class="w-5 h-5 <?php echo esc_attr($check_icon_class_text); ?> mt-1"></i>
								<span><?php esc_html_e('Age-Appropriate Curriculum', 'kidazzle'); ?></span>
							</div>
							<div class="flex items-start gap-3">
								<i data-lucide="check-circle-2" class="w-5 h-5 <?php echo esc_attr($check_icon_class_text); ?> mt-1"></i>
								<span><?php esc_html_e('Experienced Educators', 'kidazzle'); ?></span>
							</div>
							<div class="flex items-start gap-3">
								<i data-lucide="check-circle-2" class="w-5 h-5 <?php echo esc_attr($check_icon_class_text); ?> mt-1"></i>
								<span><?php esc_html_e('Safe & Secure Environment', 'kidazzle'); ?></span>
							</div>
							<div class="flex items-start gap-3">
								<i data-lucide="check-circle-2" class="w-5 h-5 <?php echo esc_attr($check_icon_class_text); ?> mt-1"></i>
								<span><?php esc_html_e('Nutritious Meals Included', 'kidazzle'); ?></span>
							</div>
						</div>
					<?php endif; ?>
				</div>
			</main>

			<!-- Sidebar / Enroll CTA -->
			<aside class="lg:col-span-4 space-y-8">
				<div class="bg-white p-8 rounded-3xl shadow-xl border border-slate-100 sticky top-32">
					<h3 class="text-2xl font-bold text-slate-900 mb-6"><?php esc_html_e('Join This Program', 'kidazzle'); ?>
					</h3>
					<p class="text-slate-600 mb-6">
						<?php esc_html_e('Spots fill up quickly! Schedule a tour today to secure your child’s future.', 'kidazzle'); ?>
					</p>

					<div class="space-y-4">
						<a href="<?php echo esc_url(home_url('/enrollment/')); ?>"
							class="block w-full text-white text-center font-bold py-3 rounded-xl transition shadow-lg <?php echo esc_attr($btn_class); ?>">
							<?php esc_html_e('Apply Now', 'kidazzle'); ?>
						</a>
						<a href="<?php echo esc_url(get_post_type_archive_link('location')); ?>"
							class="block w-full bg-white border-2 border-slate-200 text-slate-700 text-center font-bold py-3 rounded-xl transition <?php echo esc_attr($outline_btn_hover_class); ?>">
							<?php esc_html_e('Find Nearest Location', 'kidazzle'); ?>
						</a>
					</div>

					<hr class="my-8 border-slate-100">

					<div class="text-center">
						<p class="font-bold text-slate-900 mb-2"><?php esc_html_e('Have Questions?', 'kidazzle'); ?></p>
						<a href="tel:<?php echo esc_attr(get_theme_mod('kidazzle_phone', '877-410-1002')); ?>"
							class="flex items-center justify-center gap-2 font-bold text-lg hover:underline <?php echo esc_attr($link_color_class); ?>">
							<i data-lucide="phone" class="w-5 h-5"></i> <?php echo esc_html(get_theme_mod('kidazzle_phone', '877-410-1002')); ?>
						</a>
					</div>
				</div>
			</aside>

		</div>
	</div>

<?php
endwhile;
get_footer();
?>