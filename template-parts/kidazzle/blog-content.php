<!-- HERO SECTION -->
<header class="relative w-full h-[400px] flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 z-0">
        <!-- Robotics/Tech focus image for Resources -->
        <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80"
            alt="Innovation and learning tools" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-purple-950/60"></div>
    </div>
    <div class="relative z-10 container mx-auto px-4 text-center">
        <span
            class="bg-purple-500 text-white px-4 py-1.5 rounded-full text-sm font-extrabold uppercase tracking-widest shadow-sm mb-6 inline-block animate-fade-in">Tools
            for Growth</span>
        <h1 class="text-5xl md:text-7xl font-extrabold text-white mb-4 uppercase tracking-tighter drop-shadow-2xl">
            Support & Resources</h1>
        <p class="text-xl md:text-2xl text-purple-100 max-w-3xl mx-auto font-medium drop-shadow-lg">Empowering our
            parents and educators with innovation and information.</p>
    </div>
</header>

<!-- INNOVATION FEATURE: AI BOT -->
<section class="py-24 bg-white">
    <div class="container mx-auto px-4">
        <div
            class="bg-slate-50 rounded-[3.5rem] shadow-xl overflow-hidden border border-slate-200 flex flex-col md:flex-row items-stretch">
            <div class="md:w-1/2 p-12 md:p-20 flex flex-col justify-center">
                <span class="text-purple-600 font-bold uppercase tracking-widest text-sm mb-4 block">Parent Resources</span>
                <h2 class="text-4xl font-extrabold text-slate-900 mb-6 leading-tight">Weekend Lesson Plan Generator</h2>
                <p class="text-lg text-slate-600 mb-8 leading-relaxed font-medium">
                    Looking for weekend activities? Using our AI generator, input your zip code and receive a customized 2-day lesson plan (Saturday & Sunday) full of art, reading, and sensory activities right in your area!
                </p>
                <div class="flex gap-4">
                    <button id="ai-lesson-btn"
                        class="bg-purple-600 text-white font-bold py-4 px-8 rounded-2xl hover:bg-purple-700 transition shadow-lg flex items-center gap-2">
                        Generate Weekend Plan <i data-lucide="arrow-right" class="w-5 h-5"></i>
                    </button>
                </div>
            </div>
            <div class="md:w-1/2 bg-ombre-purple flex items-center justify-center p-12 relative">
                <div
                    class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')]">
                </div>
                <div class="bg-white/10 backdrop-blur-md rounded-full p-12 border border-white/20 animate-pulse">
                    <i data-lucide="calendar" class="w-32 h-32 text-white"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- QUICK ACCESS FORMS -->
<section class="py-24 bg-slate-50 border-y border-slate-100">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-5xl font-extrabold text-slate-900 mb-4 tracking-tight">Quick Access Forms</h2>
            <p class="text-slate-500 font-medium">Everything you need to manage your child's journey or your classroom
                tasks.</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
            <!-- Enrollment -->
            <div class="bg-white p-10 rounded-[2.5rem] border border-slate-200 hover:shadow-2xl transition group">
                <div
                    class="w-16 h-16 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center mb-8 group-hover:scale-110 transition shadow-sm">
                    <i data-lucide="clipboard-check" class="w-8 h-8"></i>
                </div>
                <h3 class="text-2xl font-bold text-slate-900 mb-3">Enrollment App</h3>
                <p class="text-slate-500 text-sm leading-relaxed mb-6">Apply online to secure your child's spot in our
                    academy. Fast, secure, and mobile-friendly.</p>
                <a href="/enrollment/"
                    class="text-blue-600 font-bold flex items-center gap-2 hover:gap-3 transition-all">Go to Admissions
                    &rarr;</a>
            </div>

            <!-- Task Automation -->
            <div class="bg-white p-10 rounded-[2.5rem] border border-slate-200 hover:shadow-2xl transition group">
                <div
                    class="w-16 h-16 bg-green-50 text-green-600 rounded-2xl flex items-center justify-center mb-8 group-hover:scale-110 transition shadow-sm">
                    <i data-lucide="zap" class="w-8 h-8"></i>
                </div>
                <h3 class="text-2xl font-bold text-slate-900 mb-3">Task Automation</h3>
                <p class="text-slate-500 text-sm leading-relaxed mb-6">Staff can sign up for daily task notifications
                    and classroom checklists to ensure elite standards.</p>
                <a href="/teacher-portal/"
                    class="text-green-600 font-bold flex items-center gap-2 hover:gap-3 transition-all">Staff
                    Notifications &rarr;</a>
            </div>

            <!-- Attendance -->
            <div class="bg-white p-10 rounded-[2.5rem] border border-slate-200 hover:shadow-2xl transition group">
                <div
                    class="w-16 h-16 bg-red-50 text-red-600 rounded-2xl flex items-center justify-center mb-8 group-hover:scale-110 transition shadow-sm">
                    <i data-lucide="user-minus" class="w-8 h-8"></i>
                </div>
                <h3 class="text-2xl font-bold text-slate-900 mb-3">Report Absence</h3>
                <p class="text-slate-500 text-sm leading-relaxed mb-6">Quickly notify your center director of a student
                    absence to maintain safety and compliance.</p>
                <a href="/contact/"
                    class="text-red-600 font-bold flex items-center gap-2 hover:gap-3 transition-all">Submit Report
                    &rarr;</a>
            </div>
        </div>
    </div>
