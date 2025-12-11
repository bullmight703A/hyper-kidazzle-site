<?php get_header(); ?>

<!-- HERO SECTION -->
<section class="relative h-[700px] flex items-center">
    <!-- Background -->
    <img src="https://images.unsplash.com/photo-1560785496-0c9018085c8f"
        class="absolute inset-0 w-full h-full object-cover" alt="Kids laughing">

    <div class="absolute inset-0 bg-gradient-to-r from-slate-900/90 via-slate-900/50 to-transparent"></div>

    <!-- Content -->
    <div class="relative max-w-3xl mx-auto px-6 text-white space-y-6 fade-in">
        <div class="flex space-x-3">
            <span class="bg-yellow-400 text-slate-900 font-bold px-4 py-1.5 rounded-full">Now Enrolling</span>
            <span class="bg-white/30 px-4 py-1.5 rounded-full font-semibold flex items-center space-x-2">
                <i data-lucide="star" class="text-yellow-300"></i>
                <span>Since 1994</span>
            </span>
        </div>

        <h1 class="text-6xl font-extrabold leading-tight">
            Where Learning<br>
            <span class="bg-gradient-to-r from-red-500 via-yellow-500 to-cyan-500 bg-clip-text text-transparent">
                is Fun!
            </span>
        </h1>

        <p class="text-xl text-slate-200 max-w-xl">
            From Memphis to Miami to Atlanta, we are an independent, premier learning academy nurturing
            bright minds for over three decades.
        </p>

        <div class="flex space-x-4">
            <a href="<?php echo site_url('/locations'); ?>"
                class="px-8 py-4 rounded-2xl bg-yellow-400 text-black font-bold hover:bg-yellow-500 shadow-xl">
                Find Your Center
            </a>
            <a href="<?php echo site_url('/about'); ?>"
                class="px-8 py-4 rounded-2xl bg-white text-slate-800 border border-slate-300 font-bold hover:border-indigo-400">
                Our Legacy
            </a>
        </div>
    </div>
</section>

<!-- SOUTHEAST POWERHOUSE -->
<section class="py-20 bg-slate-50">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-center text-4xl font-extrabold mb-16">Defining Excellence Across the Southeast</h2>

        <div class="grid md:grid-cols-3 gap-10">
            <!-- Memphis -->
            <a href="<?php echo site_url('/locations#memphis'); ?>"
                class="relative h-96 rounded-[2.5rem] overflow-hidden shadow-lg cursor-pointer group block">
                <img src="https://images.unsplash.com/photo-1596425123982-cb2cb2aa993a"
                    class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition" alt="Memphis">
                <div class="absolute bottom-0 p-8 bg-gradient-to-t from-indigo-900/80 to-transparent text-white w-full">
                    <h3 class="text-3xl font-bold">Memphis</h3>
                    <p class="text-indigo-200">Soul, Rhythm, & Rigor</p>
                </div>
            </a>

            <!-- Atlanta -->
            <a href="<?php echo site_url('/locations#atlanta'); ?>"
                class="relative h-[28rem] rounded-[2.5rem] overflow-hidden shadow-xl border-white border-4 cursor-pointer group block -mt-4">
                <img src="https://images.unsplash.com/photo-1575968770275-d831502049d4"
                    class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition" alt="Atlanta">
                <div class="absolute bottom-0 p-8 bg-gradient-to-t from-orange-900/80 to-transparent text-white w-full">
                    <h3 class="text-4xl font-bold">Atlanta</h3>
                    <p class="text-orange-200">Our Headquarters</p>
                </div>
            </a>

            <!-- Doral -->
            <a href="<?php echo site_url('/locations#doral'); ?>"
                class="relative h-96 rounded-[2.5rem] overflow-hidden shadow-lg cursor-pointer group block">
                <img src="https://images.unsplash.com/photo-1535498730771-e735b998cd64"
                    class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition"
                    alt="Miami / Doral">
                <div class="absolute bottom-0 p-8 bg-gradient-to-t from-cyan-900/80 to-transparent text-white w-full">
                    <h3 class="text-3xl font-bold">Doral</h3>
                    <p class="text-cyan-200">Sunshine & STEM</p>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- KIDAZZLE DIFFERENCE -->
