<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>KIDazzle Child Care | Elite Early Learning Since 1994</title>

    <meta name="description" content="KIDazzle Child Care provides elite, independent early education for families across Atlanta, Memphis, and Doral. Celebrating 31 years of nurturing, safety, and joyful learning." />

    <!-- OpenGraph -->
    <meta property="og:title" content="KIDazzle Child Care" />
    <meta property="og:description" content="31 years of elite early education in Atlanta, Memphis, and Doral." />
    <meta property="og:image" content="https://images.unsplash.com/photo-1560785496-0c9018085c8f" />
    <meta property="og:type" content="website" />

    <!-- Preload Hero for Faster First Paint -->
    <link rel="preload" href="https://images.unsplash.com/photo-1560785496-0c9018085c8f" as="image" />

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>

    <style>
        html { scroll-behavior: smooth; }

        .hero-img {
            background-image: url("https://images.unsplash.com/photo-1560785496-0c9018085c8f");
            background-size: cover;
            background-position: 60% center; /* ensures faces stay in frame on mobile */
        }

        .shade {
            background: linear-gradient(90deg, rgba(15, 23, 42, .92), rgba(15, 23, 42, .5) 50%, transparent 100%);
        }

        .graph-bar { transition: height .8s ease; }
    </style>
</head>

<body class="bg-white text-slate-800 font-sans antialiased">

<!-- Utility Bar -->
<div class="bg-slate-50 border-b border-slate-200 hidden md:flex justify-between items-center text-xs py-2 px-6">
    <div class="flex items-center gap-4">
        <a href="locations.html" class="flex items-center gap-1 hover:text-cyan-600">
            <i data-lucide="map-pin" class="w-3 h-3 text-red-500"></i> Serving GA, TN & FL
        </a>
        <span class="flex items-center gap-1">
            <i data-lucide="phone" class="w-3 h-3 text-green-500"></i> 877-410-1002
        </span>
        <a href="acquisitions.html" class="flex items-center gap-1 font-bold text-indigo-600 hover:underline">
            <i data-lucide="briefcase" class="w-3 h-3"></i> Acquisitions
        </a>
    </div>

    <div class="flex gap-6 font-medium">
        <a href="careers.html" class="hover:text-cyan-600">Careers</a>
        <a href="teacher-portal.html" class="hover:text-orange-500 font-bold flex items-center gap-1">
            <i data-lucide="users" class="w-3 h-3"></i> Teacher Portal
        </a>
    </div>
</div>

<!-- Main Navigation -->
<nav class="sticky top-0 z-40 bg-white shadow-sm py-4">
    <div class="max-w-7xl mx-auto px-6 flex justify-between items-center">
        <a href="index.html" class="flex items-center gap-2">
            <img src="./kidazzle logo.jpg" class="h-10 w-auto" alt="KIDazzle Logo" />
            <span class="hidden md:block text-3xl font-extrabold tracking-tight">
                KID<span class="text-yellow-500">azzle</span>
            </span>
        </a>

        <div class="hidden lg:flex items-center gap-8 font-semibold text-sm">
            <a href="index.html" class="text-indigo-600 border-b-2 border-indigo-600 pb-1">HOME</a>
            <a href="about.html" class="hover:text-orange-500 pb-1">ABOUT</a>
            <a href="programs.html" class="hover:text-red-500 pb-1">PROGRAMS</a>
            <a href="curriculum.html" class="hover:text-cyan-500 pb-1">CURRICULUM</a>
            <a href="locations.html" class="hover:text-green-500 pb-1">LOCATIONS</a>
            <a href="resources.html" class="hover:text-purple-500 pb-1">RESOURCES</a>
            <a href="enrollment.html" class="bg-slate-900 text-white px-4 py-2 rounded-xl hover:bg-slate-700 shadow-md">CONTACT</a>
        </div>

        <button id="mobile-menu-btn" class="lg:hidden text-slate-900">
            <i data-lucide="menu" class="w-8 h-8"></i>
        </button>
    </div>

    <!-- Mobile Navigation -->
    <div id="mobile-menu" class="hidden bg-white border-t border-slate-200 w-full p-4 space-y-4 lg:hidden">
        <a href="index.html" class="font-bold text-indigo-600">Home</a>
        <a href="about.html" class="font-bold text-slate-700">About</a>
        <a href="programs.html" class="font-bold text-slate-700">Programs</a>
        <a href="curriculum.html" class="font-bold text-slate-700">Curriculum</a>
        <a href="locations.html" class="font-bold text-slate-700">Locations</a>
        <a href="resources.html" class="font-bold text-slate-700">Resources</a>
        <a href="enrollment.html" class="font-bold text-slate-700">Contact</a>
    </div>
