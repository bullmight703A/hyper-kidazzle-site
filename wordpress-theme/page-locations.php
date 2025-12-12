<?php get_header(); ?>

<!-- HERO -->
<section class="relative py-24 bg-green-900 text-white overflow-hidden">
    <div class="absolute inset-0 opacity-20">
        <img src="https://images.unsplash.com/photo-1476480862126-209bfaa8edc8" class="w-full h-full object-cover"
            alt="Map Background">
    </div>
    <div class="relative max-w-7xl mx-auto px-6 text-center">
        <h1 class="text-5xl font-extrabold mb-6">Our Centers</h1>
        <p class="text-xl text-green-200 max-w-2xl mx-auto">
            Conveniently located in major hubs across the Southeast. Find the KIDazzle nearest you.
            <!-- LOCATIONS GRID -->
        <section class="py-24 bg-white">
            <div class="max-w-7xl mx-auto px-6">
                <div class="grid md:grid-cols-3 gap-10">
                    <!-- Memphis -->
                    <div
                        class="group relative rounded-[2.5rem] overflow-hidden h-[500px] shadow-lg hover:shadow-2xl transition duration-500">
                        <img src="https://images.unsplash.com/photo-1596425123982-cb2cb2aa993a"
                            class="absolute w-full h-full object-cover transition duration-700 group-hover:scale-110"
                            alt="Memphis Center">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/20 to-transparent">
                        </div>
                        <div class="absolute bottom-0 p-8 w-full">
                            <span
                                class="bg-indigo-600 text-white text-xs font-bold px-3 py-1 rounded-full mb-3 inline-block">TN</span>
                            <h3 class="text-4xl font-bold text-white mb-2">Memphis</h3>
                            <p class="text-indigo-100 mb-6">Soul, Rhythm, & Rigor.</p>
                            <div class="space-y-2 text-sm text-slate-200 mb-6">
                                <div class="flex items-center gap-2"><i data-lucide="map-pin" class="w-4 h-4"></i> 123
                                    Beale St, Memphis, TN</div>
                                <div class="flex items-center gap-2"><i data-lucide="phone" class="w-4 h-4"></i> (901)
                                    555-0123</div>
                            </div>
                            <a href="<?php echo site_url('/memphis'); ?>"
                                class="block w-full bg-white text-slate-900 text-center font-bold py-3 rounded-xl hover:bg-indigo-50 transition">View
                                Center</a>
                        </div>
                    </div>

                    <!-- Atlanta -->
                    <div
                        class="group relative rounded-[2.5rem] overflow-hidden h-[500px] shadow-lg hover:shadow-2xl transition duration-500 border-4 border-orange-100">
                        <div
                            class="absolute top-4 right-4 bg-orange-500 text-white text-xs font-bold px-3 py-1 rounded-full z-10 shadow-md">
                            HEADQUARTERS</div>
                        <img src="https://images.unsplash.com/photo-1575968770275-d831502049d4"
                            class="absolute w-full h-full object-cover transition duration-700 group-hover:scale-110"
                            alt="Atlanta Center">
                        <div class="absolute inset-0 bg-gradient-to-t from-orange-900 via-orange-900/20 to-transparent">
                        </div>
                        <div class="absolute bottom-0 p-8 w-full">
                            <span
                                class="bg-orange-500 text-white text-xs font-bold px-3 py-1 rounded-full mb-3 inline-block">GA</span>
                            <h3 class="text-4xl font-bold text-white mb-2">Atlanta</h3>
                            <p class="text-orange-100 mb-6">Our Flagship Campus.</p>
                            <div class="space-y-2 text-sm text-slate-200 mb-6">
                                <div class="flex items-center gap-2"><i data-lucide="map-pin" class="w-4 h-4"></i> 100
                                    Alabama St SW, Atlanta</div>
                                <div class="flex items-center gap-2"><i data-lucide="phone" class="w-4 h-4"></i> (404)
                                    555-0199</div>
                            </div>
                            <a href="<?php echo site_url('/locations'); ?>"
                                class="block w-full bg-white text-slate-900 text-center font-bold py-3 rounded-xl hover:bg-orange-50 transition">View
                                Center</a>
                        </div>
                    </div>

                    <!-- Doral -->
                    <div
                        class="group relative rounded-[2.5rem] overflow-hidden h-[500px] shadow-lg hover:shadow-2xl transition duration-500">
                        <img src="https://images.unsplash.com/photo-1535498730771-e735b998cd64"
                            class="absolute w-full h-full object-cover transition duration-700 group-hover:scale-110"
                            alt="Doral Center">
                        <div class="absolute inset-0 bg-gradient-to-t from-cyan-900 via-cyan-900/20 to-transparent">
                        </div>
                        <div class="absolute bottom-0 p-8 w-full">
                            <span
                                class="bg-cyan-600 text-white text-xs font-bold px-3 py-1 rounded-full mb-3 inline-block">FL</span>
                            <h3 class="text-4xl font-bold text-white mb-2">Doral</h3>
                            <p class="text-cyan-100 mb-6">Sunshine & STEM.</p>
                            <div class="space-y-2 text-sm text-slate-200 mb-6">
                                <div class="flex items-center gap-2"><i data-lucide="map-pin" class="w-4 h-4"></i> 456
                                    Palm Dr, Doral, FL</div>
                                <div class="flex items-center gap-2"><i data-lucide="phone" class="w-4 h-4"></i> (305)
                                    555-0888</div>
                            </div>
                            <a href="<?php echo site_url('/doral'); ?>"
                                class="block w-full bg-white text-slate-900 text-center font-bold py-3 rounded-xl hover:bg-cyan-50 transition">View
                                Center</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="py-20 bg-indigo-900 text-white">
            <div class="max-w-4xl mx-auto px-6 text-center">
                <h2 class="text-4xl font-extrabold mb-6">Not Sure Which Location is Best?</h2>
                <p class="text-indigo-200 text-lg mb-10 max-w-2xl mx-auto">
                    Our team is here to help you find the perfect fit for your family.
                    Schedule a virtual consultation or give us a call today.
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="<?php echo site_url('/contact'); ?>"
                        class="bg-white text-indigo-900 font-bold px-8 py-4 rounded-xl hover:bg-indigo-50 transition shadow-xl">
                        Contact Admissions
                    </a>
                    <a href="tel:1-877-410-1002"
                        class="border-2 border-indigo-400 text-indigo-100 font-bold px-8 py-4 rounded-xl hover:bg-indigo-800/50 transition">
                        Call 877-410-1002
                    </a>
                </div>
            </div>
        </section>

        <?php get_footer(); ?>