<section class="py-24 bg-white">
    <div class="max-w-6xl mx-auto px-6">
        <h2 class="text-center text-5xl font-bold mb-16">The KIDazzle Difference</h2>

        <div class="grid md:grid-cols-4 gap-10">
            <!-- Chef Prepared -->
            <a href="<?php echo site_url('/about#meals'); ?>"
                class="p-8 rounded-[2rem] border-2 border-orange-100 hover:border-orange-400 transition cursor-pointer shadow-sm block text-center">
                <div
                    class="w-14 h-14 rounded-2xl bg-orange-50 text-orange-600 flex items-center justify-center mb-6 mx-auto">
                    <i data-lucide="utensils" class="w-7 h-7"></i>
                </div>
                <h3 class="text-xl font-bold">Chef-Prepared Meals</h3>
            </a>

            <!-- Curriculum -->
            <a href="<?php echo site_url('/programs#curriculum'); ?>"
                class="p-8 rounded-[2rem] border-2 border-cyan-100 hover:border-cyan-400 transition cursor-pointer shadow-sm block text-center">
                <div
                    class="w-14 h-14 rounded-2xl bg-cyan-50 text-cyan-600 flex items-center justify-center mb-6 mx-auto">
                    <i data-lucide="brain" class="w-7 h-7"></i>
                </div>
                <h3 class="text-xl font-bold">Creative Curriculum®</h3>
            </a>

            <!-- Safety -->
            <a href="<?php echo site_url('/about#safety'); ?>"
                class="p-8 rounded-[2rem] border-2 border-green-100 hover:border-green-400 transition cursor-pointer shadow-sm block text-center">
                <div
                    class="w-14 h-14 rounded-2xl bg-green-50 text-green-600 flex items-center justify-center mb-6 mx-auto">
                    <i data-lucide="shield-check" class="w-7 h-7"></i>
                </div>
                <h3 class="text-xl font-bold">Safety & Security</h3>
            </a>

            <!-- Staff -->
            <a href="<?php echo site_url('/about#staff'); ?>"
                class="p-8 rounded-[2rem] border-2 border-red-100 hover:border-red-400 transition cursor-pointer shadow-sm block text-center">
                <div class="w-14 h-14 rounded-2xl bg-red-50 text-red-600 flex items-center justify-center mb-6 mx-auto">
                    <i data-lucide="heart-handshake" class="w-7 h-7"></i>
                </div>
                <h3 class="text-xl font-bold">Dedicated Staff</h3>
            </a>
        </div>
    </div>
</section>

<!-- ANALYTICS MODULE -->
<section class="py-24 bg-slate-50">
    <div class="max-w-4xl mx-auto px-6 text-center">
        <h2 class="text-4xl font-extrabold mb-8">The Complexity of Child Care</h2>
        <p class="text-slate-600 mb-8">
            Visualized breakdown of what drives cost, staffing ratios, and learning quality.
        </p>

        <div class="flex justify-center space-x-4 mb-6">
            <button id="lineBtn"
                class="px-6 py-2 border rounded-xl font-semibold hover:bg-slate-100 chart-btn-active transition-colors">
                Line Graph
            </button>
            <button id="pieBtn" class="px-6 py-2 border rounded-xl font-semibold hover:bg-slate-100 transition-colors">
                Pie Chart
            </button>
        </div>

        <div class="bg-white rounded-3xl p-8 shadow-xl">
            <canvas id="kidazzleChart" height="130"></canvas>
        </div>
    </div>
</section>

<!-- CTA STRIP -->
<section class="py-16">
    <div
        class="max-w-6xl mx-auto px-6 bg-ombre-purple rounded-3xl p-12 flex flex-col md:flex-row justify-between items-center text-white shadow-2xl">
        <h3 class="text-3xl font-extrabold text-center md:text-left">Ready to Start Your Journey?</h3>

        <div class="flex space-x-4 mt-6 md:mt-0">
            <a href="<?php echo site_url('/locations'); ?>"
                class="bg-white text-purple-700 font-bold px-8 py-3 rounded-xl hover:bg-purple-50 transition">
                Book a Tour
            </a>
            <a href="<?php echo site_url('/contact'); ?>"
                class="border-2 border-white px-8 py-3 rounded-xl font-bold hover:bg-white/10 transition">
                Apply Now
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>