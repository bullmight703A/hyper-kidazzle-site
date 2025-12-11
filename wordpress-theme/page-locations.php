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

        <!-- West End (New - Top Priority) -->
        <article id="west-end"
            class="bg-white rounded-3xl overflow-hidden shadow-xl flex flex-col md:flex-row border-4 border-indigo-100">
            <div class="md:w-1/2 h-64 md:h-auto relative">
                <img src="https://images.unsplash.com/photo-1572025442643-41583a05442c"
                    class="absolute inset-0 w-full h-full object-cover" alt="West End Center">
                <div
                    class="absolute top-4 left-4 bg-indigo-600 text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider shadow-lg">
                    Featured Campus
                </div>
            </div>
            <div class="md:w-1/2 p-10 flex flex-col justify-center">
                <div class="text-indigo-600 font-bold tracking-wider mb-2">GEORGIA</div>
                <h2 class="text-3xl font-extrabold text-slate-800 mb-4">West End Center</h2>
                <p class="text-slate-600 mb-6">
                    Our premier urban campus designed for modern families. Features extended hours (6:30 AM - 6:30 PM),
                    keyless entry security, and a parent lounge.
                </p>
                <div class="space-y-3 mb-8">
                    <div class="flex items-start gap-3 text-slate-600">
                        <i data-lucide="map-pin" class="text-slate-400 shrink-0 mt-1"></i>
                        <span>800 West End Blvd,<br>West End, GA</span>
                    </div>
                    <div class="flex items-start gap-3 text-slate-600">
                        <i data-lucide="phone" class="text-slate-400 shrink-0 mt-1"></i>
                        <span>(555) 123-4567</span>
                    </div>
                </div>
                <a href="<?php echo site_url('/west-end'); ?>"
                    class="block text-center bg-indigo-600 text-white py-3 rounded-xl font-bold hover:bg-indigo-700 transition shadow-lg hover:shadow-indigo-200">
                    View West End Details
                </a>
            </div>
        </article>

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

        <!-- Atlanta Federal Center (Renamed from Atlanta) -->
        <article id="atlanta-federal-center"
            class="bg-white rounded-3xl overflow-hidden shadow-xl flex flex-col md:flex-row">
            <div class="md:w-1/2 h-64 md:h-auto relative">
                <img src="https://images.unsplash.com/photo-1575968770275-d831502049d4"
                    class="absolute inset-0 w-full h-full object-cover" alt="Atlanta Federal Center">
            </div>
            <div class="md:w-1/2 p-10 flex flex-col justify-center">
                <div class="text-orange-600 font-bold tracking-wider mb-2">DOWNTOWN ATLANTA</div>
                <h2 class="text-3xl font-extrabold text-slate-800 mb-4">Atlanta Federal Center</h2>
                <p class="text-slate-600 mb-6">
                    Located within the Sam Nunn Federal Center, providing premier care for federal employees and
                    downtown professionals.
                </p>
                <div class="space-y-3 mb-8">
                    <div class="flex items-start gap-3 text-slate-600">
                        <i data-lucide="map-pin" class="text-slate-400 shrink-0 mt-1"></i>
                        <span>100 Alabama St SW,<br>Atlanta, GA 30303</span>
                    </div>
                </div>
                <a href="<?php echo site_url('/atlanta-federal-center'); ?>"
                    class="block text-center bg-orange-500 text-white py-3 rounded-xl font-bold hover:bg-orange-600 transition">
                    View Center Details
                </a>
            </div>
        </article>

        <!-- Summit (New) -->
        <article id="summit" class="bg-white rounded-3xl overflow-hidden shadow-xl flex flex-col md:flex-row">
            <div class="md:w-1/2 h-64 md:h-auto relative">
                <img src="https://images.unsplash.com/photo-1497215728101-856f4ea42174"
                    class="absolute inset-0 w-full h-full object-cover" alt="Summit Center">
            </div>
            <div class="md:w-1/2 p-10 flex flex-col justify-center">
                <div class="text-orange-600 font-bold tracking-wider mb-2">MIDTOWN ATLANTA</div>
                <h2 class="text-3xl font-extrabold text-slate-800 mb-4">Summit Building</h2>
                <p class="text-slate-600 mb-6">
                    Convenient care for corporate partners in the heart of Midtown's business district.
                </p>
                <div class="space-y-3 mb-8">
                    <div class="flex items-start gap-3 text-slate-600">
                        <i data-lucide="map-pin" class="text-slate-400 shrink-0 mt-1"></i>
                        <span>Midtown Locator (Placeholder),<br>Atlanta, GA 30308</span>
                    </div>
                </div>
                <a href="<?php echo site_url('/summit'); ?>"
                    class="block text-center bg-orange-500 text-white py-3 rounded-xl font-bold hover:bg-orange-600 transition">
                    View Center Details
                </a>
            </div>
        </article>

        <!-- Hampton (New) -->
        <article id="hampton" class="bg-white rounded-3xl overflow-hidden shadow-xl flex flex-col md:flex-row">
            <div class="md:w-1/2 h-64 md:h-auto relative">
                <img src="https://images.unsplash.com/photo-1502086223501-681a981c9b3a"
                    class="absolute inset-0 w-full h-full object-cover" alt="Hampton Center">
            </div>
            <div class="md:w-1/2 p-10 flex flex-col justify-center">
                <div class="text-orange-600 font-bold tracking-wider mb-2">GEORGIA</div>
                <h2 class="text-3xl font-extrabold text-slate-800 mb-4">Hampton</h2>
                <p class="text-slate-600 mb-6">
                    A spacious suburban campus featuring nature trails and large outdoor learning environments.
                </p>
                <div class="space-y-3 mb-8">
                    <div class="flex items-start gap-3 text-slate-600">
                        <i data-lucide="map-pin" class="text-slate-400 shrink-0 mt-1"></i>
                        <span>Hampton Locator (Placeholder),<br>Hampton, GA</span>
                    </div>
                </div>
                <a href="<?php echo site_url('/hampton'); ?>"
                    class="block text-center bg-orange-500 text-white py-3 rounded-xl font-bold hover:bg-orange-600 transition">
                    View Center Details
                </a>
            </div>
        </article>

        <!-- College Park (New) -->
        <article id="college-park" class="bg-white rounded-3xl overflow-hidden shadow-xl flex flex-col md:flex-row">
            <div class="md:w-1/2 h-64 md:h-auto relative">
                <img src="https://images.unsplash.com/photo-1588072432836-e10032774350"
                    class="absolute inset-0 w-full h-full object-cover" alt="College Park Center">
            </div>
            <div class="md:w-1/2 p-10 flex flex-col justify-center">
                <div class="text-orange-600 font-bold tracking-wider mb-2">GEORGIA</div>
                <h2 class="text-3xl font-extrabold text-slate-800 mb-4">College Park</h2>
                <p class="text-slate-600 mb-6">
                    Serving the airport corridor with flexible schedules for traveling families and staff.
                </p>
                <div class="space-y-3 mb-8">
                    <div class="flex items-start gap-3 text-slate-600">
                        <i data-lucide="map-pin" class="text-slate-400 shrink-0 mt-1"></i>
                        <span>College Park Locator (Placeholder),<br>College Park, GA</span>
                    </div>
                </div>
                <a href="<?php echo site_url('/college-park'); ?>"
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

<!-- CALL TO ACTION (CTA) -->
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