<?php
/**
 * Template Name: AI Lesson Plan Page
 * 
 * @package Kidazzle
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<div class="rounded-[3rem] overflow-hidden relative h-[500px] shadow-lg group bg-slate-900 mt-6 mx-4 md:mx-0">
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80"
            alt="<?php esc_attr_e('Teacher planning', 'kidazzle'); ?>"
            class="w-full h-full object-cover transition duration-[3000ms] group-hover:scale-105 opacity-60">
        <div class="absolute inset-0 bg-gradient-to-t from-purple-900/90 via-purple-900/50 to-transparent"></div>
    </div>

    <div class="absolute inset-0 z-10 flex flex-col justify-center items-center text-center p-8 md:p-16">
        <div
            class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md border border-white/20 text-white px-4 py-2 rounded-full mb-6">
            <i data-lucide="cpu" class="w-4 h-4 text-purple-300"></i>
            <span
                class="font-bold text-xs uppercase tracking-widest"><?php esc_html_e('Innovation in Education', 'kidazzle'); ?></span>
        </div>
        <h1 class="text-5xl md:text-7xl font-extrabold text-white mb-6 drop-shadow-xl tracking-tight">
            <?php esc_html_e('AI-Powered', 'kidazzle'); ?> <br>
            <span class="text-purple-300"><?php esc_html_e('Lesson Planning', 'kidazzle'); ?></span>
        </h1>
        <p class="text-lg md:text-2xl text-white/90 font-medium max-w-3xl leading-relaxed drop-shadow-md">
            <?php esc_html_e('Embracing automation to empower teachers and elevate early education.', 'kidazzle'); ?>
        </p>
    </div>
</div>

<div class="grid lg:grid-cols-2 gap-6 items-stretch mt-6 mx-4 md:mx-0">

    <div class="bg-white rounded-[3rem] p-10 md:p-16 border border-slate-200">
        <h2 class="text-3xl font-extrabold text-slate-900 mb-6">
            <?php esc_html_e("Grade 'A' Plans in Minutes", 'kidazzle'); ?></h2>
        <div class="space-y-6 text-lg text-slate-600 leading-relaxed font-medium">
            <p><?php esc_html_e('At KIDazzle, we are revolutionizing the classroom by embracing', 'kidazzle'); ?>
                <strong><?php esc_html_e('Artificial Intelligence and Automation', 'kidazzle'); ?></strong>.
                <?php esc_html_e('Teachers often spend hours engaging in administrative work, taking time away from what matters most—interacting with your child.', 'kidazzle'); ?>
            </p>
            <p><?php esc_html_e('With our new AI tools, our educators can generate comprehensive, standards-aligned lesson plans for', 'kidazzle'); ?>
                <strong><?php esc_html_e('all age groups', 'kidazzle'); ?></strong>
                <?php esc_html_e('in a fraction of the time. This technology ensures every activity is educational, creative, and tailored.', 'kidazzle'); ?>
            </p>
        </div>
    </div>

    <div class="flex flex-col gap-4">

        <div
            class="module-card bg-purple-50 p-8 rounded-[2.5rem] border border-purple-100 flex items-center gap-6 h-full">
            <div
                class="w-16 h-16 bg-white rounded-2xl flex items-center justify-center text-purple-600 shadow-sm shrink-0">
                <i data-lucide="award" class="w-8 h-8"></i>
            </div>
            <div>
                <h3 class="text-xl font-bold text-purple-900"><?php esc_html_e('Consistent Quality', 'kidazzle'); ?>
                </h3>
                <p class="text-purple-700 text-sm mt-1">
                    <?php esc_html_e('Standardized excellence across all centers.', 'kidazzle'); ?></p>
            </div>
        </div>

        <div class="module-card bg-white p-8 rounded-[2.5rem] border border-slate-200 flex items-center gap-6 h-full">
            <div
                class="w-16 h-16 bg-slate-100 rounded-2xl flex items-center justify-center text-slate-600 shadow-sm shrink-0">
                <i data-lucide="clock" class="w-8 h-8"></i>
            </div>
            <div>
                <h3 class="text-xl font-bold text-slate-900"><?php esc_html_e('More Face-Time', 'kidazzle'); ?></h3>
                <p class="text-slate-500 text-sm mt-1">
                    <?php esc_html_e('Less paperwork, more student interaction.', 'kidazzle'); ?></p>
            </div>
        </div>

        <div class="module-card bg-white p-8 rounded-[2.5rem] border border-slate-200 flex items-center gap-6 h-full">
            <div
                class="w-16 h-16 bg-slate-100 rounded-2xl flex items-center justify-center text-slate-600 shadow-sm shrink-0">
                <i data-lucide="infinity" class="w-8 h-8"></i>
            </div>
            <div>
                <h3 class="text-xl font-bold text-slate-900"><?php esc_html_e('Infinite Resources', 'kidazzle'); ?></h3>
                <p class="text-slate-500 text-sm mt-1">
                    <?php esc_html_e('Creative ideas at the touch of a button.', 'kidazzle'); ?></p>
            </div>
        </div>

    </div>
</div>

<div class="bg-gradient-to-br from-[#4c1d95] to-[#c026d3] rounded-[3rem] p-4 md:p-12 shadow-2xl mt-8 mx-4 md:mx-0">
    <div class="bg-white rounded-[2.5rem] p-8 md:p-16 max-w-4xl mx-auto shadow-inner text-center">

        <div
            class="inline-block bg-purple-50 text-purple-600 px-4 py-1 rounded-full text-xs font-extrabold uppercase tracking-widest mb-6">
            <?php esc_html_e('Free Resource', 'kidazzle'); ?>
        </div>

        <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-6">
            <?php esc_html_e('See the Difference Yourself', 'kidazzle'); ?></h2>
        <p class="text-lg text-slate-600 mb-10 max-w-2xl mx-auto leading-relaxed">
            <?php esc_html_e('Curious about what a "Grade A" AI-assisted lesson plan looks like? Enter your details below to instantly receive sample plans for Infants, Toddlers, and Preschoolers via email.', 'kidazzle'); ?>
        </p>

        <div class="max-w-xl mx-auto bg-slate-50 rounded-3xl p-4 border border-slate-200 min-h-[450px]">
            <iframe src="https://api.leadconnectorhq.com/widget/form/JBSdmwoZNYxCAPtNDQ4p"
                style="width:100%;height:100%;border:none;border-radius:3px" id="inline-JBSdmwoZNYxCAPtNDQ4p"
                data-layout="{'id':'INLINE'}" data-trigger-type="alwaysShow" data-trigger-value=""
                data-activation-type="alwaysActivated" data-activation-value="" data-deactivation-type="neverDeactivate"
                data-deactivation-value="" data-form-name="Email our all things for leads or parents" data-height="432"
                data-layout-iframe-id="inline-JBSdmwoZNYxCAPtNDQ4p" data-form-id="JBSdmwoZNYxCAPtNDQ4p"
                title="Email our all things for leads or parents">
            </iframe>
            <script src="https://link.msgsndr.com/js/form_embed.js"></script>
        </div>

        <p class="text-xs text-slate-400 mt-6">
            <?php esc_html_e('By downloading, you agree to receive updates from KIDazzle. We respect your privacy.', 'kidazzle'); ?>
        </p>
    </div>
</div>

<?php get_footer(); ?>