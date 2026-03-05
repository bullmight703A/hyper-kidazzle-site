<?php
/**
 * Template Name: Webinar Blank Canvas
 *
 * @package wimper
 */

get_header();
?>

<div class="bg-slate-50 min-h-screen pt-32 pb-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <?php if (have_posts()): ?>
            <?php while (have_posts()):
                the_post(); ?>

                <!-- Main Layout Grid -->
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">

                    <!-- Left Column: Content -->
                    <div class="lg:col-span-7">
                        <article id="post-<?php the_ID(); ?>" <?php post_class('bg-white p-8 md:p-12 rounded-[2rem] shadow-2xl border border-slate-100'); ?>>
                            <!-- Header -->
                            <div class="mb-10 border-b border-slate-100 pb-8">
                                <div
                                    class="inline-flex items-center px-4 py-1.5 rounded-full bg-sky-50 text-sky-700 text-xs font-bold uppercase tracking-widest mb-6">
                                    <span class="relative flex h-2 w-2 mr-2">
                                        <span
                                            class="animate-ping absolute inline-flex h-full w-full rounded-full bg-sky-400 opacity-75"></span>
                                        <span class="relative inline-flex rounded-full h-2 w-2 bg-sky-500"></span>
                                    </span>
                                    Live Weekly Training
                                </div>
                                <h1 class="text-4xl md:text-5xl font-extrabold text-slate-900 leading-tight">
                                    <?php the_title(); ?>
                                </h1>
                            </div>

                            <!-- Formatting Context -->
                            <div class="prose prose-slate prose-lg max-w-none text-slate-600">
                                <?php the_content(); ?>
                            </div>
                        </article>
                    </div>

                    <!-- Right Column: LeadConnector Widgets -->
                    <div class="lg:col-span-5 space-y-8">

                        <!-- Form Widget -->
                        <div class="bg-white p-6 rounded-[2rem] shadow-xl border border-slate-100 relative overflow-hidden">
                            <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-blue-500 to-sky-400"></div>
                            <h3 class="text-xl font-extrabold text-slate-800 mb-6 px-2">Register Now</h3>
                            <iframe src="https://api.leadconnectorhq.com/widget/form/f7ZJkxPhHo9RsgaBkn7b"
                                style="width:100%;height:100%;border:none;border-radius:3px;min-height:600px;"
                                id="inline-f7ZJkxPhHo9RsgaBkn7b" data-layout="{'id':'INLINE'}" data-trigger-type="alwaysShow"
                                data-trigger-value="" data-activation-type="alwaysActivated" data-activation-value=""
                                data-deactivation-type="neverDeactivate" data-deactivation-value=""
                                data-form-name="Robert X Wojo Media" data-height="598"
                                data-layout-iframe-id="inline-f7ZJkxPhHo9RsgaBkn7b" data-form-id="f7ZJkxPhHo9RsgaBkn7b"
                                title="Robert X Wojo Media">
                            </iframe>
                            <script src="https://link.msgsndr.com/js/form_embed.js" type="text/javascript"></script>
                        </div>

                        <!-- Calendar Widget -->
                        <div class="bg-navy p-6 rounded-[2rem] shadow-xl border border-slate-800 relative overflow-hidden">
                            <h3 class="text-xl font-extrabold text-white mb-6 px-2">Book a Feasibility Audit</h3>
                            <div class="bg-white rounded-xl overflow-hidden p-2">
                                <iframe src="https://api.leadconnectorhq.com/widget/booking/VNIKFQp8UXtGVcCV3s7v"
                                    style="width: 100%;border:none;overflow: hidden; min-height:600px;" scrolling="no"
                                    id="VNIKFQp8UXtGVcCV3s7v_1772722955121"></iframe>
                                <script src="https://link.msgsndr.com/js/form_embed.js" type="text/javascript"></script>
                            </div>
                        </div>

                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>

<?php
get_footer();
