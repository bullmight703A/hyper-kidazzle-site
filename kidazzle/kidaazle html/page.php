<?php
/**
 * The template for displaying all pages
 *
 * @package Kidazzle
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php wp_title('|', true, 'right'); ?>
    </title>
    <meta name="description"
        content="KIDazzle Child Care: 31 years of elite, independent early education in Atlanta, Memphis, and Doral.">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <style>
        .graph-bar {
            transition: height 1s cubic-bezier(0.4, 0, 0.2, 1);
        }

        html {
            scroll-behavior: smooth;
        }

        .animate-fade-in {
            animation: fadeIn 0.5s ease-in forwards;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
    <?php wp_head(); ?>
</head>

<body <?php body_class("font-sans text-slate-800 bg-white selection:bg-yellow-200"); ?>>
    <?php wp_body_open(); ?>

    <!-- TOP UTILITY BAR -->
    <div
        class="bg-slate-50 text-slate-600 text-xs py-2 px-4 hidden md:flex justify-between items-center border-b border-slate-200">
        <div class="flex gap-4 items-center">
            <a href="/locations/" class="flex items-center gap-1 hover:text-cyan-600 transition"><i
                    data-lucide="map-pin" class="w-3 h-3 text-red-500"></i> Serving GA, TN, & FL</a>
            <span class="flex items-center gap-1"><i data-lucide="phone" class="w-3 h-3 text-green-500"></i>
                877-410-1002</span>
            <a href="/acquisitions/" class="flex items-center gap-1 font-bold text-indigo-600 hover:underline"><i
                    data-lucide="briefcase" class="w-3 h-3"></i> Acquisitions</a>
        </div>
        <div class="flex gap-6 font-medium">
            <a href="/careers/" class="hover:text-cyan-600 flex items-center gap-1">Careers</a>
            <a href="/teacher-portal/" class="hover:text-cyan-600 flex items-center gap-1 font-bold text-orange-500"><i
                    data-lucide="users" class="w-3 h-3"></i> Teacher Portal</a>
        </div>
    </div>

    <!-- MAIN NAVIGATION -->
    <nav class="sticky top-0 w-full z-40 bg-white py-4 shadow-sm border-b border-slate-100">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <a href="/" class="flex items-center gap-2">
                <img src="https://storage.googleapis.com/msgsndr/ZR2UvxPL2wlZNSvHjmJD/media/64ef561bad8c716760dfd435.png"
                    alt="KIDazzle Logo" class="h-12 w-auto object-contain">
            </a>

            <button id="mobile-menu-btn" class="lg:hidden text-slate-900"><i data-lucide="menu"
                    class="w-8 h-8"></i></button>

            <div class="hidden lg:flex items-center gap-6 font-bold text-slate-600 text-sm tracking-wide">
                <a href="/" class="hover:text-indigo-600 transition pb-1">HOME</a>
                <a href="/about/" class="hover:text-orange-500 transition pb-1">ABOUT US</a>
                <a href="/programs/" class="hover:text-red-500 transition pb-1">PROGRAMS</a>
                <a href="/curriculum/" class="hover:text-cyan-500 transition pb-1">CURRICULUM</a>
                <a href="/locations/" class="hover:text-green-500 transition pb-1">LOCATIONS</a>
                <a href="/resources/" class="hover:text-purple-500 transition pb-1">RESOURCES</a>
                <a href="/enrollment/"
                    class="bg-slate-900 text-white px-5 py-2.5 rounded-xl hover:bg-slate-800 transition shadow-md ml-2">CONTACT
                    US</a>
            </div>
        </div>
        <div id="mobile-menu"
            class="hidden absolute top-full left-0 w-full bg-white shadow-lg border-t border-slate-100 flex flex-col p-4 gap-4 lg:hidden">
            <a href="/" class="text-indigo-600 font-bold">Home</a>
            <a href="/about/" class="text-slate-600 font-bold">About Us</a>
            <a href="/programs/" class="text-slate-600 font-bold">Programs</a>
            <a href="/locations/" class="text-slate-600 font-bold">Locations</a>
            <a href="/contact/" class="text-slate-600 font-bold">Contact Us</a>
        </div>
    </nav>

    <!-- CONTENT AREA -->
    <main id="primary" class="site-main w-full min-h-[60vh]">
        <?php
        while (have_posts()):
            the_post();
            ?>
            <!-- SEO Scenic Header -->
            <section class="relative bg-cover bg-center py-20"
                style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/kidazzle-scenic-header.png');">
                <!-- Dark Overlay for text legibility -->
                <div class="absolute inset-0 bg-slate-900/65 z-0"></div>

                <div class="max-w-7xl relative z-10 mx-auto px-4 sm:px-6 lg:px-8 text-center">
                    <h1 class="text-4xl md:text-5xl font-bold text-white mb-4 drop-shadow-md">
                        <?php the_title(); ?>
                    </h1>
                </div>
            </section>

            <!-- Post Content -->
            <div class="kidazzle-content-wrapper mt-8">
                <?php
                the_content();
                ?>
            </div>
            <?php
        endwhile;
        ?>
    </main>

    <!-- FOOTER -->
    <footer class="bg-slate-900 text-slate-300 py-16 text-center md:text-left">
        <div class="container mx-auto px-4 grid md:grid-cols-4 gap-12">
            <div>
                <img src="https://storage.googleapis.com/msgsndr/ZR2UvxPL2wlZNSvHjmJD/media/64ef561bad8c716760dfd435.png"
                    class="h-12 mb-6 mx-auto md:mx-0 bg-white p-1 rounded-lg" alt="KIDazzle">
                <p class="text-sm leading-relaxed">Providing elite, independent child care for over 31 years. A legacy
                    of excellence across the Southeast.</p>
            </div>
            <div>
                <h4 class="text-white font-bold mb-6 text-lg tracking-wide uppercase text-xs">Explore</h4>
                <ul class="space-y-4 text-sm font-medium">
                    <li><a href="/programs/" class="hover:text-yellow-400 transition">Our Programs</a></li>
                    <li><a href="/locations/" class="hover:text-yellow-400 transition">Find a Location</a></li>
                    <li><a href="/careers/" class="hover:text-yellow-400 transition">Careers</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-white font-bold mb-6 text-lg tracking-wide uppercase text-xs">Staff & Parents</h4>
                <ul class="space-y-4 text-sm font-medium">
                    <li><a href="/teacher-portal/" class="hover:text-orange-400 transition">Teacher Portal</a></li>
                    <li><a href="/resources/" class="hover:text-purple-400 transition">Blog & Resources</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-white font-bold mb-6 text-lg tracking-wide uppercase text-xs">Contact</h4>
                <p class="text-sm mb-4">100 Alabama St SW, Atlanta, GA</p>
                <p class="text-white font-bold text-lg">877-410-1002</p>
                <a href="/contact/" class="text-cyan-400 underline mt-4 block">Open Support Form</a>
            </div>
        </div>
        <div class="border-t border-slate-800 mt-16 pt-8 text-center text-xs text-slate-500 uppercase tracking-widest">
            <span>©
                <?php echo date('Y'); ?> KIDazzle Child Care Inc. All Rights Reserved.
            </span>
        </div>
    </footer>

    <script>
        if (typeof lucide !== 'undefined') {
            lucide.createIcons();
        }
        const menuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        if (menuBtn && mobileMenu) {
            menuBtn.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
        });  }
    </script>

    <?php wp_footer(); ?>
</body>

</html>