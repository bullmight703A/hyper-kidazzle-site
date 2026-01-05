<?php
/**
 * Template Name: Resources Page
 * Parent resources dashboard
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
<div class="rounded-[3rem] overflow-hidden relative h-[400px] shadow-lg group bg-slate-900">
    <div class="absolute inset-0 z-0">
        <?php if (has_post_thumbnail()): ?>
            <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title_attribute(); ?>"
                class="w-full h-full object-cover transition duration-[3000ms] group-hover:scale-105 opacity-60">
        <?php else: ?>
            <img src="https://images.unsplash.com/photo-1606092195730-5d7b9af1ef4d?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80"
                alt="<?php esc_attr_e('Parent and child reading', 'kidazzle'); ?>"
                class="w-full h-full object-cover transition duration-[3000ms] group-hover:scale-105 opacity-60">
        <?php endif; ?>
        <div class="absolute inset-0 bg-gradient-to-t from-purple-900/90 via-purple-900/40 to-transparent"></div>
    </div>

    <div class="absolute inset-0 z-10 flex flex-col justify-center items-center text-center p-8 md:p-16">
        <div
            class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md border border-white/20 text-white px-4 py-2 rounded-full mb-6">
            <i data-lucide="users" class="w-4 h-4 text-purple-300"></i>
            <span
                class="font-bold text-xs uppercase tracking-widest"><?php esc_html_e('Family Hub', 'kidazzle'); ?></span>
        </div>
        <h1 class="text-5xl md:text-7xl font-extrabold text-white mb-6 drop-shadow-xl tracking-tight">
            <?php esc_html_e('Parent', 'kidazzle'); ?> <span
                class="text-purple-300"><?php esc_html_e('Resources', 'kidazzle'); ?></span>
        </h1>
        <p class="text-lg md:text-2xl text-white/90 font-medium max-w-3xl leading-relaxed drop-shadow-md">
            <?php esc_html_e('Everything you need to manage your child\'s care, all in one place.', 'kidazzle'); ?>
        </p>
    </div>
</div>

<!-- 3 Main Action Cards -->
<div class="grid md:grid-cols-3 gap-6 pt-4 mt-6">

    <!-- Pay Tuition -->
    <a href="https://schools.procareconnect.com/login" target="_blank" rel="noopener noreferrer"
        class="module-card bg-green-50 p-8 rounded-[2.5rem] border border-green-100 flex flex-col items-center text-center group h-full justify-center">
        <div
            class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center text-green-600 mb-4 group-hover:scale-110 transition">
            <i data-lucide="credit-card" class="w-8 h-8"></i>
        </div>
        <h3 class="text-2xl font-bold text-slate-900 mb-2"><?php esc_html_e('Pay Tuition', 'kidazzle'); ?></h3>
        <p class="text-slate-600 text-sm mb-4"><?php esc_html_e('Secure online payment portal.', 'kidazzle'); ?></p>
        <span
            class="bg-green-600 text-white px-6 py-2 rounded-full font-bold text-sm shadow-md group-hover:bg-green-700 transition"><?php esc_html_e('Pay Now', 'kidazzle'); ?></span>
    </a>

    <!-- Weekly Menu -->
    <a href="#"
        class="module-card bg-orange-50 p-8 rounded-[2.5rem] border border-orange-100 flex flex-col items-center text-center group h-full justify-center">
        <div
            class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center text-orange-600 mb-4 group-hover:scale-110 transition">
            <i data-lucide="utensils" class="w-8 h-8"></i>
        </div>
        <h3 class="text-2xl font-bold text-slate-900 mb-2"><?php esc_html_e('Weekly Menu', 'kidazzle'); ?></h3>
        <p class="text-slate-600 text-sm mb-4"><?php esc_html_e('See what\'s cooking this week.', 'kidazzle'); ?></p>
        <span
            class="bg-orange-500 text-white px-6 py-2 rounded-full font-bold text-sm shadow-md group-hover:bg-orange-600 transition"><?php esc_html_e('View Menu', 'kidazzle'); ?></span>
    </a>

    <!-- Academic Calendar -->
    <a href="#"
        class="module-card bg-purple-50 p-8 rounded-[2.5rem] border border-purple-100 flex flex-col items-center text-center group h-full justify-center">
        <div
            class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center text-purple-600 mb-4 group-hover:scale-110 transition">
            <i data-lucide="calendar-days" class="w-8 h-8"></i>
        </div>
        <h3 class="text-2xl font-bold text-slate-900 mb-2"><?php esc_html_e('Academic Calendar', 'kidazzle'); ?></h3>
        <p class="text-slate-600 text-sm mb-4"><?php esc_html_e('Holidays, events, and closures.', 'kidazzle'); ?></p>
        <span
            class="bg-purple-600 text-white px-6 py-2 rounded-full font-bold text-sm shadow-md group-hover:bg-purple-700 transition"><?php esc_html_e('Download PDF', 'kidazzle'); ?></span>
    </a>

</div>

<!-- Forms & Documents + Staff Sidebar -->
<div class="grid lg:grid-cols-12 gap-6 pt-6 mt-2">

    <!-- Forms & Documents -->
    <div class="lg:col-span-8 bg-white p-10 rounded-[2.5rem] border border-slate-200 shadow-sm">
        <h2 class="text-3xl font-extrabold text-slate-900 mb-8 flex items-center gap-3">
            <i data-lucide="folder-open" class="text-slate-400"></i>
            <?php esc_html_e('Forms & Documents', 'kidazzle'); ?>
        </h2>

        <div class="grid md:grid-cols-2 gap-4">
            <a href="#"
                class="flex items-center gap-4 p-4 rounded-2xl border border-slate-100 hover:bg-slate-50 hover:border-slate-200 transition group">
                <div class="bg-red-50 p-3 rounded-xl text-red-500"><i data-lucide="file-text" class="w-6 h-6"></i></div>
                <div>
                    <h4 class="font-bold text-slate-900 group-hover:text-red-600 transition">
                        <?php esc_html_e('Parent Handbook', 'kidazzle'); ?></h4>
                    <p class="text-xs text-slate-500"><?php esc_html_e('Updated 2025 Policies', 'kidazzle'); ?></p>
                </div>
                <i data-lucide="download" class="w-4 h-4 ml-auto text-slate-300 group-hover:text-red-500"></i>
            </a>

            <a href="#"
                class="flex items-center gap-4 p-4 rounded-2xl border border-slate-100 hover:bg-slate-50 hover:border-slate-200 transition group">
                <div class="bg-blue-50 p-3 rounded-xl text-blue-500"><i data-lucide="pill" class="w-6 h-6"></i></div>
                <div>
                    <h4 class="font-bold text-slate-900 group-hover:text-blue-600 transition">
                        <?php esc_html_e('Medication Auth', 'kidazzle'); ?></h4>
                    <p class="text-xs text-slate-500"><?php esc_html_e('Required for Rx dispensing', 'kidazzle'); ?></p>
                </div>
                <i data-lucide="download" class="w-4 h-4 ml-auto text-slate-300 group-hover:text-blue-500"></i>
            </a>

            <a href="#"
                class="flex items-center gap-4 p-4 rounded-2xl border border-slate-100 hover:bg-slate-50 hover:border-slate-200 transition group">
                <div class="bg-yellow-50 p-3 rounded-xl text-yellow-600"><i data-lucide="sun" class="w-6 h-6"></i></div>
                <div>
                    <h4 class="font-bold text-slate-900 group-hover:text-yellow-600 transition">
                        <?php esc_html_e('Sunscreen/Bug Spray', 'kidazzle'); ?></h4>
                    <p class="text-xs text-slate-500"><?php esc_html_e('Topical application form', 'kidazzle'); ?></p>
                </div>
                <i data-lucide="download" class="w-4 h-4 ml-auto text-slate-300 group-hover:text-yellow-600"></i>
            </a>

            <a href="#"
                class="flex items-center gap-4 p-4 rounded-2xl border border-slate-100 hover:bg-slate-50 hover:border-slate-200 transition group">
                <div class="bg-indigo-50 p-3 rounded-xl text-indigo-500"><i data-lucide="shirt" class="w-6 h-6"></i>
                </div>
                <div>
                    <h4 class="font-bold text-slate-900 group-hover:text-indigo-600 transition">
                        <?php esc_html_e('Uniform Policy', 'kidazzle'); ?></h4>
                    <p class="text-xs text-slate-500"><?php esc_html_e('Dress code guidelines', 'kidazzle'); ?></p>
                </div>
                <i data-lucide="download" class="w-4 h-4 ml-auto text-slate-300 group-hover:text-indigo-500"></i>
            </a>
        </div>
    </div>

    <!-- Teacher Portal Sidebar -->
    <div
        class="lg:col-span-4 bg-slate-900 p-10 rounded-[2.5rem] text-white flex flex-col justify-between relative overflow-hidden">
        <div class="absolute top-0 right-0 w-48 h-48 bg-purple-600 rounded-full blur-[80px] opacity-30"></div>
        <div class="relative z-10">
            <span
                class="bg-white/10 text-white px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider mb-4 inline-block"><?php esc_html_e('Staff Only', 'kidazzle'); ?></span>
            <h3 class="text-2xl font-bold mb-4"><?php esc_html_e('Are you an Educator?', 'kidazzle'); ?></h3>
            <p class="text-slate-300 text-sm mb-8 leading-relaxed">
                <?php esc_html_e('Access lesson plans, submit time-off requests, and view daily checklists in the dedicated portal.', 'kidazzle'); ?>
            </p>
            <a href="<?php echo esc_url(home_url('/teacher-portal/')); ?>"
                class="block w-full bg-purple-600 hover:bg-purple-500 text-white font-bold text-center py-4 rounded-xl transition shadow-lg">
                <?php esc_html_e('Go to Teacher Portal', 'kidazzle'); ?>
            </a>
        </div>
    </div>

</div>

<!-- Latest Updates Section -->
<div class="pt-8 mt-6">
    <div class="flex justify-between items-end px-4 mb-6">
        <h2 class="text-3xl font-extrabold text-slate-900"><?php esc_html_e('Latest Updates', 'kidazzle'); ?></h2>
        <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>"
            class="text-purple-600 font-bold hover:underline"><?php esc_html_e('View All News', 'kidazzle'); ?></a>
    </div>

    <div class="grid md:grid-cols-3 gap-6">
        <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 3,
            'ignore_sticky_posts' => true,
        );
        $query = new WP_Query($args);

        if ($query->have_posts()):
            while ($query->have_posts()):
                $query->the_post();
                $categories = get_the_category();
                $category_name = !empty($categories) ? $categories[0]->name : 'News';
                $colors = ['purple', 'green', 'blue', 'orange'];
                $color = $colors[$query->current_post % count($colors)];
                ?>
                <a href="<?php the_permalink(); ?>"
                    class="module-card bg-white rounded-[2rem] overflow-hidden border border-slate-200 group cursor-pointer block">
                    <div class="h-48 bg-slate-200 relative overflow-hidden">
                        <?php if (has_post_thumbnail()): ?>
                            <?php the_post_thumbnail('medium_large', array('class' => 'object-cover w-full h-full group-hover:scale-105 transition duration-500')); ?>
                        <?php else: ?>
                            <div class="w-full h-full bg-<?php echo esc_attr($color); ?>-100 flex items-center justify-center">
                                <i data-lucide="image" class="w-12 h-12 text-<?php echo esc_attr($color); ?>-300"></i>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="p-6">
                        <span
                            class="text-xs font-bold text-<?php echo esc_attr($color); ?>-600 uppercase tracking-wide"><?php echo esc_html($category_name); ?></span>
                        <h3
                            class="text-xl font-bold text-slate-900 mt-2 mb-2 group-hover:text-<?php echo esc_attr($color); ?>-600 transition">
                            <?php the_title(); ?></h3>
                        <p class="text-slate-500 text-sm"><?php echo wp_trim_words(get_the_excerpt(), 15); ?></p>
                    </div>
                </a>
            <?php endwhile;
            wp_reset_postdata();
        else: ?>
            <!-- Fallback Content -->
            <div class="module-card bg-white rounded-[2rem] overflow-hidden border border-slate-200 group cursor-pointer">
                <div class="h-48 bg-slate-200 relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1503454537195-1dcabb73ffb9?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                        class="object-cover w-full h-full group-hover:scale-105 transition duration-500">
                </div>
                <div class="p-6">
                    <span class="text-xs font-bold text-purple-600 uppercase tracking-wide">Events</span>
                    <h3 class="text-xl font-bold text-slate-900 mt-2 mb-2 group-hover:text-purple-600 transition">Spring
                        Festival Announced</h3>
                    <p class="text-slate-500 text-sm">Join us for a day of fun, games, and community connection.</p>
                </div>
            </div>
            <!-- More fallback cards could be added here -->
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>