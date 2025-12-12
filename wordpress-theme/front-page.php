<?php get_header(); ?>

<!-- HERO -->
<header class="relative w-full h-[700px] flex items-center overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1560785496-0c9018085c8f" alt="Happy Kids"
            class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-r from-slate-900/90 via-slate-900/50 to-transparent"></div>
    </div>
    <div class="container mx-auto px-4 relative z-10">
        <div
            class="max-w-3xl bg-white/95 backdrop-blur-md p-10 rounded-[2rem] shadow-2xl border-l-[12px] border-yellow-400">
            <span
                class="bg-yellow-400 text-slate-900 px-4 py-1.5 rounded-full text-sm font-extrabold uppercase tracking-wider shadow-sm mb-4 inline-block">Now
                Enrolling</span>
            <h1 class="text-5xl md:text-7xl font-extrabold leading-tight mb-6 text-slate-900">Where Learning <br /><span
                    class="text-transparent bg-clip-text bg-gradient-to-r from-red-500 via-yellow-500 to-cyan-500">is
                    Fun!</span></h1>
            <div class="flex gap-4">
                <a href="<?php echo site_url('/locations'); ?>"
                    class="bg-yellow-400 hover:bg-yellow-500 text-slate-900 font-bold py-4 px-10 rounded-2xl shadow-lg transition">Find
                    Your Center</a>
                <a href="<?php echo site_url('/about'); ?>"
                    class="bg-white text-slate-700 border-2 border-slate-200 font-bold py-4 px-10 rounded-2xl transition">Our
                    Legacy</a>
            </div>
        </div>
    </div>
</header>

<!-- SOUTHEAST POWERHOUSE -->
<section class="py-20 bg-slate-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <span class="text-cyan-600 font-extrabold tracking-widest uppercase text-sm block mb-2">A Southern Regional
                Powerhouse</span>
            <h2 class="text-4xl font-extrabold text-slate-900">Defining Excellence Across the Southeast</h2>
        </div>
        <div class="grid md:grid-cols-3 gap-6">
            <a href="<?php echo site_url('/memphis'); ?>"
                class="group relative rounded-[2.5rem] overflow-hidden h-96 shadow-lg cursor-pointer transform hover:-translate-y-2 transition duration-300">
                <img src="https://images.unsplash.com/photo-1596425123982-cb2cb2aa993a"
                    class="absolute w-full h-full object-cover transition duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-indigo-900 via-indigo-900/40 to-transparent"></div>
                <div class="absolute bottom-0 p-8 w-full">
                    <h3 class="text-3xl font-bold text-white">Memphis</h3>
                    <p class="text-indigo-100 text-sm">Soul, Rhythm, & Rigor.</p>
                </div>
            </a>
            <a href="<?php echo site_url('/locations'); ?>"
                class="group relative rounded-[2.5rem] overflow-hidden h-96 md:h-[28rem] md:-mt-8 shadow-2xl border-4 border-white cursor-pointer transform hover:-translate-y-2 transition duration-300">
                <img src="https://images.unsplash.com/photo-1575968770275-d831502049d4"
                    class="absolute w-full h-full object-cover transition duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-orange-900 via-orange-900/40 to-transparent"></div>
                <div class="absolute bottom-0 p-8 w-full">
                    <h3 class="text-4xl font-bold text-white">Atlanta</h3>
                    <p class="text-orange-100 text-sm">Our Headquarters.</p>
                </div>
            </a>
            <a href="<?php echo site_url('/doral'); ?>"
                class="group relative rounded-[2.5rem] overflow-hidden h-96 shadow-lg cursor-pointer transform hover:-translate-y-2 transition duration-300">
                <img src="https://images.unsplash.com/photo-1535498730771-e735b998cd64"
                    class="absolute w-full h-full object-cover transition duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-cyan-900 via-cyan-900/40 to-transparent"></div>
                <div class="absolute bottom-0 p-8 w-full">
                    <h3 class="text-3xl font-bold text-white">Doral</h3>
                    <p class="text-cyan-100 text-sm">Sunshine & STEM.</p>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- KIDAZZLE DIFFERENCE -->
