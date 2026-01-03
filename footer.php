<?php
/**
 * Footer Template
 * 
 * KIDazzle Child Care Theme
 * 
 * @package Kidazzle
 */

if (!defined('ABSPATH')) {
	exit;
}
?>
</main>

<footer class="bg-[#1A1A1A] text-slate-400 py-16 mt-16 px-6">
	<div class="max-w-7xl mx-auto grid md:grid-cols-4 gap-12">
		<div>
			<?php if (has_custom_logo()):
				$custom_logo_id = get_theme_mod('custom_logo');
				$logo_url = wp_get_attachment_image_url($custom_logo_id, 'medium');
				?>
				<img src="<?php echo esc_url($logo_url); ?>" class="h-12 mb-6 bg-white rounded-lg p-2 w-auto"
					alt="<?php echo esc_attr(get_bloginfo('name')); ?>">
			<?php else: ?>
				<h2 class="text-2xl font-extrabold text-white mb-6">KID<span class="text-yellow-500">azzle</span></h2>
			<?php endif; ?>
			<p class="text-sm">
				<?php echo esc_html(get_theme_mod('kidazzle_footer_tagline', 'Providing elite, independent child care for 31 years.')); ?>
			</p>
		</div>
		<div>
			<h4 class="text-white font-bold mb-4"><?php esc_html_e('Quick Links', 'kidazzle'); ?></h4>
			<?php
			wp_nav_menu(array(
				'theme_location' => 'footer',
				'container' => false,
				'menu_class' => 'space-y-2 text-sm',
				'fallback_cb' => 'kidazzle_footer_nav_fallback',
				'depth' => 1,
			));
			?>
		</div>
		<div>
			<h4 class="text-white font-bold mb-4"><?php esc_html_e('Resources', 'kidazzle'); ?></h4>
			<?php
			wp_nav_menu(array(
				'theme_location' => 'footer_contact', // Using existing location name
				'container' => false,
				'menu_class' => 'space-y-2 text-sm',
				'fallback_cb' => false,
				'depth' => 1,
			));
			?>
		</div>
		<div>
			<h4 class="text-white font-bold mb-4"><?php esc_html_e('Contact', 'kidazzle'); ?></h4>
			<p class="text-sm">
				<?php echo esc_html(get_theme_mod('kidazzle_address', '100 Alabama St SW, Atlanta, GA')); ?></p>
			<p class="text-sm mt-2"><?php echo esc_html(get_theme_mod('kidazzle_phone', '877-410-1002')); ?></p>
		</div>
	</div>
	<div class="max-w-7xl mx-auto border-t border-gray-800 mt-12 pt-8 text-center text-xs">
		&copy; <?php echo date('Y'); ?> <?php echo esc_html(get_bloginfo('name')); ?>.
	</div>
</footer>

<script>
	// Initialize Lucide icons
	if (typeof lucide !== 'undefined') {
		lucide.createIcons();
	}

	// Mobile menu toggle
	const mobileMenuBtn = document.getElementById('mobile-menu-btn');
	const mobileMenu = document.getElementById('mobile-menu');
	if (mobileMenuBtn && mobileMenu) {
		mobileMenuBtn.addEventListener('click', () => {
			mobileMenu.classList.toggle('hidden');
		});
	}
</script>

<?php wp_footer(); ?>
</body>

</html>