<?php
/**
 * Template Name: Locations Page
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
		<img src="https://storage.googleapis.com/msgsndr/ZR2UvxPL2wlZNSvHjmJD/media/694486b75b256bd1ddbe6e9d.png"
			alt="<?php esc_attr_e('Map and Community', 'kidazzle'); ?>"
			class="w-full h-full object-cover transition duration-[3000ms] group-hover:scale-105 opacity-60">
		<div class="absolute inset-0 bg-gradient-to-t from-green-900/80 via-green-900/40 to-transparent"></div>
	</div>

	<div class="absolute inset-0 z-10 flex flex-col justify-center items-center text-center p-8 md:p-16">
		<div
			class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md border border-white/20 text-white px-4 py-2 rounded-full mb-6">
			<span class="w-2 h-2 rounded-full bg-green-400 animate-pulse"></span>
			<span
				class="font-bold text-xs uppercase tracking-widest"><?php esc_html_e('7 Centers & Growing', 'kidazzle'); ?></span>
		</div>
		<h1 class="text-5xl md:text-7xl font-extrabold text-white mb-6 drop-shadow-xl tracking-tight">
			<?php esc_html_e('Our', 'kidazzle'); ?> <span
				class="text-green-400"><?php esc_html_e('Locations', 'kidazzle'); ?></span>
		</h1>
		<p class="text-lg md:text-2xl text-white/90 font-medium max-w-3xl leading-relaxed drop-shadow-md">
			<?php esc_html_e('Find a KIDazzle center near you in Georgia, Tennessee, or Florida.', 'kidazzle'); ?>
		</p>
	</div>
</div>

<!-- Quick Links Grid -->
<div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-6">
	<a href="<?php echo esc_url(home_url('/programs/')); ?>"
		class="bg-white p-6 rounded-[2rem] border border-slate-200 hover:border-red-200 hover:shadow-lg transition text-center group">
		<div class="text-red-500 font-bold mb-1 group-hover:scale-110 transition-transform">
			<?php esc_html_e('Infants', 'kidazzle'); ?></div>
		<div class="text-xs text-slate-400 uppercase font-bold"><?php esc_html_e('6w - 12m', 'kidazzle'); ?></div>
	</a>
	<a href="<?php echo esc_url(home_url('/programs/')); ?>"
		class="bg-white p-6 rounded-[2rem] border border-slate-200 hover:border-orange-200 hover:shadow-lg transition text-center group">
		<div class="text-orange-500 font-bold mb-1 group-hover:scale-110 transition-transform">
			<?php esc_html_e('Toddlers', 'kidazzle'); ?></div>
		<div class="text-xs text-slate-400 uppercase font-bold"><?php esc_html_e('12m - 24m', 'kidazzle'); ?></div>
	</a>
	<a href="<?php echo esc_url(home_url('/programs/')); ?>"
		class="bg-white p-6 rounded-[2rem] border border-slate-200 hover:border-yellow-200 hover:shadow-lg transition text-center group">
		<div class="text-yellow-500 font-bold mb-1 group-hover:scale-110 transition-transform">
			<?php esc_html_e('Preschool', 'kidazzle'); ?></div>
		<div class="text-xs text-slate-400 uppercase font-bold"><?php esc_html_e('2y - 4y', 'kidazzle'); ?></div>
	</a>
	<a href="<?php echo esc_url(home_url('/programs/')); ?>"
		class="bg-white p-6 rounded-[2rem] border border-slate-200 hover:border-green-200 hover:shadow-lg transition text-center group">
		<div class="text-green-600 font-bold mb-1 group-hover:scale-110 transition-transform">
			<?php esc_html_e('Pre-K / VPK', 'kidazzle'); ?></div>
		<div class="text-xs text-slate-400 uppercase font-bold"><?php esc_html_e('4y - 5y', 'kidazzle'); ?></div>
	</a>
</div>

<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 pt-4">

	<!-- West End Center -->
	<div class="module-card bg-white rounded-[2.5rem] overflow-hidden border border-slate-200 flex flex-col group">
		<div class="h-64 relative overflow-hidden">
			<img src="https://storage.googleapis.com/msgsndr/ZR2UvxPL2wlZNSvHjmJD/media/694489509b0de40cdd3adafb.png"
				class="absolute inset-0 w-full h-full object-cover transition duration-700 group-hover:scale-110"
				alt="<?php esc_attr_e('West End Atlanta', 'kidazzle'); ?>">
			<div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent"></div>
			<div class="absolute bottom-4 left-6">
				<span
					class="bg-white/90 backdrop-blur text-slate-900 px-3 py-1 rounded-full text-xs font-bold mb-1 inline-block"><?php esc_html_e('Atlanta, GA', 'kidazzle'); ?></span>
			</div>
		</div>
		<div class="p-8 flex flex-col flex-grow">
			<h3 class="text-2xl font-bold text-slate-900 mb-2"><?php esc_html_e('West End Center', 'kidazzle'); ?></h3>
			<p class="text-slate-500 mb-4 text-sm flex items-start gap-2"><i data-lucide="map-pin"
					class="w-4 h-4 mt-0.5 text-red-500 shrink-0"></i> <?php esc_html_e('831 York Ave', 'kidazzle'); ?>
			</p>
			<p class="text-slate-600 mb-6 flex-grow text-sm leading-relaxed">
				<?php esc_html_e('Historic district location offering quality rated child care with a unique focus on community arts.', 'kidazzle'); ?>
			</p>
			<div class="flex flex-wrap gap-2 mb-8">
				<span
					class="bg-green-50 text-green-700 text-xs px-3 py-1 rounded-full font-bold uppercase border border-green-100"><?php esc_html_e('Arts Focus', 'kidazzle'); ?></span>
				<span
					class="bg-slate-50 text-slate-600 text-xs px-3 py-1 rounded-full font-bold uppercase border border-slate-100"><?php esc_html_e('Historic', 'kidazzle'); ?></span>
			</div>
			<a href="<?php echo esc_url(home_url('/locations/west-end/')); ?>"
				class="w-full block bg-slate-900 text-white text-center font-bold py-3 rounded-xl hover:bg-green-500 transition shadow-md"><?php esc_html_e('View Details', 'kidazzle'); ?></a>
		</div>
	</div>

	<!-- IRS Summit -->
	<div class="module-card bg-white rounded-[2.5rem] overflow-hidden border border-slate-200 flex flex-col group">
		<div class="h-64 relative overflow-hidden">
			<img src="https://storage.googleapis.com/msgsndr/ZR2UvxPL2wlZNSvHjmJD/media/69448aa74d191697026731fb.png"
				class="absolute inset-0 w-full h-full object-cover transition duration-700 group-hover:scale-110"
				alt="<?php esc_attr_e('IRS Summit', 'kidazzle'); ?>">
			<div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent"></div>
			<div class="absolute bottom-4 left-6">
				<span
					class="bg-white/90 backdrop-blur text-slate-900 px-3 py-1 rounded-full text-xs font-bold mb-1 inline-block"><?php esc_html_e('Midtown Atlanta', 'kidazzle'); ?></span>
			</div>
		</div>
		<div class="p-8 flex flex-col flex-grow">
			<h3 class="text-2xl font-bold text-slate-900 mb-2"><?php esc_html_e('IRS Summit', 'kidazzle'); ?></h3>
			<p class="text-slate-500 mb-4 text-sm flex items-start gap-2"><i data-lucide="map-pin"
					class="w-4 h-4 mt-0.5 text-red-500 shrink-0"></i>
				<?php esc_html_e('401 W Peachtree St NW', 'kidazzle'); ?></p>
			<p class="text-slate-600 mb-6 flex-grow text-sm leading-relaxed">
				<?php esc_html_e('Convenient bilingual care for federal employees and midtown professionals. Kiss & Go drop-off available.', 'kidazzle'); ?>
			</p>
			<div class="flex flex-wrap gap-2 mb-8">
				<span
					class="bg-blue-50 text-blue-700 text-xs px-3 py-1 rounded-full font-bold uppercase border border-blue-100"><?php esc_html_e('Bilingual', 'kidazzle'); ?></span>
				<span
					class="bg-slate-50 text-slate-600 text-xs px-3 py-1 rounded-full font-bold uppercase border border-slate-100"><?php esc_html_e('Federal', 'kidazzle'); ?></span>
			</div>
			<a href="<?php echo esc_url(home_url('/locations/irs-summit/')); ?>"
				class="w-full block bg-slate-900 text-white text-center font-bold py-3 rounded-xl hover:bg-green-500 transition shadow-md"><?php esc_html_e('View Details', 'kidazzle'); ?></a>
		</div>
	</div>

	<!-- Downtown Memphis -->
	<div class="module-card bg-white rounded-[2.5rem] overflow-hidden border border-slate-200 flex flex-col group">
		<div class="h-64 relative overflow-hidden">
			<img src="https://storage.googleapis.com/msgsndr/ZR2UvxPL2wlZNSvHjmJD/media/69448a0de7887060a542e4ae.png"
				class="absolute inset-0 w-full h-full object-cover transition duration-700 group-hover:scale-110"
				alt="<?php esc_attr_e('Memphis', 'kidazzle'); ?>">
			<div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent"></div>
			<div class="absolute bottom-4 left-6">
				<span
					class="bg-white/90 backdrop-blur text-slate-900 px-3 py-1 rounded-full text-xs font-bold mb-1 inline-block"><?php esc_html_e('Memphis, TN', 'kidazzle'); ?></span>
			</div>
		</div>
		<div class="p-8 flex flex-col flex-grow">
			<h3 class="text-2xl font-bold text-slate-900 mb-2"><?php esc_html_e('Downtown Memphis', 'kidazzle'); ?></h3>
			<p class="text-slate-500 mb-4 text-sm flex items-start gap-2"><i data-lucide="map-pin"
					class="w-4 h-4 mt-0.5 text-red-500 shrink-0"></i>
				<?php esc_html_e('3194 Independent Rd', 'kidazzle'); ?></p>
			<p class="text-slate-600 mb-6 flex-grow text-sm leading-relaxed">
				<?php esc_html_e('Soul, rhythm, and rigor located near the FedEx Hub with extended hours for working families.', 'kidazzle'); ?>
			</p>
			<div class="flex flex-wrap gap-2 mb-8">
				<span
					class="bg-indigo-50 text-indigo-700 text-xs px-3 py-1 rounded-full font-bold uppercase border border-indigo-100"><?php esc_html_e('FedEx Hub', 'kidazzle'); ?></span>
				<span
					class="bg-slate-50 text-slate-600 text-xs px-3 py-1 rounded-full font-bold uppercase border border-slate-100"><?php esc_html_e('Music', 'kidazzle'); ?></span>
			</div>
			<a href="<?php echo esc_url(home_url('/locations/memphis/')); ?>"
				class="w-full block bg-slate-900 text-white text-center font-bold py-3 rounded-xl hover:bg-green-500 transition shadow-md"><?php esc_html_e('View Details', 'kidazzle'); ?></a>
		</div>
	</div>

	<!-- Doral International -->
	<div class="module-card bg-white rounded-[2.5rem] overflow-hidden border border-slate-200 flex flex-col group">
		<div class="h-64 relative overflow-hidden">
			<img src="https://images.unsplash.com/photo-1535498730771-e735b998cd64?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
				class="absolute inset-0 w-full h-full object-cover transition duration-700 group-hover:scale-110"
				alt="<?php esc_attr_e('Doral', 'kidazzle'); ?>">
			<div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent"></div>
			<div class="absolute bottom-4 left-6">
				<span
					class="bg-white/90 backdrop-blur text-slate-900 px-3 py-1 rounded-full text-xs font-bold mb-1 inline-block"><?php esc_html_e('Doral, FL', 'kidazzle'); ?></span>
			</div>
		</div>
		<div class="p-8 flex flex-col flex-grow">
			<h3 class="text-2xl font-bold text-slate-900 mb-2"><?php esc_html_e('Doral International', 'kidazzle'); ?>
			</h3>
			<p class="text-slate-500 mb-4 text-sm flex items-start gap-2"><i data-lucide="map-pin"
					class="w-4 h-4 mt-0.5 text-red-500 shrink-0"></i>
				<?php esc_html_e('7500 Northwest 58th St', 'kidazzle'); ?></p>
			<p class="text-slate-600 mb-6 flex-grow text-sm leading-relaxed">
				<?php esc_html_e('Bilingual Spanish immersion program blending sunshine with STEM education.', 'kidazzle'); ?>
			</p>
			<div class="flex flex-wrap gap-2 mb-8">
				<span
					class="bg-yellow-50 text-yellow-700 text-xs px-3 py-1 rounded-full font-bold uppercase border border-yellow-100"><?php esc_html_e('Spanish', 'kidazzle'); ?></span>
				<span
					class="bg-cyan-50 text-cyan-600 text-xs px-3 py-1 rounded-full font-bold uppercase border border-cyan-100"><?php esc_html_e('STEM Lab', 'kidazzle'); ?></span>
			</div>
			<a href="<?php echo esc_url(home_url('/locations/miami/')); ?>"
				class="w-full block bg-slate-900 text-white text-center font-bold py-3 rounded-xl hover:bg-green-500 transition shadow-md"><?php esc_html_e('View Details', 'kidazzle'); ?></a>
		</div>
	</div>

	<!-- Atlanta Federal Center -->
	<div class="module-card bg-white rounded-[2.5rem] overflow-hidden border border-slate-200 flex flex-col group">
		<div class="h-64 relative overflow-hidden">
			<img src="https://images.unsplash.com/photo-1477959858617-67f85cf4f1df?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
				class="absolute inset-0 w-full h-full object-cover transition duration-700 group-hover:scale-110"
				alt="<?php esc_attr_e('Atlanta Downtown', 'kidazzle'); ?>">
			<div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent"></div>
			<div class="absolute bottom-4 left-6">
				<span
					class="bg-white/90 backdrop-blur text-slate-900 px-3 py-1 rounded-full text-xs font-bold mb-1 inline-block"><?php esc_html_e('Downtown Atlanta', 'kidazzle'); ?></span>
			</div>
		</div>
		<div class="p-8 flex flex-col flex-grow">
			<h3 class="text-2xl font-bold text-slate-900 mb-2">
				<?php esc_html_e('Atlanta Federal Center', 'kidazzle'); ?></h3>
			<p class="text-slate-500 mb-4 text-sm flex items-start gap-2"><i data-lucide="map-pin"
					class="w-4 h-4 mt-0.5 text-red-500 shrink-0"></i>
				<?php esc_html_e('61 Forsyth St SW', 'kidazzle'); ?></p>
			<p class="text-slate-600 mb-6 flex-grow text-sm leading-relaxed">
				<?php esc_html_e('A secure downtown oasis for federal families featuring Toddler Discovery and GA Pre-K.', 'kidazzle'); ?>
			</p>
			<div class="flex flex-wrap gap-2 mb-8">
				<span
					class="bg-blue-50 text-blue-700 text-xs px-3 py-1 rounded-full font-bold uppercase border border-blue-100"><?php esc_html_e('Secure', 'kidazzle'); ?></span>
				<span
					class="bg-green-50 text-green-700 text-xs px-3 py-1 rounded-full font-bold uppercase border border-green-100"><?php esc_html_e('GA Pre-K', 'kidazzle'); ?></span>
			</div>
			<a href="<?php echo esc_url(home_url('/locations/afc/')); ?>"
				class="w-full block bg-slate-900 text-white text-center font-bold py-3 rounded-xl hover:bg-green-500 transition shadow-md"><?php esc_html_e('View Details', 'kidazzle'); ?></a>
		</div>
	</div>

	<!-- College Park -->
	<div class="module-card bg-white rounded-[2.5rem] overflow-hidden border border-slate-200 flex flex-col group">
		<div class="h-64 relative overflow-hidden">
			<img src="https://storage.googleapis.com/msgsndr/ZR2UvxPL2wlZNSvHjmJD/media/694489ba4d1916e65f671511.png"
				class="absolute inset-0 w-full h-full object-cover transition duration-700 group-hover:scale-110"
				alt="<?php esc_attr_e('College Park', 'kidazzle'); ?>">
			<div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent"></div>
			<div class="absolute bottom-4 left-6">
				<span
					class="bg-white/90 backdrop-blur text-slate-900 px-3 py-1 rounded-full text-xs font-bold mb-1 inline-block"><?php esc_html_e('College Park, GA', 'kidazzle'); ?></span>
			</div>
		</div>
		<div class="p-8 flex flex-col flex-grow">
			<h3 class="text-2xl font-bold text-slate-900 mb-2"><?php esc_html_e('College Park', 'kidazzle'); ?></h3>
			<p class="text-slate-500 mb-4 text-sm flex items-start gap-2"><i data-lucide="map-pin"
					class="w-4 h-4 mt-0.5 text-red-500 shrink-0"></i>
				<?php esc_html_e('1701 Columbia Ave', 'kidazzle'); ?></p>
			<p class="text-slate-600 mb-6 flex-grow text-sm leading-relaxed">
				<?php esc_html_e('Serving tri-cities families near the airport with a focus on STEAM education and transportation.', 'kidazzle'); ?>
			</p>
			<div class="flex flex-wrap gap-2 mb-8">
				<span
					class="bg-cyan-50 text-cyan-700 text-xs px-3 py-1 rounded-full font-bold uppercase border border-cyan-100"><?php esc_html_e('STEAM', 'kidazzle'); ?></span>
				<span
					class="bg-slate-50 text-slate-600 text-xs px-3 py-1 rounded-full font-bold uppercase border border-slate-100"><?php esc_html_e('Airport', 'kidazzle'); ?></span>
			</div>
			<a href="<?php echo esc_url(home_url('/locations/college-park/')); ?>"
				class="w-full block bg-slate-900 text-white text-center font-bold py-3 rounded-xl hover:bg-green-500 transition shadow-md"><?php esc_html_e('View Details', 'kidazzle'); ?></a>
		</div>
	</div>

	<!-- Hampton -->
	<div
		class="module-card bg-white rounded-[2.5rem] overflow-hidden border border-slate-200 flex flex-col group md:col-span-2 lg:col-span-1">
		<div class="h-64 relative overflow-hidden">
			<img src="https://storage.googleapis.com/msgsndr/ZR2UvxPL2wlZNSvHjmJD/media/69448aec9bd664979b723cdb.png"
				class="absolute inset-0 w-full h-full object-cover transition duration-700 group-hover:scale-110"
				alt="<?php esc_attr_e('Hampton', 'kidazzle'); ?>">
			<div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent"></div>
			<div class="absolute bottom-4 left-6">
				<span
					class="bg-white/90 backdrop-blur text-slate-900 px-3 py-1 rounded-full text-xs font-bold mb-1 inline-block"><?php esc_html_e('Hampton, GA', 'kidazzle'); ?></span>
			</div>
		</div>
		<div class="p-8 flex flex-col flex-grow">
			<h3 class="text-2xl font-bold text-slate-900 mb-2"><?php esc_html_e('Hampton', 'kidazzle'); ?></h3>
			<p class="text-slate-500 mb-4 text-sm flex items-start gap-2"><i data-lucide="map-pin"
					class="w-4 h-4 mt-0.5 text-red-500 shrink-0"></i> <?php esc_html_e('49 Woolsey Rd', 'kidazzle'); ?>
			</p>
			<p class="text-slate-600 mb-6 flex-grow text-sm leading-relaxed">
				<?php esc_html_e('Top-rated early childhood option in the McDonough area featuring a large playground and summer camp.', 'kidazzle'); ?>
			</p>
			<div class="flex flex-wrap gap-2 mb-8">
				<span
					class="bg-orange-50 text-orange-700 text-xs px-3 py-1 rounded-full font-bold uppercase border border-orange-100"><?php esc_html_e('School Ready', 'kidazzle'); ?></span>
				<span
					class="bg-green-50 text-green-700 text-xs px-3 py-1 rounded-full font-bold uppercase border border-green-100"><?php esc_html_e('Playground', 'kidazzle'); ?></span>
			</div>
			<a href="<?php echo esc_url(home_url('/locations/hampton/')); ?>"
				class="w-full block bg-slate-900 text-white text-center font-bold py-3 rounded-xl hover:bg-green-500 transition shadow-md"><?php esc_html_e('View Details', 'kidazzle'); ?></a>
		</div>
	</div>

</div>

<div
	class="bg-gradient-to-br from-[#4c1d95] to-[#c026d3] rounded-[3rem] p-10 md:p-14 text-white shadow-2xl relative overflow-hidden mt-12 mb-8">
	<div class="relative z-10 flex flex-col md:flex-row items-center justify-between gap-8">
		<div class="text-left max-w-2xl">
			<h3 class="text-3xl md:text-4xl font-extrabold mb-3"><?php esc_html_e("Can't decide?", 'kidazzle'); ?></h3>
			<p class="text-purple-100 text-lg">
				<?php esc_html_e('Schedule a tour at your nearest center and experience the KIDazzle difference in person.', 'kidazzle'); ?>
			</p>
		</div>
		<div class="flex flex-col sm:flex-row gap-4 shrink-0">
			<a href="<?php echo esc_url(home_url('/enrollment/')); ?>"
				class="bg-white text-purple-900 px-8 py-4 rounded-full font-bold hover:bg-yellow-400 hover:text-black transition shadow-lg whitespace-nowrap">
				<?php esc_html_e('Book a Tour', 'kidazzle'); ?>
			</a>
		</div>
	</div>
</div>

<?php get_footer(); ?>