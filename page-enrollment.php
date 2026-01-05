<?php
/**
 * Template Name: Enrollment Page
 * Enrollment & Contact form page
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
<div class="rounded-[3rem] overflow-hidden relative h-[450px] shadow-lg group bg-slate-900">
    <div class="absolute inset-0 z-0">
        <?php if (has_post_thumbnail()): ?>
            <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title_attribute(); ?>"
                class="w-full h-full object-cover transition duration-[3000ms] group-hover:scale-105 opacity-60">
        <?php else: ?>
            <img src="https://images.unsplash.com/photo-1628258334105-2a0b3d6efee1?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80"
                alt="<?php esc_attr_e('Mother and daughter smiling', 'kidazzle'); ?>"
                class="w-full h-full object-cover transition duration-[3000ms] group-hover:scale-105 opacity-60">
        <?php endif; ?>
        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/40 to-transparent"></div>
    </div>

    <div class="absolute inset-0 z-10 flex flex-col justify-center items-center text-center p-8 md:p-16">
        <div
            class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md border border-white/20 text-white px-4 py-2 rounded-full mb-6">
            <span class="w-2 h-2 rounded-full bg-yellow-400 animate-pulse"></span>
            <span
                class="font-bold text-xs uppercase tracking-widest"><?php esc_html_e('Enrollment Open Year-Round', 'kidazzle'); ?></span>
        </div>
        <h1 class="text-5xl md:text-7xl font-extrabold text-white mb-6 drop-shadow-xl tracking-tight">
            <?php esc_html_e('Join the', 'kidazzle'); ?> <span
                class="text-yellow-400"><?php esc_html_e('Family', 'kidazzle'); ?></span>
        </h1>
        <p class="text-lg md:text-2xl text-white/90 font-medium max-w-2xl leading-relaxed drop-shadow-md">
            <?php esc_html_e('Secure your child\'s spot in an environment where excellence is standard and diversity is celebrated.', 'kidazzle'); ?>
        </p>
    </div>
</div>

<!-- 3-Step Process Cards -->
<div class="grid md:grid-cols-3 gap-6 mt-6">
    <div class="module-card bg-white p-8 rounded-[2.5rem] border border-slate-200 text-center">
        <div class="w-16 h-16 bg-blue-50 text-blue-600 rounded-full flex items-center justify-center mx-auto mb-6">
            <span class="font-extrabold text-2xl">1</span>
        </div>
        <h3 class="text-xl font-bold text-slate-900 mb-2"><?php esc_html_e('Schedule a Tour', 'kidazzle'); ?></h3>
        <p class="text-slate-500 text-sm">
            <?php esc_html_e('Fill out the form below to book a visit. Seeing is believing.', 'kidazzle'); ?></p>
    </div>

    <div class="module-card bg-white p-8 rounded-[2.5rem] border border-slate-200 text-center">
        <div class="w-16 h-16 bg-purple-50 text-purple-600 rounded-full flex items-center justify-center mx-auto mb-6">
            <span class="font-extrabold text-2xl">2</span>
        </div>
        <h3 class="text-xl font-bold text-slate-900 mb-2"><?php esc_html_e('Meet the Director', 'kidazzle'); ?></h3>
        <p class="text-slate-500 text-sm">
            <?php esc_html_e('Discuss your child\'s needs and our curriculum goals.', 'kidazzle'); ?></p>
    </div>

    <div class="module-card bg-white p-8 rounded-[2.5rem] border border-slate-200 text-center">
        <div class="w-16 h-16 bg-green-50 text-green-600 rounded-full flex items-center justify-center mx-auto mb-6">
            <span class="font-extrabold text-2xl">3</span>
        </div>
        <h3 class="text-xl font-bold text-slate-900 mb-2"><?php esc_html_e('Complete Enrollment', 'kidazzle'); ?></h3>
        <p class="text-slate-500 text-sm">
            <?php esc_html_e('Secure your spot and receive your Welcome Packet!', 'kidazzle'); ?></p>
    </div>
</div>

<!-- Main Content Grid -->
<div class="grid lg:grid-cols-12 gap-6 pt-4 mt-2">

    <!-- Contact Form -->
    <div class="lg:col-span-7">
        <div class="bg-white p-6 md:p-10 rounded-[2.5rem] border border-slate-200 shadow-xl h-full">
            <div class="flex items-center gap-4 mb-8 border-b border-slate-100 pb-6">
                <div class="w-12 h-12 bg-yellow-100 rounded-full flex items-center justify-center text-yellow-600">
                    <i data-lucide="mail" class="w-6 h-6"></i>
                </div>
                <div>
                    <h2 class="text-3xl font-extrabold text-slate-900"><?php esc_html_e('Get in Touch', 'kidazzle'); ?>
                    </h2>
                    <p class="text-slate-500 text-sm">
                        <?php esc_html_e('We usually respond within 24 hours.', 'kidazzle'); ?></p>
                </div>
            </div>

            <?php
            // Check for custom form shortcode from page meta
            $form_shortcode = get_post_meta(get_the_ID(), 'kidazzle_form_shortcode', true);
            if ($form_shortcode) {
                echo do_shortcode($form_shortcode);
            } else {
                // Default embedded form
                ?>
                <div class="w-full h-[900px] overflow-hidden rounded-2xl bg-slate-50 border border-slate-100">
                    <iframe src="https://api.leadconnectorhq.com/widget/form/N8RYaUY1SuORexcyA6la"
                        style="width:100%;height:100%;border:none;border-radius:20px" id="inline-N8RYaUY1SuORexcyA6la"
                        data-layout="{'id':'INLINE'}" data-trigger-type="alwaysShow" data-trigger-value=""
                        data-activation-type="alwaysActivated" data-activation-value=""
                        data-deactivation-type="neverDeactivate" data-deactivation-value=""
                        data-form-name="2023 New KIDazzel website contact" data-height="870"
                        data-layout-iframe-id="inline-N8RYaUY1SuORexcyA6la" data-form-id="N8RYaUY1SuORexcyA6la"
                        title="<?php esc_attr_e('Contact Form', 'kidazzle'); ?>">
                    </iframe>
                </div>
            <?php } ?>
        </div>
    </div>

    <!-- Sidebar -->
    <div class="lg:col-span-5 space-y-6">

        <!-- Headquarters Card -->
        <div class="bg-slate-900 p-10 rounded-[2.5rem] text-white shadow-xl">
            <h3 class="text-2xl font-bold mb-8"><?php esc_html_e('Headquarters', 'kidazzle'); ?></h3>
            <div class="space-y-8">
                <div class="flex items-start gap-4">
                    <div class="bg-white/10 p-3 rounded-xl"><i data-lucide="map-pin" class="w-6 h-6 text-red-400"></i>
                    </div>
                    <div>
                        <span
                            class="font-bold block text-sm text-slate-400 uppercase tracking-wide mb-1"><?php esc_html_e('Mailing Address', 'kidazzle'); ?></span>
                        <span class="text-lg leading-relaxed">100 Alabama St SW<br>Atlanta, GA 30303</span>
                    </div>
                </div>
                <div class="flex items-start gap-4">
                    <div class="bg-white/10 p-3 rounded-xl"><i data-lucide="phone" class="w-6 h-6 text-green-400"></i>
                    </div>
                    <div>
                        <span
                            class="font-bold block text-sm text-slate-400 uppercase tracking-wide mb-1"><?php esc_html_e('Toll Free', 'kidazzle'); ?></span>
                        <a href="tel:8774101002"
                            class="text-2xl font-bold hover:text-yellow-400 transition">877-410-1002</a>
                    </div>
                </div>
            </div>
            <div class="mt-10 pt-8 border-t border-slate-800">
                <a href="<?php echo esc_url(home_url('/locations/')); ?>"
                    class="block w-full bg-white hover:bg-slate-200 text-slate-900 font-bold text-center py-4 rounded-2xl transition">
                    <?php esc_html_e('Find a Center Near You', 'kidazzle'); ?>
                </a>
            </div>
        </div>

        <!-- FAQ Card -->
        <div class="bg-white p-8 rounded-[2.5rem] border border-slate-200">
            <h3 class="text-xl font-bold text-slate-900 mb-6"><?php esc_html_e('Common Questions', 'kidazzle'); ?></h3>
            <div class="space-y-4">
                <div class="p-4 bg-slate-50 rounded-2xl">
                    <h4 class="font-bold text-slate-900 text-sm mb-1 flex items-center gap-2">
                        <i data-lucide="clock" class="w-4 h-4 text-purple-500"></i>
                        <?php esc_html_e('What are your hours?', 'kidazzle'); ?>
                    </h4>
                    <p class="text-slate-600 text-xs leading-relaxed">
                        <?php esc_html_e('Hours vary by location to best serve the specific needs of each community. Please check your specific location page for details.', 'kidazzle'); ?>
                    </p>
                </div>

                <div class="p-4 bg-slate-50 rounded-2xl">
                    <h4 class="font-bold text-slate-900 text-sm mb-1 flex items-center gap-2">
                        <i data-lucide="users" class="w-4 h-4 text-blue-500"></i>
                        <?php esc_html_e('What are your ratios?', 'kidazzle'); ?>
                    </h4>
                    <p class="text-slate-600 text-xs leading-relaxed">
                        <?php esc_html_e('We strictly adhere to or exceed state-mandated teacher-to-child ratios to ensure every child receives personal attention.', 'kidazzle'); ?>
                    </p>
                </div>

                <div class="p-4 bg-slate-50 rounded-2xl">
                    <h4 class="font-bold text-slate-900 text-sm mb-1 flex items-center gap-2">
                        <i data-lucide="utensils" class="w-4 h-4 text-orange-500"></i>
                        <?php esc_html_e('Do you provide meals?', 'kidazzle'); ?>
                    </h4>
                    <p class="text-slate-600 text-xs leading-relaxed">
                        <?php esc_html_e('Yes! We provide hot, nutritionally balanced meals and snacks prepared daily in our onsite commercial kitchens.', 'kidazzle'); ?>
                    </p>
                </div>

                <div class="p-4 bg-slate-50 rounded-2xl">
                    <h4 class="font-bold text-slate-900 text-sm mb-1 flex items-center gap-2">
                        <i data-lucide="credit-card" class="w-4 h-4 text-green-500"></i>
                        <?php esc_html_e('Do you accept vouchers?', 'kidazzle'); ?>
                    </h4>
                    <p class="text-slate-600 text-xs leading-relaxed">
                        <?php esc_html_e('Many of our locations accept state subsidy programs (CAPS, Certificates). Please ask your Center Director.', 'kidazzle'); ?>
                    </p>
                </div>
            </div>
        </div>

    </div>
</div>

<?php get_footer(); ?>