</section>

<!-- BLOG PREVIEW -->
<section class="py-24 bg-white">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-6">
            <div class="max-w-xl">
                <h2 class="text-4xl font-extrabold text-slate-900 tracking-tight">KIDazzle Blog</h2>
                <p class="text-slate-500 mt-2 font-medium">Expert advice on early childhood development, nutrition, and
                    education.</p>
            </div>
            <a href="/blog/"
                class="bg-slate-900 text-white px-8 py-3 rounded-xl font-bold hover:bg-purple-600 transition shadow-md">View
                All Posts</a>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <?php
            $kidazzle_blog_args = array(
                'post_type' => 'post',
                'posts_per_page' => 6,
                'post_status' => 'publish'
            );
            $kidazzle_blog_query = new WP_Query($kidazzle_blog_args);
            
            if ($kidazzle_blog_query->have_posts()) :
                while ($kidazzle_blog_query->have_posts()) : $kidazzle_blog_query->the_post();
                    $thumbnail_url = has_post_thumbnail() ? get_the_post_thumbnail_url() : get_template_directory_uri() . '/assets/images/blog_brain_development_1772749628254.png';
            ?>
            <div class="group cursor-pointer" onclick="window.location.href='<?php the_permalink(); ?>';">
                <div class="rounded-3xl overflow-hidden mb-6 h-64 shadow-lg border border-slate-100">
                    <img src="<?php echo esc_url($thumbnail_url); ?>"
                        class="w-full h-full object-cover transition group-hover:scale-110 duration-500"
                        alt="<?php the_title_attribute(); ?>">
                </div>
                <span class="text-purple-600 font-bold text-xs uppercase tracking-widest">Article</span>
                <h3 class="text-xl font-bold text-slate-900 mt-2 group-hover:text-purple-600 transition"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            </div>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
            ?>
                <p class="text-slate-500 font-medium col-span-3">More articles coming soon!</p>
            <?php endif; ?>
        </div>
    </div>
</section>

<script>
    lucide.createIcons();

    document.addEventListener('DOMContentLoaded', function () {
        const aiModal = document.getElementById('ai-lesson-modal');
        const aiBackdrop = document.getElementById('ai-lesson-backdrop');
        const aiCloseBtn = document.getElementById('ai-lesson-close');
        const aiIframe = document.getElementById('ai-lesson-frame');
        const aiLoader = document.getElementById('ai-lesson-loader');
        const aiBtn = document.getElementById('ai-lesson-btn');

        // Placeholder Form URL (User will replace this with the actual Jotform/GHL link)
        // Since we don't have the real form URL yet, we use a placeholder that will load a visually distinct page
        const formUrl = 'https://link.wimper.com/widget/form/placeholder';

        function openAiModal(e) {
            e.preventDefault();
            aiModal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
            if (aiIframe.src === 'about:blank' || aiIframe.src === window.location.href) {
                aiLoader.classList.remove('hidden');
                aiIframe.src = formUrl;
                aiIframe.onload = function () {
                    aiLoader.classList.add('hidden');
                };
            }
        }

        function closeAiModal() {
            aiModal.classList.add('hidden');
            document.body.style.overflow = '';
        }

        if (aiBtn) aiBtn.addEventListener('click', openAiModal);
        if (aiCloseBtn) aiCloseBtn.addEventListener('click', closeAiModal);
        if (aiBackdrop) aiBackdrop.addEventListener('click', closeAiModal);

        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && aiModal && !aiModal.classList.contains('hidden')) {
                closeAiModal();
            }
        });
    });
</script>

<!-- AI Lesson Plan Modal -->
<div id="ai-lesson-modal" class="fixed inset-0 z-[100] hidden" role="dialog" aria-modal="true">
    <div class="absolute inset-0 bg-slate-900/80 backdrop-blur-sm transition-opacity" id="ai-lesson-backdrop"></div>
    <div
        class="absolute inset-4 md:inset-10 lg:inset-y-10 lg:inset-x-[20%] bg-white rounded-3xl shadow-2xl overflow-hidden flex flex-col">
        <div class="bg-slate-50 border-b border-slate-100 px-6 py-4 flex items-center justify-between flex-shrink-0">
            <h3 class="font-extrabold text-xl text-slate-900">Weekend Activities Lesson Plan</h3>
            <button id="ai-lesson-close"
                class="w-10 h-10 rounded-full bg-white border border-slate-200 flex items-center justify-center text-slate-500 hover:bg-slate-100 hover:text-slate-900 transition-all">
                <i data-lucide="x" class="w-5 h-5"></i>
            </button>
        </div>
        <div class="flex-grow relative bg-slate-50 p-6">
            <div id="ai-lesson-loader" class="absolute inset-0 flex items-center justify-center bg-slate-50 z-10">
                <div class="w-12 h-12 border-4 border-purple-200 border-t-purple-600 rounded-full animate-spin"></div>
            </div>
            <!-- The source will be injected dynamically via JS -->
            <iframe id="ai-lesson-frame" src="about:blank" class="w-full h-full border-0 rounded-2xl bg-white shadow-sm"
                allow="camera; microphone; autoplay; encrypted-media;"></iframe>
        </div>
    </div>
</div>