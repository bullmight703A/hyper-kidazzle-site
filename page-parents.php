<?php
/**
 * Template Name: Parents Page
 * Parent resources dashboard
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
<div class="rounded-[3rem] overflow-hidden relative h-[450px] shadow-lg group bg-purple-900">
	<div class="absolute inset-0 z-0">
		<?php if (has_post_thumbnail()): ?>
			<img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title_attribute(); ?>"
				class="w-full h-full object-cover transition duration-[3000ms] group-hover:scale-105 opacity-60">
		<?php else: ?>
			<img src="https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80"
				alt="<?php esc_attr_e('Parent Resources', 'kidazzle'); ?>"
				class="w-full h-full object-cover transition duration-[3000ms] group-hover:scale-105 opacity-60">
		<?php endif; ?>
		<div class="absolute inset-0 bg-gradient-to-t from-purple-900/90 via-purple-900/40 to-transparent"></div>
	</div>

	<div class="absolute inset-0 z-10 flex flex-col justify-center items-center text-center p-8 md:p-16">
		<div
			class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md border border-white/20 text-white px-4 py-2 rounded-full mb-6">
			<span class="w-2 h-2 rounded-full bg-purple-400 animate-pulse"></span>
			<span
				class="font-bold text-xs uppercase tracking-widest"><?php esc_html_e('Parent Dashboard', 'kidazzle'); ?></span>
		</div>
		<h1 class="text-5xl md:text-7xl font-extrabold text-white mb-6 drop-shadow-xl tracking-tight">
			<?php esc_html_e('Parent', 'kidazzle'); ?> <span
				class="text-purple-300"><?php esc_html_e('Resources', 'kidazzle'); ?></span>
		</h1>
		<p class="text-lg md:text-2xl text-white/90 font-medium max-w-2xl leading-relaxed drop-shadow-md">
			<?php esc_html_e('Everything you need to manage your child\'s care, all in one place.', 'kidazzle'); ?>
		</p>
	</div>
</div>

<!-- Quick Access Cards -->
<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">

	<!-- Parent Portal -->
	<a href="https://schools.procareconnect.com/login" target="_blank" rel="noopener noreferrer"
		class="module-card bg-white p-8 rounded-[2.5rem] border border-slate-200 group">
		<div
			class="w-16 h-16 bg-yellow-50 text-yellow-500 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-yellow-500 group-hover:text-white transition">
			<i data-lucide="layout-dashboard" class="w-8 h-8"></i>
		</div>
		<h3 class="text-2xl font-bold text-slate-900 mb-2"><?php esc_html_e('Parent Portal', 'kidazzle'); ?></h3>
		<p class="text-slate-500 mb-4">
			<?php esc_html_e('View daily reports, photos, and communicate with teachers.', 'kidazzle'); ?></p>
		<span class="text-yellow-600 font-bold flex items-center gap-2 text-sm group-hover:gap-3 transition-all">
			<?php esc_html_e('Log In', 'kidazzle'); ?>
			<i data-lucide="external-link" class="w-4 h-4"></i>
		</span>
	</a>

	<!-- Pay Tuition -->
	<a href="https://schools.procareconnect.com/login" target="_blank" rel="noopener noreferrer"
		class="module-card bg-white p-8 rounded-[2.5rem] border border-slate-200 group">
		<div
			class="w-16 h-16 bg-green-50 text-green-500 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-green-500 group-hover:text-white transition">
			<i data-lucide="credit-card" class="w-8 h-8"></i>
		</div>
		<h3 class="text-2xl font-bold text-slate-900 mb-2"><?php esc_html_e('Pay Tuition', 'kidazzle'); ?></h3>
		<p class="text-slate-500 mb-4">
			<?php esc_html_e('Securely pay tuition online or set up auto-pay.', 'kidazzle'); ?></p>
		<span class="text-green-600 font-bold flex items-center gap-2 text-sm group-hover:gap-3 transition-all">
			<?php esc_html_e('Make Payment', 'kidazzle'); ?>
			<i data-lucide="arrow-right" class="w-4 h-4"></i>
		</span>
	</a>

	<!-- Order Uniforms -->
	<a href="#uniforms" class="module-card bg-white p-8 rounded-[2.5rem] border border-slate-200 group">
		<div
			class="w-16 h-16 bg-blue-50 text-blue-500 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-blue-500 group-hover:text-white transition">
			<i data-lucide="shirt" class="w-8 h-8"></i>
		</div>
		<h3 class="text-2xl font-bold text-slate-900 mb-2"><?php esc_html_e('Order Uniforms', 'kidazzle'); ?></h3>
		<p class="text-slate-500 mb-4"><?php esc_html_e('Shop for approved uniforms and spirit wear.', 'kidazzle'); ?>
		</p>
		<span class="text-blue-600 font-bold flex items-center gap-2 text-sm group-hover:gap-3 transition-all">
			<?php esc_html_e('Shop Now', 'kidazzle'); ?>
			<i data-lucide="shopping-bag" class="w-4 h-4"></i>
		</span>
	</a>

	<!-- Forms & Documents -->
	<a href="<?php echo esc_url(home_url('/resources/')); ?>"
		class="module-card bg-white p-8 rounded-[2.5rem] border border-slate-200 group">
		<div
			class="w-16 h-16 bg-purple-50 text-purple-500 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-purple-500 group-hover:text-white transition">
			<i data-lucide="file-text" class="w-8 h-8"></i>
		</div>
		<h3 class="text-2xl font-bold text-slate-900 mb-2"><?php esc_html_e('Forms & Documents', 'kidazzle'); ?></h3>
		<p class="text-slate-500 mb-4">
			<?php esc_html_e('Download enrollment packets, medical forms, and handbooks.', 'kidazzle'); ?></p>
		<span class="text-purple-600 font-bold flex items-center gap-2 text-sm group-hover:gap-3 transition-all">
			<?php esc_html_e('View Documents', 'kidazzle'); ?>
			<i data-lucide="arrow-right" class="w-4 h-4"></i>
		</span>
	</a>

	<!-- Academic Calendar -->
	<a href="#calendar" class="module-card bg-white p-8 rounded-[2.5rem] border border-slate-200 group">
		<div
			class="w-16 h-16 bg-red-50 text-red-500 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-red-500 group-hover:text-white transition">
			<i data-lucide="calendar" class="w-8 h-8"></i>
		</div>
		<h3 class="text-2xl font-bold text-slate-900 mb-2"><?php esc_html_e('Academic Calendar', 'kidazzle'); ?></h3>
		<p class="text-slate-500 mb-4">
			<?php esc_html_e('Important dates, holidays, and event schedules.', 'kidazzle'); ?></p>
		<span class="text-red-600 font-bold flex items-center gap-2 text-sm group-hover:gap-3 transition-all">
			<?php esc_html_e('View Calendar', 'kidazzle'); ?>
			<i data-lucide="arrow-right" class="w-4 h-4"></i>
		</span>
	</a>

	<!-- Contact Director -->
	<a href="<?php echo esc_url(home_url('/enrollment/')); ?>"
		class="module-card bg-white p-8 rounded-[2.5rem] border border-slate-200 group">
		<div
			class="w-16 h-16 bg-cyan-50 text-cyan-500 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-cyan-500 group-hover:text-white transition">
			<i data-lucide="message-circle" class="w-8 h-8"></i>
		</div>
		<h3 class="text-2xl font-bold text-slate-900 mb-2"><?php esc_html_e('Contact Director', 'kidazzle'); ?></h3>
		<p class="text-slate-500 mb-4">
			<?php esc_html_e('Have a concern? Reach out directly to your center director.', 'kidazzle'); ?></p>
		<span class="text-cyan-600 font-bold flex items-center gap-2 text-sm group-hover:gap-3 transition-all">
			<?php esc_html_e('Get in Touch', 'kidazzle'); ?>
			<i data-lucide="arrow-right" class="w-4 h-4"></i>
		</span>
	</a>

</div>

<!-- Additional Resources Section -->
<div class="grid lg:grid-cols-12 gap-6 mt-6">

	<!-- Lunch Menu Card -->
	<div class="lg:col-span-7">
		<div class="bg-white p-8 md:p-10 rounded-[2.5rem] border border-slate-200 shadow-xl h-full">
			<div class="flex items-center gap-4 mb-8 border-b border-slate-100 pb-6">
				<div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center text-orange-600">
					<i data-lucide="utensils" class="w-6 h-6"></i>
				</div>
				<div>
					<h2 class="text-3xl font-extrabold text-slate-900">
						<?php esc_html_e('Weekly Lunch Menu', 'kidazzle'); ?></h2>
					<p class="text-slate-500 text-sm">
						<?php esc_html_e('Nutritious meals prepared fresh daily.', 'kidazzle'); ?></p>
				</div>
			</div>

			<div class="bg-gradient-to-br from-orange-50 to-yellow-50 rounded-2xl p-6 border border-orange-100">
				<div class="grid md:grid-cols-5 gap-4 text-center">
					<?php
					$days = array(
						'Mon' => array('Chicken Stir Fry', 'Rice, Mixed Veggies'),
						'Tue' => array('Beef Tacos', 'Beans, Cheese, Salad'),
						'Wed' => array('Pasta Primavera', 'Garlic Bread, Salad'),
						'Thu' => array('Grilled Fish', 'Mac & Cheese, Corn'),
						'Fri' => array('Pizza Day', 'Fruit Cups, Juice'),
					);
					foreach ($days as $day => $meals): ?>
						<div class="bg-white rounded-xl p-4 shadow-sm">
							<span
								class="text-xs font-bold text-orange-600 uppercase tracking-wide"><?php echo esc_html($day); ?></span>
							<p class="font-bold text-slate-900 mt-2 text-sm"><?php echo esc_html($meals[0]); ?></p>
							<p class="text-slate-500 text-xs mt-1"><?php echo esc_html($meals[1]); ?></p>
						</div>
					<?php endforeach; ?>
				</div>
				<p class="text-center text-xs text-slate-500 mt-4">
					<?php esc_html_e('* Menu subject to change. Vegetarian options always available.', 'kidazzle'); ?>
				</p>
			</div>
		</div>
	</div>

	<!-- Important Info Sidebar -->
	<div class="lg:col-span-5 space-y-6">

		<!-- Quick Contact -->
		<div class="bg-slate-900 p-8 rounded-[2.5rem] text-white shadow-xl">
			<h3 class="text-xl font-bold mb-6"><?php esc_html_e('Need Assistance?', 'kidazzle'); ?></h3>
			<div class="space-y-4">
				<div class="flex items-center gap-4">
					<div class="bg-white/10 p-3 rounded-xl"><i data-lucide="phone" class="w-5 h-5 text-green-400"></i>
					</div>
					<div>
						<span class="text-slate-400 text-sm"><?php esc_html_e('Corporate Office', 'kidazzle'); ?></span>
						<a href="tel:8774101002"
							class="block text-xl font-bold hover:text-yellow-400 transition">877-410-1002</a>
					</div>
				</div>
				<div class="flex items-center gap-4">
					<div class="bg-white/10 p-3 rounded-xl"><i data-lucide="mail" class="w-5 h-5 text-blue-400"></i>
					</div>
					<div>
						<span class="text-slate-400 text-sm"><?php esc_html_e('Email Support', 'kidazzle'); ?></span>
						<a href="mailto:info@kidazzle.com"
							class="block font-bold hover:text-yellow-400 transition">info@kidazzle.com</a>
					</div>
				</div>
			</div>
			<a href="<?php echo esc_url(home_url('/locations/')); ?>"
				class="block w-full bg-white hover:bg-slate-200 text-slate-900 font-bold text-center py-4 rounded-2xl transition mt-6">
				<?php esc_html_e('Find Your Center', 'kidazzle'); ?>
			</a>
		</div>

		<!-- Handbook Download -->
		<div class="bg-gradient-to-br from-purple-600 to-indigo-700 p-8 rounded-[2.5rem] text-white shadow-xl">
			<div class="flex items-start gap-4">
				<div class="bg-white/20 p-3 rounded-xl"><i data-lucide="book-open" class="w-6 h-6"></i></div>
				<div class="flex-1">
					<h3 class="text-xl font-bold mb-2"><?php esc_html_e('Parent Handbook', 'kidazzle'); ?></h3>
					<p class="text-white/80 text-sm mb-4">
						<?php esc_html_e('Download our complete guide to policies, procedures, and everything you need to know.', 'kidazzle'); ?>
					</p>
					<a href="#"
						class="inline-flex items-center gap-2 bg-white text-purple-700 font-bold px-5 py-3 rounded-xl hover:bg-purple-100 transition text-sm">
						<i data-lucide="download" class="w-4 h-4"></i>
						<?php esc_html_e('Download PDF', 'kidazzle'); ?>
					</a>
				</div>
			</div>
		</div>

	</div>
</div>

<?php get_footer(); ?>