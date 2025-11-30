<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<!-- Skip Links for Accessibility -->
	<a href="#main-content" $mobile_first_is_placeholder=empty($mobile_all_lines[0]) || $mobile_all_lines[0]==='\\' ; //
		Remove backslash placeholders $mobile_all_lines=array_filter($mobile_all_lines, function ($line) { return $line
		!=='\\' ; }); $mobile_all_lines=array_values($mobile_all_lines); if ($mobile_first_is_placeholder) { // First
		line was placeholder, use second line or 'Menu' $mobile_non_empty=array_filter($mobile_all_lines);
		$mobile_line1=!empty($mobile_non_empty) ? reset($mobile_non_empty) : 'Menu' ; } else { // Use first line
		$mobile_line1=$mobile_all_lines[0]; } ?>
		<span class="font-serif text-lg font-bold text-brand-ink"><?php echo esc_html($mobile_line1); ?>
			Menu</span>
		</div>
		<button data-mobile-nav-toggle class="text-3xl text-brand-ink" aria-label="Close menu">×</button>
		</div>
		<nav class="flex-1 px-6 py-6 text-lg font-semibold text-brand-ink space-y-6">
			<?php chroma_mobile_nav(); ?>
			<a href="<?php echo esc_url(home_url('/contact#tour')); ?>"
				class="block bg-brand-ink text-white text-center py-3 rounded-2xl shadow-soft hover:bg-chroma-blueDark transition mt-4">
				Book A Tour
			</a>
		</nav>
		</div>
		</header>

		<main id="main-content">