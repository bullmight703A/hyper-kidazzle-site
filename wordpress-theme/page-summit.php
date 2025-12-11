<?php get_header(); ?>

<!-- HERO -->
<section class="relative py-24 bg-orange-800 text-white overflow-hidden">
    <div class="absolute inset-0 opacity-20">
        <img src="https://images.unsplash.com/photo-1497215728101-856f4ea42174" class="w-full h-full object-cover"
            alt="Summit Center">
    </div>
    <div class="relative max-w-7xl mx-auto px-6 text-center">
        <div class="inline-block bg-white/20 px-4 py-1 rounded-full text-sm font-bold mb-4 tracking-wide">MIDTOWN
            ATLANTA</div>
        <h1 class="text-5xl font-extrabold mb-6">Summit Building</h1>
        <p class="text-xl text-orange-200 max-w-2xl mx-auto">
            World-class care in the heart of Midtown's business district.
        </p>
    </div>
</section>

<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="mb-10">
            <a href="<?php echo site_url('/locations'); ?>"
                class="inline-flex items-center text-orange-600 font-bold hover:text-orange-800 transition">
                <i data-lucide="arrow-left" class="w-4 h-4 mr-2"></i> Back to All Locations
            </a>
        </div>

        <div class="grid md:grid-cols-2 gap-16 items-start">
            <div>
                <h2 class="text-3xl font-bold mb-6 text-slate-900">The Summit Experience</h2>
                <p class="text-slate-600 mb-6 text-lg leading-relaxed">
                    Designed for the corporate parent, our Summit location balances convenience with uncompromising
                    quality.
                    We offer a stimulating environment that mirrors the energy of the city while providing a safe haven
                    for your child.
                </p>
            </div>

            <div class="bg-white rounded-3xl shadow-xl overflow-hidden border border-slate-100">
                <div class="p-8">
                    <h3 class="text-2xl font-bold mb-6">Contact Information</h3>
                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div class="bg-orange-100 p-3 rounded-full text-orange-600"><i data-lucide="map-pin"
                                    class="w-6 h-6"></i></div>
                            <div>
                                <span class="block font-bold text-slate-900">Address</span>
                                <span class="text-slate-600">Summit Locator (Placeholder)<br>Atlanta, GA 30308</span>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="bg-orange-100 p-3 rounded-full text-orange-600"><i data-lucide="phone"
                                    class="w-6 h-6"></i></div>
                            <div>
                                <span class="block font-bold text-slate-900">Phone</span>
                                <span class="text-slate-600">(404) 555-0500</span>
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