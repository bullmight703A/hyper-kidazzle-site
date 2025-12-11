<?php get_header(); ?>

<!-- HERO -->
<section class="relative py-24 bg-green-50 text-slate-800 overflow-hidden">
    <div class="absolute inset-0 opacity-50">
        <img src="https://images.unsplash.com/photo-1503454537195-1dcabb73ffb9"
            class="w-full h-full object-cover grayscale opacity-20" alt="Preschool Texture">
    </div>
    <div class="relative max-w-7xl mx-auto px-6 text-center">
        <div
            class="inline-block bg-white px-4 py-1 rounded-full text-sm font-bold mb-4 tracking-wide shadow-sm text-green-600">
            3 - 5 YEARS</div>
        <h1 class="text-5xl font-extrabold mb-6">Preschool & Pre-K</h1>
        <p class="text-xl text-slate-600 max-w-2xl mx-auto">
            Where big ideas take flight. Preparing curious minds for kindergarten and beyond.
        </p>
    </div>
</section>

<section class="py-24 bg-white">
    <div class="max-w-6xl mx-auto px-6">

        <div class="grid md:grid-cols-2 gap-16 items-center mb-24">
            <div>
                <h2 class="text-3xl font-bold mb-6 text-slate-900">Ready for Launch</h2>
                <p class="text-slate-600 mb-6 text-lg leading-relaxed">
                    Our Pre-K program bridges the gap between play and structured learning.
                    Using the Creative Curriculum®, we introduce early literacy, math concepts, and scientific inquiry
                    in ways that feel like pure fun.
                </p>
                <div class="bg-green-50 p-6 rounded-2xl border border-green-100">
                    <h3 class="font-bold text-green-700 mb-2">Academic Pillars</h3>
                    <ul class="space-y-2 text-green-900 text-sm">
                        <li class="flex items-center gap-2">• Literacy: Phonics, storytelling, writing name</li>
                        <li class="flex items-center gap-2">• Math: Counting, patterns, simple addition</li>
                        <li class="flex items-center gap-2">• Science: Gardening, weather, simple machines</li>
                        <li class="flex items-center gap-2">• Social: Collaborative projects & conflict resolution</li>
                    </ul>
                </div>
            </div>
            <div
                class="rounded-[2.5rem] overflow-hidden shadow-2xl skew-y-3 transform hover:skew-y-0 transition duration-500">
                <img src="https://images.unsplash.com/photo-1516627145497-ae6968895b74"
                    class="w-full h-full object-cover" alt="Preschooler Reading">
            </div>
        </div>

        <div class="grid md:grid-cols-3 gap-8 mb-16">
            <div
                class="bg-white border-2 border-slate-100 p-8 rounded-3xl text-center hover:border-green-400 transition cursor-default group">
                <i data-lucide="book"
                    class="w-12 h-12 text-slate-300 mx-auto mb-4 group-hover:text-green-500 transition"></i>
                <h3 class="font-bold text-xl mb-2">Reading Ready</h3>
                <p class="text-slate-500 text-sm">Graduates leave fostering a love for books and recognition of sight
                    words.</p>
            </div>
            <div
                class="bg-white border-2 border-slate-100 p-8 rounded-3xl text-center hover:border-green-400 transition cursor-default group">
                <i data-lucide="calculator"
                    class="w-12 h-12 text-slate-300 mx-auto mb-4 group-hover:text-green-500 transition"></i>
                <h3 class="font-bold text-xl mb-2">Math Mindset</h3>
                <p class="text-slate-500 text-sm">Understanding numbers creates a foundation for logic and problem
                    solving.</p>
            </div>
            <div
                class="bg-white border-2 border-slate-100 p-8 rounded-3xl text-center hover:border-green-400 transition cursor-default group">
                <i data-lucide="users"
                    class="w-12 h-12 text-slate-300 mx-auto mb-4 group-hover:text-green-500 transition"></i>
                <h3 class="font-bold text-xl mb-2">Team Players</h3>
                <p class="text-slate-500 text-sm">Learning to share, listen, and lead within a respectful group.</p>
            </div>
        </div>

        <div class="bg-slate-900 text-white rounded-3xl p-12 text-center">
            <h2 class="text-3xl font-bold mb-4">Invest in their Future</h2>
            <p class="text-slate-300 mb-8 max-w-xl mx-auto">Spots for our Pre-K program fill up fast. Reserve your
                child's place for the upcoming semester.</p>
            <a href="<?php echo site_url('/contact'); ?>"
                class="inline-block bg-green-500 text-white px-10 py-4 rounded-full font-bold shadow-lg hover:bg-green-600 transition hover:scale-105">
                Apply Today
            </a>
        </div>

    </div>
</section>

<?php get_footer(); ?>