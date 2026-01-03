<?php
/**
 * Template Name: Location - College Park
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
        <img src="https://storage.googleapis.com/msgsndr/ZR2UvxPL2wlZNSvHjmJD/media/694489ba4d1916e65f671511.png"
            alt="<?php esc_attr_e('College Park Center', 'kidazzle'); ?>"
            class="w-full h-full object-cover transition duration-[3000ms] group-hover:scale-105 opacity-60">
        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-transparent to-transparent"></div>
    </div>

    <div class="absolute inset-0 z-10 flex flex-col justify-center items-center text-center p-8 md:p-16">
        <div
            class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md border border-white/20 text-white px-4 py-2 rounded-full mb-6">
            <i data-lucide="plane" class="w-4 h-4 text-cyan-400"></i>
            <span
                class="font-bold text-xs uppercase tracking-widest"><?php esc_html_e('College Park, GA', 'kidazzle'); ?></span>
        </div>
        <h1 class="text-5xl md:text-7xl font-extrabold text-white mb-4 drop-shadow-xl tracking-tight">
            <?php esc_html_e('College Park', 'kidazzle'); ?> <span
                class="text-cyan-400"><?php esc_html_e('Center', 'kidazzle'); ?></span>
        </h1>
        <p class="text-lg md:text-2xl text-white/90 font-medium max-w-2xl leading-relaxed drop-shadow-md">
            <?php esc_html_e('STEAM-focused learning for the Tri-Cities community.', 'kidazzle'); ?>
        </p>
    </div>
</div>

<div class="grid lg:grid-cols-12 gap-6 pt-4 mx-4 md:mx-0">

    <div class="lg:col-span-8 space-y-6">

        <div class="bg-white p-8 md:p-12 rounded-[2.5rem] border border-slate-200 shadow-sm">
            <h2 class="text-3xl font-extrabold text-slate-900 mb-6">
                <?php esc_html_e('About This Center', 'kidazzle'); ?></h2>
            <p class="text-lg text-slate-600 leading-relaxed mb-8">
                <?php esc_html_e('Welcome to', 'kidazzle'); ?>
                <strong><?php esc_html_e('KIDazzle College Park', 'kidazzle'); ?></strong>.
                <?php esc_html_e('Conveniently located near Hartsfield-Jackson Airport, we serve families in the Tri-Cities area with a curriculum that emphasizes Science, Technology, Engineering, Arts, and Math (STEAM). We offer flexible options and transportation for busy families.', 'kidazzle'); ?>
            </p>

            <div class="grid md:grid-cols-3 gap-4">
                <div class="bg-cyan-50 p-6 rounded-3xl border border-cyan-100 text-center">
                    <i data-lucide="flask-conical" class="w-8 h-8 mx-auto mb-3 text-cyan-600"></i>
                    <h4 class="font-bold text-slate-900"><?php esc_html_e('STEAM Focus', 'kidazzle'); ?></h4>
                    <p class="text-xs text-slate-500 mt-1"><?php esc_html_e('Science & Arts', 'kidazzle'); ?></p>
                </div>
                <div class="bg-slate-50 p-6 rounded-3xl border border-slate-200 text-center">
                    <i data-lucide="plane" class="w-8 h-8 mx-auto mb-3 text-slate-600"></i>
                    <h4 class="font-bold text-slate-900"><?php esc_html_e('Near Airport', 'kidazzle'); ?></h4>
                    <p class="text-xs text-slate-500 mt-1"><?php esc_html_e('Convenient Location', 'kidazzle'); ?></p>
                </div>
                <div class="bg-yellow-50 p-6 rounded-3xl border border-yellow-100 text-center">
                    <i data-lucide="bus" class="w-8 h-8 mx-auto mb-3 text-yellow-600"></i>
                    <h4 class="font-bold text-slate-900"><?php esc_html_e('Transportation', 'kidazzle'); ?></h4>
                    <p class="text-xs text-slate-500 mt-1"><?php esc_html_e('School Drop-off', 'kidazzle'); ?></p>
                </div>
            </div>
        </div>

        <div class="bg-white p-8 md:p-12 rounded-[2.5rem] border-l-[12px] border-cyan-400 shadow-lg">
            <div class="flex items-center gap-4 mb-8">
                <div class="w-12 h-12 bg-cyan-100 rounded-full flex items-center justify-center text-cyan-600">
                    <i data-lucide="calendar" class="w-6 h-6"></i>
                </div>
                <h2 class="text-3xl font-extrabold text-slate-900"><?php esc_html_e('Book a Tour', 'kidazzle'); ?></h2>
            </div>

            <div class="w-full h-[800px] rounded-2xl overflow-hidden border border-slate-100">
                <iframe src="https://api.leadconnectorhq.com/widget/booking/o5FphoKc5QHHuG1DT3Xo"
                    style="width: 100%; height: 100%; border:none; overflow: hidden;" scrolling="no"
                    id="msgsndr-calendar">
                </iframe>
            </div>
        </div>

        <div
            class="bg-slate-100 rounded-[2.5rem] h-80 flex items-center justify-center text-slate-400 border border-slate-200 relative overflow-hidden">
            <div class="text-center">
                <i data-lucide="map" class="w-12 h-12 mx-auto mb-2 opacity-50"></i>
                <p class="font-bold"><?php esc_html_e('Google Map Embed Placeholder', 'kidazzle'); ?></p>
                <p class="text-sm">(1701 Columbia Ave, College Park, GA)</p>
            </div>
        </div>

    </div>

    <div class="lg:col-span-4 space-y-6">

        <div class="bg-slate-900 p-8 rounded-[2.5rem] text-white shadow-xl">
            <h3 class="text-xl font-bold mb-6 flex items-center gap-2">
                <i data-lucide="info" class="text-cyan-400"></i> <?php esc_html_e('Contact Info', 'kidazzle'); ?>
            </h3>
            <div class="space-y-6">
                <div class="flex items-start gap-4">
                    <div class="bg-white/10 p-2 rounded-lg"><i data-lucide="map-pin" class="w-5 h-5 text-red-400"></i>
                    </div>
                    <div>
                        <span
                            class="font-bold block text-sm text-slate-400 uppercase tracking-wide mb-1"><?php esc_html_e('Address', 'kidazzle'); ?></span>
                        <span class="leading-relaxed">1701 Columbia
                            Ave<br><?php esc_html_e('College Park, GA 30337', 'kidazzle'); ?></span>
                    </div>
                </div>
                <div class="flex items-start gap-4">
                    <div class="bg-white/10 p-2 rounded-lg"><i data-lucide="phone" class="w-5 h-5 text-green-400"></i>
                    </div>
                    <div>
                        <span
                            class="font-bold block text-sm text-slate-400 uppercase tracking-wide mb-1"><?php esc_html_e('Phone', 'kidazzle'); ?></span>
                        <span class="font-bold text-lg">877-410-1002</span>
                    </div>
                </div>
                <div class="flex items-start gap-4">
                    <div class="bg-white/10 p-2 rounded-lg"><i data-lucide="mail" class="w-5 h-5 text-cyan-400"></i>
                    </div>
                    <div>
                        <span
                            class="font-bold block text-sm text-slate-400 uppercase tracking-wide mb-1"><?php esc_html_e('Email', 'kidazzle'); ?></span>
                        <a href="mailto:collegepark@kidazzle.com"
                            class="hover:text-white underline decoration-cyan-400">collegepark@kidazzle.com</a>
                    </div>
                </div>
            </div>
            <div class="mt-8 pt-8 border-t border-slate-800">
                <a href="tel:8774101002"
                    class="block w-full bg-cyan-500 hover:bg-cyan-400 text-slate-900 font-bold text-center py-4 rounded-xl transition">
                    <?php esc_html_e('Call Now', 'kidazzle'); ?>
                </a>
            </div>
        </div>

        <div class="bg-white p-8 rounded-[2.5rem] shadow-sm border border-slate-200">
            <h3 class="text-xl font-bold text-slate-900 mb-4"><?php esc_html_e('Have Questions?', 'kidazzle'); ?></h3>
            <p class="text-slate-500 text-sm mb-6">
                <?php esc_html_e('Send a quick message directly to the Center Director.', 'kidazzle'); ?></p>
            <div
                class="bg-slate-50 border-dashed border-2 border-slate-300 rounded-2xl h-64 flex items-center justify-center text-center p-6">
                <span
                    class="text-slate-400 text-sm font-medium"><?php esc_html_e('Embed College Park Form Here', 'kidazzle'); ?></span>
            </div>
        </div>

        <div class="bg-cyan-600 p-8 rounded-[2.5rem] text-white shadow-lg text-center">
            <h3 class="font-bold text-lg mb-4"><?php esc_html_e('Explore More', 'kidazzle'); ?></h3>
            <div class="space-y-3">
                <a href="<?php echo esc_url(home_url('/locations/')); ?>"
                    class="block bg-white/20 hover:bg-white/30 py-3 rounded-xl font-bold text-sm transition"><?php esc_html_e('View All Locations', 'kidazzle'); ?></a>
                <a href="<?php echo esc_url(home_url('/programs/')); ?>"
                    class="block bg-white/20 hover:bg-white/30 py-3 rounded-xl font-bold text-sm transition"><?php esc_html_e('View Programs', 'kidazzle'); ?></a>
            </div>
        </div>

    </div>
</div>

<div
    class="bg-gradient-to-br from-[#4c1d95] to-[#c026d3] rounded-[3rem] p-10 md:p-14 text-white shadow-2xl relative overflow-hidden mt-12 mb-8 mx-4 md:mx-0">
    <div class="relative z-10 flex flex-col md:flex-row items-center justify-between gap-8">
        <div class="text-left max-w-2xl">
            <h3 class="text-3xl md:text-4xl font-extrabold mb-3"><?php esc_html_e('Ready to Join?', 'kidazzle'); ?></h3>
            <p class="text-purple-100 text-lg">
                <?php esc_html_e('Secure your spot at our College Park center today.', 'kidazzle'); ?></p>
        </div>
        <div class="flex flex-col sm:flex-row gap-4 shrink-0">
            <a href="<?php echo esc_url(home_url('/enrollment/')); ?>"
                class="bg-white text-purple-900 px-8 py-4 rounded-full font-bold hover:bg-yellow-400 hover:text-black transition shadow-lg whitespace-nowrap">
                <?php esc_html_e('Enroll Now', 'kidazzle'); ?>
            </a>
        </div>
    </div>
</div>

<?php get_footer(); ?>