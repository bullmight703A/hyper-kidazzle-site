<?php
/**
 * Template Name: Curriculum
 * The Curriculum page template for KIDazzle Child Care
 * @package KIDWEB
 */
get_header();
?>

<!-- Header / Hero Section -->
<div class="relative py-32 text-center overflow-hidden">
    <!-- Background Image -->
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1587654780291-39c940483713?ixlib=rb-4.0.3&auto=format&fit=crop&w=3840&q=100"
            alt="Toddlers engaged in creative learning with blocks" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-b from-cyan-900/90 via-cyan-900/50 to-cyan-900/90"></div>
    </div>

    <div class="relative z-10 container mx-auto px-4 text-white">
        <i data-lucide="brain" class="w-16 h-16 mx-auto mb-4 text-cyan-400"></i>
        <h1 class="text-5xl md:text-6xl font-extrabold mb-6">The Creative Curriculum®</h1>
        <p class="text-xl md:text-2xl text-cyan-100 max-w-3xl mx-auto drop-shadow-md">A research-based, whole-child
            approach that turns every moment into a learning opportunity.</p>
    </div>
</div>

<div class="container mx-auto px-4 py-16 max-w-6xl space-y-24">

    <!-- Philosophy Section -->
    <section class="grid md:grid-cols-2 gap-12 items-center">
        <div>
            <h2 class="text-3xl font-bold text-slate-900 mb-6">More Than Just Play</h2>
            <p class="text-lg text-slate-600 leading-relaxed mb-6">
                At KIDazzle, we don't just "watch" children; we actively engage them. Our philosophy is rooted in the
                belief that children learn best through active exploration and interaction with their environment.
            </p>
            <p class="text-lg text-slate-600 leading-relaxed">
                Using the nationally recognized <strong>Creative Curriculum®</strong>, we balance teacher-directed
                instruction with child-initiated learning. This ensures that every activity—whether building with blocks
                or reading a story—supports specific developmental goals.
            </p>
        </div>
        <div class="bg-cyan-50 rounded-[3rem] p-10 border border-cyan-100 shadow-sm">
            <h3 class="text-xl font-bold text-cyan-900 mb-4 flex items-center gap-2"><i data-lucide="award"
                    class="text-yellow-500"></i> Why It Works</h3>
            <ul class="space-y-4">
                <li class="flex items-start gap-3">
                    <i data-lucide="check-circle" class="w-6 h-6 text-green-500 mt-1 flex-shrink-0"></i>
                    <span class="text-slate-700"><strong>Individualized:</strong> Teachers adapt lessons to fit each
                        child's unique learning style and pace.</span>
                </li>
                <li class="flex items-start gap-3">
                    <i data-lucide="check-circle" class="w-6 h-6 text-green-500 mt-1 flex-shrink-0"></i>
                    <span class="text-slate-700"><strong>Research-Based:</strong> Aligned with state standards in GA
                        (GELDS), TN (TN-ELDS), and FL (Early Learning Standards).</span>
                </li>
                <li class="flex items-start gap-3">
                    <i data-lucide="check-circle" class="w-6 h-6 text-green-500 mt-1 flex-shrink-0"></i>
                    <span class="text-slate-700"><strong>Holistic:</strong> Focuses on social, emotional, physical, and
                        cognitive growth simultaneously.</span>
                </li>
            </ul>
        </div>
    </section>

    <!-- 38 Objectives Breakdown -->
    <section>
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-3xl font-bold text-slate-900 mb-4">38 Objectives for Development</h2>
            <p class="text-slate-600 text-lg">We track progress across four major domains to ensure your child is ready
                for the next step.</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Social/Emotional -->
            <div
                class="bg-white p-8 rounded-3xl shadow-lg border-t-8 border-yellow-400 hover:-translate-y-1 transition duration-300">
                <div class="bg-yellow-50 w-14 h-14 rounded-full flex items-center justify-center mb-6"><i
                        data-lucide="smile" class="w-8 h-8 text-yellow-500"></i></div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Social-Emotional</h3>
                <p class="text-slate-600 text-sm">Managing feelings, following limits, and interacting with peers.</p>
            </div>

            <!-- Physical -->
            <div
                class="bg-white p-8 rounded-3xl shadow-lg border-t-8 border-red-500 hover:-translate-y-1 transition duration-300">
                <div class="bg-red-50 w-14 h-14 rounded-full flex items-center justify-center mb-6"><i
                        data-lucide="activity" class="w-8 h-8 text-red-500"></i></div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Physical</h3>
                <p class="text-slate-600 text-sm">Gross motor (running, climbing) and fine motor (writing, grasping)
                    skills.</p>
            </div>

            <!-- Language -->
            <div
                class="bg-white p-8 rounded-3xl shadow-lg border-t-8 border-blue-500 hover:-translate-y-1 transition duration-300">
                <div class="bg-blue-50 w-14 h-14 rounded-full flex items-center justify-center mb-6"><i
                        data-lucide="message-circle" class="w-8 h-8 text-blue-500"></i></div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Language</h3>
                <p class="text-slate-600 text-sm">Listening, speaking, and understanding complex instructions.</p>
            </div>

            <!-- Cognitive -->
            <div
                class="bg-white p-8 rounded-3xl shadow-lg border-t-8 border-green-500 hover:-translate-y-1 transition duration-300">
                <div class="bg-green-50 w-14 h-14 rounded-full flex items-center justify-center mb-6"><i
                        data-lucide="lightbulb" class="w-8 h-8 text-green-500"></i></div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Cognitive</h3>
                <p class="text-slate-600 text-sm">Problem-solving, logical thinking, and memory retention.</p>
            </div>
        </div>
    </section>

    <!-- Innovation Section -->
    <section class="bg-slate-900 text-white rounded-[3rem] p-12 md:p-20 relative overflow-hidden">
        <div class="absolute top-0 right-0 w-96 h-96 bg-cyan-500 rounded-full blur-[150px] opacity-20"></div>

        <div class="relative z-10 flex flex-col md:flex-row items-center gap-12">
            <div class="md:w-1/3 flex justify-center">
                <div class="bg-white/10 p-6 rounded-3xl border border-white/20 backdrop-blur-sm">
                    <i data-lucide="cpu" class="w-24 h-24 text-cyan-400"></i>
                </div>
            </div>
            <div class="md:w-2/3">
                <span class="text-cyan-400 font-bold uppercase tracking-widest text-sm mb-2 block">Future-Ready
                    Learning</span>
                <h2 class="text-3xl md:text-4xl font-extrabold mb-6">AI-Powered Lesson Planning</h2>
                <p class="text-indigo-100 text-lg leading-relaxed mb-8">
                    KIDazzle innovates by integrating an <strong>AI Lesson Plan Bot</strong> into our teacher resources.
                    This tool helps educators instantly tailor the Creative Curriculum® to the specific needs of their
                    current classroom, generating creative, standards-aligned activities in seconds. This reduces
                    administrative time and allows teachers to focus more on interacting with your child.
                </p>
                <a href="<?php echo esc_url(home_url('/locations/')); ?>"
                    class="bg-cyan-500 text-white px-8 py-3 rounded-xl font-bold hover:bg-cyan-400 transition inline-block">Schedule
                    a Tour to Learn More</a>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <div class="text-center">
        <h2 class="text-3xl font-bold text-slate-900 mb-6">Ready to see our curriculum in action?</h2>
        <div class="flex justify-center gap-4">
            <a href="<?php echo esc_url(home_url('/locations/')); ?>"
                class="bg-slate-900 text-white px-8 py-3 rounded-xl font-bold hover:bg-slate-800 transition shadow-lg">Find
                a Location</a>
            <a href="<?php echo esc_url(home_url('/enrollment/')); ?>"
                class="bg-white text-slate-900 border-2 border-slate-200 px-8 py-3 rounded-xl font-bold hover:border-cyan-500 transition">Apply
                Now</a>
        </div>
    </div>

</div>

<?php get_footer(); ?>