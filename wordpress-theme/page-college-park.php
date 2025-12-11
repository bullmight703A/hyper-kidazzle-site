<?php get_header(); ?>

<!-- HERO -->
<section class="relative py-24 bg-blue-900 text-white overflow-hidden">
    <div class="absolute inset-0 opacity-20">
        <img src="https://images.unsplash.com/photo-1588072432836-e10032774350" class="w-full h-full object-cover"
            alt="College Park Center">
    </div>
    <div class="relative max-w-7xl mx-auto px-6 text-center">
        <div class="inline-block bg-white/20 px-4 py-1 rounded-full text-sm font-bold mb-4 tracking-wide">COLLEGE PARK
        </div>
        <h1 class="text-5xl font-extrabold mb-6">College Park Campus</h1>
        <p class="text-xl text-blue-200 max-w-2xl mx-auto">
            Flexible, high-quality care near Hartsfield-Jackson airport.
        </p>
    </div>
</section>

<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="mb-10">
            <a href="<?php echo site_url('/locations'); ?>"
                class="inline-flex items-center text-blue-600 font-bold hover:text-blue-800 transition">
                <i data-lucide="arrow-left" class="w-4 h-4 mr-2"></i> Back to All Locations
            </a>
        </div>

        <div class="grid md:grid-cols-2 gap-16 items-start">
            <div>
                <h2 class="text-3xl font-bold mb-6 text-slate-900">About College Park</h2>
                <p class="text-slate-600 mb-6 text-lg leading-relaxed">
                    We understand the unique needs of airport employees and traveling families.
                    Our College Park center offers extended hours and a dynamic curriculum that keeps children engaged
                    and learning.
                </p>
            </div>

            <div class="bg-white rounded-3xl shadow-xl overflow-hidden border border-slate-100">
                <div class="p-8">
                    <h3 class="text-2xl font-bold mb-6">Contact Information</h3>
                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div class="bg-blue-100 p-3 rounded-full text-blue-600"><i data-lucide="map-pin"
                                    class="w-6 h-6"></i></div>
                            <div>
                                <span class="block font-bold text-slate-900">Address</span>
                                <span class="text-slate-600">College Park Locator (Placeholder)<br>College Park,
                                    GA</span>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="bg-blue-100 p-3 rounded-full text-blue-600"><i data-lucide="phone"
                                    class="w-6 h-6"></i></div>
                            <div>
                                <span class="block font-bold text-slate-900">Phone</span>
                                <span class="text-slate-600">(404) 555-0400</span>
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