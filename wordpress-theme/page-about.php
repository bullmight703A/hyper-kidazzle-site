<?php get_header(); ?>

<!-- HERO -->
<section class="relative py-24 bg-slate-900 text-white overflow-hidden">
    <div class="absolute inset-0 opacity-20">
        <img src="https://images.unsplash.com/photo-1596425123982-cb2cb2aa993a" class="w-full h-full object-cover"
            alt="About Background">
    </div>
    <div class="relative max-w-7xl mx-auto px-6 text-center">
        <h1 class="text-5xl font-extrabold mb-6">Our Legacy of Excellence</h1>
        <p class="text-xl text-slate-300 max-w-2xl mx-auto">
            Since 1994, KIDazzle has been a beacon of independent, high-quality child care across the Southeast. We
            aren't a franchise; we are a family.
        </p>
    </div>
</section>

<!-- QUALITY PILLARS -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid md:grid-cols-2 gap-16 items-center mb-24" id="meals">
            <div class="rounded-[3rem] overflow-hidden shadow-2xl">
                <img src="https://images.unsplash.com/photo-1576158189873-196d2e078c52"
                    class="w-full h-full object-cover" alt="Healthy Meal">
            </div>
            <div>
                <div class="inline-flex p-3 rounded-2xl bg-orange-100 text-orange-600 mb-6">
                    <i data-lucide="utensils" class="w-8 h-8"></i>
                </div>
                <h2 class="text-4xl font-bold mb-6">Chef-Prepared Nutrition</h2>
                <p class="text-lg text-slate-600 leading-relaxed mb-6">
                    We believe that a healthy body fuels a healthy mind. Unlike many centers that rely on processed
                    snacks, our on-site chefs prepare hot, nutritious meals daily. From fresh fruits to balanced
                    lunches, we ensure every child gets the fuel they need to explore and grow.
                </p>
                <ul class="space-y-3 text-slate-700 font-medium">
                    <li class="flex items-center gap-2"><i data-lucide="check-circle"
                            class="text-green-500 w-5 h-5"></i>
                        Fresh ingredients, never frozen</li>
                    <li class="flex items-center gap-2"><i data-lucide="check-circle"
                            class="text-green-500 w-5 h-5"></i>
                        Dietary restrictions accommodated</li>
                    <li class="flex items-center gap-2"><i data-lucide="check-circle"
                            class="text-green-500 w-5 h-5"></i>
                        Family-style dining to teach manners</li>
                </ul>
            </div>
        </div>

        <div class="grid md:grid-cols-2 gap-16 items-center" id="safety">
            <div class="order-2 md:order-1">
                <div class="inline-flex p-3 rounded-2xl bg-green-100 text-green-600 mb-6">
                    <i data-lucide="shield-check" class="w-8 h-8"></i>
                </div>
                <h2 class="text-4xl font-bold mb-6">Uncompromising Safety</h2>
                <p class="text-lg text-slate-600 leading-relaxed mb-6">
                    Your child's safety is our absolute priority. Our facilities are equipped with state-of-the-art
                    secure entry systems, 24/7 monitoring, and rigorous staff vetting processes including FBI background
                    checks.
                </p>
                <a href="<?php echo site_url('/contact'); ?>"
                    class="text-indigo-600 font-bold hover:text-indigo-800 flex items-center gap-2">
                    Schedule a tour to see for yourself <i data-lucide="arrow-right" class="w-4 h-4"></i>
                </a>
            </div>
            <div class="order-1 md:order-2 rounded-[3rem] overflow-hidden shadow-2xl">
                <img src="https://images.unsplash.com/photo-1578345710609-bde8b4498305"
                    class="w-full h-full object-cover" alt="Safety Checks">
            </div>
        </div>
    </div>
</section>

<!-- STAFF SECTION -->
<section class="py-24 bg-slate-50" id="staff">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h2 class="text-4xl font-bold mb-16">Meet Our Leadership</h2>
        <div class="grid md:grid-cols-3 gap-8">
            <!-- Staff 1 -->
            <div class="bg-white p-8 rounded-3xl shadow-lg hover:-translate-y-2 transition duration-300">
                <div class="w-24 h-24 rounded-full bg-slate-200 mx-auto mb-6 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2"
                        class="w-full h-full object-cover" alt="Director">
                </div>
                <h3 class="text-xl font-bold mb-2">Sarah Jenkins</h3>
                <p class="text-indigo-600 font-medium mb-4">Regional Director</p>
                <p class="text-slate-500 text-sm">20+ years in early childhood education, specializing in curriculum
                    development.</p>
            </div>
            <!-- Staff 2 -->
            <div class="bg-white p-8 rounded-3xl shadow-lg hover:-translate-y-2 transition duration-300">
                <div class="w-24 h-24 rounded-full bg-slate-200 mx-auto mb-6 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d"
                        class="w-full h-full object-cover" alt="Director">
                </div>
                <h3 class="text-xl font-bold mb-2">Marcus Thorne</h3>
                <p class="text-indigo-600 font-medium mb-4">Atlanta Site Lead</p>
                <p class="text-slate-500 text-sm">Passionate about creating safe, engaging play environments for
                    toddlers.</p>
            </div>
            <!-- Staff 3 -->
            <div class="bg-white p-8 rounded-3xl shadow-lg hover:-translate-y-2 transition duration-300">
                <div class="w-24 h-24 rounded-full bg-slate-200 mx-auto mb-6 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80"
                        class="w-full h-full object-cover" alt="Director">
                </div>
                <h3 class="text-xl font-bold mb-2">Elena Rodriguez</h3>
                <p class="text-indigo-600 font-medium mb-4">Miami Site Lead</p>
                <p class="text-slate-500 text-sm">Bilingual educator focused on inclusive learning and arts integration.
                </p>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>