<?php get_header(); ?>

<!-- HERO -->
<section class="relative py-24 bg-green-800 text-white overflow-hidden">
    <div class="absolute inset-0 opacity-20">
        <img src="https://images.unsplash.com/photo-1502086223501-681a981c9b3a" class="w-full h-full object-cover"
            alt="Hampton Center">
    </div>
    <div class="relative max-w-7xl mx-auto px-6 text-center">
        <div class="inline-block bg-white/20 px-4 py-1 rounded-full text-sm font-bold mb-4 tracking-wide">HAMPTON, GA
        </div>
        <h1 class="text-5xl font-extrabold mb-6">Hampton Campus</h1>
        <p class="text-xl text-green-200 max-w-2xl mx-auto">
            Nature-inspired learning in a spacious, suburban setting.
        </p>
    </div>
</section>

<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="mb-10">
            <a href="<?php echo site_url('/locations'); ?>"
                class="inline-flex items-center text-green-600 font-bold hover:text-green-800 transition">
                <i data-lucide="arrow-left" class="w-4 h-4 mr-2"></i> Back to All Locations
            </a>
        </div>

        <div class="grid md:grid-cols-2 gap-16 items-start">
            <div>
                <h2 class="text-3xl font-bold mb-6 text-slate-900">Discover Hampton</h2>
                <p class="text-slate-600 mb-6 text-lg leading-relaxed">
                    Our Hampton location is a breath of fresh air. We emphasize outdoor education and environmental
                    stewardship,
                    with large playgrounds and gardening programs that connect children to nature.
                </p>
            </div>

            <div class="bg-white rounded-3xl shadow-xl overflow-hidden border border-slate-100">
                <div class="p-8">
                    <h3 class="text-2xl font-bold mb-6">Contact Information</h3>
                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div class="bg-green-100 p-3 rounded-full text-green-600"><i data-lucide="map-pin"
                                    class="w-6 h-6"></i></div>
                            <div>
                                <span class="block font-bold text-slate-900">Address</span>
                                <span class="text-slate-600">Hampton Locator (Placeholder)<br>Hampton, GA</span>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="bg-green-100 p-3 rounded-full text-green-600"><i data-lucide="phone"
                                    class="w-6 h-6"></i></div>
                            <div>
                                <span class="block font-bold text-slate-900">Phone</span>
                                <span class="text-slate-600">(770) 555-0300</span>
                            </div>
                        </div>
                    </div>
                    <a href="<?php echo site_url('/contact'); ?>"
                        class="mt-8 block w-full bg-slate-900 text-white text-center font-bold py-4 rounded-xl hover:bg-slate-800 transition">
                        Schedule a Tour
                    </a>
                </div>
                <div class="h-64 bg-slate-200 flex items-center justify-center text-slate-400">
                    <span class="flex items-center gap-2"><i data-lucide="map"></i> Map Embed (Coming Soon)</span>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>