<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php // Canonical URL is handled by Yoast SEO or framework canonical enforcer ?>
	<!-- Google Fonts: Outfit and Playfair Display -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400&display=swap" rel="stylesheet">

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

	<?php wp_head(); ?>
</head>

<body <?php body_class('font-sans text-slate-800 bg-white'); ?>>
	<?php wp_body_open(); ?>

	<!-- Skip Links for Accessibility -->
	<a href="#main-content"
		class="sr-only focus:not-sr-only focus:absolute focus:top-4 focus:left-4 bg-white text-kidazzle-blueDark p-4 z-[100] rounded-lg shadow-lg"><?php _e('Skip to content', 'kidazzle-theme'); ?></a>

	<!-- TOP UTILITY BAR -->
	<div
		class="bg-slate-50 text-slate-600 text-[10px] font-bold uppercase tracking-widest py-2 px-4 hidden md:flex justify-between items-center border-b border-slate-200 fixed w-full top-0 z-50 h-10">
		<div class="flex gap-4 items-center">
			<a href="<?php echo home_url('/locations'); ?>"
				class="flex items-center gap-1 cursor-pointer hover:text-kidazzle-blue transition">
				<i class="fa-solid fa-location-dot text-kidazzle-red"></i> Locations in GA, TN, & FL
			</a>
			<span class="flex items-center gap-1">
				<i class="fa-solid fa-phone text-kidazzle-green"></i> 877-410-1002
			</span>
		</div>
		<div class="flex gap-6">
			<a href="<?php echo home_url('/careers'); ?>"
				class="hover:text-kidazzle-blue transition flex items-center gap-1">Careers</a>
			<a href="<?php echo home_url('/teacher-portal'); ?>"
				class="hover:text-kidazzle-blue transition flex items-center gap-1 text-kidazzle-orange">
				<i class="fa-solid fa-users-viewfinder"></i> Teacher Portal
			</a>
		</div>
	</div>

	<!-- MAIN NAVIGATION -->
	<nav id="navbar" class="fixed top-10 w-full z-40 transition-all duration-300 bg-white py-4 shadow-sm">
		<div class="container mx-auto px-4 md:px-6 flex justify-between items-center">
			<!-- Logo -->
			<a href="<?php echo home_url(); ?>" class="flex items-center gap-2 cursor-pointer">
				<div class="h-12 md:h-16 flex items-center relative custom-logo-wrapper" style="max-width: 250px; max-height: 80px; overflow: hidden;">
					<?php
					if (has_custom_logo()) {
						the_custom_logo();
					} else {
						echo '<h1 class="text-3xl font-extrabold text-black pl-2 tracking-tighter hidden md:block">KID<span class="text-kidazzle-yellow">azzle</span></h1>';
					}
					?>
				</div>
                <style>
                    .custom-logo-wrapper .custom-logo {
                        max-height: 100% !important;
                        width: auto !important;
                        height: auto !important;
                        object-fit: contain;
                        display: block;
                    }
                    /* Extra safety for the img tag itself if WP outputs it without class */
                    .custom-logo-wrapper img {
                        max-height: 80px !important;
                        width: auto !important;
                        display: block;
                    }
                </style>
			</a>

			<!-- Desktop Links -->
			<div class="hidden lg:flex items-center gap-6 font-bold text-kidazzle-blueDark text-xs tracking-[0.15em] uppercase">
				<a href="<?php echo home_url(); ?>" class="hover:text-kidazzle-blue transition">Home</a>
				<a href="<?php echo home_url('/programs'); ?>"
					class="hover:text-kidazzle-red transition">Programs</a>
				<a href="<?php echo home_url('/curriculum'); ?>"
					class="hover:text-kidazzle-blue transition">Curriculum</a>
				<a href="<?php echo home_url('/locations'); ?>"
					class="hover:text-kidazzle-green transition">Locations</a>
				<a href="<?php echo home_url('/resources'); ?>"
					class="hover:text-kidazzle-purple transition">Resources</a>
				<a href="<?php echo home_url('/contact'); ?>"
					class="bg-kidazzle-blueDark text-white px-6 py-3 rounded-full hover:bg-kidazzle-blue transition ml-2">Contact
					Us</a>
			</div>

			<!-- Mobile Toggle -->
			<button class="lg:hidden text-kidazzle-blueDark" id="mobile-menu-btn" aria-label="Open Menu">
				<i class="fa-solid fa-bars text-2xl"></i>
			</button>
		</div>

		<!-- Mobile Menu -->
		<div id="mobile-menu" class="hidden fixed inset-0 bg-white z-50 pt-24 px-6 overflow-y-auto">
			<button id="close-menu-btn" class="absolute top-4 right-4 text-kidazzle-blueDark" aria-label="Close Menu">
				<i class="fa-solid fa-xmark text-3xl"></i>
			</button>
			<div class="flex flex-col gap-8 font-bold text-2xl text-kidazzle-blueDark pt-4 uppercase tracking-widest">
				<a href="<?php echo home_url(); ?>" class="text-left">Home</a>
				<a href="<?php echo home_url('/programs'); ?>" class="text-left text-kidazzle-red">Programs</a>
				<a href="<?php echo home_url('/curriculum'); ?>" class="text-left text-kidazzle-blue">Curriculum</a>
				<a href="<?php echo home_url('/locations'); ?>" class="text-left text-kidazzle-green">Locations</a>
				<a href="<?php echo home_url('/resources'); ?>" class="text-left text-kidazzle-purple">Resources</a>
				<a href="<?php echo home_url('/careers'); ?>" class="text-left">Careers</a>
				<a href="<?php echo home_url('/teacher-portal'); ?>" class="text-left text-kidazzle-orange">Teacher
					Portal</a>
				<a href="<?php echo home_url('/contact'); ?>" class="text-left">Contact Us</a>
			</div>
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
