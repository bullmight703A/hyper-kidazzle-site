<?php
/**
 * Template Name: Menu Hub Page
 *
 * @package kidazzle
 */

get_header();
?>

<main id="view-menu-hub" class="view-section active block">
    <!-- Hero Section -->
    <section class="relative py-24 md:py-32 text-center overflow-hidden bg-brand-cream border-b border-brand-ink/5">
        <div class="max-w-7xl mx-auto px-4 text-brand-ink">
            <div class="inline-flex items-center gap-2 bg-kidazzle-blue/10 border border-kidazzle-blue/20 px-4 py-1.5 rounded-full text-[11px] uppercase tracking-[0.2em] font-bold text-kidazzle-blue mb-6">
                <i class="fa-solid fa-apple-whole"></i> Nutrition & Dining
            </div>
            <h1 class="text-4xl md:text-6xl font-serif font-bold mb-4 text-brand-ink">
                Nourishing Young Minds & Bodies
            </h1>
            <p class="text-lg md:text-xl text-brand-ink/70 max-w-2xl mx-auto leading-relaxed">
                At KIDazzle, we believe healthy eating is the foundation of cognitive, emotional, and physical growth. Explore our food philosophy, classroom curriculum integration, and daily schedules.
            </p>
        </div>
    </section>

    <!-- Founder's Quote Card Section -->
    <section class="py-16 bg-white border-b border-brand-ink/5">
        <div class="max-w-4xl mx-auto px-4">
            <div class="relative bg-brand-cream p-8 md:p-12 rounded-3xl border border-brand-ink/5 shadow-xl text-center overflow-hidden">
                <!-- Large Quote Mark Decor -->
                <span class="absolute -top-6 left-6 text-9xl font-serif font-bold text-kidazzle-blue/5 pointer-events-none">“</span>
                
                <p class="text-2xl md:text-3xl font-serif italic text-brand-ink mb-6 relative z-10 leading-relaxed">
                    "I can cook, and I can clean, and I love children."
                </p>
                <div class="w-16 h-1 bg-kidazzle-red mx-auto mb-4 rounded-full"></div>
                <span class="text-xs uppercase tracking-widest font-extrabold text-brand-ink/50 block">KIDazzle Founder</span>
            </div>
        </div>
    </section>

    <!-- Core Philosophy Section -->
    <section class="py-20 bg-brand-cream border-b border-brand-ink/5">
        <div class="max-w-5xl mx-auto px-4">
            <h2 class="text-3xl font-serif font-bold text-brand-ink text-center mb-12">Our Food Philosophy</h2>
            
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="bg-white p-8 rounded-2xl border border-brand-ink/5 shadow-md hover:shadow-lg transition-all">
                    <div class="w-12 h-12 bg-kidazzle-blue/10 text-kidazzle-blue flex items-center justify-center rounded-full text-xl mb-6">
                        <i class="fa-solid fa-brain"></i>
                    </div>
                    <h3 class="font-serif font-bold text-xl text-brand-ink mb-3">Cognitive Fuel</h3>
                    <p class="text-sm text-brand-ink/70 leading-relaxed">
                        Nutrient-rich, clean energy is essential for early brain development. We design our meals to support sustained attention, learning capacity, and emotional balance throughout the school day.
                    </p>
                </div>
                
                <!-- Card 2 -->
                <div class="bg-white p-8 rounded-2xl border border-brand-ink/5 shadow-md hover:shadow-lg transition-all">
                    <div class="w-12 h-12 bg-kidazzle-green/10 text-kidazzle-green flex items-center justify-center rounded-full text-xl mb-6">
                        <i class="fa-solid fa-clipboard-check"></i>
                    </div>
                    <h3 class="font-serif font-bold text-xl text-brand-ink mb-3">USDA Standards</h3>
                    <p class="text-sm text-brand-ink/70 leading-relaxed">
                        All our daily menus meet or exceed the USDA Child and Adult Care Food Program (CACFP) guidelines. Our rotating breakfasts and fresh lunches are perfectly portioned for early childhood needs.
                    </p>
                </div>
                
                <!-- Card 3 -->
                <div class="bg-white p-8 rounded-2xl border border-brand-ink/5 shadow-md hover:shadow-lg transition-all">
                    <div class="w-12 h-12 bg-kidazzle-red/10 text-kidazzle-red flex items-center justify-center rounded-full text-xl mb-6">
                        <i class="fa-solid fa-heart-pulse"></i>
                    </div>
                    <h3 class="font-serif font-bold text-xl text-brand-ink mb-3">Healthy Habits</h3>
                    <p class="text-sm text-brand-ink/70 leading-relaxed">
                        By introducing a wide variety of fresh vegetables, whole grains, and lean proteins, we help children develop diverse palates and form healthy eating habits that last a lifetime.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Food in the Classroom & Curriculum -->
    <section class="py-20 bg-white border-b border-brand-ink/5">
        <div class="max-w-6xl mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-16 items-center">
                <!-- Images / Graphic mockup -->
                <div class="flex justify-center">
                    <div class="bg-brand-cream p-8 rounded-3xl border border-brand-ink/5 shadow-xl max-w-md">
                        <div class="flex items-center gap-4 mb-6">
                            <span class="text-4xl">🥦</span>
                            <div>
                                <h4 class="font-bold text-brand-ink text-lg">Curriculum Integration</h4>
                                <p class="text-xs text-brand-ink/50">Active learning through food and dining</p>
                            </div>
                        </div>
                        <ul class="space-y-4">
                            <li class="flex gap-3 text-sm text-brand-ink/70 leading-relaxed">
                                <span class="text-kidazzle-blue font-bold">✓</span>
                                <span><strong>Sensory Exploration:</strong> Touching, smelling, and identifying different textures of fresh fruits and vegetables.</span>
                            </li>
                            <li class="flex gap-3 text-sm text-brand-ink/70 leading-relaxed">
                                <span class="text-kidazzle-blue font-bold">✓</span>
                                <span><strong>Culinary Science:</strong> Simple, age-appropriate activities like mixing healthy yogurt bowls and learning about ingredients.</span>
                            </li>
                            <li class="flex gap-3 text-sm text-brand-ink/70 leading-relaxed">
                                <span class="text-kidazzle-blue font-bold">✓</span>
                                <span><strong>Seed-to-Table:</strong> Planting seeds and learning how vegetables grow from soil to our plates.</span>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <!-- Content Column -->
                <div>
                    <span class="text-kidazzle-blue font-bold uppercase tracking-widest text-xs mb-3 block">Interactive Learning</span>
                    <h2 class="text-3xl md:text-4xl font-serif font-bold text-brand-ink mb-6">Food in the Classroom</h2>
                    <p class="text-brand-ink/70 leading-relaxed mb-6">
                        We don't just serve food; we teach it. At KIDazzle, dining is an active part of our Creative Curriculum. Children learn mathematics through measuring ingredients, science through watching cooking transformations, and vocabulary by describing new tastes and textures.
                    </p>
                    <p class="text-brand-ink/70 leading-relaxed mb-6">
                        Family-style dining in our classrooms also fosters independence and social-emotional development. Children practice passing dishes, taking turns, serving themselves, and cleaning up their dining spaces.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Classroom Menus Portal -->
    <section class="py-24 bg-brand-cream text-center">
        <div class="max-w-4xl mx-auto px-4">
            <h2 class="text-3xl font-serif font-bold text-brand-ink mb-4">View Classroom Menus</h2>
            <p class="text-brand-ink/60 max-w-xl mx-auto leading-relaxed mb-12">
                Select your building below to view the interactive daily schedules, dietary guidelines, and print-friendly PDF menus.
            </p>
            
            <div class="flex justify-center">
                <!-- Summit & West End Card -->
                <div class="bg-white p-8 rounded-3xl border border-brand-ink/5 shadow-xl hover:shadow-2xl transition-all max-w-sm w-full text-center">
                    <div class="w-16 h-16 bg-kidazzle-blue/10 text-kidazzle-blue flex items-center justify-center rounded-full text-2xl mx-auto mb-6">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <h3 class="font-serif font-bold text-2xl text-brand-ink mb-3">Summit & West End</h3>
                    <p class="text-sm text-brand-ink/65 leading-relaxed mb-6">
                        Daily breakfast and lunch schedules for Summit and West End classrooms prepared daily by ChefAdvantage.
                    </p>
                    <a href="<?php echo esc_url(home_url('/menu/summit-west-end')); ?>" 
                       class="inline-block w-full py-4 bg-kidazzle-blue text-white font-bold rounded-full uppercase tracking-widest text-xs hover:bg-brand-ink transition-all shadow-md">
                        View Summit & West End Menu
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
