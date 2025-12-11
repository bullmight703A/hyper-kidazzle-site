<?php get_header(); ?>

<!-- HERO -->
<section class="relative py-24 bg-orange-900 text-white overflow-hidden">
    <div class="absolute inset-0 opacity-20">
        <img src="https://images.unsplash.com/photo-1575968770275-d831502049d4" class="w-full h-full object-cover"
            alt="Atlanta Center">
    </div>
    <div class="relative max-w-7xl mx-auto px-6 text-center">
        <div class="inline-block bg-white/20 px-4 py-1 rounded-full text-sm font-bold mb-4 tracking-wide">GEORGIA (HQ)
        </div>
        <h1 class="text-5xl font-extrabold mb-6">Atlanta Headquarters</h1>
        <p class="text-xl text-orange-200 max-w-2xl mx-auto">
            Setting the standard for early childhood education in the South.
        </p>
    </div>
</section>

<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-start">

        <!-- Info -->
        <div>
            <h2 class="text-3xl font-bold mb-6 text-slate-900">Innovation in Education</h2>
            <p class="text-slate-600 mb-6 text-lg leading-relaxed">
                As our flagship headquarters, the Atlanta campus serves as the training ground for our proprietary
                curriculum.
                Featuring an on-site STEM lab and a full-size indoor gymnasium, we provide unparalleled opportunities
                for growth.
            </p>

            <div class="grid grid-cols-2 gap-4 mb-10">
                <div class="bg-orange-50 p-6 rounded-2xl">
                    <i data-lucide="flask-conical" class="w-8 h-8 text-orange-600 mb-3"></i>
                    <h3 class="font-bold text-slate-900">STEM Lab</h3>
                    <p class="text-sm text-slate-600">robotics & nature</p>
                </div>
                <div class="bg-blue-50 p-6 rounded-2xl">
                    <i data-lucide="dumbbell" class="w-8 h-8 text-blue-600 mb-3"></i>
                    <h3 class="font-bold text-slate-900">Indoor Gym</h3>
                    <p class="text-sm text-slate-600">active play rain or shine</p>
                </div>
            </div>

            <h3 class="font-bold text-xl mb-4">Director's Note</h3>
            <div
                class="flex items-start gap-4 p-6 bg-slate-50 rounded-2xl border border-slate-100 italic text-slate-600">
                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d"
                    class="w-12 h-12 rounded-full object-cover shrink-0" alt="Director">
                <p>"We are building the leaders of tomorrow. Every activity, every meal, every interaction is
                    intentional."</p>
            </div>
        </div>

        <!-- Contact / Map -->
        <div class="bg-white rounded-3xl shadow-xl overflow-hidden border border-slate-100">
            <div class="p-8">
                <h3 class="text-2xl font-bold mb-6">Contact Information</h3>
                <div class="space-y-6">
                    <div class="flex items-start gap-4">
                        <div class="bg-orange-100 p-3 rounded-full text-orange-600"><i data-lucide="map-pin"
                                class="w-6 h-6"></i></div>
                        <div>
                            <span class="block font-bold text-slate-900">Address</span>
                            <span class="text-slate-600">100 Alabama St SW<br>Atlanta, GA 30303</span>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="bg-orange-100 p-3 rounded-full text-orange-600"><i data-lucide="phone"
                                class="w-6 h-6"></i></div>
                        <div>
                            <span class="block font-bold text-slate-900">Phone</span>
                            <span class="text-slate-600">(877) 410-1002</span>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="bg-orange-100 p-3 rounded-full text-orange-600"><i data-lucide="mail"
                                class="w-6 h-6"></i></div>
                        <div>
                            <span class="block font-bold text-slate-900">Email</span>
                            <span class="text-slate-600">atlanta@kidazzle.com</span>
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