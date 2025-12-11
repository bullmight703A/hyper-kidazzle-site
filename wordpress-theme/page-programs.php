<?php get_header(); ?>

<!-- HERO -->
<section class="relative py-24 bg-indigo-900 text-white overflow-hidden">
    <div class="absolute inset-0 opacity-20">
        <img src="https://images.unsplash.com/photo-1549488347-cb2cb2aa993a" class="w-full h-full object-cover"
            alt="Programs Background">
    </div>
    <div class="relative max-w-7xl mx-auto px-6 text-center">
        <h1 class="text-5xl font-extrabold mb-6">Programs for Every Stage</h1>
        <p class="text-xl text-indigo-200 max-w-2xl mx-auto">
            From first steps to first grade prep, our Creative Curriculum® is designed to spark curiosity and build
            lifelong confidence.
        </p>
    </div>
</section>

<!-- CURRICULUM OVERVIEW -->
<section class="py-20 bg-white" id="curriculum">
    <div class="max-w-4xl mx-auto px-6 text-center">
        <!-- Logo Placeholder for Creative Curriculum -->
        <div class="flex justify-center mb-8">
            <span class="bg-cyan-100 text-cyan-700 px-6 py-2 rounded-full font-bold text-sm tracking-wide">
                OFFICIAL PARTNER
            </span>
        </div>
        <h2 class="text-4xl font-bold mb-8">The Creative Curriculum® Difference</h2>
        <p class="text-lg text-slate-600 mb-12">
            We don't just "watch" your children; we teach them. Our research-based curriculum balances teacher-directed
            and child-initiated learning, emphasizing social-emotional development, literacy, and mathematics.
        </p>
    </div>
</section>

<!-- AGE GROUPS -->
<section class="py-16 bg-slate-50">
    <div class="max-w-7xl mx-auto px-6 space-y-24">

        <!-- Infants -->
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div class="rounded-3xl overflow-hidden shadow-xl">
                <img src="https://images.unsplash.com/photo-1555252333-9f8e92e65df9" class="w-full h-full object-cover"
                    alt="Infant Care">
            </div>
            <div>
                <h3 class="text-3xl font-bold text-slate-800 mb-4">Infants (6 wks - 12 mos)</h3>
                <p class="text-slate-600 mb-6">
                    Our infant program focuses on building secure attachments. Through gentle rocking, talking, and
                    sensory play, we lay the neural foundations for language and trust.
                </p>
                <ul class="space-y-2 text-slate-700 mb-6">
                    <li class="flex items-center gap-2"><i data-lucide="check" class="text-cyan-500 w-4 h-4"></i>
                        Individualized schedules</li>
                    <li class="flex items-center gap-2"><i data-lucide="check" class="text-cyan-500 w-4 h-4"></i> Daily
                        reports & photos</li>
                </ul>
                <a href="<?php echo site_url('/infants'); ?>"
                    class="text-indigo-600 font-bold hover:underline flex items-center gap-2">
                    Learn about Infant Care <i data-lucide="arrow-right" class="w-4 h-4"></i>
                </a>
            </div>
        </div>

        <!-- Toddlers -->
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div class="order-2 md:order-1">
                <h3 class="text-3xl font-bold text-slate-800 mb-4">Toddlers (1 - 2 yrs)</h3>
                <p class="text-slate-600 mb-6">
                    Curiosity takes center stage! We encourage exploration through music, art, and movement, helping
                    toddlers develop fine motor skills and social boundaries.
                </p>
                <ul class="space-y-2 text-slate-700 mb-6">
                    <li class="flex items-center gap-2"><i data-lucide="check" class="text-red-500 w-4 h-4"></i> Potty
                        training support</li>
                    <li class="flex items-center gap-2"><i data-lucide="check" class="text-red-500 w-4 h-4"></i> Outdoor
                        play & discovery</li>
                </ul>
                <a href="<?php echo site_url('/toddlers'); ?>"
                    class="text-indigo-600 font-bold hover:underline flex items-center gap-2">
                    Explore Toddler Program <i data-lucide="arrow-right" class="w-4 h-4"></i>
                </a>
            </div>
            <div class="order-1 md:order-2 rounded-3xl overflow-hidden shadow-xl">
                <img src="https://images.unsplash.com/photo-1551843073-4a9a5b6fcd5f" class="w-full h-full object-cover"
                    alt="Toddler Play">
            </div>
        </div>

        <!-- Preschool -->
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div class="rounded-3xl overflow-hidden shadow-xl">
                <img src="https://images.unsplash.com/photo-1503454537195-1dcabb73ffb9"
                    class="w-full h-full object-cover" alt="Preschool Learning">
            </div>
            <div>
                <h3 class="text-3xl font-bold text-slate-800 mb-4">Preschool (3 - 5 yrs)</h3>
                <p class="text-slate-600 mb-6">
                    Getting ready for big school. This program introduces structured learning in reading, science, and
                    math, while nurturing creativity and emotional intelligence.
                </p>
                <ul class="space-y-2 text-slate-700 mb-6">
                    <li class="flex items-center gap-2"><i data-lucide="check" class="text-yellow-500 w-4 h-4"></i> STEM
                        activities</li>
                    <li class="flex items-center gap-2"><i data-lucide="check" class="text-yellow-500 w-4 h-4"></i>
                        Collaborative projects</li>
                </ul>
                <a href="<?php echo site_url('/preschool'); ?>"
                    class="text-indigo-600 font-bold hover:underline flex items-center gap-2">
                    Preschool Details <i data-lucide="arrow-right" class="w-4 h-4"></i>
                </a>
            </div>
        </div>

    </div>
</section>

<!-- CTA -->
<section class="py-20 bg-white text-center">
    <div class="max-w-3xl mx-auto px-6">
        <h2 class="text-3xl font-bold mb-8">Not sure which program is right?</h2>
        <a href="<?php echo site_url('/contact'); ?>"
            class="bg-slate-900 text-white px-8 py-3 rounded-xl font-bold hover:bg-slate-700 transition">
            Talk to an Enrollment Specialist
        </a>
    </div>
</section>

<?php get_footer(); ?>