<?php
/**
 * Template Name: Quality Standards Page
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
        <img src="https://images.unsplash.com/photo-1580582932707-520aed937b7b?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80"
            alt="<?php esc_attr_e('High Quality Classroom', 'kidazzle'); ?>"
            class="w-full h-full object-cover transition duration-[3000ms] group-hover:scale-105 opacity-60">
        <div class="absolute inset-0 bg-gradient-to-t from-indigo-900/90 via-indigo-900/50 to-transparent"></div>
    </div>

    <div class="absolute inset-0 z-10 flex flex-col justify-center items-center text-center p-8 md:p-16">
        <div
            class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md border border-white/20 text-white px-4 py-2 rounded-full mb-6">
            <i data-lucide="award" class="w-4 h-4 text-yellow-400"></i>
            <span
                class="font-bold text-xs uppercase tracking-widest"><?php esc_html_e('The Science of Quality', 'kidazzle'); ?></span>
        </div>
        <h1 class="text-5xl md:text-7xl font-extrabold text-white mb-6 drop-shadow-xl tracking-tight">
            <?php esc_html_e('Measuring', 'kidazzle'); ?> <span
                class="text-yellow-400"><?php esc_html_e('Excellence', 'kidazzle'); ?></span>
        </h1>
        <p class="text-lg md:text-2xl text-white/90 font-medium max-w-3xl leading-relaxed drop-shadow-md">
            <?php esc_html_e('We use rigorous environmental rating scales (ERS) and NAEYC standards to objectively measure the quality of your child\'s daily experience.', 'kidazzle'); ?>
        </p>
    </div>
</div>

<div class="bg-white rounded-[3rem] p-10 md:p-16 border border-slate-200 text-center mt-6 mx-4 md:mx-0">
    <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-6">
        <?php esc_html_e('The "Third Teacher"', 'kidazzle'); ?></h2>
    <p class="text-lg text-slate-600 leading-relaxed max-w-4xl mx-auto mb-10">
        <?php esc_html_e('A child\'s environment—the space, the routine, and the interactions—is their third teacher. KIDazzle adheres to the gold standard', 'kidazzle'); ?>
        <strong><?php esc_html_e('Environment Rating Scales (ERS)', 'kidazzle'); ?></strong>
        <?php esc_html_e('and aligns with', 'kidazzle'); ?> <strong><?php esc_html_e('NAEYC', 'kidazzle'); ?></strong>
        (<?php esc_html_e('National Association for the Education of Young Children', 'kidazzle'); ?>)
        <?php esc_html_e('guidelines to ensure every classroom supports optimal development.', 'kidazzle'); ?>
    </p>
    <div class="flex flex-wrap justify-center gap-4">
        <a href="#iters"
            class="px-6 py-3 rounded-full bg-red-50 text-red-600 font-bold border border-red-100 hover:bg-red-100 transition"><?php esc_html_e('ITERS (Infant/Toddler)', 'kidazzle'); ?></a>
        <a href="#ecers"
            class="px-6 py-3 rounded-full bg-green-50 text-green-600 font-bold border border-green-100 hover:bg-green-100 transition"><?php esc_html_e('ECERS (Preschool)', 'kidazzle'); ?></a>
    </div>
</div>

<div id="iters" class="grid lg:grid-cols-2 gap-6 items-stretch pt-4 mx-4 md:mx-0">

    <div class="bg-red-50 p-10 rounded-[3rem] border border-red-100 flex flex-col justify-center">
        <div class="flex items-center gap-4 mb-6">
            <div class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center text-red-500 shadow-sm">
                <i data-lucide="baby" class="w-8 h-8"></i>
            </div>
            <div>
                <h2 class="text-3xl font-extrabold text-slate-900">ITERS-3</h2>
                <span
                    class="text-red-600 font-bold text-sm tracking-wide uppercase"><?php esc_html_e('Infant/Toddler Environment Rating Scale', 'kidazzle'); ?></span>
            </div>
        </div>

        <p class="text-slate-700 text-lg mb-8 leading-relaxed">
            <?php esc_html_e('Designed for classrooms serving children from', 'kidazzle'); ?>
            <strong><?php esc_html_e('birth to 30 months', 'kidazzle'); ?></strong>.
            <?php esc_html_e('This scale rigorously evaluates how we protect children\'s health and safety while providing appropriate stimulation.', 'kidazzle'); ?>
        </p>

        <div class="space-y-4">
            <div class="flex items-start gap-4 p-4 bg-white rounded-2xl shadow-sm border border-red-100">
                <div class="mt-1 text-red-500"><i data-lucide="check-circle" class="w-5 h-5"></i></div>
                <div>
                    <strong
                        class="block text-slate-900"><?php esc_html_e('Personal Care Routines', 'kidazzle'); ?></strong>
                    <span
                        class="text-slate-600 text-sm"><?php esc_html_e('Strict hygiene for diapering, meals, and naps.', 'kidazzle'); ?></span>
                </div>
            </div>
            <div class="flex items-start gap-4 p-4 bg-white rounded-2xl shadow-sm border border-red-100">
                <div class="mt-1 text-red-500"><i data-lucide="message-circle" class="w-5 h-5"></i></div>
                <div>
                    <strong
                        class="block text-slate-900"><?php esc_html_e('Listening & Talking', 'kidazzle'); ?></strong>
                    <span
                        class="text-slate-600 text-sm"><?php esc_html_e('Consistent verbal interaction to build early vocabulary.', 'kidazzle'); ?></span>
                </div>
            </div>
        </div>

        <div class="mt-8">
            <a href="<?php echo esc_url(home_url('/programs/')); ?>"
                class="inline-flex items-center gap-2 text-red-600 font-bold hover:gap-3 transition-all">
                <?php esc_html_e('View Infant Program', 'kidazzle'); ?> <i data-lucide="arrow-right"
                    class="w-4 h-4"></i>
            </a>
        </div>
    </div>

    <div class="rounded-[3rem] overflow-hidden relative min-h-[400px] shadow-lg group">
        <img src="https://images.unsplash.com/photo-1519689680058-324335c77eba?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
            alt="<?php esc_attr_e('Infant Care', 'kidazzle'); ?>"
            class="w-full h-full object-cover transition duration-700 group-hover:scale-105">
        <div class="absolute inset-0 bg-gradient-to-t from-red-900/60 to-transparent"></div>
        <div class="absolute bottom-8 left-8 text-white max-w-xs">
            <p class="font-bold text-xl">
                "<?php esc_html_e('Warm interactions are the foundation of our ITERS score.', 'kidazzle'); ?>"</p>
        </div>
    </div>
</div>

<div id="ecers" class="grid lg:grid-cols-2 gap-6 items-stretch pt-4 mx-4 md:mx-0">

    <div class="rounded-[3rem] overflow-hidden relative min-h-[400px] shadow-lg group order-2 lg:order-1">
        <img src="https://images.unsplash.com/photo-1503454537195-1dcabb73ffb9?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
            alt="<?php esc_attr_e('Preschool Learning', 'kidazzle'); ?>"
            class="w-full h-full object-cover transition duration-700 group-hover:scale-105">
        <div class="absolute inset-0 bg-gradient-to-t from-green-900/60 to-transparent"></div>
        <div class="absolute bottom-8 left-8 text-white max-w-xs">
            <p class="font-bold text-xl">"<?php esc_html_e('Structured play meets academic rigor.', 'kidazzle'); ?>"</p>
        </div>
    </div>

    <div
        class="bg-green-50 p-10 rounded-[3rem] border border-green-100 flex flex-col justify-center order-1 lg:order-2">
        <div class="flex items-center gap-4 mb-6">
            <div class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center text-green-600 shadow-sm">
                <i data-lucide="school" class="w-8 h-8"></i>
            </div>
            <div>
                <h2 class="text-3xl font-extrabold text-slate-900">ECERS-3</h2>
                <span
                    class="text-green-600 font-bold text-sm tracking-wide uppercase"><?php esc_html_e('Early Childhood Environment Rating Scale', 'kidazzle'); ?></span>
            </div>
        </div>

        <p class="text-slate-700 text-lg mb-8 leading-relaxed">
            <?php esc_html_e('Designed for preschool-aged children', 'kidazzle'); ?>
            (<strong><?php esc_html_e('3 through 5 years', 'kidazzle'); ?></strong>).
            <?php esc_html_e('This scale measures the quality of the learning environment, program structure, and the depth of teaching interactions.', 'kidazzle'); ?>
        </p>

        <div class="space-y-4">
            <div class="flex items-start gap-4 p-4 bg-white rounded-2xl shadow-sm border border-green-100">
                <div class="mt-1 text-green-500"><i data-lucide="book-open" class="w-5 h-5"></i></div>
                <div>
                    <strong class="block text-slate-900"><?php esc_html_e('Language-Reasoning', 'kidazzle'); ?></strong>
                    <span
                        class="text-slate-600 text-sm"><?php esc_html_e('Using books, logical thinking, and communication.', 'kidazzle'); ?></span>
                </div>
            </div>
            <div class="flex items-start gap-4 p-4 bg-white rounded-2xl shadow-sm border border-green-100">
                <div class="mt-1 text-green-500"><i data-lucide="layout-grid" class="w-5 h-5"></i></div>
                <div>
                    <strong class="block text-slate-900"><?php esc_html_e('Program Structure', 'kidazzle'); ?></strong>
                    <span
                        class="text-slate-600 text-sm"><?php esc_html_e('Perfect balance of free play and group time.', 'kidazzle'); ?></span>
                </div>
            </div>
        </div>

        <div class="mt-8">
            <a href="<?php echo esc_url(home_url('/programs/')); ?>"
                class="inline-flex items-center gap-2 text-green-600 font-bold hover:gap-3 transition-all">
                <?php esc_html_e('View Preschool Program', 'kidazzle'); ?> <i data-lucide="arrow-right"
                    class="w-4 h-4"></i>
            </a>
        </div>
    </div>
</div>

<div
    class="bg-indigo-900 text-white rounded-[3rem] p-10 md:p-16 mt-8 relative overflow-hidden text-center mx-4 md:mx-0">
    <div class="absolute top-0 right-0 w-96 h-96 bg-indigo-600 rounded-full blur-[150px] opacity-30"></div>

    <div class="relative z-10 max-w-4xl mx-auto">
        <div
            class="inline-block bg-indigo-800 border border-indigo-700 px-4 py-1 rounded-full text-xs font-bold uppercase tracking-widest mb-6">
            <?php esc_html_e('Beyond Safety', 'kidazzle'); ?>
        </div>
        <h2 class="text-3xl md:text-5xl font-extrabold mb-6"><?php esc_html_e('What This Means for You', 'kidazzle'); ?>
        </h2>
        <div class="text-xl text-indigo-100 leading-relaxed mb-10">
            <?php esc_html_e('When a center follows these scales and NAEYC standards, it means your child isn\'t just "safe"—they are in an environment scientifically proven to boost cognitive development, social skills, and emotional well-being.', 'kidazzle'); ?>
        </div>

        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="<?php echo esc_url(home_url('/curriculum/')); ?>"
                class="bg-white text-indigo-900 px-8 py-4 rounded-full font-bold hover:bg-yellow-400 hover:text-black transition shadow-lg">
                <?php esc_html_e('See Our Curriculum', 'kidazzle'); ?>
            </a>
            <a href="<?php echo esc_url(home_url('/locations/')); ?>"
                class="bg-transparent border-2 border-indigo-400 text-white px-8 py-4 rounded-full font-bold hover:bg-indigo-800 transition">
                <?php esc_html_e('Schedule a Tour', 'kidazzle'); ?>
            </a>
        </div>
    </div>
</div>

<?php get_footer(); ?>