<?php
/**
 * The template for displaying the footer
 *
 * @package kidazzle_Excellence
 */

// Get Footer Customizer Settings
$footer_phone = get_theme_mod('kidazzle_footer_phone', '877-410-1002');
$footer_email = get_theme_mod('kidazzle_footer_email', 'info@kidazzle.com');
$footer_address = get_theme_mod('kidazzle_footer_address', '674 Joseph E Lowery Blvd, Atlanta, GA 30310');

// Social Links
$footer_facebook = get_theme_mod('kidazzle_footer_facebook', '');
$footer_instagram = get_theme_mod('kidazzle_footer_instagram', '');
$footer_linkedin = get_theme_mod('kidazzle_footer_linkedin', '');
$footer_twitter = get_theme_mod('kidazzle_footer_twitter', '');
$footer_youtube = get_theme_mod('kidazzle_footer_youtube', '');

$has_social = $footer_facebook || $footer_instagram || $footer_linkedin || $footer_twitter || $footer_youtube;
?>
</main>

<!-- FOOTER -->
<footer class="bg-slate-900 text-slate-300 py-16 text-center md:text-left mt-12 relative">
	<div class="container mx-auto px-4 grid md:grid-cols-4 gap-12 relative z-10">
		<div>
			<img src="https://storage.googleapis.com/msgsndr/ZR2UvxPL2wlZNSvHjmJD/media/64ef561bad8c716760dfd435.png"
				class="h-12 w-auto mb-6 mx-auto md:mx-0 bg-white p-1 rounded-lg object-contain" alt="KIDazzle">
			<p class="text-sm leading-relaxed text-slate-400">Providing elite, independent child care for over 31 years.
				A legacy of excellence across the Southeast.</p>
		</div>
		<div>
			<h4 class="text-white font-bold mb-6 text-xs tracking-widest uppercase">Quick Links</h4>
			<ul class="space-y-3 text-sm font-medium text-slate-300">
				<li><a href="/about/" class="hover:text-white transition">About Us</a></li>
				<li><a href="/programs/" class="hover:text-white transition">Our Programs</a></li>
				<li><a href="/locations/" class="hover:text-white transition">Find a Location</a></li>
				<li><a href="/careers/" class="hover:text-white transition">Careers</a></li>
			</ul>
		</div>
		<div>
			<h4 class="text-white font-bold mb-6 text-xs tracking-widest uppercase">Resources</h4>
			<ul class="space-y-3 text-sm font-medium text-slate-300">
				<li><a href="/teacher-portal/" class="hover:text-white transition">Teacher Portal</a></li>
				<li><a href="/resources/" class="hover:text-white transition">Parent Resources</a></li>
				<li><a href="/blog/"
						class="hover:text-yellow-400 hover:underline transition font-bold uppercase text-[10px] tracking-widest mt-6 block"><i
							class="fa-solid fa-book-open mr-1"></i> View More Posts</a></li>
			</ul>
		</div>
		<div>
			<h4 class="text-white font-bold mb-6 text-xs tracking-widest uppercase">Contact</h4>
			<p class="text-sm mb-4 text-slate-400">674 Joseph E Lowery Boulevard Southwest,<br>Atlanta, Georgia 30310
			</p>
			<p class="text-white font-bold text-lg">877-410-1002</p>
			<a href="/contact/"
				class="text-cyan-400 underline mt-4 block uppercase font-extrabold text-xs tracking-widest transition hover:text-white">Open
				Contact Form</a>
		</div>
	</div>
	<div
		class="border-t border-slate-800 mt-16 pt-8 text-center text-xs text-slate-500 uppercase tracking-widest relative z-10">
		<span>© <?php echo date('Y'); ?> KIDazzle Child Care Inc. All Rights Reserved.</span>
	</div>
</footer>


<!-- Global Sticky CTA -->
<?php
$show_sticky_cta = true;
$sticky_text = __('Ready to experience the KIDAZZLE difference?', 'kidazzle-theme');
$sticky_btn_text = __('Schedule a Tour', 'kidazzle-theme');
$sticky_url = home_url('/contact');

if (is_page('contact') || is_page('careers')) {
	$show_sticky_cta = false;
} elseif (is_singular('program')) {
	$sticky_text = sprintf(__('Ready to enroll in <strong>%s</strong>?', 'kidazzle-theme'), get_the_title());
} elseif (is_singular('location')) {
	$sticky_text = sprintf(__('Ready to visit our <strong>%s</strong> campus?', 'kidazzle-theme'), get_the_title());
}

