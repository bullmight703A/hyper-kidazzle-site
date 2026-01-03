<?php
/**
 * Header Template
 * 
 * KIDazzle Child Care Theme
 * 
 * @package Kidazzle
 */

if (!defined('ABSPATH')) {
	exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;700;800&display=swap');

		body {
			font-family: 'Plus Jakarta Sans', sans-serif;
		}

		/* MODULE ANIMATIONS */
		.module-card {
			transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
		}

		.module-card:hover {
			transform: translateY(-6px);
			box-shadow: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
		}

		/* TICKER ANIMATION */
		.marquee-container {
			overflow: hidden;
			white-space: nowrap;
		}

		.marquee-content {
			display: inline-block;
			animation: marquee 35s linear infinite;
		}

		@keyframes marquee {
			0% {
				transform: translateX(0);
			}

			100% {
				transform: translateX(-50%);
			}
		}
	</style>
</head>

<body <?php body_class('font-sans text-slate-800 bg-[#F3F4F6] selection:bg-yellow-200 pb-12'); ?>>
	<?php wp_body_open(); ?>

	<!-- FLOATING NAVIGATION -->
	<div class="fixed top-0 left-0 right-0 z-50 pt-4 px-4 flex justify-center pointer-events-none">
		<nav
			class="pointer-events-auto bg-white/90 backdrop-blur-xl rounded-full shadow-xl border border-white/50 w-full max-w-6xl py-3 px-4 md:px-6 flex justify-between items-center transition-all duration-300">

			<!-- LOGO -->
			<a href="<?php echo esc_url(home_url('/')); ?>"
				class="flex items-center gap-2 group hover:opacity-80 transition">
				<?php if (has_custom_logo()):
					$custom_logo_id = get_theme_mod('custom_logo');
					$logo_url = wp_get_attachment_image_url($custom_logo_id, 'full');
					?>
					<img src="<?php echo esc_url($logo_url); ?>" class="h-10 md:h-12 w-auto object-contain"
						alt="<?php echo esc_attr(get_bloginfo('name')); ?>">
				<?php else: ?>
					<h1 class="text-2xl font-extrabold text-black tracking-tighter">KID<span
							class="text-yellow-500">azzle</span></h1>
				<?php endif; ?>
			</a>

			<!-- DESKTOP MENU -->
			<div
				class="hidden lg:flex items-center gap-1 bg-slate-100/80 p-1.5 rounded-full border border-slate-200/50">
				<?php
				wp_nav_menu(array(
					'theme_location' => 'primary',
					'container' => false,
					'items_wrap' => '%3$s',
					'fallback_cb' => 'kidazzle_primary_nav_fallback',
					'depth' => 1,
				));
				?>
			</div>

			<!-- CTA / MOBILE TOGGLE -->
			<div class="flex items-center gap-3">
				<a href="<?php echo esc_url(home_url('/enrollment/')); ?>"
					class="hidden md:flex items-center gap-2 bg-[#2D2D2D] text-white px-6 py-3 rounded-full font-bold text-sm hover:bg-yellow-400 hover:text-black transition shadow-lg hover:shadow-xl hover:-translate-y-0.5">
					<?php esc_html_e('Book a Tour', 'kidazzle'); ?> <i data-lucide="arrow-right" class="w-4 h-4"></i>
				</a>
				<button id="mobile-menu-btn"
					class="lg:hidden p-3 rounded-full bg-slate-100 text-slate-900 hover:bg-slate-200 transition"
					aria-label="<?php esc_attr_e('Toggle Menu', 'kidazzle'); ?>">
					<i data-lucide="menu" class="w-6 h-6"></i>
				</button>
			</div>
		</nav>

		<!-- MOBILE MENU DROPDOWN -->
		<div id="mobile-menu"
			class="hidden pointer-events-auto absolute top-20 right-4 w-72 bg-white rounded-[2rem] shadow-2xl border border-slate-100 p-4 flex flex-col gap-2 z-50 transform origin-top-right transition-all">
			<?php
			wp_nav_menu(array(
				'theme_location' => 'primary',
				'container' => false,
				'menu_class' => 'flex flex-col gap-2',
				'fallback_cb' => 'kidazzle_mobile_nav_fallback',
				'depth' => 1,
			));
			?>
			<a href="<?php echo esc_url(home_url('/enrollment/')); ?>"
				class="p-4 rounded-2xl bg-yellow-400 text-black font-bold text-center mt-2 shadow-sm"><?php esc_html_e('Book a Tour', 'kidazzle'); ?></a>
		</div>
	</div>

	<!-- Main Content Wrapper with padding for fixed header -->
	<main id="main-content" role="main" class="pt-28 px-4 md:px-6 max-w-[1400px] mx-auto space-y-6">