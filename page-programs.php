<?php
/**
 * Template Name: Programs Page
 * 
 * @package Kidazzle
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<!-- Hero Section -->
<div class="rounded-[3rem] overflow-hidden relative h-[500px] shadow-lg group bg-slate-900">
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1503454537195-1dcabb73ffb9?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80"
            alt="<?php esc_attr_e('Children Learning', 'kidazzle'); ?>"
            class="w-full h-full object-cover transition duration-[3000ms] group-hover:scale-105 opacity-60">
        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
    </div>

    <div class="absolute inset-0 z-10 flex flex-col justify-center items-center text-center p-8 md:p-16">
        <div
            class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md border border-white/20 text-white px-4 py-2 rounded-full mb-6">
            <span class="w-2 h-2 rounded-full bg-yellow-400 animate-pulse"></span>
            <span
                class="font-bold text-xs uppercase tracking-widest"><?php esc_html_e('Ages 6 Weeks to 12 Years', 'kidazzle'); ?></span>
        </div>
        <h1 class="text-5xl md:text-7xl font-extrabold text-white mb-6 drop-shadow-xl tracking-tight">
            <?php esc_html_e('Our', 'kidazzle'); ?> <span
                class="text-yellow-400"><?php esc_html_e('Programs', 'kidazzle'); ?></span>
        </h1>
        <p class="text-lg md:text-2xl text-white/90 font-medium max-w-3xl leading-relaxed drop-shadow-md">
            <?php esc_html_e('Comprehensive, curriculum-driven care tailored for every stage of your child\'s development.', 'kidazzle'); ?>
        </p>
    </div>
</div>

<!-- More Than Just Care Section -->
<div class="bg-white rounded-[3rem] p-8 md:p-16 shadow-sm border border-slate-200 mt-6">
    <div class="text-center max-w-4xl mx-auto mb-12">
        <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-6">
            <?php esc_html_e('More Than Just Care', 'kidazzle'); ?></h2>
        <p class="text-lg text-slate-600 leading-relaxed">
            <?php esc_html_e('At KIDazzle, we believe that early education is the foundation for lifelong success. Our programs are not one-size-fits-all; they are specifically designed to meet the milestones of each age group.', 'kidazzle'); ?>
        </p>
    </div>

    <div class="grid md:grid-cols-2 gap-6">
        <a href="<?php echo esc_url(home_url('/lesson-plans/')); ?>"
            class="module-card bg-indigo-50 p-8 rounded-[2.5rem] border border-indigo-100 group block">
            <div class="flex items-center gap-3 mb-4">
                <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center text-indigo-600 shadow-sm">
                    <i data-lucide="book-open" class="w-6 h-6"></i>
                </div>
                <h3 class="text-xl font-bold text-indigo-900"><?php esc_html_e('Lesson Plans', 'kidazzle'); ?></h3>
            </div>
            <p class="text-slate-600 mb-6">
                <?php esc_html_e('Every classroom follows a structured, weekly lesson plan derived from the Creative Curriculum®. See examples of our work.', 'kidazzle'); ?>
            </p>
            <div class="flex items-center text-indigo-700 font-bold text-sm group-hover:gap-2 transition-all">
                <?php esc_html_e('View Examples', 'kidazzle'); ?> <i data-lucide="arrow-right" class="w-4 h-4 ml-1"></i>
            </div>
        </a>

        <div class="module-card bg-slate-50 p-8 rounded-[2.5rem] border border-slate-100">
            <div class="flex items-center gap-3 mb-4">
                <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center text-slate-600 shadow-sm">
                    <i data-lucide="layout" class="w-6 h-6"></i>
                </div>
                <h3 class="text-xl font-bold text-slate-900"><?php esc_html_e('Classroom Management', 'kidazzle'); ?>
                </h3>
            </div>
            <p class="text-slate-600">
                <?php esc_html_e('Our environments are intentionally designed to promote independence. Consistent routines and clear expectations create a safe space for learning.', 'kidazzle'); ?>
            </p>
        </div>
    </div>
</div>

<!-- Programs Grid -->
<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">

    <!-- Infants -->
    <a href="<?php echo esc_url(home_url('/programs/infant-care/')); ?>"
        class="module-card group bg-white border border-slate-100 rounded-[2.5rem] overflow-hidden flex flex-col h-full">
        <div class="h-56 relative overflow-hidden">
            <img src="https://images.unsplash.com/photo-1555252333-9f8e92e65df9?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                class="absolute inset-0 w-full h-full object-cover transition duration-700 group-hover:scale-110"
                alt="<?php esc_attr_e('Infant Care', 'kidazzle'); ?>">
            <div
                class="absolute top-4 right-4 bg-white/90 backdrop-blur text-red-600 px-3 py-1 rounded-full text-xs font-bold shadow-md">
                <?php esc_html_e('6 wks - 12 mos', 'kidazzle'); ?>
            </div>
        </div>
        <div class="p-8 flex flex-col flex-grow">
            <h3 class="text-2xl font-bold text-slate-900 mb-3"><?php esc_html_e('Infants', 'kidazzle'); ?></h3>
            <p class="text-slate-500 text-sm mb-6 flex-grow leading-relaxed">
                <?php esc_html_e('Nurturing care focusing on trust, sensory milestones, and secure attachment.', 'kidazzle'); ?>
            </p>
            <span
                class="text-red-500 font-bold text-sm flex items-center gap-2 group-hover:translate-x-1 transition-transform">
                <?php esc_html_e('View Details', 'kidazzle'); ?> <i data-lucide="arrow-right" class="w-4 h-4"></i>
            </span>
        </div>
    </a>

    <!-- Toddlers -->
    <a href="<?php echo esc_url(home_url('/programs/toddler-care/')); ?>"
        class="module-card group bg-white border border-slate-100 rounded-[2.5rem] overflow-hidden flex flex-col h-full">
        <div class="h-56 relative overflow-hidden">
            <img src="https://images.unsplash.com/photo-1503454537195-1dcabb73ffb9?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                class="absolute inset-0 w-full h-full object-cover transition duration-700 group-hover:scale-110"
                alt="<?php esc_attr_e('Toddler Care', 'kidazzle'); ?>">
            <div
                class="absolute top-4 right-4 bg-white/90 backdrop-blur text-orange-600 px-3 py-1 rounded-full text-xs font-bold shadow-md">
                <?php esc_html_e('12 - 24 mos', 'kidazzle'); ?>
            </div>
        </div>
        <div class="p-8 flex flex-col flex-grow">
            <h3 class="text-2xl font-bold text-slate-900 mb-3"><?php esc_html_e('Toddlers', 'kidazzle'); ?></h3>
            <p class="text-slate-500 text-sm mb-6 flex-grow leading-relaxed">
                <?php esc_html_e('Active exploration, vocabulary building, and social interaction in a safe environment.', 'kidazzle'); ?>
            </p>
            <span
                class="text-orange-500 font-bold text-sm flex items-center gap-2 group-hover:translate-x-1 transition-transform">
                <?php esc_html_e('View Details', 'kidazzle'); ?> <i data-lucide="arrow-right" class="w-4 h-4"></i>
            </span>
        </div>
    </a>

    <!-- Preschool -->
    <a href="<?php echo esc_url(home_url('/programs/preschool/')); ?>"
        class="module-card group bg-white border border-slate-100 rounded-[2.5rem] overflow-hidden flex flex-col h-full">
        <div class="h-56 relative overflow-hidden">
            <img src="https://images.unsplash.com/photo-1587654780291-39c940483713?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                class="absolute inset-0 w-full h-full object-cover transition duration-700 group-hover:scale-110"
                alt="<?php esc_attr_e('Preschool', 'kidazzle'); ?>">
            <div
                class="absolute top-4 right-4 bg-white/90 backdrop-blur text-yellow-600 px-3 py-1 rounded-full text-xs font-bold shadow-md">
                <?php esc_html_e('2 - 3 yrs', 'kidazzle'); ?>
            </div>
        </div>
        <div class="p-8 flex flex-col flex-grow">
            <h3 class="text-2xl font-bold text-slate-900 mb-3"><?php esc_html_e('Preschool', 'kidazzle'); ?></h3>
            <p class="text-slate-500 text-sm mb-6 flex-grow leading-relaxed">
                <?php esc_html_e('Early academics and social skills preparing for school success through project-based learning.', 'kidazzle'); ?>
            </p>
            <span
                class="text-yellow-600 font-bold text-sm flex items-center gap-2 group-hover:translate-x-1 transition-transform">
                <?php esc_html_e('View Details', 'kidazzle'); ?> <i data-lucide="arrow-right" class="w-4 h-4"></i>
            </span>
        </div>
    </a>

    <!-- GA Pre-K -->
    <a href="<?php echo esc_url(home_url('/programs/ga-pre-k/')); ?>"
        class="module-card group bg-white border border-slate-100 rounded-[2.5rem] overflow-hidden flex flex-col h-full">
        <div class="h-56 relative overflow-hidden">
            <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                class="absolute inset-0 w-full h-full object-cover transition duration-700 group-hover:scale-110"
                alt="<?php esc_attr_e('GA Pre-K', 'kidazzle'); ?>">
            <div
                class="absolute top-4 right-4 bg-white/90 backdrop-blur text-green-600 px-3 py-1 rounded-full text-xs font-bold shadow-md">
                <?php esc_html_e('4 - 5 yrs', 'kidazzle'); ?>
            </div>
        </div>
        <div class="p-8 flex flex-col flex-grow">
            <h3 class="text-2xl font-bold text-slate-900 mb-3"><?php esc_html_e('GA Pre-K', 'kidazzle'); ?></h3>
            <p class="text-slate-500 text-sm mb-6 flex-grow leading-relaxed">
                <?php esc_html_e('Lottery-funded program utilizing GELDS standards and Frog Street curriculum for kindergarten readiness.', 'kidazzle'); ?>
            </p>
            <span
                class="text-green-600 font-bold text-sm flex items-center gap-2 group-hover:translate-x-1 transition-transform">
                <?php esc_html_e('View Details', 'kidazzle'); ?> <i data-lucide="arrow-right" class="w-4 h-4"></i>
            </span>
        </div>
    </a>

    <!-- VPK -->
    <a href="<?php echo esc_url(home_url('/programs/vpk/')); ?>"
        class="module-card group bg-white border border-slate-100 rounded-[2.5rem] overflow-hidden flex flex-col h-full">
        <div class="h-56 relative overflow-hidden">
            <img src="https://images.unsplash.com/photo-1588072432836-e10032774350?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                class="absolute inset-0 w-full h-full object-cover transition duration-700 group-hover:scale-110"
                alt="<?php esc_attr_e('VPK', 'kidazzle'); ?>">
            <div
                class="absolute top-4 right-4 bg-white/90 backdrop-blur text-cyan-600 px-3 py-1 rounded-full text-xs font-bold shadow-md">
                <?php esc_html_e('4 - 5 yrs', 'kidazzle'); ?>
            </div>
        </div>
        <div class="p-8 flex flex-col flex-grow">
            <h3 class="text-2xl font-bold text-slate-900 mb-3"><?php esc_html_e('Private Pre-K & VPK', 'kidazzle'); ?>
            </h3>
            <p class="text-slate-500 text-sm mb-6 flex-grow leading-relaxed">
                <?php esc_html_e('Specialized preparation for Florida (VPK) and Tennessee (TN-ELDS) standards.', 'kidazzle'); ?>
            </p>
            <span
                class="text-cyan-600 font-bold text-sm flex items-center gap-2 group-hover:translate-x-1 transition-transform">
                <?php esc_html_e('View Details', 'kidazzle'); ?> <i data-lucide="arrow-right" class="w-4 h-4"></i>
            </span>
        </div>
    </a>

    <!-- School Age -->
    <a href="<?php echo esc_url(home_url('/programs/after-school/')); ?>"
        class="module-card group bg-white border border-slate-100 rounded-[2.5rem] overflow-hidden flex flex-col h-full">
        <div class="h-56 relative overflow-hidden">
            <img src="https://images.unsplash.com/photo-1571210862729-78a52d3779a2?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                class="absolute inset-0 w-full h-full object-cover transition duration-700 group-hover:scale-110"
                alt="<?php esc_attr_e('School Age', 'kidazzle'); ?>">
            <div
                class="absolute top-4 right-4 bg-white/90 backdrop-blur text-purple-600 px-3 py-1 rounded-full text-xs font-bold shadow-md">
                <?php esc_html_e('5 - 12 yrs', 'kidazzle'); ?>
            </div>
        </div>
        <div class="p-8 flex flex-col flex-grow">
            <h3 class="text-2xl font-bold text-slate-900 mb-3"><?php esc_html_e('School Age', 'kidazzle'); ?></h3>
            <p class="text-slate-500 text-sm mb-6 flex-grow leading-relaxed">
                <?php esc_html_e('After School programs with homework help and engaging Summer Camps featuring weekly themes.', 'kidazzle'); ?>
            </p>
            <span
                class="text-purple-600 font-bold text-sm flex items-center gap-2 group-hover:translate-x-1 transition-transform">
                <?php esc_html_e('View Details', 'kidazzle'); ?> <i data-lucide="arrow-right" class="w-4 h-4"></i>
            </span>
        </div>
    </a>

</div>

<!-- CTA Section -->
<div
    class="bg-gradient-to-br from-[#4c1d95] to-[#c026d3] rounded-[3rem] p-10 md:p-14 text-white shadow-2xl relative overflow-hidden mt-8">
    <div class="relative z-10 flex flex-col md:flex-row items-center justify-between gap-8">
        <div class="text-left max-w-2xl">
            <h3 class="text-3xl md:text-4xl font-extrabold mb-3">
                <?php esc_html_e('Enrollment Open Year-Round', 'kidazzle'); ?></h3>
            <p class="text-purple-100 text-lg">
                <?php esc_html_e('Secure your child\'s spot in a center where learning is fun and futures are bright.', 'kidazzle'); ?>
            </p>
        </div>
        <div class="flex flex-col sm:flex-row gap-4 shrink-0">
            <a href="<?php echo esc_url(home_url('/locations/')); ?>"
                class="bg-white text-purple-900 px-8 py-4 rounded-full font-bold hover:bg-yellow-400 hover:text-black transition shadow-lg whitespace-nowrap">
                <?php esc_html_e('Find a Location', 'kidazzle'); ?>
            </a>
            <a href="<?php echo esc_url(home_url('/enrollment/')); ?>"
                class="bg-transparent border-2 border-white text-white px-8 py-4 rounded-full font-bold hover:bg-white/10 transition whitespace-nowrap">
                <?php esc_html_e('Apply Now', 'kidazzle'); ?>
            </a>
        </div>
    </div>
</div>

<?php get_footer(); ?>