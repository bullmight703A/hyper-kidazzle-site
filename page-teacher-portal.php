<?php
/**
 * Template Name: Teacher Portal Page
 * Staff portal with tools and resources
 * 
 * KIDazzle Child Care Theme
 * 
 * @package Kidazzle
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<!-- Hero Banner -->
<div class="rounded-[3rem] overflow-hidden relative h-[350px] shadow-lg group bg-slate-900">
    <div class="absolute inset-0 z-0">
        <?php if (has_post_thumbnail()): ?>
            <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title_attribute(); ?>"
                class="w-full h-full object-cover transition duration-[3000ms] group-hover:scale-105 opacity-40">
        <?php else: ?>
            <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80"
                alt="<?php esc_attr_e('Teachers collaborating', 'kidazzle'); ?>"
                class="w-full h-full object-cover transition duration-[3000ms] group-hover:scale-105 opacity-40">
        <?php endif; ?>
        <div class="absolute inset-0 bg-gradient-to-r from-indigo-900/90 to-purple-900/80"></div>
    </div>

    <div class="absolute inset-0 z-10 flex flex-col justify-center items-center text-center p-8 md:p-16">
        <div
            class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md border border-white/20 text-white px-4 py-2 rounded-full mb-6">
            <span class="w-2 h-2 rounded-full bg-green-400 animate-pulse"></span>
            <span
                class="font-bold text-xs uppercase tracking-widest"><?php esc_html_e('Employee Dashboard', 'kidazzle'); ?></span>
        </div>
        <h1 class="text-4xl md:text-6xl font-extrabold text-white mb-4 drop-shadow-xl tracking-tight">
            <?php esc_html_e('Educator', 'kidazzle'); ?> <span
                class="text-yellow-400"><?php esc_html_e('Resources', 'kidazzle'); ?></span>
        </h1>
        <p class="text-lg text-indigo-100 font-medium max-w-2xl leading-relaxed">
            <?php esc_html_e('Classroom management tools, forms, and lesson planning automation at your fingertips.', 'kidazzle'); ?>
        </p>
    </div>
</div>

<!-- Daily Tools Grid -->
<div class="grid md:grid-cols-3 gap-6 pt-4 mt-6">

    <!-- AI Lesson Bot -->
    <a href="<?php echo esc_url(home_url('/ai-lesson-plan/')); ?>"
        class="module-card bg-indigo-600 p-8 rounded-[2.5rem] border border-indigo-500 text-center group relative overflow-hidden">
        <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full -mr-10 -mt-10 blur-xl"></div>
        <div class="relative z-10">
            <div
                class="w-16 h-16 bg-white/20 rounded-2xl flex items-center justify-center text-white mx-auto mb-4 backdrop-blur-sm">
                <i data-lucide="bot" class="w-8 h-8"></i>
            </div>
            <h3 class="text-2xl font-bold text-white mb-2"><?php esc_html_e('AI Lesson Bot', 'kidazzle'); ?></h3>
            <p class="text-indigo-100 text-sm mb-4">
                <?php esc_html_e('Generate weekly plans in minutes.', 'kidazzle'); ?></p>
            <span
                class="bg-white text-indigo-900 px-6 py-2 rounded-full font-bold text-xs shadow-md group-hover:bg-yellow-400 transition"><?php esc_html_e('Launch Tool', 'kidazzle'); ?></span>
        </div>
    </a>

    <!-- Employee Email -->
    <a href="https://gmail.com" target="_blank"
        class="module-card bg-white p-8 rounded-[2.5rem] border border-slate-200 text-center group">
        <div class="w-16 h-16 bg-red-50 rounded-2xl flex items-center justify-center text-red-600 mx-auto mb-4">
            <i data-lucide="mail" class="w-8 h-8"></i>
        </div>
        <h3 class="text-2xl font-bold text-slate-900 mb-2"><?php esc_html_e('Employee Email', 'kidazzle'); ?></h3>
        <p class="text-slate-500 text-sm mb-4"><?php esc_html_e('Access your corporate inbox.', 'kidazzle'); ?></p>
        <span
            class="text-red-600 font-bold text-sm flex items-center justify-center gap-2"><?php esc_html_e('Login Now', 'kidazzle'); ?>
            <i data-lucide="external-link" class="w-4 h-4"></i></span>
    </a>

    <!-- Task Automation -->
    <a href="#weekly-tasks" class="module-card bg-white p-8 rounded-[2.5rem] border border-slate-200 text-center group">
        <div class="w-16 h-16 bg-green-50 rounded-2xl flex items-center justify-center text-green-600 mx-auto mb-4">
            <i data-lucide="bell-ring" class="w-8 h-8"></i>
        </div>
        <h3 class="text-2xl font-bold text-slate-900 mb-2"><?php esc_html_e('Task Automation', 'kidazzle'); ?></h3>
        <p class="text-slate-500 text-sm mb-4">
            <?php esc_html_e('Sign up for daily notification prompts.', 'kidazzle'); ?></p>
        <span
            class="text-green-600 font-bold text-sm flex items-center justify-center gap-2"><?php esc_html_e('Subscribe', 'kidazzle'); ?>
            <i data-lucide="arrow-down" class="w-4 h-4"></i></span>
    </a>

</div>

<!-- Compliance & HR Section -->
<div class="grid lg:grid-cols-3 gap-6 pt-6 mt-2">

    <!-- Compliance & Checklists -->
    <div class="lg:col-span-2 bg-white p-10 rounded-[2.5rem] border border-slate-200 shadow-sm">
        <div class="flex items-center gap-3 mb-8">
            <div class="p-3 bg-blue-50 rounded-xl text-blue-600"><i data-lucide="clipboard-check" class="w-6 h-6"></i>
            </div>
            <h2 class="text-2xl font-extrabold text-slate-900">
                <?php esc_html_e('Compliance & Checklists', 'kidazzle'); ?></h2>
        </div>

        <div class="grid md:grid-cols-2 gap-6">
            <div class="p-6 border border-slate-100 rounded-3xl hover:bg-slate-50 transition cursor-pointer group">
                <h3 class="font-bold text-lg text-slate-900 mb-2 flex items-center gap-2">
                    <span class="w-2 h-2 bg-red-500 rounded-full"></span>
                    <?php esc_html_e('ITERS Weekly', 'kidazzle'); ?>
                </h3>
                <p class="text-slate-500 text-sm mb-4">
                    <?php esc_html_e('Infant/Toddler Environment Rating Scale checklist submission.', 'kidazzle'); ?>
                </p>
                <span
                    class="text-blue-600 text-xs font-bold uppercase tracking-wide group-hover:underline"><?php esc_html_e('Submit Form', 'kidazzle'); ?></span>
            </div>

            <div class="p-6 border border-slate-100 rounded-3xl hover:bg-slate-50 transition cursor-pointer group">
                <h3 class="font-bold text-lg text-slate-900 mb-2 flex items-center gap-2">
                    <span class="w-2 h-2 bg-green-500 rounded-full"></span>
                    <?php esc_html_e('ECERS Weekly', 'kidazzle'); ?>
                </h3>
                <p class="text-slate-500 text-sm mb-4">
                    <?php esc_html_e('Early Childhood Environment Rating Scale checklist submission.', 'kidazzle'); ?>
                </p>
                <span
                    class="text-blue-600 text-xs font-bold uppercase tracking-wide group-hover:underline"><?php esc_html_e('Submit Form', 'kidazzle'); ?></span>
            </div>
        </div>
    </div>

    <!-- HR Actions Sidebar -->
    <div class="bg-slate-900 p-10 rounded-[2.5rem] text-white flex flex-col justify-between">
        <div>
            <h3 class="text-xl font-bold mb-6 flex items-center gap-2"><i data-lucide="users"
                    class="text-yellow-400"></i> <?php esc_html_e('HR Actions', 'kidazzle'); ?></h3>
            <ul class="space-y-4">
                <li>
                    <a href="#" class="block bg-white/10 hover:bg-white/20 p-4 rounded-2xl transition">
                        <div class="font-bold text-sm"><?php esc_html_e('Report Absence', 'kidazzle'); ?></div>
                        <div class="text-xs text-slate-400"><?php esc_html_e('Emergency / Sick Leave', 'kidazzle'); ?>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#" class="block bg-white/10 hover:bg-white/20 p-4 rounded-2xl transition">
                        <div class="font-bold text-sm"><?php esc_html_e('Parent Incident', 'kidazzle'); ?></div>
                        <div class="text-xs text-slate-400">
                            <?php esc_html_e('Suspension / Behavior Report', 'kidazzle'); ?></div>
                    </a>
                </li>
            </ul>
        </div>
        <div class="mt-6 pt-6 border-t border-slate-700">
            <p class="text-xs text-slate-500 mb-2"><?php esc_html_e('Need direct assistance?', 'kidazzle'); ?></p>
            <a href="mailto:hr@kidazzle.com"
                class="text-yellow-400 font-bold hover:underline"><?php esc_html_e('Contact HR Director', 'kidazzle'); ?></a>
        </div>
    </div>

</div>

<!-- Additional Forms -->
<div class="grid md:grid-cols-2 gap-6 pt-6 mt-2">

    <!-- Food Preference Survey -->
    <div class="module-card bg-orange-50 p-8 rounded-[2.5rem] border border-orange-100 flex items-center gap-6">
        <div class="w-16 h-16 bg-white rounded-2xl flex items-center justify-center text-orange-500 shadow-sm shrink-0">
            <i data-lucide="utensils" class="w-8 h-8"></i>
        </div>
        <div>
            <h3 class="text-xl font-bold text-slate-900"><?php esc_html_e('Food Preference Survey', 'kidazzle'); ?></h3>
            <p class="text-slate-600 text-sm mb-3"><?php esc_html_e('Log student dietary preferences.', 'kidazzle'); ?>
            </p>
            <a href="#"
                class="text-orange-600 font-bold text-sm hover:underline"><?php esc_html_e('Open Survey Form', 'kidazzle'); ?></a>
        </div>
    </div>

    <!-- Staff Feedback -->
    <div class="module-card bg-purple-50 p-8 rounded-[2.5rem] border border-purple-100 flex items-center gap-6">
        <div class="w-16 h-16 bg-white rounded-2xl flex items-center justify-center text-purple-500 shadow-sm shrink-0">
            <i data-lucide="message-square" class="w-8 h-8"></i>
        </div>
        <div>
            <h3 class="text-xl font-bold text-slate-900"><?php esc_html_e('Staff Feedback', 'kidazzle'); ?></h3>
            <p class="text-slate-600 text-sm mb-3"><?php esc_html_e('Submit concerns or suggestions.', 'kidazzle'); ?>
            </p>
            <a href="#"
                class="text-purple-600 font-bold text-sm hover:underline"><?php esc_html_e('Submit Feedback', 'kidazzle'); ?></a>
        </div>
    </div>

</div>

<!-- Weekly Task Sign-Up -->
<div id="weekly-tasks"
    class="mt-12 bg-white rounded-[2.5rem] p-8 md:p-16 border border-slate-200 shadow-xl max-w-4xl mx-auto">
    <h2 class="text-3xl font-extrabold text-slate-900 mb-2 text-center">
        <?php esc_html_e('Weekly Task Sign-Up', 'kidazzle'); ?></h2>
    <p class="text-slate-500 text-center mb-8">
        <?php esc_html_e('Register here to receive daily automated checklist notifications.', 'kidazzle'); ?></p>

    <div
        class="bg-slate-50 border-2 border-dashed border-slate-200 rounded-3xl h-[600px] flex items-center justify-center">
        <?php
        // Check for custom form shortcode from page meta
        $task_form_shortcode = get_post_meta(get_the_ID(), 'kidazzle_task_form_shortcode', true);
        if ($task_form_shortcode) {
            echo do_shortcode($task_form_shortcode);
        } else {
            // Placeholder
            ?>
            <div class="text-center text-slate-400">
                <i data-lucide="file-spreadsheet" class="w-12 h-12 mx-auto mb-2 opacity-50"></i>
                <p><?php esc_html_e('Embed Weekly Task Automation Form Here', 'kidazzle'); ?></p>
            </div>
        <?php } ?>
    </div>
</div>

<?php get_footer(); ?>