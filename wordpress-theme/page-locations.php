<?php get_header(); ?>

<!-- HERO -->
<section class="relative py-24 bg-green-900 text-white overflow-hidden">
    <div class="absolute inset-0 opacity-20">
        <img src="https://images.unsplash.com/photo-1476480862126-209bfaa8edc8" class="w-full h-full object-cover"
            alt="Map Background">
    </div>
    <div class="relative max-w-7xl mx-auto px-6 text-center">
        <h1 class="text-5xl font-extrabold mb-6">Our Centers</h1>
        <p class="text-xl text-green-200 max-w-2xl mx-auto">
            Conveniently located in major hubs across the Southeast. Find the KIDazzle nearest you.
        <section class="py-20 bg-indigo-900 text-white">
            <div class="max-w-4xl mx-auto px-6 text-center">
                <h2 class="text-4xl font-extrabold mb-6">Not Sure Which Location is Best?</h2>
                <p class="text-indigo-200 text-lg mb-10 max-w-2xl mx-auto">
                    Our team is here to help you find the perfect fit for your family.
                    Schedule a virtual consultation or give us a call today.
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="<?php echo site_url('/contact'); ?>"
                        class="bg-white text-indigo-900 font-bold px-8 py-4 rounded-xl hover:bg-indigo-50 transition shadow-xl">
                        Contact Admissions
                    </a>
                    <a href="tel:1-877-410-1002"
                        class="border-2 border-indigo-400 text-indigo-100 font-bold px-8 py-4 rounded-xl hover:bg-indigo-800/50 transition">
                        Call 877-410-1002
                    </a>
                </div>
            </div>
        </section>

        <?php get_footer(); ?>