<section class="py-24 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-extrabold text-center text-slate-900 mb-16">The KIDazzle Difference</h2>
        <div class="grid md:grid-cols-4 gap-8">
            <a href="<?php echo site_url('/about'); ?>#meals"
                class="p-8 rounded-[2rem] border-2 border-orange-100 hover:border-orange-400 transition bg-white shadow-sm hover:shadow-xl text-center group block">
                <div
                    class="w-14 h-14 rounded-2xl bg-orange-50 text-orange-600 flex items-center justify-center mx-auto mb-4">
                    <i data-lucide="utensils" class="w-7 h-7"></i></div>
                <h3 class="font-bold text-slate-900">Chef-Prepared Meals</h3>
            </a>
            <a href="<?php echo site_url('/about'); ?>#staff"
                class="p-8 rounded-[2rem] border-2 border-red-100 hover:border-red-400 transition bg-white shadow-sm hover:shadow-xl text-center group block">
                <div class="w-14 h-14 rounded-2xl bg-red-50 text-red-600 flex items-center justify-center mx-auto mb-4">
                    <i data-lucide="heart-handshake" class="w-7 h-7"></i></div>
                <h3 class="font-bold text-slate-900">Dedicated Staff</h3>
            </a>
            <a href="<?php echo site_url('/curriculum'); ?>"
                class="p-8 rounded-[2rem] border-2 border-cyan-100 hover:border-cyan-400 transition bg-white shadow-sm hover:shadow-xl text-center group block">
                <div
                    class="w-14 h-14 rounded-2xl bg-cyan-50 text-cyan-600 flex items-center justify-center mx-auto mb-4">
                    <i data-lucide="brain" class="w-7 h-7"></i></div>
                <h3 class="font-bold text-slate-900">Creative Curriculum®</h3>
            </a>
            <a href="<?php echo site_url('/about'); ?>#safety"
                class="p-8 rounded-[2rem] border-2 border-green-100 hover:border-green-400 transition bg-white shadow-sm hover:shadow-xl text-center group block">
                <div
                    class="w-14 h-14 rounded-2xl bg-green-50 text-green-600 flex items-center justify-center mx-auto mb-4">
                    <i data-lucide="shield-check" class="w-7 h-7"></i></div>
                <h3 class="font-bold text-slate-900">Safety & Security</h3>
            </a>
        </div>
    </div>
</section>

<!-- GROWTH JOURNEY GRAPH -->
<section class="py-24 bg-slate-50">
    <div class="container mx-auto px-4 text-center mb-12">
        <h2 class="text-4xl font-extrabold text-slate-900">The KIDazzle Growth Journey</h2>
        <p class="text-slate-600 mt-4 max-w-2xl mx-auto">See how our curriculum adapts to your child's developing mind
            at every stage.</p>
    </div>
    <div class="max-w-5xl mx-auto bg-white rounded-[3rem] p-10 shadow-xl border border-slate-100">
        <div class="flex justify-center gap-4 mb-10 flex-wrap" id="stage-buttons"></div>
        <div class="grid md:grid-cols-3 gap-10 items-center">
            <div class="md:col-span-1 text-left" id="stage-content"></div>
            <div class="md:col-span-2 h-64 flex items-end justify-between px-4 border-b border-slate-200 relative"
                id="graph-bars"></div>
        </div>
        <div class="grid md:grid-cols-3 gap-10">
            <div class="md:col-span-1"></div>
            <div class="md:col-span-2 flex justify-between px-4 mt-4" id="graph-labels"></div>
        </div>
    </div>
</section>

<!-- CTA & Embed -->
<section class="py-16 bg-white">
    <div
        class="max-w-6xl mx-auto px-6 bg-ombre-purple rounded-[3rem] p-12 text-center text-white shadow-2xl relative overflow-hidden">
        <div class="relative z-10">
            <h3 class="text-3xl font-extrabold mb-4">Ready to Start Your Journey?</h3>
            <p class="text-purple-100 text-lg mb-8">Schedule a tour today and see why families have trusted us for 31
                years.</p>
            <div class="bg-white/10 border-2 border-dashed border-white/30 rounded-2xl p-8 mb-8 max-w-2xl mx-auto">
                <p class="font-mono text-sm mb-2 text-purple-200">Book Your Tour Instantly</p>
                <div
                    class="bg-white text-slate-400 h-16 rounded-xl flex items-center justify-center text-sm font-bold shadow-inner">
                    [ EMBED: 123 Form / Booking Widget Here ]
                </div>
            </div>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="<?php echo site_url('/locations'); ?>"
                    class="bg-white text-purple-700 px-8 py-3 rounded-xl font-bold hover:bg-purple-50 transition shadow-lg">View
                    Locations</a>
                <a href="<?php echo site_url('/contact'); ?>"
                    class="border-2 border-white px-8 py-3 rounded-xl font-bold hover:bg-white/10 transition">Apply
                    Now</a>
            </div>
        </div>
    </div>
