<?php
/**
 * Template Part: KIDazzle Difference (Icon Grid)
 * 
 * @package kidazzle
 */

if (!defined('ABSPATH')) {
    exit;
}
?>
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