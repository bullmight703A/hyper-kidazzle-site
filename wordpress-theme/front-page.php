<?php get_header(); ?>

<!-- HERO SECTION -->
<header class="relative w-full h-[700px] flex items-center overflow-hidden">
    <div class="absolute inset-0 z-0">
        <!-- Updated Hero Image: Diverse Group Playing -->
        <img src="https://images.unsplash.com/photo-1556484687-30636164638a?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80"
            alt="Diverse group of happy children playing" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-r from-slate-900/90 via-slate-900/50 to-transparent"></div>
    </div>
    <div class="container mx-auto px-4 relative z-10">
        <div
            class="max-w-3xl bg-white/95 backdrop-blur-md p-10 rounded-[2rem] shadow-2xl border-l-[12px] border-yellow-400">
            <div class="flex items-center gap-3 mb-6 flex-wrap">
                <span
                    class="bg-yellow-400 text-slate-900 px-4 py-1.5 rounded-full text-sm font-extrabold uppercase tracking-wider shadow-sm">Now
                    Enrolling</span>
                <span
                    class="text-slate-600 text-sm font-bold flex items-center gap-1 bg-slate-100 px-3 py-1.5 rounded-full"><i
                        data-lucide="star" class="w-4 h-4 fill-yellow-400 text-yellow-400"></i> Since 1994</span>
            </div>
            <h1 class="text-5xl md:text-7xl font-extrabold leading-tight mb-6 text-slate-900">Where Learning <br /><span
                    class="text-transparent bg-clip-text bg-gradient-to-r from-red-500 via-yellow-500 to-cyan-500">is
                    Fun!</span></h1>
            <p class="text-xl text-slate-600 mb-8 font-medium">From Memphis to Miami to Atlanta, we are an independent,
                premier learning academy nurturing diverse bright minds for over three decades.</p>
            <div class="flex flex-col sm:flex-row gap-4">
                <a href="<?php echo site_url('/locations'); ?>"
                    class="bg-yellow-400 hover:bg-yellow-500 text-slate-900 font-bold py-4 px-10 rounded-2xl shadow-lg transition flex items-center justify-center gap-2 transform hover:-translate-y-1 text-center">Find
                    Your Center <i data-lucide="chevron-right" class="w-5 h-5"></i></a>
                <a href="<?php echo site_url('/about'); ?>"
                    class="bg-white text-slate-700 border-2 border-slate-200 hover:border-cyan-400 hover:text-cyan-600 font-bold py-4 px-10 rounded-2xl transition flex items-center justify-center text-center">Our
                    Legacy</a>
            </div>
        </div>
    </div>
</header>