</nav>

<!-- HERO -->
<header class="relative h-[680px] flex items-center hero-img">
    <div class="absolute inset-0 shade"></div>

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
                <a href="locations.html" class="bg-yellow-400 text-slate-900 font-bold py-4 px-10 rounded-2xl shadow-lg hover:bg-yellow-500">
                    Find Your Center
                </a>
                <a href="about.html" class="border-2 border-slate-300 text-slate-700 font-bold py-4 px-10 rounded-2xl hover:bg-slate-100">
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
            <a href="memphis.html" class="group relative h-96 rounded-[2rem] overflow-hidden shadow-lg hover:-translate-y-2 transition">
                <img src="https://images.unsplash.com/photo-1596425123982-cb2cb2aa993a" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition" loading="lazy">
                <div class="absolute inset-0 bg-black/40"></div>
                <div class="absolute bottom-0 p-8">
                    <h3 class="text-3xl text-white font-bold">Memphis</h3>
                    <p class="text-indigo-100">Soul, Rhythm & Rigor.</p>
                </div>
            </a>

            <!-- Atlanta Card -->
            <a href="locations.html" class="group relative h-96 md:h-[28rem] rounded-[2rem] overflow-hidden shadow-xl border-4 border-white hover:-translate-y-2 transition">
                <img src="https://images.unsplash.com/photo-1575968770275-d831502049d4" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition" loading="lazy">
                <div class="absolute inset-0 bg-black/40"></div>
                <div class="absolute bottom-0 p-8">
                    <h3 class="text-4xl text-white font-bold">Atlanta</h3>
                    <p class="text-orange-100">Our Headquarters</p>
                </div>
            </a>

            <!-- Doral Card -->
            <a href="doral.html" class="group relative h-96 rounded-[2rem] overflow-hidden shadow-lg hover:-translate-y-2 transition">
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
            <a href="meals.html" class="block p-8 rounded-[2rem] border-2 border-orange-100 hover:border-orange-400 bg-white shadow-sm hover:shadow-xl text-center transition">
                <div class="w-14 h-14 rounded-xl bg-orange-50 text-orange-600 flex items-center justify-center mx-auto mb-4">
                    <i data-lucide="utensils" class="w-7 h-7"></i>
                </div>
                <h3 class="font-bold text-lg">Chef-Prepared Meals</h3>
            </a>

            <!-- Staff -->
            <a href="staff.html" class="block p-8 rounded-[2rem] border-2 border-red-100 hover:border-red-400 bg-white shadow-sm hover:shadow-xl text-center transition">
                <div class="w-14 h-14 rounded-xl bg-red-50 text-red-600 flex items-center justify-center mx-auto mb-4">
                    <i data-lucide="heart-handshake" class="w-7 h-7"></i>
                </div>
                <h3 class="font-bold text-lg">Dedicated Staff</h3>
            </a>

            <!-- Curriculum -->
            <a href="curriculum.html" class="block p-8 rounded-[2rem] border-2 border-cyan-100 hover:border-cyan-400 bg-white shadow-sm hover:shadow-xl text-center transition">
                <div class="w-14 h-14 rounded-xl bg-cyan-50 text-cyan-600 flex items-center justify-center mx-auto mb-4">
                    <i data-lucide="brain" class="w-7 h-7"></i>
                </div>
                <h3 class="font-bold text-lg">Creative Curriculum®</h3>
            </a>

            <!-- Safety -->
            <a href="safety.html" class="block p-8 rounded-[2rem] border-2 border-green-100 hover:border-green-400 bg-white shadow-sm hover:shadow-xl text-center transition">
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
                <a href="locations.html" class="bg-white text-purple-700 px-8 py-3 rounded-xl font-bold hover:bg-purple-50 shadow-lg">
                    View Locations
                </a>
                <a href="enrollment.html" class="border-2 border-white px-8 py-3 rounded-xl font-bold hover:bg-white/10">
                    Apply Now
                </a>
            </div>
        </div>
    </div>