</section>

<script>
    // Growth Journey Graph Logic
    const growthData = {
        infants: { label: "Infants", sub: "6w-12m", desc: "Focus on trust, sensory, and bonding.", stats: [{ val: 90, col: "bg-red-500", lbl: "Motor" }, { val: 70, col: "bg-orange-400", lbl: "Sensory" }, { val: 80, col: "bg-yellow-400", lbl: "Social" }, { val: 40, col: "bg-green-500", lbl: "Lang" }, { val: 20, col: "bg-cyan-500", lbl: "Logic" }] },
        toddlers: { label: "Toddlers", sub: "12m-24m", desc: "Active exploration and vocabulary.", stats: [{ val: 85, col: "bg-red-500", lbl: "Motor" }, { val: 60, col: "bg-orange-400", lbl: "Sensory" }, { val: 70, col: "bg-yellow-400", lbl: "Social" }, { val: 85, col: "bg-green-500", lbl: "Lang" }, { val: 40, col: "bg-cyan-500", lbl: "Logic" }] },
        preschool: { label: "Preschool", sub: "2y-3y", desc: "Independence and early academics.", stats: [{ val: 60, col: "bg-red-500", lbl: "Motor" }, { val: 85, col: "bg-orange-400", lbl: "Sensory" }, { val: 90, col: "bg-yellow-400", lbl: "Social" }, { val: 80, col: "bg-green-500", lbl: "Lang" }, { val: 60, col: "bg-cyan-500", lbl: "Logic" }] },
        prek: { label: "Pre-K", sub: "4y-5y", desc: "Kindergarten readiness and literacy.", stats: [{ val: 50, col: "bg-red-500", lbl: "Motor" }, { val: 70, col: "bg-orange-400", lbl: "Sensory" }, { val: 85, col: "bg-yellow-400", lbl: "Social" }, { val: 95, col: "bg-green-500", lbl: "Lang" }, { val: 90, col: "bg-cyan-500", lbl: "Logic" }] }
    };

    function renderGraph(stage) {
        const data = growthData[stage];
        document.getElementById('stage-buttons').innerHTML = Object.keys(growthData).map(k =>
            `<button onclick="renderGraph('${k}')" class="px-4 py-2 rounded-full border border-slate-200 hover:bg-slate-100 ${k === stage ? 'bg-slate-900 text-white hover:bg-slate-800' : ''}">${growthData[k].label}</button>`
        ).join('');
        document.getElementById('stage-content').innerHTML = `<h3 class="text-2xl font-bold mb-2">${data.label}</h3><span class="bg-slate-100 px-2 py-1 rounded text-sm font-bold mb-4 inline-block">${data.sub}</span><p class="text-slate-600">${data.desc}</p>`;
        document.getElementById('graph-bars').innerHTML = data.stats.map(s =>
            `<div class="w-full mx-1 relative group h-full flex items-end"><div class="w-full rounded-t-lg ${s.col} graph-bar relative" style="height:${s.val}%"><div class="absolute -top-8 left-1/2 -translate-x-1/2 bg-slate-800 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition">${s.val}%</div></div></div>`
        ).join('');
        document.getElementById('graph-labels').innerHTML = data.stats.map(s =>
            `<div class="text-center text-xs font-bold text-slate-500 w-full">${s.lbl}</div>`
        ).join('');
    }
    // Mobile Menu Logic (Redundant with header.php potentially, but ensures home page specific works)
    if (document.getElementById('mobile-menu-btn')) {
        document.getElementById('mobile-menu-btn').addEventListener('click', () => { document.getElementById('mobile-menu').classList.toggle('hidden'); });
    }

    renderGraph('infants');
</script>

<?php get_footer(); ?>