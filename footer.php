</main> <!-- Close Main -->

<!-- FOOTER -->
<footer class="bg-white border-t border-slate-100 py-20 mt-auto">
	<div class="max-w-7xl mx-auto px-4 flex flex-col md:flex-row justify-between items-center text-sm">
		<div class="flex items-center space-x-3 mb-8 md:mb-0">
			<div class="w-8 h-8 bg-navy rounded-lg flex items-center justify-center text-white">
				<i class="fas fa-shield-heart text-sm"></i>
			</div>
			<span class="font-black text-slate-900 tracking-tight">W.I.M.P.E.R.</span>
		</div>
		<div class="flex space-x-8 text-slate-500 font-bold uppercase tracking-widest text-[10px]">
			<span onclick="navigateTo('method')" class="hover:text-accent cursor-pointer transition">Methodology</span>
			<span onclick="navigateTo('contact')" class="hover:text-accent cursor-pointer transition">Feasibility
				Audit</span>
			<span class="hover:text-accent cursor-pointer transition">Legal</span>
		</div>
		<div class="mt-8 md:mt-0 text-slate-400 text-xs uppercase tracking-widest">
			&copy; <?php echo date('Y'); ?> W.I.M.P.E.R. x Revive Health
		</div>
	</div>
</footer>

<!-- LOGIC -->
<script>
	function navigateTo(pageId) {
		document.querySelectorAll('.page-view').forEach(el => el.classList.remove('active'));
		document.getElementById(pageId).classList.add('active');
		document.querySelectorAll('.nav-link').forEach(el => el.classList.remove('active'));
		const activeLink = document.getElementById('nav-' + pageId);
		if (activeLink) activeLink.classList.add('active');
		window.scrollTo(0, 0);
		document.getElementById('mobile-menu').classList.add('hidden');
	}

	function scrollToId(elementId) {
		const element = document.getElementById(elementId);
		if (element) element.scrollIntoView({ behavior: 'smooth' });
	}

	function updateHeroCalc() {
		const calcRange = document.getElementById('calcRange');
		if (calcRange) {
			const count = calcRange.value;
			const savings = count * 1100;
			document.getElementById('calcCount').innerText = count;
			document.getElementById('calcSavings').innerText = new Intl.NumberFormat('en-US', { style: 'currency', currency: 'USD', maximumFractionDigits: 0 }).format(savings);
		}
	}

	// Call conditionally if element exists
	if (document.getElementById('calcRange')) updateHeroCalc();
</script>
<?php wp_footer(); ?>
</body>

</html>