</section>

<!-- FOOTER -->
<footer class="bg-slate-900 text-slate-300 py-16">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-4 gap-10 relative">
        <div class="absolute -top-6 left-1/2 transform -translate-x-1/2 bg-white p-3 rounded-full shadow-md">
            <img src="./kidazzle logo.jpg" class="h-10 w-auto" alt="" />
        </div>

        <div class="pt-10 text-center md:text-left">
            <img src="./kidazzle logo.jpg" class="h-10 mb-4 mx-auto md:mx-0 bg-white p-1 rounded" alt="">
            <p class="text-sm">Providing elite, independent child care for 31 years.</p>
        </div>

        <div class="pt-10">
            <h4 class="text-white font-bold mb-4">Quick Links</h4>
            <ul class="space-y-2 text-sm">
                <li><a href="programs.html" class="hover:text-white">Programs</a></li>
                <li><a href="locations.html" class="hover:text-white">Locations</a></li>
                <li><a href="careers.html" class="hover:text-white">Careers</a></li>
            </ul>
        </div>

        <div class="pt-10">
            <h4 class="text-white font-bold mb-4">Resources</h4>
            <ul class="space-y-2 text-sm">
                <li><a href="teacher-portal.html" class="hover:text-orange-400">Teacher Portal</a></li>
                <li><a href="resources.html" class="hover:text-purple-400">Blog</a></li>
            </ul>
        </div>

        <div class="pt-10">
            <h4 class="text-white font-bold mb-4">Contact</h4>
            <p class="text-sm leading-relaxed">
                100 Alabama St SW, Atlanta, GA <br />
                <span class="font-bold text-white">877-410-1002</span>
            </p>
        </div>
    </div>

    <div class="border-t border-slate-800 mt-12 pt-8 text-center text-xs text-slate-500">
        © 2025 KIDazzle Child Care Inc. All Rights Reserved.
    </div>
</footer>

<!-- Scripts -->
<script>
    document.addEventListener("DOMContentLoaded", () => {

        lucide.createIcons();

        // Mobile Menu Toggle
        const btn = document.getElementById("mobile-menu-btn");
        const menu = document.getElementById("mobile-menu");
        btn.addEventListener("click", () => {
            menu.classList.toggle("hidden");
        });

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

            document.getElementById("stage-buttons").innerHTML = Object.keys(growthData)
                .map(k => 
                    `<button onclick="renderGraph('${k}')" 
                        class="px-4 py-2 rounded-full border border-slate-200 hover:bg-slate-100 
                        ${k===stage ? 'bg-slate-900 text-white' : ''}">
                        ${growthData[k].label}
                    </button>`
                ).join("");

            document.getElementById("stage-content").innerHTML = `
                <h3 class="text-2xl font-bold mb-2">${d.label}</h3>
                <span class="bg-slate-100 px-2 py-1 rounded text-xs font-bold mb-4 inline-block">${d.sub}</span>
                <p class="text-slate-600 text-sm">${d.desc}</p>
            `;

            document.getElementById("graph-bars").innerHTML = d.stats
                .map(s => `
                    <div class="w-full mx-1 flex items-end">
                        <div class="w-full rounded-t-lg ${s.col} graph-bar relative" style="height:${s.val}%">
                            <div class="absolute -top-6 left-1/2 -translate-x-1/2 bg-slate-800 text-white text-xs px-2 py-1 rounded opacity-0 hover:opacity-100 transition">
                                ${s.val}%
                            </div>
                        </div>
                    </div>
                `).join("");

            document.getElementById("graph-labels").innerHTML = d.stats
                .map(s => `<span class="text-center">${s.lbl}</span>`)
                .join("");
        }

        renderGraph("infants");
    });
</script>

</body>
</html>
