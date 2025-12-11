<?php get_header(); ?>

<!-- HERO -->
<section class="relative py-24 bg-yellow-50 text-slate-800 overflow-hidden">
    <div class="absolute inset-0 opacity-50">
        <img src="https://images.unsplash.com/photo-1551843073-4a9a5b6fcd5f"
            class="w-full h-full object-cover grayscale opacity-20" alt="Toddler Texture">
    </div>
    <div class="relative max-w-7xl mx-auto px-6 text-center">
        <div
            class="inline-block bg-white px-4 py-1 rounded-full text-sm font-bold mb-4 tracking-wide shadow-sm text-yellow-600">
            12 MONTHS - 2 YEARS</div>
        <h1 class="text-5xl font-extrabold mb-6">Toddler Explorers</h1>
        <p class="text-xl text-slate-600 max-w-2xl mx-auto">
            Toddlers are busy scientists! We provide the safe laboratory they need to test, try, and learn.
        </p>
    </div>
</section>

<section class="py-24 bg-white">
    <div class="max-w-6xl mx-auto px-6">

        <div class="grid md:grid-cols-2 gap-16 items-center mb-24">
            <div
                class="order-2 md:order-1 rounded-[2.5rem] overflow-hidden shadow-2xl -skew-y-3 transform hover:skew-y-0 transition duration-500">
                <img src="https://images.unsplash.com/photo-1566004100631-35d015d6a491"
                    class="w-full h-full object-cover" alt="Toddler Painting">
            </div>
            <div class="order-1 md:order-2">
                <h2 class="text-3xl font-bold mb-6 text-slate-900">Curiosity in Action</h2>
                <p class="text-slate-600 mb-6 text-lg leading-relaxed">
                    This is the age of "Why?" and "Mine!". Our curriculum channels their boundless energy into
                    constructive learning, focusing on language bursts, social sharing, and self-help skills.
                </p>
                <div class="bg-yellow-50 p-6 rounded-2xl border border-yellow-100">
                    <h3 class="font-bold text-yellow-700 mb-2">Key Focus Areas</h3>
                    <ul class="space-y-2 text-yellow-900 text-sm">
                        <li class="flex items-center gap-2">• Language explosion (songs, stories)</li>
                        <li class="flex items-center gap-2">• Fine motor skills (stacking, pouring)</li>
                        <li class="flex items-center gap-2">• Emotional regulation support</li>
                        <li class="flex items-center gap-2">• Potty training partnership</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="bg-indigo-900/5 p-12 rounded-3xl">
            <h2 class="text-3xl font-bold mb-8 text-center text-slate-900">A typical day for a Twos Student</h2>
            <div class="space-y-4 max-w-2xl mx-auto">
                <div class="flex gap-4 items-center bg-white p-4 rounded-xl shadow-sm">
                    <span class="font-bold text-indigo-500 w-20">8:30 AM</span>
                    <span class="text-slate-700">Circle Time (Songs & Weather)</span>
                </div>
                <div class="flex gap-4 items-center bg-white p-4 rounded-xl shadow-sm">
                    <span class="font-bold text-indigo-500 w-20">9:00 AM</span>
                    <span class="text-slate-700">Center Play (Blocks, Dramatic Play, Art)</span>
                </div>
                <div class="flex gap-4 items-center bg-white p-4 rounded-xl shadow-sm">
                    <span class="font-bold text-indigo-500 w-20">10:30 AM</span>
                    <span class="text-slate-700">Outdoor recess & gross motor</span>
                </div>
                <div class="flex gap-4 items-center bg-white p-4 rounded-xl shadow-sm">
                    <span class="font-bold text-indigo-500 w-20">12:00 PM</span>
                    <span class="text-slate-700">Lunch & Nap</span>
                </div>
            </div>
        </div>

        <div class="mt-16 text-center">
            <a href="<?php echo site_url('/contact'); ?>"
                class="inline-block bg-yellow-400 text-slate-900 px-10 py-4 rounded-full font-bold shadow-lg hover:bg-yellow-500 transition hover:-translate-y-1">
                Enroll Your Toddler
            </a>
        </div>

    </div>
</section>

<?php get_footer(); ?>