<?php get_header(); ?>

<!-- HERO -->
<section class="relative py-24 bg-teal-800 text-white overflow-hidden">
    <div class="absolute inset-0 opacity-20">
        <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655" class="w-full h-full object-cover"
            alt="Careers Background">
    </div>
    <div class="relative max-w-7xl mx-auto px-6 text-center">
        <h1 class="text-5xl font-extrabold mb-6">Join Our Family</h1>
        <p class="text-xl text-teal-100 max-w-2xl mx-auto">
            Build a career that matters. We're looking for passionate educators to shape the future.
        </p>
    </div>
</section>

<!-- BENEFITS -->
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-slate-900">Why Work at KIDazzle?</h2>
        </div>

        <div class="grid md:grid-cols-3 gap-8 mb-16">
            <!-- Benefit 1 -->
            <div class="p-8 bg-slate-50 rounded-3xl text-center hover:shadow-lg transition">
                <div
                    class="w-14 h-14 bg-teal-100 text-teal-600 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i data-lucide="graduation-cap" class="w-7 h-7"></i>
                </div>
                <h3 class="text-xl font-bold mb-4">Professional Growth</h3>
                <p class="text-slate-600">Paid training, CDA sponsorship, and clear pathways to leadership roles.</p>
            </div>
            <!-- Benefit 2 -->
            <div class="p-8 bg-slate-50 rounded-3xl text-center hover:shadow-lg transition">
                <div
                    class="w-14 h-14 bg-teal-100 text-teal-600 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i data-lucide="heart" class="w-7 h-7"></i>
                </div>
                <h3 class="text-xl font-bold mb-4">Competitive Benefits</h3>
                <p class="text-slate-600">Health insurance, paid time off, and discounted child care for staff.</p>
            </div>
            <!-- Benefit 3 -->
            <div class="p-8 bg-slate-50 rounded-3xl text-center hover:shadow-lg transition">
                <div
                    class="w-14 h-14 bg-teal-100 text-teal-600 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i data-lucide="smile" class="w-7 h-7"></i>
                </div>
                <h3 class="text-xl font-bold mb-4">Supportive Culture</h3>
                <p class="text-slate-600">We are a family-owned business that values every team member's voice.</p>
            </div>
        </div>

        <!-- APPLY FORM -->
        <div class="max-w-3xl mx-auto bg-white border border-slate-200 rounded-[2rem] p-10 shadow-xl">
            <h3 class="text-2xl font-bold mb-6 text-center">Apply Now</h3>
            <p class="text-center text-slate-500 mb-8">Send us your resume and we'll be in touch!</p>

            <form class="space-y-6">
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-2">First Name</label>
                        <input type="text"
                            class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-teal-500 focus:ring-2 focus:ring-teal-200 outline-none transition"
                            placeholder="Jane">
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-2">Last Name</label>
                        <input type="text"
                            class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-teal-500 focus:ring-2 focus:ring-teal-200 outline-none transition"
                            placeholder="Doe">
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Email Address</label>
                    <input type="email"
                        class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-teal-500 focus:ring-2 focus:ring-teal-200 outline-none transition"
                        placeholder="jane@example.com">
                </div>
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Position of Interest</label>
                    <select
                        class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-teal-500 focus:ring-2 focus:ring-teal-200 outline-none transition">
                        <option>Lead Teacher</option>
                        <option>Assistant Teacher</option>
                        <option>Center Director</option>
                        <option>Cook / Drivers</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Upload Resume</label>
                    <input type="file" class="w-full px-4 py-3 rounded-xl border border-slate-300 bg-slate-50">
                </div>
                <button type="button"
                    class="w-full bg-teal-600 hover:bg-teal-700 text-white font-bold py-4 rounded-xl transition shadow-lg">Submit
                    Application</button>
            </form>
        </div>
    </div>
</section>

<!-- MAIN CONTENT (Editable in WordPress) -->
<section class="py-20">
    <div class="max-w-7xl mx-auto px-6">
        <?php
        while (have_posts()):
            the_post();
            the_content();
        endwhile;
        ?>
    </div>
</section>

<?php get_footer(); ?>