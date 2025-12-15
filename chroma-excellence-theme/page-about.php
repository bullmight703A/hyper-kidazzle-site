<?php
/**
 * Template Name: About Custom
 * Description: Learn about KIDazzle Child Care's legacy, mission, and vision.
 */

get_header(); ?>

<!-- HERO SECTION -->
<div class="relative py-40 text-center overflow-hidden">
	<!-- Background Image: Little Black girl writing/learning -->
	<div class="absolute inset-0 z-0">
		<img src="https://images.unsplash.com/photo-1607513364712-42d06900f075?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80"
			alt="Little Black girl writing and learning" class="w-full h-full object-cover object-top">
		<!-- 40% Fade Overlay -->
		<div class="absolute inset-0 bg-black/40"></div>
	</div>

	<!-- Content -->
	<div class="relative z-10 container mx-auto px-4">
		<h1 class="text-5xl md:text-6xl font-extrabold text-white mb-6 drop-shadow-lg">Our Legacy</h1>
		<p class="text-xl md:text-2xl text-white max-w-3xl mx-auto font-medium drop-shadow-md">Three decades. Three
			states. One mission: To build a brighter future.</p>
	</div>
</div>

<!-- CONTENT -->
<div class="container mx-auto px-4 py-20 space-y-24">

	<!-- Programs Overview (New Section) -->
	<section>
		<div class="text-center mb-12">
			<h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-4">Programs Designed for Every Stage</h2>
			<p class="text-lg text-slate-600 max-w-2xl mx-auto">We offer comprehensive care tailored to the unique
				developmental needs of your child.</p>
		</div>
		<div class="grid md:grid-cols-3 gap-8">
			<!-- Infant Link -->
			<a href="<?php echo site_url('/infants'); ?>"
				class="group bg-white border border-slate-100 rounded-3xl p-8 shadow-sm hover:shadow-xl transition text-center">
				<div
					class="w-16 h-16 bg-red-50 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition text-4xl">
					👶</div>
				<h3 class="text-2xl font-bold text-slate-900 mb-2 group-hover:text-red-500 transition">Infants</h3>
				<p class="text-slate-500 text-sm mb-4">Nurturing care focusing on trust and sensory milestones (6 wks -
					12 mos).</p>
				<span class="text-red-500 font-bold text-sm flex items-center justify-center gap-1">Learn More <i
						data-lucide="arrow-right" class="w-4 h-4"></i></span>
			</a>

			<!-- Toddler Link -->
			<a href="<?php echo site_url('/toddlers'); ?>"
				class="group bg-white border border-slate-100 rounded-3xl p-8 shadow-sm hover:shadow-xl transition text-center">
				<div
					class="w-16 h-16 bg-orange-50 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition text-4xl">
					🧸</div>
				<h3 class="text-2xl font-bold text-slate-900 mb-2 group-hover:text-orange-500 transition">Toddlers</h3>
				<p class="text-slate-500 text-sm mb-4">Active exploration and vocabulary building in a safe environment
					(12 - 24 mos).</p>
				<span class="text-orange-500 font-bold text-sm flex items-center justify-center gap-1">Learn More <i
						data-lucide="arrow-right" class="w-4 h-4"></i></span>
			</a>

			<!-- Preschool Link -->
			<a href="<?php echo site_url('/preschool'); ?>"
				class="group bg-white border border-slate-100 rounded-3xl p-8 shadow-sm hover:shadow-xl transition text-center">
				<div
					class="w-16 h-16 bg-yellow-50 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition text-4xl">
					🎨</div>
				<h3 class="text-2xl font-bold text-slate-900 mb-2 group-hover:text-yellow-500 transition">Preschool</h3>
				<p class="text-slate-500 text-sm mb-4">Early academics and social skills preparing for school success (2
					- 3 yrs).</p>
				<span class="text-yellow-500 font-bold text-sm flex items-center justify-center gap-1">Learn More <i
						data-lucide="arrow-right" class="w-4 h-4"></i></span>
			</a>
		</div>
	</section>

	<!-- Our Story -->
	<section class="grid md:grid-cols-2 gap-16 items-center">
		<div>
			<span class="text-orange-500 font-bold tracking-widest uppercase text-sm mb-2 block">Since 1994</span>
			<h2 class="text-4xl font-extrabold text-slate-900 mb-8">From a Shelter to a Standard</h2>
			<div class="space-y-6 text-lg text-slate-600 leading-relaxed">
				<p>
					KIDazzle's journey began 31 years ago with a mission rooted in compassion and necessity. We started
					within the walls of a <strong>women's shelter</strong>, dedicated to providing a safe haven and
					educational foundation for families in transition. That spark of service ignited a movement.
				</p>
				<p>
					Driven by the belief that high-quality care is a right, not a privilege, we expanded purposefully
					into urban areas where elite early education was often out of reach. Today, whether in the heart of
					Atlanta, the soul of Memphis, or the vibrancy of Doral, our promise remains the same:
					<strong>high-quality child care anywhere we go</strong>.
				</p>
				<p>
					We are more than a daycare; we are a community institution always open to new opportunities to
					educate young minds and lift up the next generation.
				</p>
			</div>
		</div>
		<div class="h-[500px] bg-slate-200 rounded-[3rem] shadow-2xl overflow-hidden relative">
			<!-- Historic/Founder Image -->
			<img src="https://images.unsplash.com/photo-1571210862729-78a52d3779a2?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
				alt="Historic Photo" class="w-full h-full object-cover">
		</div>
	</section>

	<!-- Vision 2030 -->
	<section class="bg-slate-900 text-white rounded-[3rem] p-12 md:p-20 text-center relative overflow-hidden">
		<div class="relative z-10">
			<h2 class="text-3xl font-bold mb-4">Vision for the Future</h2>
			<p class="text-slate-300 max-w-3xl mx-auto mb-8">Continuing to bridge the gap between affordable care and
				elite education across the Southeast.</p>
			<div class="grid grid-cols-4 gap-4 border-t border-slate-700 pt-8 mb-8">
				<div>
					<div class="text-3xl font-bold text-yellow-400">31+</div>
					<div class="text-xs uppercase">Years</div>
				</div>
				<div>
					<div class="text-3xl font-bold text-red-500">10k+</div>
					<div class="text-xs uppercase">Students</div>
				</div>
				<div>
					<div class="text-3xl font-bold text-cyan-400">3</div>
					<div class="text-xs uppercase">States</div>
				</div>
				<div>
					<div class="text-3xl font-bold text-green-500">100%</div>
					<div class="text-xs uppercase">Quality</div>
				</div>
			</div>

			<!-- Embedded CTA -->
			<div
				class="bg-white/10 border-2 border-dashed border-white/20 rounded-xl p-8 max-w-xl mx-auto backdrop-blur-sm">
				<p class="text-slate-300 text-xs font-mono mb-4">Join Our Mission - Embed Form Here</p>
				<a href="<?php echo site_url('/enrollment'); ?>"
					class="bg-white text-slate-900 px-8 py-3 rounded-lg font-bold hover:bg-cyan-50 transition inline-block">Contact
					Leadership</a>
			</div>
		</div>
	</section>
</div>

<?php get_footer(); ?>