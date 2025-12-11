<?php get_header(); ?>

<!-- HERO -->
<section class="py-24 bg-purple-900 text-white">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h1 class="text-5xl font-extrabold mb-6">Family & Staff Resources</h1>
        <p class="text-xl text-purple-200 max-w-2xl mx-auto">
            Tools, guides, and portals to keep our community connected and informed.
        </p>
    </div>
</section>

<!-- PORTALS -->
<section class="py-20 bg-white">
    <div class="max-w-5xl mx-auto px-6 grid md:grid-cols-2 gap-10">
        <!-- Parent Portal -->
        <a href="#"
            class="group p-10 rounded-3xl border-2 border-slate-100 hover:border-purple-500 transition shadow-lg hover:shadow-2xl bg-white text-center">
            <div
                class="w-20 h-20 bg-purple-100 text-purple-600 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition">
                <i data-lucide="users" class="w-10 h-10"></i>
            </div>
            <h2 class="text-2xl font-bold mb-3">Parent Portal</h2>
            <p class="text-slate-600 mb-6">Pay tuition, view daily reports, and manage attendance online.</p>
            <span class="text-purple-600 font-bold group-hover:underline">Login Now &rarr;</span>
        </a>

        <!-- Teacher Portal -->
        <a href="#"
            class="group p-10 rounded-3xl border-2 border-slate-100 hover:border-cyan-500 transition shadow-lg hover:shadow-2xl bg-white text-center">
            <div
                class="w-20 h-20 bg-cyan-100 text-cyan-600 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition">
                <i data-lucide="book-open" class="w-10 h-10"></i>
            </div>
            <h2 class="text-2xl font-bold mb-3">Teacher Portal</h2>
            <p class="text-slate-600 mb-6">Access curriculum guides, continuing education, and schedule requests.</p>
            <span class="text-cyan-600 font-bold group-hover:underline">Staff Login &rarr;</span>
        </a>
    </div>
</section>

<!-- LATEST NEWS (Placeholder for Blog Loop) -->
<section class="py-20 bg-slate-50">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-3xl font-bold mb-10 text-center">Latest News</h2>
        <div class="grid md:grid-cols-3 gap-8">
            <!-- Article 1 -->
            <article class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition">
                <img src="https://images.unsplash.com/photo-1503454537195-1dcabb73ffb9" class="w-full h-48 object-cover"
                    alt="Blog">
                <div class="p-6">
                    <span class="text-xs font-bold text-slate-400 uppercase">Education</span>
                    <h3 class="text-xl font-bold mt-2 mb-3">Importance of Sensory Play</h3>
                    <p class="text-slate-600 text-sm">Why getting messy is actually building critical brain pathways for
                        your toddler.</p>
                </div>
            </article>
            <!-- Article 2 -->
            <article class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition">
                <img src="https://images.unsplash.com/photo-1472162072942-cd5147eb3902" class="w-full h-48 object-cover"
                    alt="Blog">
                <div class="p-6">
                    <span class="text-xs font-bold text-slate-400 uppercase">Events</span>
                    <h3 class="text-xl font-bold mt-2 mb-3">Spring Festival Announced</h3>
                    <p class="text-slate-600 text-sm">Join us next Saturday for our annual family picnic and petting
                        zoo!</p>
                </div>
            </article>
            <!-- Article 3 -->
            <article class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition">
                <img src="https://images.unsplash.com/photo-1516627145497-ae6968895b74" class="w-full h-48 object-cover"
                    alt="Blog">
                <div class="p-6">
                    <span class="text-xs font-bold text-slate-400 uppercase">Nutrition</span>
                    <h3 class="text-xl font-bold mt-2 mb-3">Summer Menu Update</h3>
                    <p class="text-slate-600 text-sm">Our chefs are introducing new seasonal fruits and veggies starting
                        June 1st.</p>
                </div>
            </article>
        </div>
    </div>
</section>

<?php get_footer(); ?>