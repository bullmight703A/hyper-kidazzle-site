<?php
/**
 * Front Page Template (Homepage)
 * 
 * @package Kidazzle
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<!-- Hero Section -->
<div class="rounded-[3rem] overflow-hidden relative h-[650px] md:h-[750px] shadow-lg group bg-slate-900">
    <div class="absolute inset-0 z-0">
        <img src="https://storage.googleapis.com/msgsndr/ZR2UvxPL2wlZNSvHjmJD/media/693c80ab97c0233276b3ff26.png"
            alt="<?php esc_attr_e('Happy Children', 'kidazzle'); ?>"
            class="w-full h-full object-cover transition duration-[3000ms] group-hover:scale-105 opacity-80">
        <div class="absolute inset-0 bg-gradient-to-r from-black/60 via-black/20 to-transparent"></div>
    </div>
    <div class="absolute inset-0 z-10 flex items-center p-8 md:p-16">
        <div class="max-w-3xl">
            <div
                class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md border border-white/20 text-white px-4 py-2 rounded-full mb-8">
                <span class="w-2 h-2 rounded-full bg-green-400 animate-pulse"></span>
                <span
                    class="font-bold text-xs uppercase tracking-widest"><?php esc_html_e('Enrolling Now for 2025', 'kidazzle'); ?></span>
            </div>
            <h1
                class="text-5xl md:text-8xl font-extrabold text-white leading-[1.05] mb-8 drop-shadow-xl tracking-tight">
                <?php esc_html_e('Where Learning', 'kidazzle'); ?> <br />
                <span
                    class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-300 to-yellow-500"><?php esc_html_e('Is Fun!', 'kidazzle'); ?></span>
            </h1>
            <p class="text-lg md:text-2xl text-white/90 font-medium mb-10 leading-relaxed max-w-lg">
                <?php esc_html_e('We are an independent, premier learning academy nurturing diverse bright minds for over 31 years.', 'kidazzle'); ?>
            </p>
            <div class="flex flex-col sm:flex-row gap-4">
                <a href="<?php echo esc_url(home_url('/locations/')); ?>"
                    class="bg-yellow-400 text-slate-900 px-10 py-5 rounded-full font-extrabold hover:bg-white transition hover:scale-105 shadow-xl flex items-center justify-center gap-2 text-lg">
                    <?php esc_html_e('Find Your Center', 'kidazzle'); ?>
                </a>
                <a href="<?php echo esc_url(home_url('/about/')); ?>"
                    class="bg-white/10 backdrop-blur-md border border-white/50 text-white px-10 py-5 rounded-full font-bold hover:bg-white hover:text-slate-900 transition flex items-center justify-center text-lg">
                    <?php esc_html_e('Our Legacy', 'kidazzle'); ?>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Marquee Ticker -->
<div
    class="rounded-[2rem] bg-[#4B3B9B] text-white py-4 overflow-hidden relative shadow-md border-2 border-[#4B3B9B] mt-6">
    <div class="marquee-container">
        <div
            class="marquee-content font-bold text-lg uppercase tracking-widest flex gap-12 items-center text-yellow-300">
            <span><?php esc_html_e('Memphis', 'kidazzle'); ?></span> <span class="text-white">•</span>
            <span><?php esc_html_e('Atlanta', 'kidazzle'); ?></span> <span class="text-white">•</span>
            <span><?php esc_html_e('Doral', 'kidazzle'); ?></span> <span class="text-white">•</span>
            <span><?php esc_html_e('Elite Early Education', 'kidazzle'); ?></span> <span class="text-white">•</span>
            <span><?php esc_html_e('Since 1994', 'kidazzle'); ?></span> <span class="text-white">•</span>
            <span><?php esc_html_e('Memphis', 'kidazzle'); ?></span> <span class="text-white">•</span>
            <span><?php esc_html_e('Atlanta', 'kidazzle'); ?></span> <span class="text-white">•</span>
            <span><?php esc_html_e('Doral', 'kidazzle'); ?></span> <span class="text-white">•</span>
            <span><?php esc_html_e('Elite Early Education', 'kidazzle'); ?></span> <span class="text-white">•</span>
            <span><?php esc_html_e('Since 1994', 'kidazzle'); ?></span> <span class="text-white">•</span>
        </div>
    </div>
</div>

<!-- Programs at a Glance -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 pt-8">
    <div class="md:col-span-3 px-2">
        <h2 class="text-4xl font-extrabold text-slate-900"><?php esc_html_e('Programs at a', 'kidazzle'); ?> <span
                class="text-red-500"><?php esc_html_e('Glance', 'kidazzle'); ?></span></h2>
    </div>

    <a href="<?php echo esc_url(home_url('/programs/')); ?>"
        class="module-card group relative rounded-[2.5rem] overflow-hidden bg-white h-72 shadow-sm border border-slate-100">
        <img src="https://images.unsplash.com/photo-1555252333-9f8e92e65df9?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
            class="absolute inset-0 w-full h-full object-cover transition duration-700 group-hover:scale-110 opacity-90"
            alt="<?php esc_attr_e('Infants and Toddlers', 'kidazzle'); ?>">
        <div class="absolute inset-0 bg-gradient-to-t from-red-900/80 to-transparent"></div>
        <div class="absolute bottom-0 left-0 p-8 text-white">
            <h3 class="text-2xl font-bold mb-1"><?php esc_html_e('Infants & Toddlers', 'kidazzle'); ?></h3>
            <p class="text-red-100 text-sm font-medium"><?php esc_html_e('6 weeks - 24 months', 'kidazzle'); ?></p>
        </div>
    </a>

    <a href="<?php echo esc_url(home_url('/programs/')); ?>"
        class="module-card group relative rounded-[2.5rem] overflow-hidden bg-white h-72 shadow-sm border border-slate-100">
        <img src="https://images.unsplash.com/photo-1587654780291-39c940483713?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
            class="absolute inset-0 w-full h-full object-cover transition duration-700 group-hover:scale-110 opacity-90"
            alt="<?php esc_attr_e('Preschool and Pre-K', 'kidazzle'); ?>">
        <div class="absolute inset-0 bg-gradient-to-t from-yellow-900/80 to-transparent"></div>
        <div class="absolute bottom-0 left-0 p-8 text-white">
            <h3 class="text-2xl font-bold mb-1"><?php esc_html_e('Preschool & Pre-K', 'kidazzle'); ?></h3>
            <p class="text-yellow-100 text-sm font-medium"><?php esc_html_e('2 years - 5 years', 'kidazzle'); ?></p>
        </div>
    </a>

    <a href="<?php echo esc_url(home_url('/programs/')); ?>"
        class="module-card group relative rounded-[2.5rem] overflow-hidden bg-white h-72 shadow-sm border border-slate-100">
        <img src="https://images.unsplash.com/photo-1571210862729-78a52d3779a2?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
            class="absolute inset-0 w-full h-full object-cover transition duration-700 group-hover:scale-110 opacity-90"
            alt="<?php esc_attr_e('After School and Camp', 'kidazzle'); ?>">
        <div class="absolute inset-0 bg-gradient-to-t from-purple-900/80 to-transparent"></div>
        <div class="absolute bottom-0 left-0 p-8 text-white">
            <h3 class="text-2xl font-bold mb-1"><?php esc_html_e('After School & Camp', 'kidazzle'); ?></h3>
            <p class="text-purple-100 text-sm font-medium"><?php esc_html_e('5 years - 12 years', 'kidazzle'); ?></p>
        </div>
    </a>
</div>

<!-- Regional Footprint -->
<div class="grid grid-cols-1 md:grid-cols-12 gap-6 pt-8">
    <div class="md:col-span-12 mb-4 px-2 flex justify-between items-end">
        <h2 class="text-4xl font-extrabold text-slate-900"><?php esc_html_e('Our Regional', 'kidazzle'); ?> <span
                class="text-indigo-600"><?php esc_html_e('Footprint', 'kidazzle'); ?></span></h2>
        <a href="<?php echo esc_url(home_url('/locations/')); ?>"
            class="hidden md:block text-slate-500 font-bold hover:text-indigo-600"><?php esc_html_e('View All Locations', 'kidazzle'); ?></a>
    </div>

    <a href="<?php echo esc_url(home_url('/locations/memphis/')); ?>"
        class="md:col-span-4 module-card group relative rounded-[2.5rem] overflow-hidden bg-white h-96 shadow-sm border border-slate-100">
        <img src="https://storage.googleapis.com/msgsndr/ZR2UvxPL2wlZNSvHjmJD/media/693c7cb5dbed99e0b07c8310.png"
            class="absolute inset-0 w-full h-full object-cover transition duration-700 group-hover:scale-110 opacity-90"
            alt="<?php esc_attr_e('Memphis', 'kidazzle'); ?>">
        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent"></div>
        <div class="absolute bottom-0 left-0 p-8 text-white w-full">
            <span
                class="bg-white/20 backdrop-blur text-white px-3 py-1 rounded-full text-xs font-bold mb-3 inline-block"><?php esc_html_e('Tennessee', 'kidazzle'); ?></span>
            <h3 class="text-3xl font-bold"><?php esc_html_e('Memphis', 'kidazzle'); ?></h3>
        </div>
    </a>

    <a href="<?php echo esc_url(home_url('/locations/')); ?>"
        class="md:col-span-4 module-card group relative rounded-[2.5rem] overflow-hidden bg-slate-900 h-96 shadow-xl border-4 border-white">
        <img src="https://storage.googleapis.com/msgsndr/ZR2UvxPL2wlZNSvHjmJD/media/693c7ddeb4f42080d1d6f342.png"
            class="absolute inset-0 w-full h-full object-cover transition duration-700 group-hover:scale-110 opacity-80"
            alt="<?php esc_attr_e('Atlanta', 'kidazzle'); ?>">
        <div class="absolute inset-0 bg-gradient-to-t from-orange-900/90 via-transparent to-transparent"></div>
        <div
            class="absolute top-6 right-6 bg-white text-orange-600 px-4 py-2 rounded-full font-bold text-xs shadow-lg flex items-center gap-1">
            <i data-lucide="star" class="w-3 h-3 fill-orange-600"></i> <?php esc_html_e('HQ', 'kidazzle'); ?>
        </div>
        <div class="absolute bottom-0 left-0 p-8 text-white w-full">
            <span
                class="bg-orange-500 text-white px-3 py-1 rounded-full text-xs font-bold mb-3 inline-block"><?php esc_html_e('Georgia', 'kidazzle'); ?></span>
            <h3 class="text-4xl font-bold"><?php esc_html_e('Atlanta', 'kidazzle'); ?></h3>
            <p class="text-white/80 text-sm mt-1"><?php esc_html_e('5 Locations', 'kidazzle'); ?></p>
        </div>
    </a>

    <a href="<?php echo esc_url(home_url('/locations/doral/')); ?>"
        class="md:col-span-4 module-card group relative rounded-[2.5rem] overflow-hidden bg-white h-96 shadow-sm border border-slate-100">
        <img src="https://images.unsplash.com/photo-1535498730771-e735b998cd64?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
            class="absolute inset-0 w-full h-full object-cover transition duration-700 group-hover:scale-110"
            alt="<?php esc_attr_e('Doral', 'kidazzle'); ?>">
        <div class="absolute inset-0 bg-gradient-to-t from-cyan-900/80 via-transparent to-transparent"></div>
        <div class="absolute bottom-0 left-0 p-8 text-white w-full">
            <span
                class="bg-cyan-500 text-white px-3 py-1 rounded-full text-xs font-bold mb-3 inline-block"><?php esc_html_e('Florida', 'kidazzle'); ?></span>
            <h3 class="text-3xl font-bold"><?php esc_html_e('Doral', 'kidazzle'); ?></h3>
        </div>
    </a>
</div>

<!-- Legacy / Origin Story -->
<div class="bg-white rounded-[3rem] p-8 md:p-12 shadow-sm border border-slate-200 mt-8">
    <div class="grid md:grid-cols-2 gap-12 items-center">
        <div>
            <div
                class="inline-flex items-center gap-2 text-orange-600 bg-orange-50 px-4 py-2 rounded-full font-bold text-xs uppercase tracking-wider mb-6">
                <i data-lucide="heart" class="w-4 h-4 fill-orange-600"></i>
                <?php esc_html_e('Our Story', 'kidazzle'); ?>
            </div>
            <h2 class="text-4xl font-extrabold text-slate-900 mb-6 leading-tight">
                <?php esc_html_e('From a Women\'s Shelter to a Regional Standard', 'kidazzle'); ?></h2>
            <p class="text-lg text-slate-600 leading-relaxed font-medium mb-6">
                <?php _e('KIDazzle\'s journey began 31 years ago with a mission rooted in compassion. We started within the walls of a <strong>women\'s shelter</strong>. Today, our promise remains: <strong>high-quality child care is a right, not a privilege.</strong>', 'kidazzle'); ?>
            </p>
            <a href="<?php echo esc_url(home_url('/about/')); ?>"
                class="inline-flex items-center justify-center bg-slate-100 text-slate-900 hover:bg-orange-500 hover:text-white px-8 py-4 rounded-full font-bold transition">
                <?php esc_html_e('Read Full Story', 'kidazzle'); ?> <i data-lucide="arrow-right"
                    class="w-4 h-4 ml-2"></i>
            </a>
        </div>
        <div class="h-[450px] rounded-[2.5rem] overflow-hidden relative shadow-inner">
            <img src="https://storage.googleapis.com/msgsndr/ZR2UvxPL2wlZNSvHjmJD/media/694473359bd664b7796f283c.png"
                class="w-full h-full object-cover" alt="<?php esc_attr_e('KIDazzle Story', 'kidazzle'); ?>">
        </div>
    </div>
</div>

<!-- KIDazzle Difference Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 pt-8">
    <div class="module-card bg-white p-8 rounded-[2.5rem] border border-slate-100 flex flex-col justify-between h-80">
        <div class="w-14 h-14 rounded-full bg-orange-100 text-orange-600 flex items-center justify-center"><i
                data-lucide="utensils" class="w-7 h-7"></i></div>
        <div>
            <h3 class="font-bold text-xl text-slate-900 mb-2"><?php esc_html_e('Chef-Prepared', 'kidazzle'); ?></h3>
            <p class="text-slate-500 text-sm">
                <?php esc_html_e('Fresh, hot meals prepared daily in commercial-grade kitchens.', 'kidazzle'); ?></p>
        </div>
    </div>
    <div class="module-card bg-white p-8 rounded-[2.5rem] border border-slate-100 flex flex-col justify-between h-80">
        <div class="w-14 h-14 rounded-full bg-cyan-100 text-cyan-600 flex items-center justify-center"><i
                data-lucide="brain" class="w-7 h-7"></i></div>
        <div>
            <h3 class="font-bold text-xl text-slate-900 mb-2"><?php esc_html_e('Creative Curriculum®', 'kidazzle'); ?>
            </h3>
            <p class="text-slate-500 text-sm">
                <?php esc_html_e('Research-based learning tailored to every developmental stage.', 'kidazzle'); ?></p>
        </div>
    </div>
    <div class="module-card bg-white p-8 rounded-[2.5rem] border border-slate-100 flex flex-col justify-between h-80">
        <div class="w-14 h-14 rounded-full bg-green-100 text-green-600 flex items-center justify-center"><i
                data-lucide="shield-check" class="w-7 h-7"></i></div>
        <div>
            <h3 class="font-bold text-xl text-slate-900 mb-2"><?php esc_html_e('Safety First', 'kidazzle'); ?></h3>
            <p class="text-slate-500 text-sm">
                <?php esc_html_e('Secure keypad entry and monitored surveillance for peace of mind.', 'kidazzle'); ?>
            </p>
        </div>
    </div>
    <div class="module-card bg-white p-8 rounded-[2.5rem] border border-slate-100 flex flex-col justify-between h-80">
        <div class="w-14 h-14 rounded-full bg-red-100 text-red-600 flex items-center justify-center"><i
                data-lucide="heart-handshake" class="w-7 h-7"></i></div>
        <div>
            <h3 class="font-bold text-xl text-slate-900 mb-2"><?php esc_html_e('Tenured Staff', 'kidazzle'); ?></h3>
            <p class="text-slate-500 text-sm">
                <?php esc_html_e('Low turnover and educators who truly know your child.', 'kidazzle'); ?></p>
        </div>
    </div>
</div>

<!-- Contact CTA with Lead Connector Form -->
<div
    class="bg-gradient-to-br from-[#4c1d95] to-[#c026d3] rounded-[3rem] p-6 md:p-12 text-center text-white shadow-2xl mt-8">
    <h3 class="text-4xl font-extrabold mb-4"><?php esc_html_e('Start Your Journey', 'kidazzle'); ?></h3>
    <p class="text-purple-100 text-lg mb-8">
        <?php esc_html_e('Schedule a tour today and see why families have trusted us for 31 years.', 'kidazzle'); ?></p>

    <div class="bg-white rounded-[2rem] p-2 overflow-hidden max-w-4xl mx-auto h-[600px] shadow-lg">
        <iframe src="https://api.leadconnectorhq.com/widget/form/N8RYaUY1SuORexcyA6la"
            style="width:100%;height:100%;border:none;border-radius:20px" id="inline-N8RYaUY1SuORexcyA6la"
            data-layout="{'id':'INLINE'}" data-trigger-type="alwaysShow" data-trigger-value=""
            data-activation-type="alwaysActivated" data-activation-value="" data-deactivation-type="neverDeactivate"
            data-deactivation-value="" data-form-name="2023 New KIDazzel website contact" data-height="870"
            data-layout-iframe-id="inline-N8RYaUY1SuORexcyA6la" data-form-id="N8RYaUY1SuORexcyA6la"
            title="<?php esc_attr_e('Contact Form', 'kidazzle'); ?>">
        </iframe>
        <script src="https://link.msgsndr.com/js/form_embed.js"></script>
    </div>
</div>

<?php get_footer(); ?>