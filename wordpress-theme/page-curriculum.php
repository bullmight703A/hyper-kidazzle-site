<?php get_header(); ?>

<!-- HERO -->
<section class="relative py-24 bg-cyan-900 text-white overflow-hidden">
    <div class="absolute inset-0 opacity-20">
        <img src="https://images.unsplash.com/photo-1503454537195-1dcabb73ffb9" class="w-full h-full object-cover"
            alt="Curriculum Background">
    </div>
    <div class="relative max-w-7xl mx-auto px-6 text-center">
        <span
            class="inline-block bg-cyan-500 text-white px-4 py-1 rounded-full font-bold text-sm mb-6 tracking-wider uppercase">Research-Backed
            Learning</span>
        <h1 class="text-5xl font-extrabold mb-6">The Creative Curriculum®</h1>
        <p class="text-xl text-cyan-100 max-w-2xl mx-auto">
            We don't just teach; we ignite curiosity. Our approach combines teacher-led exploration with child-initiated
            discovery.
        </p>
    </div>
</section>

<!-- MAIN CONTENT -->
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6">

        <!-- Pillar 1 -->
        <div class="grid md:grid-cols-2 gap-16 items-center mb-24">
            <div>
                <div class="w-16 h-16 bg-cyan-100 text-cyan-600 rounded-2xl flex items-center justify-center mb-6">
                    <i data-lucide="brain" class="w-8 h-8"></i>
                </div>
                <h2 class="text-4xl font-bold mb-6 text-slate-900">Brain-Based Learning</h2>
                <p class="text-lg text-slate-600 leading-relaxed mb-6">
                    90% of a child's brain develops before age 5. Our curriculum is designed to maximize this critical
                    window through:
                </p>
                <ul class="space-y-4">
                    <li class="flex items-start gap-3">
                        <i data-lucide="check-circle" class="text-cyan-500 w-6 h-6 mt-1"></i>
                        <span class="text-slate-700"><strong>Sensory Integration:</strong> combining touch, sight, and
                            sound to build neural pathways.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i data-lucide="check-circle" class="text-cyan-500 w-6 h-6 mt-1"></i>
                        <span class="text-slate-700"><strong>Social Problem Solving:</strong> teaching children how to
                            resolve conflicts and express emotions.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i data-lucide="check-circle" class="text-cyan-500 w-6 h-6 mt-1"></i>
                        <span class="text-slate-700"><strong>Executive Function:</strong> games that build memory,
                            focus, and self-control.</span>
                    </li>
                </ul>
            </div>
            <div class="rounded-[3rem] overflow-hidden shadow-2xl">
                <img src="https://images.unsplash.com/photo-1587654780291-39c9404d746b"
                    class="w-full h-full object-cover" alt="Brain Development">
            </div>
        </div>

        <!-- Pillar 2 -->
        <div class="grid md:grid-cols-2 gap-16 items-center">
            <div class="order-2 md:order-1 rounded-[3rem] overflow-hidden shadow-2xl">
                <img src="https://images.unsplash.com/photo-1516627145497-ae6968895b74"
                    class="w-full h-full object-cover" alt="STEAM Learning">
            </div>
            <div class="order-1 md:order-2">
                <div class="w-16 h-16 bg-purple-100 text-purple-600 rounded-2xl flex items-center justify-center mb-6">
                    <i data-lucide="flask-conical" class="w-8 h-8"></i>
                </div>
                <h2 class="text-4xl font-bold mb-6 text-slate-900">STEAM Integration</h2>
                <p class="text-lg text-slate-600 leading-relaxed mb-6">
                    Science, Technology, Engineering, Arts, and Math aren't just for high schoolers. We introduce these
                    concepts early through play:
                </p>
                <ul class="space-y-4">
                    <li class="flex items-start gap-3">
                        <i data-lucide="play" class="text-purple-500 w-4 h-4 mt-1.5"></i>
                        <span class="text-slate-700">Building bridges with blocks (Engineering)</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i data-lucide="play" class="text-purple-500 w-4 h-4 mt-1.5"></i>
                        <span class="text-slate-700">Mixing colors and baking (Chemistry/Math)</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i data-lucide="play" class="text-purple-500 w-4 h-4 mt-1.5"></i>
                        <span class="text-slate-700">Music and dramatic play (Arts)</span>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</section>

<!-- CTA -->
<section class="py-24 bg-slate-50 text-center">
    <div class="max-w-4xl mx-auto px-6">
        <h2 class="text-3xl font-bold mb-8 text-slate-900">See Learning in Action</h2>
        <a href="<?php echo site_url('/contact'); ?>"
            class="inline-block bg-slate-900 text-white font-bold py-4 px-10 rounded-2xl hover:bg-slate-700 transition shadow-lg">
            Schedule a Discovery Tour
        </a>
    </div>
</section>

<?php get_footer(); ?>