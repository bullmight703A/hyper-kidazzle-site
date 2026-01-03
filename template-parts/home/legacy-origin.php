<?php
/**
 * Template Part: Legacy & Origin Story
 * 
 * @package kidazzle
 */

if (!defined('ABSPATH')) {
    exit;
}
?>
<div class="bg-white rounded-[3rem] p-8 md:p-12 shadow-sm border border-slate-200 mt-8">
    <div class="grid md:grid-cols-2 gap-12 items-center">
        <div>
            <div
                class="inline-flex items-center gap-2 text-orange-600 bg-orange-50 px-4 py-2 rounded-full font-bold text-xs uppercase tracking-wider mb-6">
                <i data-lucide="heart" class="w-4 h-4 fill-orange-600"></i>
                <?php esc_html_e('Our Story', 'kidazzle'); ?>
            </div>
            <h2 class="text-4xl font-extrabold text-slate-900 mb-6 leading-tight">
                <?php esc_html_e("From a Women's Shelter to a Regional Standard", 'kidazzle'); ?></h2>
            <p class="text-lg text-slate-600 leading-relaxed font-medium mb-6">
                <?php esc_html_e("KIDazzle's journey began 31 years ago with a mission rooted in compassion. We started within the walls of a", 'kidazzle'); ?>
                <strong><?php esc_html_e("women's shelter", 'kidazzle'); ?></strong>.
                <?php esc_html_e('Today, our promise remains:', 'kidazzle'); ?>
                <strong><?php esc_html_e('high-quality child care is a right, not a privilege.', 'kidazzle'); ?></strong>
            </p>
            <a href="<?php echo esc_url(home_url('/about/')); ?>"
                class="inline-flex items-center justify-center bg-slate-100 text-slate-900 hover:bg-orange-500 hover:text-white px-8 py-4 rounded-full font-bold transition">
                <?php esc_html_e('Read Full Story', 'kidazzle'); ?> <i data-lucide="arrow-right"
                    class="w-4 h-4 ml-2"></i>
            </a>
        </div>
        <div class="h-[450px] rounded-[2.5rem] overflow-hidden relative shadow-inner">
            <img src="https://storage.googleapis.com/msgsndr/ZR2UvxPL2wlZNSvHjmJD/media/694473359bd664b7796f283c.png"
                alt="<?php esc_attr_e('Children engaged in learning', 'kidazzle'); ?>"
                class="w-full h-full object-cover">
        </div>
    </div>
</div>