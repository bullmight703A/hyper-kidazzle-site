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

	// Get Program Data
	$fields = kidazzle_get_program_fields();
	$color_key = $fields['color']; // e.g., 'red', 'blue', 'orange'
	$age_range = $fields['age_range'];
	$slug = get_post_field('post_name', get_the_ID());

	// --- DYNAMIC CONTENT CONFIGURATION ---
	// This allows specific content for different programs while using one template.
	// You can expand this array for Toddlers, Pre-K, etc.

	$program_data = array(
		// Default / Fallback
		'default' => array(
			'routine_title' => 'A Day in the Life',
			'routine_steps' => array(
				array('icon' => 'sun', 'title' => 'Morning Circle', 'desc' => 'Greeting friends and starting the day with joy.'),
				array('icon' => 'book-open', 'title' => 'Learning Time', 'desc' => 'Focused activities building core skills.'),
				array('icon' => 'gamepad-2', 'title' => 'Active Play', 'desc' => 'Outdoor or indoor physical development.'),
				array('icon' => 'moon', 'title' => 'Rest & Reset', 'desc' => 'Quiet time to recharge for the afternoon.')
			),
			'standards' => array(
				array('title' => 'Safety First', 'desc' => 'Secure environments with strict supervision.'),
				array('title' => 'Qualified Staff', 'desc' => 'Trained educators passionate about child development.'),
				array('title' => 'State Licensed', 'desc' => 'Fully compliant with all state regulations.')
			)
		),
		// Infant Program (Matches provided HTML)
		'infant' => array( // Matches slugs like 'infant-care', 'infants'
			'routine_title' => 'Routine & Rhythm',
			'routine_steps' => array(
				array('icon' => 'sun', 'title' => 'Arrival & Bonding', 'desc' => 'Warm greetings and health checks to start the day safely.'),
				array('icon' => 'smile', 'title' => 'Tummy Time', 'desc' => 'Building core strength and motor skills on safe, soft mats.'),
				array('icon' => 'music', 'title' => 'Sensory Play', 'desc' => 'Music, textures, and soft books to stimulate growing brains.'),
				array('icon' => 'moon', 'title' => 'Safe Sleep', 'desc' => 'Individual cribs following "Back to Sleep" protocols.')
			),
			'standards' => array(
				array('title' => 'ITERS-3 Compliant', 'desc' => 'We strictly follow the Infant/Toddler Environment Rating Scale.'),
				array('title' => 'NAEYC Aligned', 'desc' => 'Curriculum meets National Association for the Education of Young Children standards.'),
				array('title' => 'State Standards', 'desc' => 'Integrated GELDS (GA), TN-ELDS (TN), and Florida Early Learning standards.')
			)
		)
	);

	// Determine which config to use
	$current_config = $program_data['default'];
	if (strpos($slug, 'infant') !== false) {
		$current_config = $program_data['infant'];
	}
	// Add more elseif blocks here for 'toddler', 'preschool', etc.

	?>

	<!-- Hero Section -->
	<div class="rounded-[3rem] overflow-hidden relative h-[500px] shadow-lg group bg-slate-900">
		<div class="absolute inset-0 z-0">
			<?php if (has_post_thumbnail()): ?>
				<img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title_attribute(); ?>"
					class="w-full h-full object-cover transition duration-[3000ms] group-hover:scale-105 opacity-60">
			<?php else: ?>
				<img src="https://images.unsplash.com/photo-1555252333-9f8e92e65df9?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80"
					alt="<?php esc_attr_e('Program Hero', 'kidazzle'); ?>"
					class="w-full h-full object-cover transition duration-[3000ms] group-hover:scale-105 opacity-60">
			<?php endif; ?>
			<div
				class="absolute inset-0 bg-gradient-to-t from-<?php echo esc_attr($color_key); ?>-900/80 via-<?php echo esc_attr($color_key); ?>-900/30 to-transparent">
			</div>
		</div>

		<div class="absolute inset-0 z-10 flex flex-col justify-center items-center text-center p-8 md:p-16">
			<div
				class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md border border-white/20 text-white px-4 py-2 rounded-full mb-6">
				<span class="w-2 h-2 rounded-full bg-<?php echo esc_attr($color_key); ?>-400 animate-pulse"></span>
				<span
					class="font-bold text-xs uppercase tracking-widest"><?php echo esc_html($age_range ?: __('Our Program', 'kidazzle')); ?></span>
			</div>
			<h1 class="text-5xl md:text-7xl font-extrabold text-white mb-6 drop-shadow-xl tracking-tight">
				<?php the_title(); ?>
			</h1>
			<p class="text-lg md:text-2xl text-white/90 font-medium max-w-2xl leading-relaxed drop-shadow-md">
				<?php echo esc_html(get_the_excerpt()); ?>
			</p>
		</div>
	</div>

	<!-- Intro & Standards Grid -->
	<div class="grid lg:grid-cols-2 gap-6 items-stretch pt-4 mt-6">
		<div class="bg-white rounded-[3rem] p-10 md:p-16 border border-slate-200">
			<h2 class="text-3xl font-extrabold text-slate-900 mb-6"><?php esc_html_e('About This Program', 'kidazzle'); ?>
			</h2>
			<div class="space-y-6 text-lg text-slate-600 leading-relaxed font-medium entry-content">
				<?php the_content(); ?>
			</div>
		</div>

		<div
			class="bg-<?php echo esc_attr($color_key); ?>-50 rounded-[3rem] p-10 md:p-16 border border-<?php echo esc_attr($color_key); ?>-100 flex flex-col justify-center">
			<div class="flex items-center gap-3 mb-8">
				<div class="p-3 bg-white rounded-xl text-<?php echo esc_attr($color_key); ?>-500 shadow-sm"><i
						data-lucide="award" class="w-6 h-6"></i></div>
				<span
					class="text-<?php echo esc_attr($color_key); ?>-600 font-extrabold tracking-widest uppercase text-sm"><?php esc_html_e('Quality Standards', 'kidazzle'); ?></span>
			</div>

			<ul class="space-y-6">
				<?php foreach ($current_config['standards'] as $std): ?>
					<li class="flex gap-4 items-start">
						<i data-lucide="check-circle"
							class="w-6 h-6 text-<?php echo esc_attr($color_key); ?>-500 mt-1 shrink-0"></i>
						<div>
							<strong class="block text-slate-900 text-xl"><?php echo esc_html($std['title']); ?></strong>
							<p class="text-slate-600 text-sm"><?php echo esc_html($std['desc']); ?></p>
						</div>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>

	<!-- Routine Section -->
	<div class="text-center pt-16 pb-8">
		<span
			class="text-<?php echo esc_attr($color_key); ?>-500 font-extrabold tracking-widest uppercase text-sm"><?php echo esc_html($current_config['routine_title']); ?></span>
		<h2 class="text-3xl font-extrabold text-slate-900 mt-2"><?php esc_html_e('A Day in the Life', 'kidazzle'); ?></h2>
	</div>

	<div class="grid md:grid-cols-4 gap-6">
		<?php
		$routine_colors = ['red', 'orange', 'blue', 'purple'];
		foreach ($current_config['routine_steps'] as $index => $step):
			$step_color = $routine_colors[$index % 4];
			?>
			<div
				class="module-card bg-white p-8 rounded-[2.5rem] border border-slate-200 text-center flex flex-col items-center h-full">
				<div
					class="w-14 h-14 bg-<?php echo esc_attr($step_color); ?>-50 text-<?php echo esc_attr($step_color); ?>-500 rounded-2xl flex items-center justify-center mb-4">
					<i data-lucide="<?php echo esc_attr($step['icon']); ?>" class="w-7 h-7"></i>
				</div>
				<h3 class="font-bold text-slate-900 mb-2"><?php echo esc_html($step['title']); ?></h3>
				<p class="text-slate-500 text-xs"><?php echo esc_html($step['desc']); ?></p>
			</div>
		<?php endforeach; ?>
	</div>

	<!-- Safety & Reporting Section -->
	<div class="bg-slate-900 rounded-[3rem] p-10 md:p-16 text-white mt-8 flex flex-col md:flex-row items-center gap-12">
		<div class="md:w-1/2">
			<h2 class="text-3xl font-extrabold mb-6"><?php esc_html_e('Uncompromising Safety', 'kidazzle'); ?></h2>
			<p class="text-slate-300 leading-relaxed mb-8">
				<?php esc_html_e('Our classrooms are designed with safety as the priority. We maintain strict sanitation logs, secure entry systems, and rigorous staff training.', 'kidazzle'); ?>
			</p>
			<ul class="space-y-4">
				<li class="flex items-center gap-3 font-bold"><i data-lucide="shield-check" class="text-green-400"></i>
					<?php esc_html_e('Secure Entry & Exit', 'kidazzle'); ?></li>
				<li class="flex items-center gap-3 font-bold"><i data-lucide="shield-check" class="text-green-400"></i>
					<?php esc_html_e('Sanitized Toys (Daily)', 'kidazzle'); ?></li>
				<li class="flex items-center gap-3 font-bold"><i data-lucide="shield-check" class="text-green-400"></i>
					<?php esc_html_e('Qualified Caregivers', 'kidazzle'); ?></li>
			</ul>
		</div>
		<div class="md:w-1/2">
			<div class="bg-white/10 border border-white/20 p-8 rounded-3xl backdrop-blur-sm">
				<h3 class="text-xl font-bold mb-4 flex items-center gap-2"><i data-lucide="message-circle"
						class="text-<?php echo esc_attr($color_key); ?>-400"></i>
					<?php esc_html_e('Daily Reports', 'kidazzle'); ?></h3>
				<p class="text-sm text-slate-300 mb-4">
					<?php esc_html_e('You will receive digital updates covering:', 'kidazzle'); ?></p>
				<div class="grid grid-cols-2 gap-2 text-xs font-bold text-white">
					<span class="bg-black/30 px-3 py-2 rounded-lg">🍼 <?php esc_html_e('Meals', 'kidazzle'); ?></span>
					<span class="bg-black/30 px-3 py-2 rounded-lg">😴 <?php esc_html_e('Naps', 'kidazzle'); ?></span>
					<span class="bg-black/30 px-3 py-2 rounded-lg">📚 <?php esc_html_e('Activities', 'kidazzle'); ?></span>
					<span class="bg-black/30 px-3 py-2 rounded-lg">😃 <?php esc_html_e('Mood', 'kidazzle'); ?></span>
				</div>
			</div>
		</div>
	</div>

	<!-- CTA Section -->
	<div
		class="bg-gradient-to-br from-[#4c1d95] to-[#c026d3] rounded-[3rem] p-10 md:p-14 text-white shadow-2xl relative overflow-hidden mt-8">
		<div class="relative z-10 flex flex-col md:flex-row items-center justify-between gap-8">
			<div class="text-left max-w-2xl">
				<h3 class="text-3xl md:text-4xl font-extrabold mb-3"><?php esc_html_e('Schedule a Visit', 'kidazzle'); ?>
				</h3>
				<p class="text-purple-100 text-lg">
					<?php esc_html_e('See our classrooms in person and meet our nurturing staff.', 'kidazzle'); ?></p>
			</div>
			<div class="flex flex-col sm:flex-row gap-4 shrink-0">
				<a href="<?php echo esc_url(home_url('/locations/')); ?>"
					class="bg-white text-purple-900 px-8 py-4 rounded-full font-bold hover:bg-yellow-400 hover:text-black transition shadow-lg whitespace-nowrap">
					<?php esc_html_e('Find a Location', 'kidazzle'); ?>
				</a>
				<a href="<?php echo esc_url(home_url('/enrollment/')); ?>"
					class="bg-transparent border-2 border-white text-white px-8 py-4 rounded-full font-bold hover:bg-white/10 transition whitespace-nowrap">
					<?php esc_html_e('Enroll Now', 'kidazzle'); ?>
				</a>
			</div>
		</div>
	</div>

	<?php
endwhile;
get_footer();
?>