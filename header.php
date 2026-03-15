<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php // Canonical URL is handled by Yoast SEO or framework canonical enforcer ?>
	<!-- Google Fonts: Inter and Playfair Display for WIMPER -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&display=swap"
		rel="stylesheet">

	<!-- Favicon -->
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/images/logo_icon_80x80.png">

	<!-- FontAwesome & Lucide -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
	<script src="https://unpkg.com/lucide@latest"></script>

	<!-- Tier 3: Instant Navigation (Speculation Rules API) -->
	<script type="speculationrules">
	{
		"prerender": [
			{
				"source": "document",
				"where": {
					"and": [
						{ "href_matches": "/*" },
						{ "not": { "href_matches": "/wp-admin/*" } }
					]
				},
				"eagerness": "moderate"
			}
		]
	}
	</script>

	<?php
	// Get Customizer settings
	$header_phone = get_theme_mod('kidazzle_footer_phone', '877-410-1002'); // Reusing footer phone for consistency
	$header_cta_text = get_theme_mod('kidazzle_header_cta_text', 'Contact Us');
	$header_cta_url = get_theme_mod('kidazzle_book_tour_url', home_url('/contact'));
	$header_scripts = get_theme_mod('kidazzle_header_scripts', '');

	// Output header scripts if set
	if (!empty($header_scripts)) {
		echo $header_scripts;
	}

	wp_head();
	?>
	<style>
		/* Ensure header/footer hover colors work even if Tailwind JIT omitted them */
		.hover\:text-indigo-600:hover {
			color: #4f46e5 !important;
		}

		.hover\:text-orange-500:hover {
			color: #f97316 !important;
		}

		.hover\:text-red-500:hover {
			color: #ef4444 !important;
		}

		.hover\:text-cyan-500:hover {
			color: #06b6d4 !important;
		}

		.hover\:text-green-500:hover {
			color: #22c55e !important;
		}

		.hover\:text-purple-500:hover {
			color: #a855f7 !important;
		}

		.hover\:text-yellow-400:hover {
			color: #facc15 !important;
		}

		.hover\:text-cyan-600:hover {
			color: #0891b2 !important;
		}

		.hover\:text-orange-600:hover {
			color: #ea580c !important;
		}
	</style>
</head>


