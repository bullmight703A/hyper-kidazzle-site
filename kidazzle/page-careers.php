<?php
/**
 * Template Name: Careers Page
 *
 * @package Kidazzle_Theme
 */

get_header();
?>

<!-- 7. CAREERS VIEW -->
<div id="view-careers" class="view-section active">
	<div class="bg-slate-900 py-20 text-white text-center">
		<h1 class="text-5xl font-extrabold mb-4">Join Our Team</h1>
		<p class="text-xl text-slate-300">Help us shape the future, one child at a time.</p>
	</div>
	<div class="container mx-auto px-4 py-16">
		<div class="max-w-4xl mx-auto space-y-8">
			<div
				class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200 flex flex-col md:flex-row justify-between items-center gap-4 hover:shadow-md transition">
				<div>
					<h3 class="text-xl font-bold text-slate-900">Lead Teacher (Pre-K)</h3>
					<div class="flex gap-4 text-sm text-slate-500 mt-1">
						<span class="flex items-center gap-1"><i data-lucide="map-pin" class="w-3 h-3"></i> Atlanta,
							GA</span>
						<span class="flex items-center gap-1"><i data-lucide="clock" class="w-3 h-3"></i> Full
							Time</span>
					</div>
				</div>
				<button onclick="openContactModal()"
					class="bg-cyan-600 text-white px-6 py-2 rounded-lg font-bold hover:bg-cyan-700 transition">Apply
					Now</button>
			</div>
			<div
				class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200 flex flex-col md:flex-row justify-between items-center gap-4 hover:shadow-md transition">
				<div>
					<h3 class="text-xl font-bold text-slate-900">Center Director</h3>
					<div class="flex gap-4 text-sm text-slate-500 mt-1">
						<span class="flex items-center gap-1"><i data-lucide="map-pin" class="w-3 h-3"></i> Hampton,
							GA</span>
						<span class="flex items-center gap-1"><i data-lucide="clock" class="w-3 h-3"></i> Full
							Time</span>
					</div>
				</div>
				<button onclick="openContactModal()"
					class="bg-cyan-600 text-white px-6 py-2 rounded-lg font-bold hover:bg-cyan-700 transition">Apply
					Now</button>
			</div>
			<div
				class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200 flex flex-col md:flex-row justify-between items-center gap-4 hover:shadow-md transition">
				<div>
					<h3 class="text-xl font-bold text-slate-900">Nutrition Specialist</h3>
					<div class="flex gap-4 text-sm text-slate-500 mt-1">
						<span class="flex items-center gap-1"><i data-lucide="map-pin" class="w-3 h-3"></i> Doral,
							FL</span>
						<span class="flex items-center gap-1"><i data-lucide="clock" class="w-3 h-3"></i> Full
							Time</span>
					</div>
				</div>
				<button onclick="openContactModal()"
					class="bg-cyan-600 text-white px-6 py-2 rounded-lg font-bold hover:bg-cyan-700 transition">Apply
					Now</button>
			</div>

			<div class="bg-slate-50 p-8 rounded-3xl text-center mt-12">
				<h3 class="text-2xl font-bold text-slate-900 mb-4">Don't see your role?</h3>
				<p class="text-slate-600 mb-6">We are always looking for passionate educators. Submit your resume to our
					general pool.</p>
				<button onclick="openContactModal()"
					class="bg-slate-900 text-white px-8 py-3 rounded-xl font-bold">Submit General Application</button>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
