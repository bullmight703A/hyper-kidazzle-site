<?php
/**
 * Template Part: Regional Footprint / Southeast Powerhouse
 * 
 * @package kidazzle
 */

if (!defined('ABSPATH')) {
    exit;
}
?>
<div class="grid grid-cols-1 md:grid-cols-12 gap-6 pt-8">
    <div class="md:col-span-12 mb-4 px-2 flex justify-between items-end">
        <h2 class="text-4xl font-extrabold text-slate-900"><?php esc_html_e('Our Regional', 'kidazzle'); ?> <span
                class="text-indigo-600"><?php esc_html_e('Footprint', 'kidazzle'); ?></span></h2>
        <a href="<?php echo esc_url(get_post_type_archive_link('location')); ?>"
            class="hidden md:block text-slate-500 font-bold hover:text-indigo-600"><?php esc_html_e('View All Locations', 'kidazzle'); ?></a>
    </div>

    <!-- Memphis -->
    <a href="<?php echo esc_url(home_url('/locations/memphis/')); ?>"
        class="md:col-span-4 module-card group relative rounded-[2.5rem] overflow-hidden bg-white h-96 shadow-sm border border-slate-100">
        <img src="https://storage.googleapis.com/msgsndr/ZR2UvxPL2wlZNSvHjmJD/media/693c7cb5dbed99e0b07c8310.png"
            alt="Memphis"
            class="absolute inset-0 w-full h-full object-cover transition duration-700 group-hover:scale-110 opacity-90">
        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent"></div>
        <div class="absolute bottom-0 left-0 p-8 text-white w-full">
            <span
                class="bg-white/20 backdrop-blur text-white px-3 py-1 rounded-full text-xs font-bold mb-3 inline-block">Tennessee</span>
            <h3 class="text-3xl font-bold">Memphis</h3>
        </div>
    </a>

    <!-- Atlanta (Featured) -->
    <a href="<?php echo esc_url(get_post_type_archive_link('location')); ?>"
        class="md:col-span-4 module-card group relative rounded-[2.5rem] overflow-hidden bg-slate-900 h-96 shadow-xl border-4 border-white">
        <img src="https://storage.googleapis.com/msgsndr/ZR2UvxPL2wlZNSvHjmJD/media/693c7ddeb4f42080d1d6f342.png"
            alt="Atlanta"
            class="absolute inset-0 w-full h-full object-cover transition duration-700 group-hover:scale-110 opacity-80">
        <div class="absolute inset-0 bg-gradient-to-t from-orange-900/90 via-transparent to-transparent"></div>
        <div
            class="absolute top-6 right-6 bg-white text-orange-600 px-4 py-2 rounded-full font-bold text-xs shadow-lg flex items-center gap-1">
            <i data-lucide="star" class="w-3 h-3 fill-orange-600"></i> HQ
        </div>
        <div class="absolute bottom-0 left-0 p-8 text-white w-full">
            <span
                class="bg-orange-500 text-white px-3 py-1 rounded-full text-xs font-bold mb-3 inline-block">Georgia</span>
            <h3 class="text-4xl font-bold">Atlanta</h3>
            <p class="text-white/80 text-sm mt-1">5 Locations</p>
        </div>
    </a>

    <!-- Doral -->
    <a href="<?php echo esc_url(home_url('/locations/miami/')); ?>"
        class="md:col-span-4 module-card group relative rounded-[2.5rem] overflow-hidden bg-white h-96 shadow-sm border border-slate-100">
        <img src="https://images.unsplash.com/photo-1535498730771-e735b998cd64?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
            alt="Doral"
            class="absolute inset-0 w-full h-full object-cover transition duration-700 group-hover:scale-110">
        <div class="absolute inset-0 bg-gradient-to-t from-cyan-900/80 via-transparent to-transparent"></div>
        <div class="absolute bottom-0 left-0 p-8 text-white w-full">
            <span
                class="bg-cyan-500 text-white px-3 py-1 rounded-full text-xs font-bold mb-3 inline-block">Florida</span>
            <h3 class="text-3xl font-bold">Doral</h3>
        </div>
    </a>
</div>