<?php get_header(); ?>

<!-- HERO -->
<header class="relative h-[680px] flex items-center hero-img" style="background-image: url('https://images.unsplash.com/photo-1560785496-0c9018085c8f'); background-size: cover; background-position: 60% center;">
    <div class="absolute inset-0 bg-gradient-to-r from-slate-900/90 via-slate-900/50 to-transparent"></div>

    <div class="max-w-3xl mx-auto px-6 relative z-10">
        <div class="bg-white/90 backdrop-blur-md p-8 md:p-10 rounded-[2rem] shadow-xl border-l-8 border-yellow-400">
            <span class="bg-yellow-400 text-slate-900 px-4 py-1.5 text-sm rounded-full font-bold uppercase tracking-widest mb-4 inline-block">
                Now Enrolling
            </span>

            <h1 class="text-5xl md:text-7xl font-extrabold text-slate-900 leading-tight mb-6">
                Where Learning <br />
                <span class="bg-gradient-to-r from-red-500 via-yellow-500 to-cyan-500 bg-clip-text text-transparent">
                    Is Fun
                </span>
            </h1>

            <div class="flex flex-wrap gap-4">
                <a href="<?php echo site_url('/locations'); ?>" class="bg-yellow-400 text-slate-900 font-bold py-4 px-10 rounded-2xl shadow-lg hover:bg-yellow-500">
                    Find Your Center
                </a>
                <a href="<?php echo site_url('/about'); ?>" class="border-2 border-slate-300 text-slate-700 font-bold py-4 px-10 rounded-2xl hover:bg-slate-100">
                    Our Legacy
                </a>
            </div>
        </div>
    </div>
</header>

<!-- POWERHOUSE SECTION -->
<section class="py-20 bg-slate-50">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16">
            <span class="uppercase text-xs tracking-widest font-extrabold text-cyan-600">
                A Southern Regional Powerhouse
            </span>
            <h2 class="text-4xl font-extrabold text-slate-900 mt-2">
                Defining Excellence Across the Southeast
            </h2>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- Memphis Card -->
            <a href="<?php echo site_url('/memphis'); ?>" class="group relative h-96 rounded-[2rem] overflow-hidden shadow-lg hover:-translate-y-2 transition">
                <img src="https://images.unsplash.com/photo-1596425123982-cb2cb2aa993a" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition" loading="lazy">
                <div class="absolute inset-0 bg-black/40"></div>
                <div class="absolute bottom-0 p-8">
                    <h3 class="text-3xl text-white font-bold">Memphis</h3>
                    <p class="text-indigo-100">Soul, Rhythm & Rigor.</p>
                </div>
            </a>

            <!-- Atlanta Card -->
            <a href="<?php echo site_url('/locations'); ?>" class="group relative h-96 md:h-[28rem] rounded-[2rem] overflow-hidden shadow-xl border-4 border-white hover:-translate-y-2 transition">
                <img src="https://images.unsplash.com/photo-1575968770275-d831502049d4" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition" loading="lazy">
                <div class="absolute inset-0 bg-black/40"></div>
                <div class="absolute bottom-0 p-8">
                    <h3 class="text-4xl text-white font-bold">Atlanta</h3>
                    <p class="text-orange-100">Our Headquarters</p>
                </div>
            </a>

            <!-- Doral Card -->
            <a href="<?php echo site_url('/doral'); ?>" class="group relative h-96 rounded-[2rem] overflow-hidden shadow-lg hover:-translate-y-2 transition">
                <img src="https://images.unsplash.com/photo-1535498730771-e735b998cd64" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition" loading="lazy">
                <div class="absolute inset-0 bg-black/40"></div>
                <div class="absolute bottom-0 p-8">
                    <h3 class="text-3xl text-white font-bold">Doral</h3>
                    <p class="text-cyan-100">Sunshine & STEM.</p>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- DIFFERENCE SECTION -->
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-4xl font-extrabold text-center text-slate-900 mb-16">
            The KIDazzle Difference
        </h2>

        <div class="grid md:grid-cols-4 gap-8">
            <!-- Meals -->
            <a href="<?php echo site_url('/programs'); ?>" class="block p-8 rounded-[2rem] border-2 border-orange-100 hover:border-orange-400 bg-white shadow-sm hover:shadow-xl text-center transition">
                <div class="w-14 h-14 rounded-xl bg-orange-50 text-orange-600 flex items-center justify-center mx-auto mb-4">
                    <i data-lucide="utensils" class="w-7 h-7"></i>
                </div>
                <h3 class="font-bold text-lg">Chef-Prepared Meals</h3>
            </a>

            <!-- Staff -->
            <a href="<?php echo site_url('/about'); ?>" class="block p-8 rounded-[2rem] border-2 border-red-100 hover:border-red-400 bg-white shadow-sm hover:shadow-xl text-center transition">
                <div class="w-14 h-14 rounded-xl bg-red-50 text-red-600 flex items-center justify-center mx-auto mb-4">
                    <i data-lucide="heart-handshake" class="w-7 h-7"></i>
                </div>
                <h3 class="font-bold text-lg">Dedicated Staff</h3>
            </a>

            <!-- Curriculum -->
            <a href="<?php echo site_url('/curriculum'); ?>" class="block p-8 rounded-[2rem] border-2 border-cyan-100 hover:border-cyan-400 bg-white shadow-sm hover:shadow-xl text-center transition">
                <div class="w-14 h-14 rounded-xl bg-cyan-50 text-cyan-600 flex items-center justify-center mx-auto mb-4">
                    <i data-lucide="brain" class="w-7 h-7"></i>
                </div>
                <h3 class="font-bold text-lg">Creative Curriculum®</h3>
            </a>

            <!-- Safety -->
            <a href="<?php echo site_url('/about'); ?>" class="block p-8 rounded-[2rem] border-2 border-green-100 hover:border-green-400 bg-white shadow-sm hover:shadow-xl text-center transition">
                <div class="w-14 h-14 rounded-xl bg-green-50 text-green-600 flex items-center justify-center mx-auto mb-4">
                    <i data-lucide="shield-check" class="w-7 h-7"></i>
                </div>
                <h3 class="font-bold text-lg">Safety & Security</h3>
            </a>
        </div>
    </div>
