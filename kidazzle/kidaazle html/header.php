<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- SEO Meta Tags -->
	<meta name="description"
		content="The W.I.M.P.E.R. Program is a proprietary Section 125/105 chassis that engineers EBITDA expansion through FICA tax savings without reducing employee take-home pay.">
	<meta name="keywords"
		content="WIMPER, Section 125, FICA tax reduction, EBITDA recapture, corporate wealth strategy, wellness program, payroll tax savings">
	<meta name="author" content="WIMPER Financial Architecture">

	<!-- Open Graph / Social Media Meta Tags -->
	<meta property="og:title" content="W.I.M.P.E.R. | Financial Architecture & EBITDA Expansion">
	<meta property="og:description"
		content="Physical removal of payroll from the FICA taxation zone. Self-funded EBITDA recapture engineered through a compliant Section 125 chassis.">
	<meta property="og:type" content="website">
	<meta property="og:url" content="<?php echo esc_url(home_url('/')); ?>">

	<!-- Twitter Card Meta Tags -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:title" content="W.I.M.P.E.R. | Financial Architecture">
	<meta name="twitter:description"
		content="Self-funded EBITDA recapture engineered through a compliant Section 125 chassis. Reduce your taxable surface area today.">

	<?php wp_head(); ?>

	<!-- Tailwind CSS CDN (Keep Below wp_head to allow enqueue overrides if needed) -->
	<script src="https://cdn.tailwindcss.com"></script>
	<script>
		tailwind.config = {
			theme: {
				extend: {
					colors: {
						navy: '#1e3a8a', // Corporate Royal Blue
						gold: '#0ea5e9', // Sky Blue Accent
					},
					fontFamily: {
						serif: ['Playfair Display', 'serif'],
						sans: ['Inter', 'sans-serif'],
					}
				}
			}
		}
	</script>

	<!-- Chart.js -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>

	<!-- FontAwesome -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

	<!-- Custom Styles from User HTML -->
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');

		body {
			font-family: 'Inter', sans-serif;
			color: #1e293b;
			background-color: #ffffff;
			overflow-x: hidden;
		}

		h1,
		h2,
		h3,
		h4,
		h5 {
			font-family: 'Inter', sans-serif;
			font-weight: 700;
			letter-spacing: -0.02em;
		}

		/* Maxwell-Inspired SaaS Palette */
		.bg-navy {
			background-color: #1e40af;
		}

		.text-accent {
			color: #3b82f6;
		}

		.bg-accent {
			background-color: #3b82f6;
		}

		.bg-soft-blue {
			background-color: #f8faff;
		}

		.border-soft {
			border-color: #e2e8f0;
		}

		/* Hero & Visuals */
		.hero-gradient {
			background: radial-gradient(circle at 70% 30%, #f0f7ff 0%, #ffffff 100%);
		}

		.card-shadow {
			box-shadow: 0 20px 40px -15px rgba(0, 0, 0, 0.1);
		}

		.btn-round {
			border-radius: 8px;
		}

		/* Navigation */
		.nav-link {
			font-size: 0.85rem;
			font-weight: 600;
			color: #64748b;
			transition: all 0.2s;
			cursor: pointer;
		}

		.nav-link:hover {
			color: #3b82f6;
		}

		.nav-link.active {
			color: #1e40af;
		}

		/* Page Transitions */
		.page-view {
			display: none;
			animation: fadeIn 0.4s ease-out;
		}

		.page-view.active {
			display: block;
		}

		@keyframes fadeIn {
			from {
				opacity: 0;
				transform: translateY(5px);
			}

			to {
				opacity: 1;
				transform: translateY(0);
			}
		}

		/* Dashboard Specific Styles */
		.mock-dashboard {
			background: white;
			border-radius: 20px;
			overflow: hidden;
			border: 1px solid #e2e8f0;
			box-shadow: 0 30px 60px -12px rgba(30, 64, 175, 0.15);
		}

		.dash-step {
			border-left: 3px solid #e2e8f0;
			transition: all 0.3s;
		}

		.dash-step:hover {
			border-left-color: #3b82f6;
			background-color: #f8fafc;
		}

		.dash-step.active {
			border-left-color: #3b82f6;
			background-color: #eff6ff;
		}
	</style>
	<?php wp_head(); ?>
</head>

<body <?php body_class('flex flex-col min-h-screen'); ?>>
	<?php wp_body_open(); ?>

	<!-- NAVIGATION -->
	<nav class="bg-white/90 backdrop-blur-md border-b border-slate-100 fixed w-full z-50">
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
			<div class="flex justify-between h-20">
				<div class="flex items-center cursor-pointer"
					onclick="<?php echo is_front_page() ? "navigateTo('home')" : "window.location.href='" . home_url('/') . "'"; ?>">
					<div class="flex items-center space-x-3">
						<div
							class="w-10 h-10 bg-accent rounded-lg flex items-center justify-center text-white shadow-lg shadow-blue-200">
							<i class="fas fa-shield-heart text-xl"></i>
						</div>
						<div class="flex flex-col">
							<span
								class="text-xl font-extrabold text-navy tracking-tight leading-none">W.I.M.P.E.R.</span>
							<span
								class="text-[8px] font-bold text-slate-500 mt-1 uppercase tracking-widest leading-tight">Wellness
								& Integrated Medical Plan<br>Expense Reimbursement</span>
						</div>
					</div>
				</div>

				<div class="hidden lg:flex items-center space-x-8">
					<span
						onclick="<?php echo is_front_page() ? "navigateTo('home')" : "window.location.href='" . home_url('/') . "'"; ?>"
						id="nav-home" class="nav-link active">The Vision</span>
					<span
						onclick="<?php echo is_front_page() ? "navigateTo('method')" : "window.location.href='" . home_url('/#method') . "'"; ?>"
						id="nav-method" class="nav-link">The Chassis</span>
					<span
						onclick="<?php echo is_front_page() ? "navigateTo('iul')" : "window.location.href='" . home_url('/#iul') . "'"; ?>"
						id="nav-iul" class="nav-link">Wealth Strategy</span>
					<span
						onclick="<?php echo is_front_page() ? "navigateTo('timeline')" : "window.location.href='" . home_url('/#timeline') . "'"; ?>"
						id="nav-timeline" class="nav-link text-center leading-tight">The Execution</span>
					<span
						onclick="<?php echo is_front_page() ? "navigateTo('blog')" : "window.location.href='" . home_url('/#blog') . "'"; ?>"
						id="nav-blog" class="nav-link text-center leading-tight">Insights<br>& Blog</span>
					<span onclick="window.location.href='<?php echo esc_url(home_url('/webinar-registration')); ?>'"
						class="nav-link text-center leading-tight text-accent font-bold">Join<br>Webinar</span>
					<button
						onclick="<?php echo is_front_page() ? "navigateTo('contact')" : "window.location.href='" . home_url('/#contact') . "'"; ?>"
						class="bg-navy text-white px-6 py-2.5 rounded-lg text-sm font-bold uppercase tracking-widest hover:bg-accent transition duration-300 shadow-md">
						Verify<br>Eligibility
					</button>
				</div>

				<div class="lg:hidden flex items-center">
					<button onclick="document.getElementById('mobile-menu').classList.toggle('hidden')"
						class="text-slate-600 focus:outline-none">
						<i class="fas fa-bars text-2xl"></i>
					</button>
				</div>
			</div>
		</div>

		<!-- Mobile Menu -->
		<div id="mobile-menu" class="hidden lg:hidden bg-white border-t border-slate-100">
			<div class="flex flex-col p-4 space-y-4">
				<span
					onclick="<?php echo is_front_page() ? "navigateTo('home')" : "window.location.href='" . home_url('/') . "'"; ?>"
					class="nav-link text-slate-600">Experience</span>
				<span
					onclick="<?php echo is_front_page() ? "navigateTo('method')" : "window.location.href='" . home_url('/#method') . "'"; ?>"
					class="nav-link text-slate-600">The Chassis</span>
				<span
					onclick="<?php echo is_front_page() ? "navigateTo('iul')" : "window.location.href='" . home_url('/#iul') . "'"; ?>"
					class="nav-link text-slate-600">Wealth Strategy</span>
				<span
					onclick="<?php echo is_front_page() ? "navigateTo('timeline')" : "window.location.href='" . home_url('/#timeline') . "'"; ?>"
					class="nav-link text-slate-600">Timeline</span>
				<span
					onclick="<?php echo is_front_page() ? "navigateTo('blog')" : "window.location.href='" . home_url('/#blog') . "'"; ?>"
					class="nav-link text-slate-600">Insights</span>
				<span onclick="window.location.href='<?php echo esc_url(home_url('/webinar-registration')); ?>'"
					class="nav-link text-accent font-bold">Join Webinar</span>
				<span
					onclick="<?php echo is_front_page() ? "navigateTo('contact')" : "window.location.href='" . home_url('/#contact') . "'"; ?>"
					class="nav-link text-blue-600 font-bold">Get Started</span>
			</div>
		</div>
	</nav>

	<!-- MAIN CONTENT WRAPPER -->
	<main class="min-h-screen">
		<?php if (!is_front_page()): ?>
			<!-- Global Spacer to prevent fixed header overlap on internal SEO pages -->
			<div class="h-24 w-full bg-transparent"></div>
		<?php endif; ?>