<?php get_header(); ?>

<!-- HERO -->
<section class="relative py-24 bg-pink-100 text-slate-800 overflow-hidden">
    <div class="absolute inset-0 opacity-50">
        <!-- Soft texture overlay -->
        <img src="https://images.unsplash.com/photo-1555252333-9f8e92e65df9"
            class="w-full h-full object-cover grayscale opacity-20" alt="Infant Texture">
    </div>
    <div class="relative max-w-7xl mx-auto px-6 text-center">
        <div
            class="inline-block bg-white px-4 py-1 rounded-full text-sm font-bold mb-4 tracking-wide shadow-sm text-pink-500">
            6 WEEKS - 12 MONTHS</div>
        <h1 class="text-5xl font-extrabold mb-6">Infant Care</h1>
        <p class="text-xl text-slate-600 max-w-2xl mx-auto">
            A safe, nurturing haven where your baby's first milestones are celebrated with love.
        </p>
    </div>
</section>

<section class="py-24 bg-white">
    <div class="max-w-6xl mx-auto px-6">

        <div class="grid md:grid-cols-2 gap-16 items-center mb-24">
            <div>
                <h2 class="text-3xl font-bold mb-6 text-slate-900">Building Secure Attachments</h2>
                <p class="text-slate-600 mb-6 text-lg leading-relaxed">
                    Research shows that consistent, loving care is crucial for brain development in the first year.
                    Our low ratios ensure your little one gets plenty of cuddles, eye contact, and one-on-one
                    interaction.
                </p>
                <div class="bg-pink-50 p-6 rounded-2xl border border-pink-100">
                    <h3 class="font-bold text-pink-700 mb-2">Daily Rhythm</h3>
                    <ul class="space-y-2 text-pink-900 text-sm">
                        <li class="flex items-center gap-2">• Sensory exploration (textures, soft sounds)</li>
                        <li class="flex items-center gap-2">• Tummy time for core strength</li>
                        <li class="flex items-center gap-2">• Music & gentle movement</li>
                        <li class="flex items-center gap-2">• Individualized naps & feeding</li>
                    </ul>
                </div>
            </div>
            <div
                class="rounded-[2.5rem] overflow-hidden shadow-2xl skew-y-3 transform hover:skew-y-0 transition duration-500">
                <img src="https://images.unsplash.com/photo-1544126566-475a109e1c32" class="w-full h-full object-cover"
                    alt="Happy Baby">
            </div>
        </div>

        <div class="text-center bg-slate-50 p-12 rounded-3xl">
            <h2 class="text-3xl font-bold mb-8">What Parents Love</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-2xl shadow-sm">
                    <div class="text-4xl mb-4">📸</div>
                    <h3 class="font-bold mb-2">Real-Time Photos</h3>
                    <p class="text-slate-500 text-sm">Updates delivered straight to your phone so you never miss a
                        smile.</p>
                </div>
                <div class="bg-white p-6 rounded-2xl shadow-sm">
                    <div class="text-4xl mb-4">🍼</div>
                    <h3 class="font-bold mb-2">Feed Tracking</h3>
                    <p class="text-slate-500 text-sm">Detailed logs of bottles, naps, and diaper changes.</p>
                </div>
                <div class="bg-white p-6 rounded-2xl shadow-sm">
                    <div class="text-4xl mb-4">🧼</div>
                    <h3 class="font-bold mb-2">Shoe-Free Zones</h3>
                    <p class="text-slate-500 text-sm">Floors kept sparkling clean for crawling explorers.</p>
                </div>
            </div>
        </div>

        <div class="mt-16 text-center">
            <a href="<?php echo site_url('/contact'); ?>"
                class="inline-block bg-pink-500 text-white px-10 py-4 rounded-full font-bold shadow-lg hover:bg-pink-600 transition hover:-translate-y-1">
                Schedule a Visit
            </a>
        </div>

    </div>
</section>

<?php get_footer(); ?>