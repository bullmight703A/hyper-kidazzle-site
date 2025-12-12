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
            background: linear-gradient(135deg, #4c1d95 0%, #7c3aed 50%, #c026d3 100%);
        }

        .graph-bar {
            transition: height 1s cubic-bezier(0.4, 0, 0.2, 1);
        }

        html {
            scroll-behavior: smooth;
        }

        .chart-btn-active {
            background-color: #4c1d95 !important;
            color: white !important;
        }
    </style>
    <?php wp_head(); ?>
</head>

<body <?php body_class("font-sans text-slate-800 bg-white"); ?>>

    <!-- TOP UTILITY BAR -->
    <div
        class="bg-slate-50 text-slate-600 text-xs py-2 px-4 hidden md:flex justify-between items-center border-b border-slate-200">
        <div class="flex gap-4 items-center">
            <a href="<?php echo site_url('/locations'); ?>"
                class="flex items-center gap-1 hover:text-cyan-600 transition"><i data-lucide="map-pin"
                    class="w-3 h-3 text-red-500"></i> Serving GA, TN, & FL</a>
            <span class="flex items-center gap-1"><i data-lucide="phone" class="w-3 h-3 text-green-500"></i>
                877-410-1002</span>
            <a href="<?php echo site_url('/acquisitions'); ?>"
                class="flex items-center gap-1 font-bold text-indigo-600 hover:underline"><i data-lucide="briefcase"
                    class="w-3 h-3"></i> Acquisitions</a>
        </div>
        <div class="flex gap-6 font-medium">
            <a href="<?php echo site_url('/careers'); ?>"
                class="hover:text-cyan-600 flex items-center gap-1">Careers</a>
            <a href="<?php echo site_url('/teacher-portal'); ?>"
                class="hover:text-cyan-600 flex items-center gap-1 font-bold text-orange-500"><i data-lucide="users"
                    class="w-3 h-3"></i> Teacher Portal</a>
        </div>
    </div>

    <!-- MAIN NAVIGATION -->
    <nav class="sticky top-0 w-full z-40 bg-white py-4 shadow-sm">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <a href="<?php echo home_url(); ?>" class="flex items-center gap-2">
                <img src="<?php echo site_url('/kidazzle logo.jpg'); ?>" alt="KIDazzle Logo" class="h-12 w-auto"
                    onError="this.style.display='none'">
                <h1 class="text-3xl font-extrabold text-black tracking-tighter hidden md:block">KID<span
                        class="text-yellow-500">azzle</span></h1>
            </a>
            <div class="hidden lg:flex items-center gap-6 font-bold text-slate-600 text-sm tracking-wide">
                <a href="<?php echo home_url(); ?>"
                    class="<?php echo is_front_page() ? 'text-indigo-600 border-b-2 border-indigo-600 pb-1' : 'hover:text-indigo-600 transition pb-1'; ?>">HOME</a>
                <a href="<?php echo site_url('/about'); ?>" class="hover:text-orange-500 transition pb-1">ABOUT US</a>
                <a href="<?php echo site_url('/programs'); ?>" class="hover:text-red-500 transition pb-1">PROGRAMS</a>
                <a href="<?php echo site_url('/curriculum'); ?>"
                    class="hover:text-cyan-500 transition pb-1">CURRICULUM</a>
                <a href="<?php echo site_url('/locations'); ?>"
                    class="hover:text-green-500 transition pb-1">LOCATIONS</a>
                <a href="<?php echo site_url('/resources'); ?>"
                    class="hover:text-purple-500 transition pb-1">RESOURCES</a>
                <a href="<?php echo site_url('/contact'); ?>"
                    class="bg-slate-900 text-white px-5 py-2.5 rounded-xl hover:bg-slate-800 transition shadow-md ml-2">CONTACT
                    US</a>
            </div>
            <button id="mobile-menu-btn" class="lg:hidden text-slate-900"><i data-lucide="menu"
                    class="w-8 h-8"></i></button>
        </div>
        <!-- Mobile Menu -->
        <div id="mobile-menu"
            class="hidden absolute top-full left-0 w-full bg-white shadow-lg border-t border-slate-100 flex flex-col p-4 gap-4 lg:hidden">
            <a href="<?php echo home_url(); ?>" class="text-indigo-600 font-bold">Home</a>
            <a href="<?php echo site_url('/about'); ?>" class="text-slate-600 font-bold">About Us</a>
            <a href="<?php echo site_url('/programs'); ?>" class="text-slate-600 font-bold">Programs</a>
            <a href="<?php echo site_url('/curriculum'); ?>" class="text-slate-600 font-bold">Curriculum</a>
            <a href="<?php echo site_url('/locations'); ?>" class="text-slate-600 font-bold">Locations</a>
            <a href="<?php echo site_url('/resources'); ?>" class="text-slate-600 font-bold">Resources</a>
            <a href="<?php echo site_url('/contact'); ?>" class="text-slate-600 font-bold">Contact Us</a>
        </div>
    </nav>