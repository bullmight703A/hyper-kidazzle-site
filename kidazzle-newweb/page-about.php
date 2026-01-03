<?php
/**
 * Template Name: About Page
 * About Us page template
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

<div class="rounded-[3rem] overflow-hidden relative h-[500px] shadow-lg group bg-slate-900 mt-6 mx-4 md:mx-0">
	<div class="absolute inset-0 z-0">
		<img src="https://images.unsplash.com/photo-1571210862729-78a52d3779a2?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80"
			alt="<?php esc_attr_e('Teacher reading', 'kidazzle'); ?>"
			class="w-full h-full object-cover transition duration-[3000ms] group-hover:scale-105 opacity-60">
		<div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
	</div>

	<div class="absolute inset-0 z-10 flex flex-col justify-center items-center text-center p-8 md:p-16">
		<div
			class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md border border-white/20 text-white px-4 py-2 rounded-full mb-6">
			<span class="w-2 h-2 rounded-full bg-orange-500 animate-pulse"></span>
			<span
				class="font-bold text-xs uppercase tracking-widest"><?php esc_html_e('Since 1994', 'kidazzle'); ?></span>
		</div>
		<h1 class="text-5xl md:text-7xl font-extrabold text-white mb-6 drop-shadow-xl tracking-tight">
			<?php esc_html_e('More Than Childcare.', 'kidazzle'); ?><br>
			<span class="text-orange-400"><?php esc_html_e('We Are Family.', 'kidazzle'); ?></span>
		</h1>
		<p class="text-lg md:text-2xl text-white/90 font-medium max-w-3xl leading-relaxed drop-shadow-md">
			<?php esc_html_e('For over 31 years, professional mothers have trusted KIDazzle to provide a safe, intellectually stimulating extension of their own homes.', 'kidazzle'); ?>
		</p>
	</div>
</div>

<div class="bg-white rounded-[3rem] p-10 md:p-20 shadow-sm border border-slate-200 text-center mt-6">
	<h2 class="text-3xl md:text-5xl font-extrabold text-slate-900 mb-6">
		<?php esc_html_e('The KIDazzle Standard', 'kidazzle'); ?></h2>
	<p class="text-xl text-slate-600 leading-relaxed max-w-4xl mx-auto">
		<?php esc_html_e('We understand that choosing a learning academy is one of the most significant decisions a parent makes. Our philosophy is simple:', 'kidazzle'); ?>
		<strong><?php esc_html_e('Excellence is standard.', 'kidazzle'); ?></strong>
		<?php esc_html_e('We bridge the gap between elite private education and accessible community care.', 'kidazzle'); ?>
	</p>
</div>

<div class="grid md:grid-cols-2 gap-6 items-stretch mt-6">
	<div class="bg-white rounded-[3rem] p-10 md:p-16 border border-slate-200 flex flex-col justify-center">
		<div class="flex items-center gap-3 mb-8">
			<div class="p-3 bg-orange-50 rounded-2xl text-orange-600"><i data-lucide="history" class="w-6 h-6"></i>
			</div>
			<span
				class="text-orange-600 font-extrabold tracking-widest uppercase text-sm"><?php esc_html_e('Our Origins', 'kidazzle'); ?></span>
		</div>
		<h2 class="text-4xl font-extrabold text-slate-900 mb-6 leading-tight">
			<?php esc_html_e("From a Women's Shelter to a Regional Leader", 'kidazzle'); ?></h2>
		<div class="space-y-6 text-lg text-slate-600 leading-relaxed font-medium">
			<p><?php esc_html_e('KIDazzle was born from a mission of profound necessity. Thirty-one years ago, we opened our doors inside a', 'kidazzle'); ?>
				<strong><?php esc_html_e("women's shelter", 'kidazzle'); ?></strong>,
				<?php esc_html_e('dedicated to providing stability to families in transition.', 'kidazzle'); ?></p>
			<p><?php esc_html_e('As we grew, we made a strategic choice to expand into', 'kidazzle'); ?>
				<strong><?php esc_html_e('urban centers', 'kidazzle'); ?></strong>—<?php esc_html_e('Memphis, Atlanta, Doral—where the need for high-quality, professional early childhood education was greatest.', 'kidazzle'); ?>
			</p>
		</div>
	</div>

	<div class="rounded-[3rem] overflow-hidden relative min-h-[500px] shadow-lg">
		<img src="https://images.unsplash.com/photo-1503454537195-1dcabb73ffb9?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
			alt="<?php esc_attr_e('Child learning', 'kidazzle'); ?>" class="w-full h-full object-cover">
		<div class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black/80 to-transparent p-10">
			<p class="text-white font-bold text-xl">
				"<?php esc_html_e('Quality care is a right, not a privilege.', 'kidazzle'); ?>"</p>
		</div>
	</div>
</div>

<div class="text-center pt-16 pb-8">
	<span
		class="text-indigo-600 font-extrabold tracking-widest uppercase text-sm"><?php esc_html_e('Peace of Mind', 'kidazzle'); ?></span>
	<h2 class="text-4xl font-extrabold text-slate-900 mt-2"><?php esc_html_e('Why Families Trust Us', 'kidazzle'); ?>
	</h2>
</div>

<div class="grid md:grid-cols-3 gap-6">
	<a href="<?php echo esc_url(home_url('/curriculum/')); ?>"
		class="module-card bg-white p-10 rounded-[2.5rem] border border-slate-100 flex flex-col h-full group">
		<div
			class="w-16 h-16 bg-cyan-50 rounded-2xl flex items-center justify-center mb-8 text-cyan-600 group-hover:scale-110 transition">
			<i data-lucide="brain" class="w-8 h-8"></i></div>
		<h3 class="text-2xl font-bold text-slate-900 mb-4"><?php esc_html_e('Academic Rigor', 'kidazzle'); ?></h3>
		<p class="text-slate-600 leading-relaxed mb-6 flex-grow">
			<?php esc_html_e('We prepare children for the future. Our Creative Curriculum® aligns with state standards ensuring your child enters Kindergarten ahead of the curve.', 'kidazzle'); ?>
		</p>
		<div class="text-cyan-600 font-bold text-sm flex items-center gap-2 group-hover:gap-3 transition-all">
			<?php esc_html_e('Explore Curriculum', 'kidazzle'); ?> <i data-lucide="arrow-right" class="w-4 h-4"></i>
		</div>
	</a>

	<a href="<?php echo esc_url(home_url('/safety/')); ?>"
		class="module-card bg-white p-10 rounded-[2.5rem] border border-slate-100 flex flex-col h-full group">
		<div
			class="w-16 h-16 bg-green-50 rounded-2xl flex items-center justify-center mb-8 text-green-600 group-hover:scale-110 transition">
			<i data-lucide="shield-check" class="w-8 h-8"></i></div>
		<h3 class="text-2xl font-bold text-slate-900 mb-4"><?php esc_html_e('Uncompromising Safety', 'kidazzle'); ?>
		</h3>
		<p class="text-slate-600 leading-relaxed mb-6 flex-grow">
			<?php esc_html_e("Your child's safety is our baseline. From secure keypad entry to rigorous staff background checks, we provide the security professional families demand.", 'kidazzle'); ?>
		</p>
		<div class="text-green-600 font-bold text-sm flex items-center gap-2 group-hover:gap-3 transition-all">
			<?php esc_html_e('View Protocols', 'kidazzle'); ?> <i data-lucide="arrow-right" class="w-4 h-4"></i></div>
	</a>

	<a href="<?php echo esc_url(home_url('/meals/')); ?>"
		class="module-card bg-white p-10 rounded-[2.5rem] border border-slate-100 flex flex-col h-full group">
		<div
			class="w-16 h-16 bg-orange-50 rounded-2xl flex items-center justify-center mb-8 text-orange-600 group-hover:scale-110 transition">
			<i data-lucide="utensils" class="w-8 h-8"></i></div>
		<h3 class="text-2xl font-bold text-slate-900 mb-4"><?php esc_html_e('Holistic Wellness', 'kidazzle'); ?></h3>
		<p class="text-slate-600 leading-relaxed mb-6 flex-grow">
			<?php esc_html_e('We nourish the body. Our onsite chefs prepare fresh, healthy meals daily—no processed shortcuts. We focus on developing healthy habits for life.', 'kidazzle'); ?>
		</p>
		<div class="text-orange-600 font-bold text-sm flex items-center gap-2 group-hover:gap-3 transition-all">
			<?php esc_html_e('See Sample Menu', 'kidazzle'); ?> <i data-lucide="arrow-right" class="w-4 h-4"></i></div>
	</a>
</div>

<div class="bg-slate-900 rounded-[3rem] p-10 md:p-20 text-center text-white relative overflow-hidden mt-8">
	<div class="relative z-10 max-w-4xl mx-auto">
		<h2 class="text-4xl md:text-5xl font-extrabold mb-8"><?php esc_html_e('Vision for the Future', 'kidazzle'); ?>
		</h2>
		<p class="text-xl text-slate-300 leading-relaxed mb-12">
			<?php esc_html_e('As we look to the next 30 years, KIDazzle is committed to expanding our footprint while deepening our impact. We are constantly innovating—integrating technology like AI into our lesson planning while keeping the human connection at the center.', 'kidazzle'); ?>
		</p>

		<div class="grid grid-cols-2 md:grid-cols-4 gap-8 border-t border-slate-800 pt-12">
			<div>
				<div class="text-4xl font-extrabold text-yellow-400 mb-2">31+</div>
				<div class="text-xs font-bold text-slate-500 uppercase tracking-widest">
					<?php esc_html_e('Years', 'kidazzle'); ?></div>
			</div>
			<div>
				<div class="text-4xl font-extrabold text-red-500 mb-2">10k+</div>
				<div class="text-xs font-bold text-slate-500 uppercase tracking-widest">
					<?php esc_html_e('Graduates', 'kidazzle'); ?></div>
			</div>
			<div>
				<div class="text-4xl font-extrabold text-cyan-400 mb-2">3</div>
				<div class="text-xs font-bold text-slate-500 uppercase tracking-widest">
					<?php esc_html_e('States', 'kidazzle'); ?></div>
			</div>
			<div>
				<div class="text-4xl font-extrabold text-green-500 mb-2">100%</div>
				<div class="text-xs font-bold text-slate-500 uppercase tracking-widest">
					<?php esc_html_e('Quality', 'kidazzle'); ?></div>
			</div>
		</div>
	</div>
</div>

<div
	class="bg-gradient-to-br from-[#4c1d95] to-[#c026d3] rounded-[3rem] p-10 md:p-14 text-white shadow-2xl relative overflow-hidden mt-8">
	<div class="relative z-10 flex flex-col md:flex-row items-center justify-between gap-8">
		<div class="text-left max-w-2xl">
			<h3 class="text-3xl md:text-4xl font-extrabold mb-3">
				<?php esc_html_e('Join the KIDazzle Family', 'kidazzle'); ?></h3>
			<p class="text-purple-100 text-lg">
				<?php esc_html_e("Secure your child's spot in a center where learning is fun and futures are bright.", 'kidazzle'); ?>
			</p>
		</div>
		<div class="flex flex-col sm:flex-row gap-4 shrink-0">
			<a href="<?php echo esc_url(get_post_type_archive_link('location')); ?>"
				class="bg-white text-purple-900 px-8 py-4 rounded-full font-bold hover:bg-yellow-400 hover:text-black transition shadow-lg whitespace-nowrap">
				<?php esc_html_e('Find a Location', 'kidazzle'); ?>
			</a>
			<a href="<?php echo esc_url(home_url('/enrollment/')); ?>"
				class="bg-transparent border-2 border-white text-white px-8 py-4 rounded-full font-bold hover:bg-white/10 transition whitespace-nowrap">
				<?php esc_html_e('Contact Us', 'kidazzle'); ?>
			</a>
		</div>
	</div>
</div>

<?php get_footer(); ?>