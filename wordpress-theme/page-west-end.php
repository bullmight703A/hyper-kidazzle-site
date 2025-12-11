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
    <div class="max-w-7xl mx-auto px-6">
        <div class="mb-10">
            <a href="<?php echo site_url('/locations'); ?>"
                class="inline-flex items-center text-indigo-600 font-bold hover:text-indigo-800 transition">
                <i data-lucide="arrow-left" class="w-4 h-4 mr-2"></i> Back to All Locations
            </a>
        </div>
    </div>
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
                <div
                    class="w-full h-48 bg-slate-200 rounded-2xl flex items-center justify-center text-slate-400 overflow-hidden">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3317.9156365329354!2d-84.41872118852892!3d33.73699757316587!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88f503152c16c0cd%3A0xb38668fb068fc4de!2sKIDazzle%20Childcare%20Inc%20%7C%20West%20End!5e0!3m2!1sen!2sus!4v1765462283008!5m2!1sen!2sus"
                        width="600" height="450" style="border:0; width: 100%; height: 100%;" allowfullscreen=""
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                    GO HIGH LEVEL (GHL) FORM / CALENDAR
                    =============================================
                -->
                <div id="ghl-form-container" class="min-h-[600px] w-full">
                    <iframe src="https://api.leadconnectorhq.com/widget/booking/QGN3ewkDzTOKKsOH93q6"
                        style="width: 100%;border:none;overflow: hidden; height: 100%; min-height: 600px;"
                        scrolling="no" id="msgsndr-calendar"></iframe>
                </div>
                <!-- End GHL Embed -->

            </div>
        </div>

    </div>
</section>

<?php get_footer(); ?>