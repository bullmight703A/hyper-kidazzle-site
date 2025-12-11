<?php get_header(); ?>

<!-- HERO -->
<section class="relative py-24 bg-cyan-900 text-white overflow-hidden">
    <div class="absolute inset-0 opacity-20">
        <img src="https://images.unsplash.com/photo-1535498730771-e735b998cd64" class="w-full h-full object-cover"
            alt="Doral Center">
    </div>
    <div class="relative max-w-7xl mx-auto px-6 text-center">
        <div class="inline-block bg-white/20 px-4 py-1 rounded-full text-sm font-bold mb-4 tracking-wide">FLORIDA</div>
        <h1 class="text-5xl font-extrabold mb-6">Doral / Miami Campus</h1>
        <p class="text-xl text-cyan-200 max-w-2xl mx-auto">
            Bilingual excellence in the Sunshine State.
        </p>
    </div>
</section>

<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-start">

        <!-- Info -->
        <div>
            <h2 class="text-3xl font-bold mb-6 text-slate-900">Global Citizens Start Here</h2>
            <p class="text-slate-600 mb-6 text-lg leading-relaxed">
                Our Doral campus offers a fully bilingual immersion program (English/Spanish).
                We take full advantage of the beautiful Florida weather with an expanded outdoor curriculum
                focusing on marine biology and environmental stewardship.
            </p>

            <div class="grid grid-cols-2 gap-4 mb-10">
                <div class="bg-cyan-50 p-6 rounded-2xl">
                    <i data-lucide="globe" class="w-8 h-8 text-cyan-600 mb-3"></i>
                    <h3 class="font-bold text-slate-900">Bilingual</h3>
                    <p class="text-sm text-slate-600">English & Spanish</p>
                </div>
                <div class="bg-green-50 p-6 rounded-2xl">
                    <i data-lucide="sun" class="w-8 h-8 text-green-600 mb-3"></i>
                    <h3 class="font-bold text-slate-900">Eco-Smart</h3>
                    <p class="text-sm text-slate-600">gardening & nature</p>
                </div>
            </div>

            <h3 class="font-bold text-xl mb-4">Director's Note</h3>
            <div
                class="flex items-start gap-4 p-6 bg-slate-50 rounded-2xl border border-slate-100 italic text-slate-600">
                <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80"
                    class="w-12 h-12 rounded-full object-cover shrink-0" alt="Director">
                <p>"Language opens doors. By immersing children in a second language early, we double their
                    opportunities for the future."</p>
            </div>
        </div>

        <!-- Contact / Map -->
        <div class="bg-white rounded-3xl shadow-xl overflow-hidden border border-slate-100">
            <div class="p-8">
                <h3 class="text-2xl font-bold mb-6">Contact Information</h3>
                <div class="space-y-6">
                    <div class="flex items-start gap-4">
                        <div class="bg-cyan-100 p-3 rounded-full text-cyan-600"><i data-lucide="map-pin"
                                class="w-6 h-6"></i></div>
                        <div>
                            <span class="block font-bold text-slate-900">Address</span>
                            <span class="text-slate-600">456 Ocean Drive (Placeholder)<br>Miami, FL 33139</span>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="bg-cyan-100 p-3 rounded-full text-cyan-600"><i data-lucide="phone"
                                class="w-6 h-6"></i></div>
                        <div>
                            <span class="block font-bold text-slate-900">Phone</span>
                            <span class="text-slate-600">(305) 555-0199</span>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="bg-cyan-100 p-3 rounded-full text-cyan-600"><i data-lucide="mail"
                                class="w-6 h-6"></i></div>
                        <div>
                            <span class="block font-bold text-slate-900">Email</span>
                            <span class="text-slate-600">doral@kidazzle.com</span>
                        </div>
                    </div>
                </div>

                <a href="<?php echo site_url('/contact'); ?>"
                    class="mt-8 block w-full bg-slate-900 text-white text-center font-bold py-4 rounded-xl hover:bg-slate-800 transition">
                    Book a Tour
                </a>
            </div>
            <div class="h-64 bg-slate-200 flex items-center justify-center text-slate-400">
                <span class="flex items-center gap-2"><i data-lucide="map"></i> Map Embed</span>
            </div>
        </div>

    </div>
</section>

<?php get_footer(); ?>