<body <?php body_class('font-sans text-brand-ink bg-white'); ?>>
	<?php wp_body_open(); ?>

	<!-- Skip Links for Accessibility -->
	<a href="#main-content"
		class="sr-only focus:not-sr-only focus:absolute focus:top-4 focus:left-4 bg-white text-kidazzle-blueDark p-4 z-[100] rounded-lg shadow-lg"><?php _e('Skip to content', 'kidazzle-theme'); ?></a>

	<!-- TOP UTILITY BAR -->
	<div
		class="bg-slate-50 text-slate-600 text-xs py-2 px-4 hidden md:flex justify-between items-center border-b border-slate-200">
		<div class="flex gap-4 items-center">
			<a href="/locations/" class="flex items-center gap-1 hover:text-cyan-600 transition"><i
					data-lucide="map-pin" class="w-3 h-3 text-red-500"></i> Serving GA, TN, & FL</a>
			<span class="flex items-center gap-1"><i data-lucide="phone" class="w-3 h-3 text-green-500"></i>
				877-410-1002</span>
			<a href="/acquisitions/"
				class="flex items-center gap-1 font-bold text-indigo-600 hover:underline transition"><i
					data-lucide="briefcase" class="w-3 h-3"></i> Acquisitions</a>
		</div>
		<div class="flex gap-6 font-medium">
			<a href="/careers/" class="hover:text-cyan-600 transition flex items-center gap-1">Careers</a>
			<a href="/teacher-portal/"
				class="hover:text-orange-600 transition flex items-center gap-1 font-bold text-orange-500"><i
					data-lucide="users" class="w-3 h-3"></i> Teacher Portal</a>
		</div>
	</div>

	<!-- TOURING ACTION BAR -->
	<div class="bg-kidazzle-red text-white py-3 px-4 shadow-md font-bold text-center text-sm tracking-wide hidden md:block">
		<span class="mr-3">🎉 Enrollment is open for the upcoming season!</span>
		<a href="/contact/" class="bg-white text-kidazzle-red px-4 py-1.5 rounded-full text-xs font-extrabold shadow-sm hover:bg-slate-100 transition whitespace-nowrap">Schedule A Tour</a>
	</div>

	<!-- MAIN NAVIGATION -->
	<nav class="sticky top-0 w-full z-40 bg-white py-4 shadow-sm border-b border-slate-100">
		<div class="container mx-auto px-4 flex justify-between items-center">
			<a href="/" class="flex items-center gap-2">
				<img src="https://storage.googleapis.com/msgsndr/ZR2UvxPL2wlZNSvHjmJD/media/64ef561bad8c716760dfd435.png"
					alt="KIDazzle Logo" class="h-20 md:h-24 w-auto object-contain py-1" style="max-height: 96px; width: auto;">
			</a>

			<button id="mobile-menu-btn" class="lg:hidden text-slate-900"><i data-lucide="menu"
					class="w-8 h-8"></i></button>

			<div class="hidden lg:flex items-center gap-6 font-bold text-slate-600 text-sm tracking-wide">
				<a href="/" class="hover:text-indigo-600 transition pb-1">HOME</a>
				<a href="/about/" class="hover:text-orange-500 transition pb-1">ABOUT US</a>
				<a href="/programs/" class="hover:text-red-500 transition pb-1">PROGRAMS</a>
				<a href="/curriculum/" class="hover:text-cyan-500 transition pb-1">CURRICULUM</a>
				<a href="/locations/" class="hover:text-green-500 transition pb-1">LOCATIONS</a>
				<a href="/blog/" class="hover:text-purple-500 transition pb-1">BLOG</a>
				<a href="/contact/" class="hover:text-indigo-600 transition pb-1">CONTACT US</a>
			</div>
		</div>
		<!-- Mobile Menu Panel -->
		<div id="mobile-menu"
			class="hidden fixed inset-0 z-50 bg-white/95 backdrop-blur-md flex flex-col items-center justify-center gap-8 font-extrabold text-2xl text-slate-800 transition-all">
			<button id="close-menu-btn" class="absolute top-6 right-6 text-slate-900 border-2 border-slate-200 rounded-full p-2 hover:bg-slate-100"><i data-lucide="x" class="w-8 h-8"></i></button>
			<a href="/" class="hover:text-indigo-600">HOME</a>
			<a href="/about/" class="hover:text-orange-500">ABOUT US</a>
			<a href="/programs/" class="hover:text-red-500">PROGRAMS</a>
			<a href="/curriculum/" class="hover:text-cyan-500">CURRICULUM</a>
			<a href="/locations/" class="hover:text-green-500">LOCATIONS</a>
			<a href="/blog/" class="hover:text-purple-500">BLOG</a>
			<a href="/contact/" class="hover:text-indigo-600">CONTACT US</a>
		</div>
	</nav>


	<!-- MAIN CONTENT WRAPPER -->
	<main class="mt-20 min-h-screen">
		<script>
			document.addEventListener('DOMContentLoaded', function () {
				const menuBtn = document.getElementById('mobile-menu-btn');
				const closeBtn = document.getElementById('close-menu-btn');
				const mobileMenu = document.getElementById('mobile-menu');

				if (menuBtn && mobileMenu) {
					menuBtn.addEventListener('click', () => {
						mobileMenu.classList.remove('hidden');
					});
				}
				if (closeBtn && mobileMenu) {
					closeBtn.addEventListener('click', () => {
						mobileMenu.classList.add('hidden');
					});
				}
			});
		</script>