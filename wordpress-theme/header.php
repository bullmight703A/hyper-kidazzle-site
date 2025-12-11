<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>

    <!-- Tailwind CDN (User Request) -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        .fade-in {
            animation: fadeIn 0.5s ease-in;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .bg-ombre-purple {
            background: linear-gradient(135deg, #4c1d95, #7c3aed, #c026d3);
        }

        .chart-btn-active {
            background-color: #4c1d95 !important;
            color: white !important;
        }
    </style>
    <?php wp_head(); ?>
</head>

<body <?php body_class("bg-white text-slate-800"); ?>>

    <!-- NAVBAR -->
    <header class="fixed inset-x-0 top-0 bg-white shadow-sm z-50">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <a href="<?php echo home_url(); ?>" class="flex items-center space-x-3 cursor-pointer">
                <?php if (has_custom_logo()): ?>
                    <?php the_custom_logo(); ?>
                <?php else: ?>
                    <div
                        class="h-10 w-10 bg-yellow-400 rounded-full flex items-center justify-center text-white font-bold text-xl">
                        K</div>
                <?php endif; ?>
                <h1 class="text-3xl font-extrabold tracking-tight">KID<span class="text-yellow-500">azzle</span></h1>
            </a>

            <nav class="hidden md:flex space-x-8 font-semibold text-slate-700">
                <a href="<?php echo home_url(); ?>" class="hover:text-indigo-600">Home</a>
                <!-- Menu populated via WP Admin typically, but hardcoding for now as requested -->
                <a href="<?php echo site_url('/about'); ?>" class="hover:text-orange-500">About Us</a>
                <a href="<?php echo site_url('/programs'); ?>" class="hover:text-red-500">Programs</a>
                <a href="<?php echo site_url('/locations'); ?>" class="hover:text-green-600">Locations</a>
                <a href="<?php echo site_url('/resources'); ?>" class="hover:text-purple-500">Resources</a>
                <a href="<?php echo site_url('/contact'); ?>"
                    class="bg-slate-900 text-white px-6 py-2 rounded-xl hover:bg-slate-700 transition-shadow shadow-lg">
                    Contact Us
                </a>
            </nav>

            <button class="md:hidden p-2 text-slate-700">
                <i data-lucide="menu"></i>
            </button>
        </div>
    </header>

    <!-- Spacer for fixed header -->
    <div class="mt-20"></div>