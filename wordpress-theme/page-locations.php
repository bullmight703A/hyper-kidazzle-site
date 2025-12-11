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
        </p>
    </div>
</section>

<!-- LOCATIONS GRID -->
<section class="py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-6 space-y-16">

        <!-- Memphis -->
        <article id="memphis" class="bg-white rounded-3xl overflow-hidden shadow-xl flex flex-col md:flex-row">
            <div class="md:w-1/2 h-64 md:h-auto relative">
                <img src="https://images.unsplash.com/photo-1596425123982-cb2cb2aa993a"
                    class="absolute inset-0 w-full h-full object-cover" alt="Memphis Center">
            </div>
            <div class="md:w-1/2 p-10 flex flex-col justify-center">
                <div class="text-indigo-600 font-bold tracking-wider mb-2">TENNESSEE</div>
                <h2 class="text-3xl font-extrabold text-slate-800 mb-4">Memphis</h2>
                <p class="text-slate-600 mb-6">
                    Our flagship Tennessee location offers spacious playgrounds and a dedicated music room.
                </p>
                <div class="space-y-3 mb-8">
                    <div class="flex items-start gap-3 text-slate-600">
                        <i data-lucide="map-pin" class="text-slate-400 shrink-0 mt-1"></i>
                        <span>123 Beale Street (Placeholder),<br>Memphis, TN 38103</span>
                    </div>
                </div>
                <a href="<?php echo site_url('/memphis'); ?>"
                    class="block text-center bg-indigo-600 text-white py-3 rounded-xl font-bold hover:bg-indigo-700 transition">
                    View Center Details
                </a>
            </div>
        </article>

        <!-- Atlanta -->
        <article id="atlanta" class="bg-white rounded-3xl overflow-hidden shadow-xl flex flex-col md:flex-row">
            <div class="md:w-1/2 h-64 md:h-auto relative">
                <img src="https://images.unsplash.com/photo-1575968770275-d831502049d4"
                    class="absolute inset-0 w-full h-full object-cover" alt="Atlanta Center">
            </div>
            <div class="md:w-1/2 p-10 flex flex-col justify-center">
                <div class="text-orange-600 font-bold tracking-wider mb-2">GEORGIA (HQ)</div>
                <h2 class="text-3xl font-extrabold text-slate-800 mb-4">Atlanta</h2>
                <p class="text-slate-600 mb-6">
                    Located in the heart of the city, our HQ features a state-of-the-art STEM lab and indoor gym.
                </p>
                <div class="space-y-3 mb-8">
                    <div class="flex items-start gap-3 text-slate-600">
                        <i data-lucide="map-pin" class="text-slate-400 shrink-0 mt-1"></i>
                        <span>100 Alabama St SW,<br>Atlanta, GA 30303</span>
                    </div>
                </div>
                <!-- West End Link (New) -->
                <div class="mb-4">
                    <a href="<?php echo site_url('/west-end'); ?>"
                        class="text-orange-600 font-bold hover:underline text-sm flex items-center gap-1">
                        Looking for our West End location? <i data-lucide="arrow-right" class="w-4 h-4"></i>
                    </a>
                </div>

                <a href="<?php echo site_url('/atlanta'); ?>"
                    class="block text-center bg-orange-500 text-white py-3 rounded-xl font-bold hover:bg-orange-600 transition">
                    View Center Details
                </a>
            </div>
        </article>

        <!-- Doral -->
        <article id="doral" class="bg-white rounded-3xl overflow-hidden shadow-xl flex flex-col md:flex-row">
            <div class="md:w-1/2 h-64 md:h-auto relative">
                <img src="https://images.unsplash.com/photo-1535498730771-e735b998cd64"
                    class="absolute inset-0 w-full h-full object-cover" alt="Miami Center">
            </div>
            <div class="md:w-1/2 p-10 flex flex-col justify-center">
                <div class="text-cyan-600 font-bold tracking-wider mb-2">FLORIDA</div>
                <h2 class="text-3xl font-extrabold text-slate-800 mb-4">Doral / Miami</h2>
                <p class="text-slate-600 mb-6">
                    A vibrant bilingual campus focusing on language immersion and outdoor environmental science.
                </p>
                <div class="space-y-3 mb-8">
                    <div class="flex items-start gap-3 text-slate-600">
                        <i data-lucide="map-pin" class="text-slate-400 shrink-0 mt-1"></i>
                        <span>456 Ocean Drive (Placeholder),<br>Miami, FL 33139</span>
                    </div>
                </div>
                <a href="<?php echo site_url('/doral'); ?>"
                    class="block text-center bg-cyan-500 text-white py-3 rounded-xl font-bold hover:bg-cyan-600 transition">
                    View Center Details
                </a>
            </div>
        </article>

    </div>
</section>

<?php get_footer(); ?>