</section>

<!-- GROWTH GRAPH -->
<section class="py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-6 text-center mb-12">
        <h2 class="text-4xl font-extrabold text-slate-900">The KIDazzle Growth Journey</h2>
        <p class="text-slate-600 mt-4 max-w-xl mx-auto">
            Explore how each age stage grows through our balanced and research-backed curriculum.
        </p>
    </div>

    <div class="max-w-5xl mx-auto bg-white rounded-[3rem] p-10 shadow-xl border border-slate-100">
        <div id="stage-buttons" class="flex justify-center flex-wrap gap-4 mb-10"></div>

        <div class="grid md:grid-cols-3 gap-10">
            <div id="stage-content" class="text-left"></div>

            <div class="md:col-span-2 h-64 flex items-end justify-between px-4 border-b border-slate-200 relative" id="graph-bars"></div>
        </div>

        <div class="grid md:grid-cols-3 gap-10 mt-6">
            <div></div>
            <div id="graph-labels" class="md:col-span-2 flex justify-between px-4 text-xs font-bold text-slate-500"></div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-6 bg-gradient-to-br from-purple-700 via-purple-600 to-fuchsia-600 text-white rounded-[3rem] p-12 shadow-2xl relative">
        <div class="relative z-10 text-center">
            <h3 class="text-3xl font-extrabold mb-4">Ready to Start Your Journey?</h3>
            <p class="text-purple-100 text-lg mb-8">Schedule a tour and see why families have trusted us for 31 years.</p>

            <div class="bg-white/10 border border-white/20 rounded-2xl p-8 mb-8 max-w-xl mx-auto">
                <p class="font-mono text-xs text-purple-200 mb-2">Book Your Tour Instantly</p>
                <div class="bg-white text-slate-500 h-16 rounded-xl flex items-center justify-center text-sm font-bold shadow-inner">
                    [ Booking Widget Goes Here ]
                </div>
            </div>

            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="<?php echo site_url('/locations'); ?>" class="bg-white text-purple-700 px-8 py-3 rounded-xl font-bold hover:bg-purple-50 shadow-lg">
                    View Locations
                </a>
                <a href="<?php echo site_url('/contact'); ?>" class="border-2 border-white px-8 py-3 rounded-xl font-bold hover:bg-white/10">
                    Apply Now
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Scripts -->
<script>
    document.addEventListener("DOMContentLoaded", () => {
        // We'll let lucide icons reuse the instance from footer if present, or init here
        if(window.lucide) lucide.createIcons();

        // Mobile Menu Toggle
        const btn = document.getElementById("mobile-menu-btn");
        const menu = document.getElementById("mobile-menu");
        if(btn && menu) {
            btn.addEventListener("click", () => {
                menu.classList.toggle("hidden");
            });
        }

        // Growth Graph
        const growthData = {
            infants: { label: "Infants", sub: "6w–12m", desc: "Focus on trust, sensory, and bonding.",
                stats: [
                    { val: 90, col: "bg-red-500", lbl: "Motor" },
                    { val: 70, col: "bg-orange-400", lbl: "Sensory" },
                    { val: 80, col: "bg-yellow-400", lbl: "Social" },
                    { val: 40, col: "bg-green-500", lbl: "Language" },
                    { val: 20, col: "bg-cyan-500", lbl: "Logic" },
                ]
            },
            toddlers: { label: "Toddlers", sub: "12m–24m", desc: "Active exploration and vocabulary expansion.",
                stats: [
                    { val: 85, col: "bg-red-500", lbl: "Motor" },
                    { val: 60, col: "bg-orange-400", lbl: "Sensory" },
                    { val: 70, col: "bg-yellow-400", lbl: "Social" },
                    { val: 85, col: "bg-green-500", lbl: "Language" },
                    { val: 40, col: "bg-cyan-500", lbl: "Logic" }
                ]
            },
            preschool: { label: "Preschool", sub: "2y–3y", desc: "Independence and early academic foundations.",
                stats: [
                    { val: 60, col: "bg-red-500", lbl: "Motor" },
                    { val: 85, col: "bg-orange-400", lbl: "Sensory" },
                    { val: 90, col: "bg-yellow-400", lbl: "Social" },
                    { val: 80, col: "bg-green-500", lbl: "Language" },
                    { val: 60, col: "bg-cyan-500", lbl: "Logic" },
                ]
            },
            prek: { label: "Pre-K", sub: "4y–5y", desc: "Kindergarten readiness and early literacy.",
                stats: [
                    { val: 50, col: "bg-red-500", lbl: "Motor" },
                    { val: 70, col: "bg-orange-400", lbl: "Sensory" },
                    { val: 85, col: "bg-yellow-400", lbl: "Social" },
                    { val: 95, col: "bg-green-500", lbl: "Language" },
                    { val: 90, col: "bg-cyan-500", lbl: "Logic" },
                ]
            }
        };

        function renderGraph(stage) {
            const d = growthData[stage];
            const buttonsContainer = document.getElementById("stage-buttons");
            const contentContainer = document.getElementById("stage-content");
            const barsContainer = document.getElementById("graph-bars");
            const labelsContainer = document.getElementById("graph-labels");

            if(!buttonsContainer || !contentContainer || !barsContainer || !labelsContainer) return;

            buttonsContainer.innerHTML = Object.keys(growthData)
                .map(k => 
                    `<button onclick="renderGraph('${k}')" 
                        class="px-4 py-2 rounded-full border border-slate-200 hover:bg-slate-100 
                        ${k===stage ? 'bg-slate-900 text-white' : ''}">
                        ${growthData[k].label}
                    </button>`
                ).join("");

            contentContainer.innerHTML = `
                <h3 class="text-2xl font-bold mb-2">${d.label}</h3>
                <span class="bg-slate-100 px-2 py-1 rounded text-xs font-bold mb-4 inline-block">${d.sub}</span>
                <p class="text-slate-600 text-sm">${d.desc}</p>
            `;

            barsContainer.innerHTML = d.stats
                .map(s => `
                    <div class="w-full mx-1 flex items-end">
                        <div class="w-full rounded-t-lg ${s.col} graph-bar relative" style="height:${s.val}%">
                            <div class="absolute -top-6 left-1/2 -translate-x-1/2 bg-slate-800 text-white text-xs px-2 py-1 rounded opacity-0 hover:opacity-100 transition">
                                ${s.val}%
                            </div>
                        </div>
                    </div>
                `).join("");

            labelsContainer.innerHTML = d.stats
                .map(s => `<span class="text-center">${s.lbl}</span>`)
                .join("");
        }
        
        // Expose renderGraph to global scope for button clicks
        window.renderGraph = renderGraph;
        renderGraph("infants");
    });
</script>

<?php get_footer(); ?>