<?php get_header(); ?>

<!-- HERO -->
<section class="relative py-24 bg-slate-900 text-white overflow-hidden">
    <div class="absolute inset-0 opacity-20">
        <!-- Placeholder image for West End - urban/city vibe -->
        <img src="https://images.unsplash.com/photo-1572025442643-41583a05442c" class="w-full h-full object-cover"
            alt="West End Center">
    </div>
    <div class="relative max-w-7xl mx-auto px-6 text-center">
        <h1 class="text-5xl font-extrabold mb-6">West End Center</h1>
        <p class="text-xl text-slate-300 max-w-2xl mx-auto">
            Conveniently located for busy families, offering premier care in the heart of the city.
        </p>
    </div>
</section>

<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-16">

        <!-- Location Info -->
        <div>
            <h2 class="text-3xl font-bold mb-6 text-slate-900">About Our West End Campus</h2>
            <p class="text-slate-600 mb-6 text-lg leading-relaxed">
                The West End KIDazzle center is designed for the modern family. With extended hours,
                easy drop-off zones, and a facility maximizing both indoor and outdoor learning spaces,
                we bring the highest standard of child care right to your neighborhood.
            </p>

            <ul class="space-y-4 mb-10">
                <li class="flex items-center gap-3">
                    <div class="bg-indigo-100 p-2 rounded-full text-indigo-600"><i data-lucide="clock"
                            class="w-5 h-5"></i></div>
                    <span class="text-slate-700 font-medium">Extended Hours: 6:30 AM - 6:30 PM</span>
                </li>
                <li class="flex items-center gap-3">
                    <div class="bg-indigo-100 p-2 rounded-full text-indigo-600"><i data-lucide="shield"
                            class="w-5 h-5"></i></div>
                    <span class="text-slate-700 font-medium">Secure Keyless Entry</span>
                </li>
                <li class="flex items-center gap-3">
                    <div class="bg-indigo-100 p-2 rounded-full text-indigo-600"><i data-lucide="coffee"
                            class="w-5 h-5"></i></div>
                    <span class="text-slate-700 font-medium">Parent Lounge & WiFi</span>
                </li>
            </ul>

            <div class="bg-slate-50 p-8 rounded-3xl border border-slate-100">
                <h3 class="text-xl font-bold mb-4">Visit Us</h3>
                <div class="space-y-3 mb-6">
                    <div class="flex items-start gap-3 text-slate-600">
                        <i data-lucide="map-pin" class="text-slate-400 shrink-0 mt-1"></i>
                        <span>800 West End Blvd (Placeholder),<br>City, ST 12345</span>
                    </div>
                    <div class="flex items-center gap-3 text-slate-600">
                        <i data-lucide="phone" class="text-slate-400 shrink-0"></i>
                        <span>(555) 123-4567</span>
                    </div>
                </div>
                <div class="w-full h-48 bg-slate-200 rounded-2xl flex items-center justify-center text-slate-400">
                    <span class="flex items-center gap-2"><i data-lucide="map"></i> Map Embed</span>
                </div>
            </div>
        </div>

        <!-- GHL Form Integration Area -->
        <div class="bg-indigo-50 p-1 rounded-3xl shadow-xl relative overflow-hidden">
            <div class="bg-white rounded-[1.3rem] h-full p-8 md:p-10">
                <div class="mb-8 text-center">
                    <h3 class="text-2xl font-bold text-slate-900 mb-2">Schedule a Tour</h3>
                    <p class="text-slate-500 text-sm">Fill out the form below to book your visit immediately.</p>
                </div>

                <!-- 
                    =============================================
                    GO HIGH LEVEL (GHL) FORM EMBED CODE GOES HERE 
                    =============================================
                    Instruction: Replace the div below with your GHL script/iframe.
                -->
                <div id="ghl-form-container"
                    class="border-2 border-dashed border-indigo-200 rounded-xl p-10 flex flex-col items-center justify-center text-center bg-indigo-50/50 min-h-[400px]">
                    <div class="bg-white p-4 rounded-full shadow-sm mb-4">
                        <i data-lucide="file-code" class="w-8 h-8 text-indigo-500"></i>
                    </div>
                    <h4 class="font-bold text-indigo-900 mb-2">GHL Form Area</h4>
                    <p class="text-sm text-indigo-700 max-w-xs">
                        This is the designated space for your GoHighLevel form.
                        Embed your script here in the code editor.
                    </p>
                </div>
                <!-- End GHL Embed -->

            </div>
        </div>

    </div>
</section>

<?php get_footer(); ?>