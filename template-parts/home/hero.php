<?php
/**
 * Template Part: Hero Section
 * New KIDazzle homepage hero with glassmorphic content box
 *
 * @package kidazzle
 */

if (!defined('ABSPATH')) {
    exit;
}

$hero_image = 'https://storage.googleapis.com/msgsndr/ZR2UvxPL2wlZNSvHjmJD/media/693c80ab97c0233276b3ff26.png';
$locations_url = get_post_type_archive_link('location') ?: home_url('/locations/');
$about_url = home_url('/about/');
?>

<header class="relative w-full h-[700px] flex items-center overflow-hidden">
    <div class="absolute inset-0 z-0">
        <!-- Hero Image -->
        <img src="<?php echo esc_url($hero_image); ?>" 
             alt="<?php esc_attr_e('Diverse group of happy children playing', 'kidazzle'); ?>" 
             class="w-full h-full object-cover">
    </div>
    <div class="container mx-auto px-4 relative z-10">
        <!-- Main Content Box: 20% Opacity with Blur -->
        <div class="max-w-3xl bg-white/20 backdrop-blur-md p-10 rounded-[2rem] shadow-2xl border-l-[12px] border-yellow-400">
            <div class="flex items-center gap-3 mb-6 flex-wrap">
                <span class="bg-yellow-400 text-slate-900 px-4 py-1.5 rounded-full text-sm font-extrabold uppercase tracking-wider shadow-sm">
                    <?php esc_html_e('Now Enrolling', 'kidazzle'); ?>
                </span>
                <span class="text-slate-900 text-sm font-bold flex items-center gap-1 bg-white/60 px-3 py-1.5 rounded-full">
                    <i data-lucide="star" class="w-4 h-4 fill-yellow-400 text-yellow-600"></i> 
                    <?php esc_html_e('Since 1994', 'kidazzle'); ?>
                </span>
            </div>
            <h1 class="text-5xl md:text-7xl font-extrabold leading-tight mb-6 text-slate-900">
                <?php esc_html_e('Where Learning', 'kidazzle'); ?> <br />
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-600 via-yellow-600 to-cyan-700">
                    <?php esc_html_e('is Fun!', 'kidazzle'); ?>
                </span>
            </h1>
            <p class="text-xl text-slate-900 mb-8 font-medium font-bold drop-shadow-sm">
                <?php esc_html_e('From Memphis to Miami to Atlanta, we are an independent, premier learning academy nurturing diverse bright minds for over three decades.', 'kidazzle'); ?>
            </p>
            <div class="flex flex-col sm:flex-row gap-4">
                <a href="<?php echo esc_url($locations_url); ?>" class="bg-yellow-400 hover:bg-yellow-500 text-slate-900 font-bold py-4 px-10 rounded-2xl shadow-lg transition flex items-center justify-center gap-2 transform hover:-translate-y-1 text-center">
                    <?php esc_html_e('Find Your Center', 'kidazzle'); ?> <i data-lucide="chevron-right" class="w-5 h-5"></i>
                </a>
                <a href="<?php echo esc_url($about_url); ?>" class="bg-white/80 text-slate-900 border-2 border-slate-900 hover:border-cyan-600 hover:text-cyan-700 font-bold py-4 px-10 rounded-2xl transition flex items-center justify-center text-center">
                    <?php esc_html_e('Our Legacy', 'kidazzle'); ?>
                </a>
            </div>
        </div>
    </div>
</header>