if ($show_sticky_cta):
	?>
	<div id="sticky-cta"
		class="md:hidden will-change-transform transform translate-y-full fixed bottom-0 left-0 right-0 bg-slate-900/95 backdrop-blur-md text-white py-4 px-6 z-50 shadow-[0_-5px_20px_rgba(0,0,0,0.1)] border-t border-white/10 transition-transform duration-500 ease-out">
		<div class="max-w-7xl mx-auto flex flex-col items-center justify-between gap-4 text-center">
			<span class="text-sm font-medium tracking-wide">
				<?php echo $sticky_text; ?>
			</span>
			<a href="<?php echo esc_url($sticky_url); ?>"
				class="inline-block bg-orange-500 text-white text-xs font-bold uppercase tracking-wider px-8 py-3 rounded-full hover:bg-white hover:text-orange-500 transition-all shadow-md">
				<?php echo esc_html($sticky_btn_text); ?>
			</a>
		</div>
	</div>
<?php endif; ?>

<!-- Contact Modal (Global) - Hidden by default -->
<div id="contact-modal"
	class="hidden fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/80 backdrop-blur-sm animate-fade-in">
	<div class="relative w-full max-w-3xl bg-white rounded-3xl shadow-2xl max-h-[90vh] overflow-y-auto p-8">
		<button onclick="closeContactModal()"
			class="absolute top-4 right-4 p-2 bg-slate-100 rounded-full hover:bg-slate-200 transition">
			<i class="fa-solid fa-xmark text-slate-600"></i>
		</button>
		<div class="text-center mb-8">
			<h3 class="text-2xl font-bold text-slate-900">How Can We Help?</h3>
			<p class="text-slate-500">Select an option below.</p>
		</div>
		<div
			class="bg-slate-50 border-2 border-dashed border-slate-300 rounded-[2rem] p-4 text-center h-[600px] overflow-hidden">
			<iframe src="https://api.leadconnectorhq.com/widget/form/N8RYaUY1SuORexcyA6la"
				style="width:100%;height:100%;border:none;border-radius:20px" id="inline-N8RYaUY1SuORexcyA6la"
				data-layout="{'id':'INLINE'}" data-trigger-type="alwaysShow" data-trigger-value=""
				data-activation-type="alwaysActivated" data-activation-value="" data-deactivation-type="neverDeactivate"
				data-deactivation-value="" data-form-name="2023 New KIDazzel website contact " data-height="870"
				data-layout-iframe-id="inline-N8RYaUY1SuORexcyA6la" data-form-id="N8RYaUY1SuORexcyA6la"
				title="2023 New KIDazzel website contact ">
			</iframe>
			<script src="https://link.msgsndr.com/js/form_embed.js" async></script>
		</div>
	</div>
</div>

<!-- Scripts -->
<script>
	// Modal Logic
	const contactModal = document.getElementById('contact-modal');
	function openContactModal() { if (contactModal) contactModal.classList.remove('hidden'); }
	function closeContactModal() { if (contactModal) contactModal.classList.add('hidden'); }

	// Sticky CTA Scroll Logic
	window.addEventListener('scroll', function () {
		const cta = document.getElementById('sticky-cta');
		if (!cta) return;
		if (window.scrollY > 300) {
			cta.classList.remove('translate-y-full');
		} else {
			cta.classList.add('translate-y-full');
		}
	}, { passive: true });

	// Initialize Lucide Icons
	if (typeof lucide !== 'undefined') {
		lucide.createIcons();
	}
</script>

<?php wp_footer(); ?>
<?php
// Footer scripts from Customizer
$footer_scripts = get_theme_mod('kidazzle_footer_scripts');
if ($footer_scripts) {
	if (current_user_can('unfiltered_html')) {
		echo $footer_scripts;
	} else {
		echo wp_kses($footer_scripts, array(
			'script' => array(
				'src' => true,
				'async' => true,
				'defer' => true,
				'type' => true,
				'id' => true,
			),
			'noscript' => array(),
		));
	}
}
?>
<script>
	document.addEventListener('DOMContentLoaded', () => {
		setTimeout(() => {
			document.querySelectorAll('body > div, body > footer ~ div, body > p').forEach(el => {
				if (el.innerText && el.innerText.toUpperCase().includes('SERVING GA')) {
					el.style.display = 'none';
				}
			});
		}, 500); // 500ms delay to ensure Customizer scripts injected fully
	});
</script>
</script>

<!-- GTranslate: Automatic Browser Language Detection -->
<div class="gtranslate_wrapper"></div>
<script>
	window.gtranslateSettings = {
		"default_language": "en",
		"detect_browser_language": true,
		"wrapper_selector": ".gtranslate_wrapper",
		"float_switcher_open_direction": "top",
		"float_switcher_position": "bottom-right",
		"alt_flags": { "en": "usa" }
	}
</script>
<script src="https://cdn.gtranslate.net/widgets/latest/float.js" defer></script>
</body>

</html>