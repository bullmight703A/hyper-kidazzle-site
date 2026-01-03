<?php
/**
 * Template Name: Curriculum Page
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
		<img src="https://images.unsplash.com/photo-1544725176-7c40e5a71c5e?ixlib=rb-4.0.3&auto=format&fit=crop&w=3840&q=100"
			alt="<?php esc_attr_e('Teacher reading', 'kidazzle'); ?>"
			class="w-full h-full object-cover transition duration-[3000ms] group-hover:scale-105 opacity-60">
		<div class="absolute inset-0 bg-gradient-to-t from-cyan-900/80 via-cyan-900/40 to-transparent"></div>
	</div>

	<div class="absolute inset-0 z-10 flex flex-col justify-center items-center text-center p-8 md:p-16">
		<div
			class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md border border-white/20 text-white px-4 py-2 rounded-full mb-6">
			<i data-lucide="brain" class="w-4 h-4 text-cyan-300"></i>
			<span
				class="font-bold text-xs uppercase tracking-widest"><?php esc_html_e('Research-Based Learning', 'kidazzle'); ?></span>
		</div>
		<h1 class="text-5xl md:text-7xl font-extrabold text-white mb-6 drop-shadow-xl tracking-tight">
			<?php esc_html_e('Our', 'kidazzle'); ?> <span
				class="text-cyan-400"><?php esc_html_e('Educational', 'kidazzle'); ?></span>
			<?php esc_html_e('Approach', 'kidazzle'); ?>
		</h1>
		<p class="text-lg md:text-2xl text-white/90 font-medium max-w-3xl leading-relaxed drop-shadow-md">
			<?php esc_html_e('State-aligned, and environment-focused for every stage of development.', 'kidazzle'); ?>
		</p>
	</div>
</div>

<div class="grid md:grid-cols-2 gap-6 items-stretch mt-6">
	<div class="bg-white rounded-[3rem] p-10 md:p-16 border border-slate-200 flex flex-col justify-center">
		<span
			class="text-cyan-600 font-bold uppercase tracking-widest text-sm mb-4 block"><?php esc_html_e('The Foundation', 'kidazzle'); ?></span>
		<h2 class="text-4xl font-extrabold text-slate-900 mb-6 leading-tight">
			<?php esc_html_e('Creative Curriculum®', 'kidazzle'); ?> <br><span
				class="text-slate-400 text-2xl"><?php esc_html_e('(Infant - 3 Years)', 'kidazzle'); ?></span></h2>
		<div class="space-y-6 text-lg text-slate-600 leading-relaxed font-medium">
			<p><?php esc_html_e('For our youngest learners, we utilize the nationally recognized', 'kidazzle'); ?>
				<strong><?php esc_html_e('Creative Curriculum®', 'kidazzle'); ?></strong>.
				<?php esc_html_e('This research-based framework focuses on the vital connection between caregiver and child, turning everyday moments into learning opportunities.', 'kidazzle'); ?>
			</p>
			<p><?php esc_html_e('We balance teacher-directed instruction with child-initiated exploration to support', 'kidazzle'); ?>
				<strong><?php esc_html_e('Social-Emotional, Physical, Language, and Cognitive', 'kidazzle'); ?></strong>
				<?php esc_html_e('domains.', 'kidazzle'); ?></p>
		</div>
	</div>

	<div
		class="bg-cyan-50 rounded-[3rem] p-10 md:p-16 border border-cyan-100 flex flex-col justify-center relative overflow-hidden">
		<div class="absolute top-0 right-0 w-64 h-64 bg-cyan-100 rounded-bl-[150px] opacity-50"></div>
		<h3 class="text-2xl font-bold text-cyan-900 mb-8 relative z-10"><?php esc_html_e('Why It Works', 'kidazzle'); ?>
		</h3>
		<ul class="space-y-6 relative z-10">
			<li class="flex items-start gap-4 p-4 bg-white rounded-2xl shadow-sm">
				<div class="text-green-500 bg-green-50 p-2 rounded-full"><i data-lucide="smile" class="w-6 h-6"></i>
				</div>
				<div>
					<strong
						class="block text-slate-900 text-lg"><?php esc_html_e('Individualized Care', 'kidazzle'); ?></strong>
					<span
						class="text-slate-600"><?php esc_html_e("Teachers adapt lessons to fit each child's unique temperament and pace.", 'kidazzle'); ?></span>
				</div>
			</li>
			<li class="flex items-start gap-4 p-4 bg-white rounded-2xl shadow-sm">
				<div class="text-orange-500 bg-orange-50 p-2 rounded-full"><i data-lucide="activity"
						class="w-6 h-6"></i></div>
				<div>
					<strong
						class="block text-slate-900 text-lg"><?php esc_html_e('Active Learning', 'kidazzle'); ?></strong>
					<span
						class="text-slate-600"><?php esc_html_e('Children learn by doing—touching, moving, and interacting with their world.', 'kidazzle'); ?></span>
				</div>
			</li>
		</ul>
	</div>
</div>

<div class="text-center pt-16 pb-8">
	<h2 class="text-4xl font-extrabold text-slate-900"><?php esc_html_e('State-Specific Excellence', 'kidazzle'); ?>
	</h2>
	<p class="text-slate-500 mt-2 max-w-2xl mx-auto">
		<?php esc_html_e('Aligned with the highest standards in every state we serve.', 'kidazzle'); ?></p>
</div>

<div class="grid md:grid-cols-3 gap-6">
	<a href="<?php echo esc_url(home_url('/programs/georgia-pre-k/')); ?>"
		class="module-card bg-white p-10 rounded-[2.5rem] border border-slate-100 flex flex-col h-full group">
		<div
			class="w-16 h-16 bg-orange-50 rounded-2xl flex items-center justify-center mb-6 text-4xl group-hover:scale-110 transition">
			🍑</div>
		<h3 class="text-2xl font-bold text-slate-900 mb-2 group-hover:text-orange-600 transition">
			<?php esc_html_e('Georgia Pre-K', 'kidazzle'); ?></h3>
		<p class="text-xs font-bold text-orange-600 mb-6 uppercase tracking-wide">
			<?php esc_html_e('Frog Street & GELDS', 'kidazzle'); ?></p>
		<p class="text-slate-600 leading-relaxed mb-6 flex-grow">
			<?php esc_html_e('Our Lottery Funded Pre-K program utilizes', 'kidazzle'); ?>
			<strong><?php esc_html_e('Frog Street', 'kidazzle'); ?></strong>,
			<?php esc_html_e('aligned with GELDS standards for joyful, rigorous kindergarten readiness.', 'kidazzle'); ?>
		</p>
		<div class="text-orange-500 font-bold text-sm flex items-center gap-2 group-hover:gap-3 transition-all">
			<?php esc_html_e('View GA Program', 'kidazzle'); ?> <i data-lucide="arrow-right" class="w-4 h-4"></i></div>
	</a>

	<a href="<?php echo esc_url(home_url('/programs/tennessee-programs/')); ?>"
		class="module-card bg-white p-10 rounded-[2.5rem] border border-slate-100 flex flex-col h-full group">
		<div
			class="w-16 h-16 bg-indigo-50 rounded-2xl flex items-center justify-center mb-6 text-4xl group-hover:scale-110 transition">
			🎸</div>
		<h3 class="text-2xl font-bold text-slate-900 mb-2 group-hover:text-indigo-600 transition">
			<?php esc_html_e('Tennessee', 'kidazzle'); ?></h3>
		<p class="text-xs font-bold text-indigo-600 mb-6 uppercase tracking-wide">
			<?php esc_html_e('TN-ELDS Aligned', 'kidazzle'); ?></p>
		<p class="text-slate-600 leading-relaxed mb-6 flex-grow">
			<?php esc_html_e('In Memphis, our curriculum adheres to the', 'kidazzle'); ?>
			<strong><?php esc_html_e('TN-ELDS', 'kidazzle'); ?></strong>,
			<?php esc_html_e('ensuring educational goals are met from birth to age 5.', 'kidazzle'); ?>
		</p>
		<div class="text-indigo-500 font-bold text-sm flex items-center gap-2 group-hover:gap-3 transition-all">
			<?php esc_html_e('View TN Program', 'kidazzle'); ?> <i data-lucide="arrow-right" class="w-4 h-4"></i></div>
	</a>

	<a href="<?php echo esc_url(home_url('/programs/florida-vpk/')); ?>"
		class="module-card bg-white p-10 rounded-[2.5rem] border border-slate-100 flex flex-col h-full group">
		<div
			class="w-16 h-16 bg-cyan-50 rounded-2xl flex items-center justify-center mb-6 text-4xl group-hover:scale-110 transition">
			☀️</div>
		<h3 class="text-2xl font-bold text-slate-900 mb-2 group-hover:text-cyan-600 transition">
			<?php esc_html_e('Florida VPK', 'kidazzle'); ?></h3>
		<p class="text-xs font-bold text-cyan-600 mb-6 uppercase tracking-wide">
			<?php esc_html_e('OWL & ASQ', 'kidazzle'); ?></p>
		<p class="text-slate-600 leading-relaxed mb-6 flex-grow">
			<?php esc_html_e('Incorporating', 'kidazzle'); ?> <strong><?php esc_html_e('OWL', 'kidazzle'); ?></strong>
			<?php esc_html_e('and', 'kidazzle'); ?> <strong><?php esc_html_e('ASQ', 'kidazzle'); ?></strong>
			<?php esc_html_e("to meet Florida's VPK standards with a focus on literacy and bilingual support.", 'kidazzle'); ?>
		</p>
		<div class="text-cyan-500 font-bold text-sm flex items-center gap-2 group-hover:gap-3 transition-all">
			<?php esc_html_e('View FL Program', 'kidazzle'); ?> <i data-lucide="arrow-right" class="w-4 h-4"></i></div>
	</a>
</div>

<div class="bg-white rounded-[3rem] p-10 md:p-16 border border-slate-200 mt-8 text-center">
	<h2 class="text-3xl font-bold text-slate-900 mb-4"><?php esc_html_e('The Environment as a Teacher', 'kidazzle'); ?>
	</h2>
	<p class="text-lg text-slate-600 mb-10 leading-relaxed max-w-4xl mx-auto">
		<?php esc_html_e('We adhere to rigorous environmental rating scales (ITERS/ECERS) to ensure our classrooms are not just safe, but optimally designed for learning. Every corner, toy, and routine is intentional.', 'kidazzle'); ?>
	</p>

	<div class="grid md:grid-cols-2 gap-6 max-w-4xl mx-auto">
		<a href="<?php echo esc_url(home_url('/environment-rating-scales/')); ?>"
			class="module-card flex items-center gap-6 p-6 rounded-[2.5rem] border border-red-100 bg-red-50/50 hover:bg-white text-left group">
			<div class="w-24 h-24 rounded-2xl overflow-hidden flex-shrink-0 border-2 border-white shadow-sm">
				<img src="https://images.unsplash.com/photo-1519689680058-324335c77eba?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80"
					alt="<?php esc_attr_e('Infant Care', 'kidazzle'); ?>" class="w-full h-full object-cover">
			</div>
			<div>
				<h4 class="font-bold text-red-900 text-xl">ITERS</h4>
				<p class="text-sm text-red-700 mb-2"><?php esc_html_e('Infant/Toddler Rating Scale', 'kidazzle'); ?></p>
				<span
					class="text-xs font-bold text-red-500 flex items-center gap-1 group-hover:gap-2 transition-all"><?php esc_html_e('Learn More', 'kidazzle'); ?>
					<i data-lucide="arrow-right" class="w-3 h-3"></i></span>
			</div>
		</a>

		<a href="<?php echo esc_url(home_url('/environment-rating-scales/')); ?>"
			class="module-card flex items-center gap-6 p-6 rounded-[2.5rem] border border-green-100 bg-green-50/50 hover:bg-white text-left group">
			<div class="w-24 h-24 rounded-2xl overflow-hidden flex-shrink-0 border-2 border-white shadow-sm">
				<img src="https://images.unsplash.com/photo-1503454537195-1dcabb73ffb9?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80"
					alt="<?php esc_attr_e('Preschool Learning', 'kidazzle'); ?>" class="w-full h-full object-cover">
			</div>
			<div>
				<h4 class="font-bold text-green-900 text-xl">ECERS</h4>
				<p class="text-sm text-green-700 mb-2"><?php esc_html_e('Early Childhood Rating Scale', 'kidazzle'); ?>
				</p>
				<span
					class="text-xs font-bold text-green-500 flex items-center gap-1 group-hover:gap-2 transition-all"><?php esc_html_e('Learn More', 'kidazzle'); ?>
					<i data-lucide="arrow-right" class="w-3 h-3"></i></span>
			</div>
		</a>
	</div>
</div>

<div class="bg-slate-900 rounded-[3rem] p-10 md:p-16 text-white relative overflow-hidden mt-8">
	<div class="absolute top-0 right-0 w-96 h-96 bg-cyan-500 rounded-full blur-[150px] opacity-20"></div>

	<div class="relative z-10 flex flex-col md:flex-row items-center gap-12">
		<div class="md:w-1/3 flex justify-center">
			<div class="bg-white/10 p-8 rounded-[2.5rem] border border-white/20 backdrop-blur-sm shadow-2xl">
				<i data-lucide="cpu" class="w-24 h-24 text-cyan-400"></i>
			</div>
		</div>
		<div class="md:w-2/3 text-center md:text-left">
			<span
				class="text-cyan-400 font-bold uppercase tracking-widest text-sm mb-2 block"><?php esc_html_e('Future-Ready Learning', 'kidazzle'); ?></span>
			<h2 class="text-3xl md:text-4xl font-extrabold mb-6">
				<?php esc_html_e('AI-Powered Lesson Planning', 'kidazzle'); ?></h2>
			<div class="text-indigo-100 text-lg leading-relaxed mb-8">
				<?php esc_html_e('KIDazzle innovates by integrating an', 'kidazzle'); ?>
				<strong><?php esc_html_e('AI Lesson Plan Bot', 'kidazzle'); ?></strong>
				<?php esc_html_e('into our teacher resources. This tool helps educators instantly tailor the Creative Curriculum® to the specific needs of their current classroom, generating creative, standards-aligned activities in seconds.', 'kidazzle'); ?>
			</div>
			<a href="<?php echo esc_url(get_post_type_archive_link('location')); ?>"
				class="bg-cyan-500 text-white px-8 py-4 rounded-full font-bold hover:bg-cyan-400 transition inline-block shadow-lg hover:shadow-cyan-500/50">
				<?php esc_html_e('Schedule a Tour', 'kidazzle'); ?>
			</a>
		</div>
	</div>
</div>

<div
	class="bg-gradient-to-br from-[#4c1d95] to-[#c026d3] rounded-[3rem] p-10 md:p-14 text-white shadow-2xl relative overflow-hidden mt-8">
	<div class="relative z-10 flex flex-col md:flex-row items-center justify-between gap-8">
		<div class="text-left max-w-2xl">
			<h3 class="text-3xl md:text-4xl font-extrabold mb-3">
				<?php esc_html_e('Ready to see it in action?', 'kidazzle'); ?></h3>
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
				<?php esc_html_e('Apply Now', 'kidazzle'); ?>
			</a>
		</div>
	</div>
</div>

<?php get_footer(); ?>