<!-- SOUTHEAST POWERHOUSE -->
<section class="py-20 bg-slate-50 relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5"
        style="background-image: radial-gradient(#cbd5e1 1px, transparent 1px); background-size: 20px 20px;"></div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center mb-16">
            <span class="text-cyan-600 font-extrabold tracking-widest uppercase text-sm block mb-2">A Southern Regional
                Powerhouse</span>
            <h2 class="text-4xl font-extrabold text-slate-900">Defining Excellence Across the Southeast</h2>
        </div>
        <div class="grid md:grid-cols-3 gap-6 lg:gap-10">
            <!-- Memphis -->
            <a href="<?php echo site_url('/memphis'); ?>"
                class="group relative rounded-[2.5rem] overflow-hidden h-96 shadow-lg cursor-pointer transform hover:-translate-y-2 transition duration-300">
                <img src="https://images.unsplash.com/photo-1596425123982-cb2cb2aa993a"
                    class="absolute w-full h-full object-cover transition duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-indigo-900 via-indigo-900/40 to-transparent"></div>
                <div class="absolute bottom-0 p-8 w-full">
                    <div class="flex items-center gap-2 mb-2"><span
                            class="bg-white/20 backdrop-blur-md text-white px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider border border-white/10">Tennessee</span>
                    </div>
                    <h3 class="text-3xl font-bold text-white">Memphis</h3>
                    <p class="text-indigo-100 text-sm">Soul, Rhythm, & Rigor.</p>
                </div>
            </a>
            <!-- Atlanta -->
            <a href="<?php echo site_url('/locations'); ?>"
                class="group relative rounded-[2.5rem] overflow-hidden h-96 md:h-[28rem] md:-mt-8 shadow-2xl border-4 border-white cursor-pointer transform hover:-translate-y-2 transition duration-300">
                <img src="https://images.unsplash.com/photo-1575968770275-d831502049d4"
                    class="absolute w-full h-full object-cover transition duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-orange-900 via-orange-900/40 to-transparent"></div>
                <div class="absolute top-6 right-6 z-30"><span
                        class="bg-white text-orange-600 px-4 py-2 rounded-full text-xs font-bold shadow-lg flex items-center gap-1"><i
                            data-lucide="star" class="w-3 h-3 fill-orange-600"></i> HQ</span></div>
                <div class="absolute bottom-0 p-8 w-full">
                    <div class="flex items-center gap-2 mb-2"><span
                            class="bg-white/20 backdrop-blur-md text-white px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider border border-white/10">Georgia</span>
                    </div>
                    <h3 class="text-4xl font-bold text-white">Atlanta</h3>
                    <p class="text-orange-100 text-sm">Our Headquarters.</p>
                </div>
            </a>
            <!-- Doral -->
            <a href="<?php echo site_url('/doral'); ?>"
                class="group relative rounded-[2.5rem] overflow-hidden h-96 shadow-lg cursor-pointer transform hover:-translate-y-2 transition duration-300">
                <img src="https://images.unsplash.com/photo-1535498730771-e735b998cd64"
                    class="absolute w-full h-full object-cover transition duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-cyan-900 via-cyan-900/40 to-transparent"></div>
                <div class="absolute bottom-0 p-8 w-full">
                    <div class="flex items-center gap-2 mb-2"><span
                            class="bg-white/20 backdrop-blur-md text-white px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider border border-white/10">Florida</span>
                    </div>
                    <h3 class="text-3xl font-bold text-white">Doral</h3>
                    <p class="text-cyan-100 text-sm">Sunshine & STEM.</p>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- KIDAZZLE DIFFERENCE -->
<section class="py-24 bg-white border-t border-slate-100">
    <div class="container mx-auto px-4">
        <div class="text-center max-w-4xl mx-auto mb-16">
            <h2 class="text-4xl font-extrabold text-slate-900 mb-6">The KIDazzle Difference</h2>
            <p class="text-slate-500 text-xl leading-relaxed">We are not a franchise. We are a family of independent
                schools connected by a shared mission.</p>
        </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mb-24">
            <a href="<?php echo site_url('/about'); ?>#meals"
                class="p-8 rounded-[2rem] border-2 border-orange-100 hover:border-orange-400 transition bg-white shadow-sm hover:shadow-xl text-center group block">
                <div
                    class="w-14 h-14 rounded-2xl bg-orange-50 text-orange-600 flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition">
                    <i data-lucide="utensils" class="w-7 h-7"></i></div>
                <h3 class="font-bold text-xl text-slate-900 mb-2">Chef-Prepared Meals</h3>
                <span
                    class="text-orange-600 font-bold text-xs flex items-center justify-center gap-1 uppercase tracking-wide mt-2">Learn
                    More <i data-lucide="arrow-right" class="w-3 h-3"></i></span>
            </a>
            <a href="<?php echo site_url('/curriculum'); ?>"
                class="p-8 rounded-[2rem] border-2 border-cyan-100 hover:border-cyan-400 transition bg-white shadow-sm hover:shadow-xl text-center group block">
                <div
                    class="w-14 h-14 rounded-2xl bg-cyan-50 text-cyan-600 flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition">
                    <i data-lucide="brain" class="w-7 h-7"></i></div>
                <h3 class="font-bold text-xl text-slate-900 mb-2">Creative Curriculum®</h3>
                <span
                    class="text-cyan-600 font-bold text-xs flex items-center justify-center gap-1 uppercase tracking-wide mt-2">Learn
                    More <i data-lucide="arrow-right" class="w-3 h-3"></i></span>
            </a>
            <a href="<?php echo site_url('/about'); ?>#safety"
                class="p-8 rounded-[2rem] border-2 border-green-100 hover:border-green-400 transition bg-white shadow-sm hover:shadow-xl text-center group block">
                <div
                    class="w-14 h-14 rounded-2xl bg-green-50 text-green-600 flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition">
                    <i data-lucide="shield-check" class="w-7 h-7"></i></div>
                <h3 class="font-bold text-xl text-slate-900 mb-2">Safety & Security</h3>
                <span
                    class="text-green-600 font-bold text-xs flex items-center justify-center gap-1 uppercase tracking-wide mt-2">Learn
                    More <i data-lucide="arrow-right" class="w-3 h-3"></i></span>
            </a>
            <a href="<?php echo site_url('/about'); ?>#staff"
                class="p-8 rounded-[2rem] border-2 border-red-100 hover:border-red-400 transition bg-white shadow-sm hover:shadow-xl text-center group block">
                <div
                    class="w-14 h-14 rounded-2xl bg-red-50 text-red-600 flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition">
                    <i data-lucide="heart-handshake" class="w-7 h-7"></i></div>
                <h3 class="font-bold text-xl text-slate-900 mb-2">Dedicated Staff</h3>
                <span
                    class="text-red-600 font-bold text-xs flex items-center justify-center gap-1 uppercase tracking-wide mt-2">Learn
                    More <i data-lucide="arrow-right" class="w-3 h-3"></i></span>
            </a>
        </div>
    </div>
