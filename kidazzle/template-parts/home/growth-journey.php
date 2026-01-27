<?php
/**
 * Template Part: Growth Journey Graph Section
 * Interactive developmental stage visualization
 *
 * @package kidazzle
 */

if (!defined('ABSPATH')) {
    exit;
}
?>

<section class="py-24 bg-brand-cream relative overflow-hidden">
    <!-- Brand Decor -->
    <div class="absolute top-0 right-0 w-64 h-64 bg-kidazzle-blue/5 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-kidazzle-red/5 rounded-full blur-3xl"></div>

    <div class="container mx-auto px-4 text-center mb-16 relative z-10">
        <span class="text-kidazzle-blue font-bold tracking-[0.3em] text-[10px] uppercase mb-4 block italic">The Developmental Arc</span>
        <h2 class="text-4xl md:text-6xl font-serif font-bold text-brand-ink"><?php esc_html_e('The KIDazzle Growth Journey', 'kidazzle'); ?></h2>
        <p class="text-brand-ink/60 mt-6 max-w-2xl mx-auto text-lg"><?php esc_html_e('Observe how our curriculum refracts "play" into measurable developmental progress at every stage.', 'kidazzle'); ?></p>
    </div>
    
    <div class="max-w-6xl mx-auto bg-white rounded-[4rem] p-10 md:p-16 shadow-soft border border-brand-ink/5 relative z-10">
        <!-- Stage Buttons -->
        <div class="flex justify-center gap-4 mb-10 flex-wrap" id="stage-buttons">
            <!-- Injected via JS -->
        </div>
        
        <div class="grid md:grid-cols-3 gap-16 items-center">
            <div class="md:col-span-1 text-left" id="stage-content">
                <!-- Text Injected via JS -->
            </div>
            <!-- Refractive Growth Visualization -->
            <div class="md:col-span-2 h-80 flex items-end justify-between px-8 border-b-2 border-brand-ink/5 relative group/graph" id="graph-bars">
                <!-- Bars Injected via JS -->
            </div>
        </div>
        <!-- Labels -->
        <div class="grid md:grid-cols-3 gap-16">
            <div class="md:col-span-1"></div>
            <div class="md:col-span-2 flex justify-between px-8 mt-6" id="graph-labels">
                <!-- Labels Injected via JS -->
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const growthData = {
        infants: { 
            label: "<?php echo esc_js(__('Infants', 'kidazzle')); ?>", 
            sub: "6w - 12m", 
            desc: "<?php echo esc_js(__('In our youngest environment, learning is filtered through trust and sensory bonding. Our curriculum focuses on primary milestones: cognitive recognition and physical safety.', 'kidazzle')); ?>", 
            stats: [
                {val:90, color:"#E31E24", lbl:"<?php echo esc_js(__('Motor', 'kidazzle')); ?>"},
                {val:70, color:"#F7941D", lbl:"<?php echo esc_js(__('Sensory', 'kidazzle')); ?>"},
                {val:80, color:"#FFD400", lbl:"<?php echo esc_js(__('Social', 'kidazzle')); ?>"},
                {val:40, color:"#00A651", lbl:"<?php echo esc_js(__('Lang', 'kidazzle')); ?>"},
                {val:20, color:"#00ADEF", lbl:"<?php echo esc_js(__('Logic', 'kidazzle')); ?>"}
            ]
        },
        toddlers: { 
            label: "<?php echo esc_js(__('Toddlers', 'kidazzle')); ?>", 
            sub: "12m - 24m", 
            desc: "<?php echo esc_js(__('Movement and vocabulary begin to bloom. We refract simple interactions into language development and early social problem-solving.', 'kidazzle')); ?>", 
            stats: [
                {val:85, color:"#E31E24", lbl:"<?php echo esc_js(__('Motor', 'kidazzle')); ?>"},
                {val:60, color:"#F7941D", lbl:"<?php echo esc_js(__('Sensory', 'kidazzle')); ?>"},
                {val:70, color:"#FFD400", lbl:"<?php echo esc_js(__('Social', 'kidazzle')); ?>"},
                {val:85, color:"#00A651", lbl:"<?php echo esc_js(__('Lang', 'kidazzle')); ?>"},
                {val:40, color:"#00ADEF", lbl:"<?php echo esc_js(__('Logic', 'kidazzle')); ?>"}
            ]
        },
        preschool: { 
            label: "<?php echo esc_js(__('Preschool', 'kidazzle')); ?>", 
            sub: "2y - 3y", 
            desc: "<?php echo esc_js(__('The age of "Why." Our curriculum supports budding independence while introducing rigorous cognitive and early academic concepts.', 'kidazzle')); ?>", 
            stats: [
                {val:60, color:"#E31E24", lbl:"<?php echo esc_js(__('Motor', 'kidazzle')); ?>"},
                {val:85, color:"#F7941D", lbl:"<?php echo esc_js(__('Sensory', 'kidazzle')); ?>"},
                {val:90, color:"#FFD400", lbl:"<?php echo esc_js(__('Social', 'kidazzle')); ?>"},
                {val:80, color:"#00A651", lbl:"<?php echo esc_js(__('Lang', 'kidazzle')); ?>"},
                {val:60, color:"#00ADEF", lbl:"<?php echo esc_js(__('Logic', 'kidazzle')); ?>"}
            ]
        },
        prek: { 
            label: "<?php echo esc_js(__('Pre-K', 'kidazzle')); ?>", 
            sub: "4y - 5y", 
            desc: "<?php echo esc_js(__('The final spectrum. Focus shifts to total Kindergarten readiness, advanced literacy, and logical inquiry, ensuring a high-contrast transition to primary school.', 'kidazzle')); ?>", 
            stats: [
                {val:50, color:"#E31E24", lbl:"<?php echo esc_js(__('Motor', 'kidazzle')); ?>"},
                {val:70, color:"#F7941D", lbl:"<?php echo esc_js(__('Sensory', 'kidazzle')); ?>"},
                {val:85, color:"#FFD400", lbl:"<?php echo esc_js(__('Social', 'kidazzle')); ?>"},
                {val:95, color:"#00A651", lbl:"<?php echo esc_js(__('Lang', 'kidazzle')); ?>"},
                {val:90, color:"#00ADEF", lbl:"<?php echo esc_js(__('Logic', 'kidazzle')); ?>"}
            ]
        }
    };

    function renderGraph(stage) {
        const data = growthData[stage];
        const stageButtons = document.getElementById('stage-buttons');
        const stageContent = document.getElementById('stage-content');
        const graphBars = document.getElementById('graph-bars');
        const graphLabels = document.getElementById('graph-labels');
        
        if (!stageButtons || !stageContent || !graphBars || !graphLabels) return;
        
        stageButtons.innerHTML = Object.keys(growthData).map(k =>
            `<button onclick="window.renderGrowthGraph('${k}')" class="px-6 py-2.5 rounded-full border border-brand-ink/10 font-bold uppercase tracking-widest text-[10px] transition-all ${k===stage ? 'bg-brand-ink text-white border-brand-ink shadow-lg scale-105' : 'bg-white text-brand-ink/40 hover:bg-brand-cream'}">${growthData[k].label}</button>`
        ).join('');
        
        stageContent.innerHTML = `
            <span class="text-kidazzle-blue font-bold uppercase tracking-widest text-[10px] mb-2 block italic">${data.sub}</span>
            <h3 class="text-3xl font-serif font-bold text-brand-ink mb-4">${data.label}</h3>
            <p class="text-brand-ink/60 leading-relaxed text-sm">${data.desc}</p>
        `;
        
        graphBars.innerHTML = data.stats.map(s =>
            `<div class="w-full mx-2 md:mx-4 relative group h-full flex items-end">
                <div class="w-full rounded-t-2xl shadow-lg relative transition-all duration-1000 border border-white/20" style="height:${s.val}%; background-color:${s.color};">
                    <div class="absolute -top-10 left-1/2 -translate-x-1/2 bg-brand-ink text-white text-[10px] font-bold px-2 py-1 rounded-lg opacity-0 group-hover:opacity-100 transition whitespace-nowrap z-20">${s.val}% Mastery</div>
                    <div class="absolute inset-0 bg-gradient-to-tr from-white/20 to-transparent"></div>
                </div>
            </div>`
        ).join('');
        
        graphLabels.innerHTML = data.stats.map(s =>
            `<div class="text-center text-[10px] font-bold uppercase tracking-widest text-brand-ink/30 w-full">${s.lbl}</div>`
        ).join('');
    }
    
    // Make function globally accessible
    window.renderGrowthGraph = renderGraph;
    
    // Initialize with infants
    renderGraph('infants');
});
</script>

<style>
.graph-bar { 
    transition: height 1s cubic-bezier(0.4, 0, 0.2, 1); 
}
</style>
