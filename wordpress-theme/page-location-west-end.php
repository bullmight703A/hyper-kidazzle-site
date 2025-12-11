<?php
/*
Template Name: KIDazzle West End Landing
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KIDazzle West End Campus | Book a Tour</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <script src="https://unpkg.com/lucide@latest"></script>

    <style>
        /* Smooth Fade In Animation */
        .fade-in { animation: fadeIn 0.8s ease-out; }
        @keyframes fadeIn { from { opacity: 0; transform: translateY(10px); } to { opacity: 1; transform: translateY(0); } }

        /* Custom Hero Background - West End */
        .bg-westend-hero {
            background: linear-gradient(rgba(15, 23, 42, 0.8), rgba(15, 23, 42, 0.8)), url('https://images.unsplash.com/photo-1588072432836-e10032774350?q=80&w=2560&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
        }

        /* Calendar Styling Fixes */
        .calendar-container iframe {
            min-height: 650px; 
        }
    </style>

    <?php wp_head(); ?>
</head>

<body <?php body_class('bg-slate-50 text-slate-800 font-sans antialiased'); ?>>

    <header class="fixed inset-x-0 top-0 bg-white/95 backdrop-blur-sm shadow-sm z-50">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            
            <a href="<?php echo home_url(); ?>" class="flex items-center space-x-3 cursor-pointer no-underline">
                <div class="h-10 w-10 bg-yellow-400 rounded-full flex items-center justify-center text-slate-900 font-bold text-xl">K</div>
                <h1 class="text-3xl font-extrabold tracking-tight text-slate-900">KID<span class="text-yellow-500">azzle</span></h1>
            </a>

            <nav class="hidden md:flex items-center space-x-8 font-semibold text-slate-600">
                <a href="<?php echo home_url(); ?>" class="hover:text-indigo-600 transition">Home</a>
                <a href="/about-us" class="hover:text-orange-500 transition">About Us</a>
                <a href="/programs" class="hover:text-red-500 transition">Programs</a>
                <span class="text-green-600 font-bold border-b-2 border-green-500">West End Campus</span>
                <a href="/contact" class="bg-slate-900 text-white px-6 py-2 rounded-xl hover:bg-slate-700 transition shadow-lg no-underline">
                    Contact Us
                </a>
            </nav>

            <button class="md:hidden text-slate-800">
                <i data-lucide="menu" class="w-8 h-8"></i>
            </button>
        </div>
    </header>

    <section class="bg-westend-hero h-[400px] flex items-center justify-center mt-16 text-center px-6">
        <div class="max-w-3xl fade-in text-white">
            <span class="inline-block py-1 px-3 rounded-full bg-green-500 text-white text-xs font-bold tracking-wider mb-4 uppercase">
                Now Enrolling
            </span>
            <h1 class="text-5xl md:text-6xl font-extrabold mb-4">West End Campus</h1>
            <p class="text-xl text-slate-200">
                Serving the historic West End community with elite early education and a nurturing environment.
            </p>
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-6 py-16">
        <div class="grid lg:grid-cols-3 gap-12">

            <div class="lg:col-span-2 space-y-12">
                
                <div>
                    <h2 class="text-3xl font-bold text-slate-900 mb-6">Welcome to KIDazzle West End</h2>
                    <p class="text-slate-600 leading-relaxed mb-4">
                        Conveniently located in the heart of the community, our West End campus offers a safe, nurturing, and intellectually stimulating environment. We combine our time-tested <strong>Creative Curriculum®</strong> with state-of-the-art facilities to ensure your child thrives.
                    </p>
                    <p class="text-slate-600 leading-relaxed">
                        From our chef-prepared nutrition program to our low teacher-to-student ratios, every detail at West End is designed to provide peace of mind for parents and joy for children.
                    </p>
                </div>

                <div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-6">Campus Highlights</h3>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 flex items-start gap-4">
                            <div class="bg-indigo-100 p-3 rounded-lg text-indigo-600"><i data-lucide="sun"></i></div>
                            <div>
                                <h4 class="font-bold text-slate-900">Outdoor Play Area</h4>
                                <p class="text-sm text-slate-500">Safe, enclosed spaces for active learning.</p>
                            </div>
                        </div>
                        <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 flex items-start gap-4">
                            <div class="bg-orange-100 p-3 rounded-lg text-orange-600"><i data-lucide="clock"></i></div>
                            <div>
                                <h4 class="font-bold text-slate-900">Extended Care</h4>
                                <p class="text-sm text-slate-500">Flexible hours for working families.</p>
                            </div>
                        </div>
                        <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 flex items-start gap-4">
                            <div class="bg-green-100 p-3 rounded-lg text-green-600"><i data-lucide="shield"></i></div>
                            <div>
                                <h4 class="font-bold text-slate-900">Secure Entry</h4>
                                <p class="text-sm text-slate-500">Controlled access for maximum safety.</p>
                            </div>
                        </div>
                        <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 flex items-start gap-4">
                            <div class="bg-red-100 p-3 rounded-lg text-red-600"><i data-lucide="utensils"></i></div>
                            <div>
                                <h4 class="font-bold text-slate-900">Smart Nutrition</h4>
                                <p class="text-sm text-slate-500">Fresh, healthy meals prepared daily.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-6">Visit Us</h3>
                    <div class="rounded-3xl overflow-hidden shadow-lg border-4 border-white h-[450px] bg-slate-200 relative">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d212270.7411321557!2d-84.56069152643577!3d33.76763377268962!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88f5045d6993098d%3A0x66fede2f990b630b!2sAtlanta%2C%20GA!5e0!3m2!1sen!2sus!4v1716300000000!5m2!1sen!2sus"
                            width="100%" 
                            height="100%" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                    <p class="mt-3 text-sm text-slate-500 italic">
                        *Map pin showing general Atlanta area. Please update embed code for specific West End address.
                    </p>
                </div>
            </div>

            <div class="lg:col-span-1">
                <div class="bg-white p-6 rounded-3xl shadow-xl border border-purple-100 sticky top-24">
                    <div class="text-center mb-6">
                        <h3 class="text-2xl font-extrabold text-slate-900">Book a West End Tour</h3>
                        <p class="text-slate-500 text-sm mt-1">Select a time to visit our center.</p>
                    </div>

                    <div class="calendar-container w-full overflow-hidden bg-slate-50 rounded-xl">
                        <iframe 
                            src="https://api.leadconnectorhq.com/widget/booking/QGN3ewkDzTOKKsOH93q6" 
                            style="width: 100%; border:none; overflow: hidden;" 
                            scrolling="no" 
                            id="msgsndr-calendar">
                        </iframe>
                        <script src="https://link.msgsndr.com/js/embed.js" type="text/javascript"></script>
                    </div>

                    <div class="mt-6 text-center text-xs text-slate-400">
                        <p>Questions? Call us at <strong class="text-slate-600">877-410-1002</strong></p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <footer class="bg-slate-900 text-slate-300 py-16 mt-12">
        <div class="max-w-7xl mx-auto px-6 text-center md:text-left">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-6 md:mb-0">
                    <h2 class="text-2xl font-bold text-white mb-2">KIDazzle Child Care</h2>
                    <p class="text-sm text-slate-400">Where learning is fun.</p>
                </div>
                <div class="flex gap-6 text-sm">
                    <a href="/programs" class="hover:text-white">Programs</a>
                    <a href="/locations" class="hover:text-white">Locations</a>
                    <a href="/contact" class="hover:text-white">Contact</a>
                </div>
            </div>
            <div class="border-t border-slate-800 mt-8 pt-8 text-center text-xs text-slate-600">
                &copy; <?php echo date('Y'); ?> KIDazzle Child Care Inc.
            </div>
        </div>
    </footer>

    <script>
        lucide.createIcons();
    </script>

    <?php wp_footer(); ?>
</body>
</html>
