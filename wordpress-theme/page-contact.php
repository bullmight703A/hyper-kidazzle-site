<?php get_header(); ?>

<!-- HERO -->
<section class="py-24 bg-slate-900 text-white">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h1 class="text-5xl font-extrabold mb-6">Let's Connect</h1>
        <p class="text-xl text-slate-300 max-w-2xl mx-auto">
            Ready to enroll or have questions? We're here to help.
        </p>
    </div>
</section>

<section class="py-24 bg-white">
    <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-16">

        <!-- Contact Info -->
        <div>
            <h2 class="text-3xl font-bold mb-8">Get in Touch</h2>
            <div class="space-y-8">
                <div class="flex items-start gap-4">
                    <div class="bg-indigo-100 p-3 rounded-full text-indigo-600">
                        <i data-lucide="phone" class="w-6 h-6"></i>
                    </div>
                    <div>
                        <h3 class="font-bold text-lg">Call Us</h3>
                        <p class="text-slate-600">877-410-1002</p>
                        <p class="text-slate-400 text-sm mt-1">Mon-Fri, 7am - 6pm EST</p>
                    </div>
                </div>

                <div class="flex items-start gap-4">
                    <div class="bg-indigo-100 p-3 rounded-full text-indigo-600">
                        <i data-lucide="mail" class="w-6 h-6"></i>
                    </div>
                    <div>
                        <h3 class="font-bold text-lg">Email Us</h3>
                        <p class="text-slate-600">admissions@kidazzle.com</p>
                    </div>
                </div>

                <div class="flex items-start gap-4">
                    <div class="bg-indigo-100 p-3 rounded-full text-indigo-600">
                        <i data-lucide="map-pin" class="w-6 h-6"></i>
                    </div>
                    <div>
                        <h3 class="font-bold text-lg">Headquarters</h3>
                        <p class="text-slate-600">100 Alabama St SW,<br>Atlanta, GA 30303</p>
                    </div>
                </div>
            </div>

            <!-- Map Placeholder -->
            <div class="mt-12 w-full h-64 bg-slate-200 rounded-3xl flex items-center justify-center text-slate-400">
                <span class="flex items-center gap-2"><i data-lucide="map"></i> Google Map Embed</span>
            </div>
        </div>

        <!-- Form -->
        <div class="bg-slate-50 p-10 rounded-3xl shadow-lg">
            <h3 class="text-2xl font-bold mb-6">Send a Message</h3>
            <form class="space-y-6">
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Full Name</label>
                    <input type="text"
                        class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                        placeholder="John Doe">
                </div>
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Email Address</label>
                    <input type="email"
                        class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                        placeholder="john@example.com">
                </div>
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Topic</label>
                    <select
                        class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        <option>Schedule a Tour</option>
                        <option>Tuition Inquiry</option>
                        <option>Careers</option>
                        <option>Other</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Message</label>
                    <textarea
                        class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 h-32"
                        placeholder="How can we help?"></textarea>
                </div>
                <button type="submit"
                    class="w-full bg-slate-900 text-white font-bold py-4 rounded-xl hover:bg-slate-700 transition shadow-lg">
                    Send Message
                </button>
            </form>
        </div>

    </div>
</section>

<?php get_footer(); ?>