<?php
/**
 * The template for displaying the footer
 *
 * @package kidazzle_Excellence
 */
?>
</main>

<footer class="bg-slate-900 text-slate-300 py-16 relative mt-12">
	<div
		class="absolute -top-6 left-1/2 transform -translate-x-1/2 bg-white p-2 rounded-full shadow-lg border border-slate-100">
		<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/kidazzle-logo.png'); ?>"
			alt="KIDazzle Logo" class="h-10 w-auto object-contain" onError="this.style.display='none'">
	</div>

	<div class="container mx-auto px-4 md:px-6 pt-8">
		<div class="grid md:grid-cols-4 gap-12 mb-12">
			<div>
				<div class="flex items-center bg-white p-2 rounded-lg shadow-sm w-fit mb-6">
					<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/kidazzle-logo.png'); ?>"
						alt="KIDazzle Logo" class="h-10 w-auto object-contain" onError="this.style.display='none'">
				</div>
				<p class="text-sm leading-relaxed mb-6 text-slate-400">Providing elite, independent child care and early
					education.</p>
			</div>
			<div>
				<h4 class="text-white font-bold mb-6">Quick Links</h4>
				<ul class="space-y-3 text-sm cursor-pointer">
					<?php
					// Fallback to static if no menu
					if (has_nav_menu('footer')) {
						wp_nav_menu(array(
							'theme_location' => 'footer',
							'container' => false,
							'items_wrap' => '%3$s',
							'fallback_cb' => false,
						));
					} else { ?>
						<li onclick="window.location.href='<?php echo esc_url(home_url('/programs')); ?>'"
							class="hover:text-red-400">Programs</li>
						<li onclick="window.location.href='<?php echo esc_url(home_url('/locations')); ?>'"
							class="hover:text-green-400">Locations</li>
						<li onclick="window.location.href='<?php echo esc_url(home_url('/careers')); ?>'"
							class="hover:text-cyan-400">Careers</li>
					<?php } ?>
				</ul>
			</div>
			<div>
				<h4 class="text-white font-bold mb-6">Resources</h4>
				<ul class="space-y-3 text-sm cursor-pointer">
					<li onclick="window.location.href='<?php echo esc_url(home_url('/teacher-portal')); ?>'"
						class="hover:text-cyan-400">Teacher Portal</li>
					<li class="hover:text-yellow-400">Parent Portal</li>
				</ul>
			</div>
			<div>
				<h4 class="text-white font-bold mb-6">Contact</h4>
				<ul class="space-y-3 text-sm">
					<li>100 Alabama St SW, Atlanta, GA</li>
					<li class="font-bold text-white">877-410-1002</li>
					<li><button onclick="openContactModal()" class="text-cyan-400 underline mt-2">Open Contact
							Form</button></li>
				</ul>
			</div>
		</div>
		<div class="border-t border-slate-800 pt-8 text-center text-xs text-slate-500">
			<span>© <?php echo date('Y'); ?> KIDazzle Child Care Inc.</span>
		</div>
	</div>
</footer>

<!-- CONTACT MODAL -->
<div id="contact-modal"
	class="hidden fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/80 backdrop-blur-sm animate-fade-in">
	<div class="relative w-full max-w-3xl bg-white rounded-3xl shadow-2xl max-h-[90vh] overflow-y-auto p-8">
		<button onclick="closeContactModal()"
			class="absolute top-4 right-4 p-2 bg-slate-100 rounded-full hover:bg-slate-200 transition">
			<i data-lucide="x" class="w-6 h-6 text-slate-600"></i>
		</button>
		<div class="text-center mb-8">
			<h3 class="text-2xl font-bold text-slate-900">How Can We Help?</h3>
			<p class="text-slate-500">Select an option below.</p>
		</div>
		<!-- Embed Placeholder -->
		<div
			class="bg-slate-50 border-2 border-dashed border-slate-300 rounded-xl p-12 text-center h-96 flex flex-col items-center justify-center">
			<p class="font-bold text-slate-700">Contact Form Placeholder</p>
		</div>
	</div>
</div>

<script>
	const contactModal = document.getElementById('contact-modal');
	function openContactModal() { if (contactModal) contactModal.classList.remove('hidden'); }
	function closeContactModal() { if (contactModal) contactModal.classList.add('hidden'); }
	document.addEventListener('DOMContentLoaded', () => {
		if (window.lucide) lucide.createIcons();
	});
</script>

<?php wp_footer(); ?>
</body>

</html>
