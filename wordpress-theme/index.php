<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | KIDazzle Child Care</title>
    <meta name="description" content="KIDazzle Child Care: 32 years of elite, independent early education in Atlanta, Memphis, and Doral.">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        .graph-bar { transition: height 1s cubic-bezier(0.4, 0, 0.2, 1); }
        .bg-ombre-purple { background: linear-gradient(135deg, #4c1d95 0%, #7c3aed 50%, #c026d3 100%); }
        html { scroll-behavior: smooth; }
    </style>
</head>
<body class="font-sans text-slate-800 bg-white">
    <!-- TOP UTILITY BAR -->
    <div class="bg-slate-50 text-slate-600 text-xs py-2 px-4 hidden md:flex justify-between items-center border-b border-slate-200">
        <div class="flex gap-4 items-center">
            <a href="locations.html" class="flex items-center gap-1 hover:text-cyan-600 transition"><i data-lucide="map-pin" class="w-3 h-3 text-red-500"></i> Serving GA, TN, & FL</a>
            <span class="flex items-center gap-1"><i data-lucide="phone" class="w-3 h-3 text-green-500"></i> 877-410-1002</span>
            <a href="acquisitions.html" class="flex items-center gap-1 font-bold text-indigo-600 hover:underline"><i data-lucide="briefcase" class="w-3 h-3"></i> Acquisitions</a>
        </div>
        <div class="flex gap-6 font-medium">
            <a href="careers.html" class="hover:text-cyan-600 flex items-center gap-1">Careers</a>
            <a href="teacher-portal.html" class="hover:text-cyan-600 flex items-center gap-1 font-bold text-orange-500"><i data-lucide="users" class="w-3 h-3"></i> Teacher Portal</a>
        </div>
    </div>

    <!-- MAIN NAVIGATION -->
    <nav class="sticky top-0 w-full z-40 bg-white py-4 shadow-sm">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <a href="index.html" class="flex items-center gap-2">
                <img src="./kidazzle logo.jpg" alt="KIDazzle Logo" class="h-12 w-auto" onError="this.style.display='none'">
                <h1 class="text-3xl font-extrabold text-black tracking-tighter hidden md:block">KID<span class="text-yellow-500">azzle</span></h1>
            </a>
            <div class="hidden lg:flex items-center gap-6 font-bold text-slate-600 text-sm tracking-wide">
                <a href="index.html" class="text-indigo-600 border-b-2 border-indigo-600 pb-1">HOME</a>
                <a href="about.html" class="hover:text-orange-500 transition pb-1">ABOUT US</a>
                <a href="programs.html" class="hover:text-red-500 transition pb-1">PROGRAMS</a>
                <a href="curriculum.html" class="hover:text-cyan-500 transition pb-1">CURRICULUM</a>
                <a href="locations.html" class="hover:text-green-500 transition pb-1">LOCATIONS</a>
                <a href="resources.html" class="hover:text-purple-500 transition pb-1">RESOURCES</a>
                <a href="enrollment.html" class="bg-slate-900 text-white px-5 py-2.5 rounded-xl hover:bg-slate-800 transition shadow-md ml-2">CONTACT US</a>
            </div>
            <button id="mobile-menu-btn" class="lg:hidden text-slate-900"><i data-lucide="menu" class="w-8 h-8"></i></button>
        </div>
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden absolute top-full left-0 w-full bg-white shadow-lg border-t border-slate-100 flex flex-col p-4 gap-4 lg:hidden">
            <a href="index.html" class="text-indigo-600 font-bold">Home</a>
            <a href="about.html" class="text-slate-600 font-bold">About Us</a>
            <a href="programs.html" class="text-slate-600 font-bold">Programs</a>
            <a href="curriculum.html" class="text-slate-600 font-bold">Curriculum</a>
            <a href="locations.html" class="text-slate-600 font-bold">Locations</a>
            <a href="resources.html" class="text-slate-600 font-bold">Resources</a>
            <a href="enrollment.html" class="text-slate-600 font-bold">Contact Us</a>
        </div>
    </nav>

    <!-- HERO -->
    <header class="relative w-full h-[700px] flex items-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1560785496-0c9018085c8f" alt="Happy Kids" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-slate-900/90 via-slate-900/50 to-transparent"></div>
        </div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-3xl bg-white/95 backdrop-blur-md p-10 rounded-[2rem] shadow-2xl border-l-[12px] border-yellow-400">
                <span class="bg-yellow-400 text-slate-900 px-4 py-1.5 rounded-full text-sm font-extrabold uppercase tracking-wider shadow-sm mb-4 inline-block">Now Enrolling</span>
                <h1 class="text-5xl md:text-7xl font-extrabold leading-tight mb-6 text-slate-900">Where Learning <br /><span class="text-transparent bg-clip-text bg-gradient-to-r from-red-500 via-yellow-500 to-cyan-500">is Fun!</span></h1>
                <div class="flex gap-4">
                    <a href="locations.html" class="bg-yellow-400 hover:bg-yellow-500 text-slate-900 font-bold py-4 px-10 rounded-2xl shadow-lg transition">Find Your Center</a>
                    <a href="about.html" class="bg-white text-slate-700 border-2 border-slate-200 font-bold py-4 px-10 rounded-2xl transition">Our Legacy</a>
                </div>
            </div>
        </div>
    </header>

    <!-- SOUTHEAST POWERHOUSE -->
    <section class="py-20 bg-slate-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <span class="text-cyan-600 font-extrabold tracking-widest uppercase text-sm block mb-2">A Southern Regional Powerhouse</span>
                <h2 class="text-4xl font-extrabold text-slate-900">Defining Excellence Across the Southeast</h2>
            </div>
            <div class="grid md:grid-cols-3 gap-6">
                <a href="location-memphis.html" class="group relative rounded-[2.5rem] overflow-hidden h-96 shadow-lg cursor-pointer transform hover:-translate-y-2 transition duration-300">
                    <img src="https://images.unsplash.com/photo-1596425123982-cb2cb2aa993a" class="absolute w-full h-full object-cover transition duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-indigo-900 via-indigo-900/40 to-transparent"></div>
                    <div class="absolute bottom-0 p-8 w-full">
                        <h3 class="text-3xl font-bold text-white">Memphis</h3>
                        <p class="text-indigo-100 text-sm">Soul, Rhythm, & Rigor.</p>
                    </div>
                </a>
                <a href="locations.html" class="group relative rounded-[2.5rem] overflow-hidden h-96 md:h-[28rem] md:-mt-8 shadow-2xl border-4 border-white cursor-pointer transform hover:-translate-y-2 transition duration-300">
                    <img src="https://images.unsplash.com/photo-1575968770275-d831502049d4" class="absolute w-full h-full object-cover transition duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-orange-900 via-orange-900/40 to-transparent"></div>
                    <div class="absolute bottom-0 p-8 w-full">
                        <h3 class="text-4xl font-bold text-white">Atlanta</h3>
                        <p class="text-orange-100 text-sm">Our Headquarters.</p>
                    </div>
                </a>
                <a href="location-miami.html" class="group relative rounded-[2.5rem] overflow-hidden h-96 shadow-lg cursor-pointer transform hover:-translate-y-2 transition duration-300">
                    <img src="https://images.unsplash.com/photo-1535498730771-e735b998cd64" class="absolute w-full h-full object-cover transition duration-700 group-hover:scale-110">
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
                <a href="meals.html" class="p-8 rounded-[2rem] border-2 border-orange-100 hover:border-orange-400 transition bg-white shadow-sm hover:shadow-xl text-center group block">
                    <div class="w-14 h-14 rounded-2xl bg-orange-50 text-orange-600 flex items-center justify-center mx-auto mb-4"><i data-lucide="utensils" class="w-7 h-7"></i></div>
                    <h3 class="font-bold text-slate-900">Chef-Prepared Meals</h3>
                </a>
                <a href="staff.html" class="p-8 rounded-[2rem] border-2 border-red-100 hover:border-red-400 transition bg-white shadow-sm hover:shadow-xl text-center group block">
                    <div class="w-14 h-14 rounded-2xl bg-red-50 text-red-600 flex items-center justify-center mx-auto mb-4"><i data-lucide="heart-handshake" class="w-7 h-7"></i></div>
                    <h3 class="font-bold text-slate-900">Dedicated Staff</h3>
                </a>
                <a href="curriculum.html" class="p-8 rounded-[2rem] border-2 border-cyan-100 hover:border-cyan-400 transition bg-white shadow-sm hover:shadow-xl text-center group block">
                    <div class="w-14 h-14 rounded-2xl bg-cyan-50 text-cyan-600 flex items-center justify-center mx-auto mb-4"><i data-lucide="brain" class="w-7 h-7"></i></div>
                    <h3 class="font-bold text-slate-900">Creative Curriculum®</h3>
                </a>
                <a href="safety.html" class="p-8 rounded-[2rem] border-2 border-green-100 hover:border-green-400 transition bg-white shadow-sm hover:shadow-xl text-center group block">
                    <div class="w-14 h-14 rounded-2xl bg-green-50 text-green-600 flex items-center justify-center mx-auto mb-4"><i data-lucide="shield-check" class="w-7 h-7"></i></div>
                    <h3 class="font-bold text-slate-900">Safety & Security</h3>
                </a>
            </div>
        </div>
    </section>

    <!-- GROWTH JOURNEY GRAPH -->
    <section class="py-24 bg-slate-50">
        <div class="container mx-auto px-4 text-center mb-12">
            <h2 class="text-4xl font-extrabold text-slate-900">The KIDazzle Growth Journey</h2>
            <p class="text-slate-600 mt-4 max-w-2xl mx-auto">See how our curriculum adapts to your child's developing mind at every stage.</p>
        </div>
        <div class="max-w-5xl mx-auto bg-white rounded-[3rem] p-10 shadow-xl border border-slate-100">
            <div class="flex justify-center gap-4 mb-10 flex-wrap" id="stage-buttons"></div>
            <div class="grid md:grid-cols-3 gap-10 items-center">
                <div class="md:col-span-1 text-left" id="stage-content"></div>
                <div class="md:col-span-2 h-64 flex items-end justify-between px-4 border-b border-slate-200 relative" id="graph-bars"></div>
            </div>
            <div class="grid md:grid-cols-3 gap-10">
                <div class="md:col-span-1"></div>
                <div class="md:col-span-2 flex justify-between px-4 mt-4" id="graph-labels"></div>
            </div>
        </div>
    </section>

    <!-- CTA & Embed -->
    <section class="py-16 bg-white">
        <div class="max-w-6xl mx-auto px-6 bg-ombre-purple rounded-[3rem] p-12 text-center text-white shadow-2xl relative overflow-hidden">
            <div class="relative z-10">
                <h3 class="text-3xl font-extrabold mb-4">Ready to Start Your Journey?</h3>
                <p class="text-purple-100 text-lg mb-8">Schedule a tour today and see why families have trusted us for 31 years.</p>
                <div class="bg-white/10 border-2 border-dashed border-white/30 rounded-2xl p-8 mb-8 max-w-2xl mx-auto">
                    <p class="font-mono text-sm mb-2 text-purple-200">Book Your Tour Instantly</p>
                    <div class="bg-white text-slate-400 h-16 rounded-xl flex items-center justify-center text-sm font-bold shadow-inner">
                        [ EMBED: 123 Form / Booking Widget Here ]
                    </div>
                </div>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="locations.html" class="bg-white text-purple-700 px-8 py-3 rounded-xl font-bold hover:bg-purple-50 transition shadow-lg">View Locations</a>
                    <a href="enrollment.html" class="border-2 border-white px-8 py-3 rounded-xl font-bold hover:bg-white/10 transition">Apply Now</a>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="bg-slate-900 text-slate-300 py-16 relative mt-12 text-center md:text-left">
        <div class="absolute -top-6 left-1/2 transform -translate-x-1/2 bg-white p-2 rounded-full shadow-lg border border-slate-100"><img src="./kidazzle logo.jpg" class="h-10 w-auto" onError="this.style.display='none'"></div>
        <div class="container mx-auto px-4 grid md:grid-cols-4 gap-8 pt-10">
            <div><img src="./kidazzle logo.jpg" class="h-10 mb-4 mx-auto md:mx-0 bg-white p-1 rounded" onError="this.style.display='none'"><p class="text-sm">Providing elite, independent child care for 31 years.</p></div>
            <div><h4 class="text-white font-bold mb-4">Quick Links</h4><ul class="space-y-2 text-sm"><li><a href="programs.html" class="hover:text-white">Programs</a></li><li><a href="locations.html" class="hover:text-white">Locations</a></li><li><a href="careers.html" class="hover:text-white">Careers</a></li></ul></div>
            <div><h4 class="text-white font-bold mb-4">Resources</h4><ul class="space-y-2 text-sm"><li><a href="teacher-portal.html" class="hover:text-orange-400">Teacher Portal</a></li><li><a href="resources.html" class="hover:text-purple-400">Blog</a></li></ul></div>
            <div><h4 class="text-white font-bold mb-4">Contact</h4><p class="text-sm">100 Alabama St SW, Atlanta, GA<br><span class="text-white font-bold">877-410-1002</span></p></div>
        </div>
        <div class="border-t border-slate-800 mt-12 pt-8 text-center text-xs text-slate-500"><span>© 2025 KIDazzle Child Care Inc. All Rights Reserved.</span></div>
    </footer>

    <script>
        lucide.createIcons();
        document.getElementById('mobile-menu-btn').addEventListener('click', () => { document.getElementById('mobile-menu').classList.toggle('hidden'); });

        const growthData = {
            infants: { label: "Infants", sub: "6w-12m", desc: "Focus on trust, sensory, and bonding.", stats: [ {val:90, col:"bg-red-500", lbl:"Motor"}, {val:70, col:"bg-orange-400", lbl:"Sensory"}, {val:80, col:"bg-yellow-400", lbl:"Social"}, {val:40, col:"bg-green-500", lbl:"Lang"}, {val:20, col:"bg-cyan-500", lbl:"Logic"} ] },
            toddlers: { label: "Toddlers", sub: "12m-24m", desc: "Active exploration and vocabulary.", stats: [ {val:85, col:"bg-red-500", lbl:"Motor"}, {val:60, col:"bg-orange-400", lbl:"Sensory"}, {val:70, col:"bg-yellow-400", lbl:"Social"}, {val:85, col:"bg-green-500", lbl:"Lang"}, {val:40, col:"bg-cyan-500", lbl:"Logic"} ] },
            preschool: { label: "Preschool", sub: "2y-3y", desc: "Independence and early academics.", stats: [ {val:60, col:"bg-red-500", lbl:"Motor"}, {val:85, col:"bg-orange-400", lbl:"Sensory"}, {val:90, col:"bg-yellow-400", lbl:"Social"}, {val:80, col:"bg-green-500", lbl:"Lang"}, {val:60, col:"bg-cyan-500", lbl:"Logic"} ] },
            prek: { label: "Pre-K", sub: "4y-5y", desc: "Kindergarten readiness and literacy.", stats: [ {val:50, col:"bg-red-500", lbl:"Motor"}, {val:70, col:"bg-orange-400", lbl:"Sensory"}, {val:85, col:"bg-yellow-400", lbl:"Social"}, {val:95, col:"bg-green-500", lbl:"Lang"}, {val:90, col:"bg-cyan-500", lbl:"Logic"} ] }
        };

        function renderGraph(stage) {
            const data = growthData[stage];
            document.getElementById('stage-buttons').innerHTML = Object.keys(growthData).map(k => 
                `<button onclick="renderGraph('${k}')" class="px-4 py-2 rounded-full border border-slate-200 hover:bg-slate-100 ${k===stage ? 'bg-slate-900 text-white hover:bg-slate-800' : ''}">${growthData[k].label}</button>`
            ).join('');
            document.getElementById('stage-content').innerHTML = `<h3 class="text-2xl font-bold mb-2">${data.label}</h3><span class="bg-slate-100 px-2 py-1 rounded text-sm font-bold mb-4 inline-block">${data.sub}</span><p class="text-slate-600">${data.desc}</p>`;
            document.getElementById('graph-bars').innerHTML = data.stats.map(s => 
                `<div class="w-full mx-1 relative group h-full flex items-end"><div class="w-full rounded-t-lg ${s.col} graph-bar relative" style="height:${s.val}%"><div class="absolute -top-8 left-1/2 -translate-x-1/2 bg-slate-800 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition">${s.val}%</div></div></div>`
            ).join('');
            document.getElementById('graph-labels').innerHTML = data.stats.map(s => 
                `<div class="text-center text-xs font-bold text-slate-500 w-full">${s.lbl}</div>`
            ).join('');
        }
        renderGraph('infants');
    </script>
</body>
</html>