</section>

<!-- GROWTH JOURNEY GRAPH (Restored) -->
<section class="py-24 bg-slate-50">
    <div class="container mx-auto px-4 text-center mb-12">
        <h2 class="text-4xl font-extrabold text-slate-900">The KIDazzle Growth Journey</h2>
        <p class="text-slate-600 mt-4 max-w-2xl mx-auto">See how our curriculum adapts to your child's developing mind
            at every stage.</p>
    </div>
    <div class="max-w-5xl mx-auto bg-white rounded-[3rem] p-10 shadow-xl border border-slate-100">
        <!-- Stage Buttons -->
        <div class="flex justify-center gap-4 mb-10 flex-wrap" id="stage-buttons">
            <!-- Injected via JS -->
        </div>

        <div class="grid md:grid-cols-3 gap-10 items-center">
            <div class="md:col-span-1 text-left" id="stage-content">
                <!-- Text Injected via JS -->
            </div>
            <!-- Bar Graph -->
            <div class="md:col-span-2 h-64 flex items-end justify-between px-4 border-b border-slate-200 relative"
                id="graph-bars">
                <!-- Bars Injected via JS -->
            </div>
        </div>
        <!-- Labels -->
        <div class="grid md:grid-cols-3 gap-10">
            <div class="md:col-span-1"></div>
            <div class="md:col-span-2 flex justify-between px-4 mt-4" id="graph-labels">
                <!-- Labels Injected via JS -->
            </div>
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

            <!-- EMBEDDED FORM -->
            <div
                class="bg-white/10 border-2 border-dashed border-white/30 rounded-2xl p-4 mb-8 max-w-4xl mx-auto h-[900px] overflow-hidden">
                <iframe src="https://api.leadconnectorhq.com/widget/form/N8RYaUY1SuORexcyA6la"
                    style="width:100%;height:100%;border:none;border-radius:20px" id="inline-N8RYaUY1SuORexcyA6la"
                    data-layout="{'id':'INLINE'}" data-trigger-type="alwaysShow" data-trigger-value=""
                    data-activation-type="alwaysActivated" data-activation-value=""
                    data-deactivation-type="neverDeactivate" data-deactivation-value=""
                    data-form-name="2023 New KIDazzel website contact " data-height="870"
                    data-layout-iframe-id="inline-N8RYaUY1SuORexcyA6la" data-form-id="N8RYaUY1SuORexcyA6la"
                    title="2023 New KIDazzel website contact ">
                </iframe>
                <script src="https://link.msgsndr.com/js/form_embed.js"></script>
            </div>

            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="<?php echo site_url('/locations'); ?>"
                    class="bg-white text-purple-700 px-8 py-3 rounded-xl font-bold hover:bg-purple-50 transition shadow-lg">View
                    Locations</a>
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