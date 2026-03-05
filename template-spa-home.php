<?php
/**
 * Template Name: WIMPER SPA Home
 * Front Page Template - WIMPER SPA
 *
 * @package wimper
 */

get_header();
?>

<!-- ================================================================================= -->
<!-- VIEW 1: HOME (THE EXPERIENCE)                                                     -->
<!-- ================================================================================= -->
<div id="home" class="page-view active flex-grow">
    <!-- Hero Section -->
    <section class="hero-gradient pt-40 pb-32">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">

                <!-- Left: Content -->
                <div class="lg:col-span-5 text-center lg:text-left">
                    <div
                        class="inline-flex items-center space-x-2 bg-blue-50 text-accent px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-widest mb-6">
                        <span>Simplified Online Enrollment</span>
                    </div>
                    <h1 class="text-5xl md:text-6xl font-black text-slate-900 leading-[1.1] mb-8">
                        Guaranteed Issue.<br><span class="text-accent">Zero Net Cost.</span>
                    </h1>
                    <p class="text-xl text-slate-600 mb-10 leading-relaxed">
                        Stop managing spreadsheets. W.I.M.P.E.R. combines a world-class <strong>Revive Health</strong>
                        interface with a tax chassis that returns FICA dollars to your bottom line.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <button onclick="navigateTo('contact')"
                            class="bg-navy text-white px-10 py-4 rounded-xl font-bold text-lg hover:bg-accent transition shadow-xl hover:-translate-y-1">
                            Launch Your Audit
                        </button>
                        <a href="#"
                            class="inline-flex items-center justify-center px-10 py-4 text-slate-700 font-bold text-lg hover:text-accent transition">
                            <i class="fas fa-calendar-alt mr-3"></i> Join Weekly Briefing
                        </a>
                    </div>
                </div>

                <!-- Right: The Process Dashboard (Requested Component) -->
                <div class="lg:col-span-7 relative">
                    <div class="mock-dashboard">
                        <!-- Dash Header -->
                        <div class="bg-slate-50 px-8 py-4 border-b border-slate-200 flex justify-between items-center">
                            <div class="flex space-x-1.5">
                                <div class="w-3 h-3 rounded-full bg-slate-300"></div>
                                <div class="w-3 h-3 rounded-full bg-slate-300"></div>
                                <div class="w-3 h-3 rounded-full bg-slate-300"></div>
                            </div>
                            <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Implementation
                                Dashboard</span>
                        </div>

                        <!-- Dash Content -->
                        <div class="p-8 space-y-4">
                            <!-- Step 1 -->
                            <div class="dash-step active p-6 rounded-xl border border-blue-100">
                                <div class="flex items-center space-x-4">
                                    <div
                                        class="w-10 h-10 bg-accent rounded-full flex items-center justify-center text-white font-bold">
                                        1</div>
                                    <div class="flex-grow">
                                        <h4 class="text-sm font-bold text-slate-900">Weekly Strategy Briefing</h4>
                                        <p class="text-xs text-slate-500">Join our session to verify corporate fit and
                                            recapture feasibility.</p>
                                    </div>
                                    <span
                                        class="text-[10px] bg-blue-100 text-blue-700 px-2 py-1 rounded font-bold uppercase">Discover</span>
                                </div>
                            </div>
                            <!-- Step 2 -->
                            <div class="dash-step p-6 rounded-xl border border-transparent">
                                <div class="flex items-center space-x-4">
                                    <div
                                        class="w-10 h-10 bg-slate-100 rounded-full flex items-center justify-center text-slate-400 font-bold">
                                        2</div>
                                    <div class="flex-grow">
                                        <h4 class="text-sm font-bold text-slate-900">Guaranteed Issue Enrollment</h4>
                                        <p class="text-xs text-slate-500">No medical underwriting. All employees
                                            enrolled via Revive Health portal.</p>
                                    </div>
                                    <span
                                        class="text-[10px] bg-slate-100 text-slate-500 px-2 py-1 rounded font-bold uppercase">Enroll</span>
                                </div>
                            </div>
                            <!-- Step 3 -->
                            <div class="dash-step p-6 rounded-xl border border-transparent">
                                <div class="flex items-center space-x-4">
                                    <div
                                        class="w-10 h-10 bg-slate-100 rounded-full flex items-center justify-center text-slate-400 font-bold">
                                        3</div>
                                    <div class="flex-grow">
                                        <h4 class="text-sm font-bold text-slate-900">Employee Benefit Access</h4>
                                        <p class="text-xs text-slate-500">Employees download the Revive App for 24/7
                                            Virtual Primary Care.</p>
                                    </div>
                                    <span
                                        class="text-[10px] bg-slate-100 text-slate-500 px-2 py-1 rounded font-bold uppercase">Benefit</span>
                                </div>
                            </div>
                            <!-- Step 4 -->
                            <div class="dash-step p-6 rounded-xl border border-transparent">
                                <div class="flex items-center space-x-4">
                                    <div
                                        class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center text-green-600 font-bold">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="flex-grow">
                                        <h4 class="text-sm font-bold text-slate-900">Corporate FICA Recapture</h4>
                                        <p class="text-xs text-slate-500">Savings flow back to the business. Net-zero
                                            employee payroll impact.</p>
                                    </div>
                                    <span
                                        class="text-[10px] bg-green-50 text-green-700 px-2 py-1 rounded font-bold uppercase">Savings</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Background Decorations -->
                    <div class="absolute -top-10 -right-10 w-40 h-40 bg-blue-100 rounded-full blur-3xl opacity-60">
                    </div>
                    <div class="absolute -bottom-10 -left-10 w-48 h-48 bg-blue-50 rounded-full blur-3xl opacity-60">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Grid -->
    <section id="features" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20">
                <h2 class="text-4xl font-extrabold text-slate-900 mb-4">A Better Way to Administer Benefits</h2>
                <p class="text-slate-500 text-lg max-w-2xl mx-auto leading-relaxed">
                    By focusing on mobile-first care and proprietary tax engineering, we deliver results standard
                    brokers can't match.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 text-center">
                <div class="p-8 group">
                    <div
                        class="w-20 h-20 bg-soft-blue rounded-3xl flex items-center justify-center text-accent mx-auto mb-8 transition group-hover:scale-110">
                        <i class="fas fa-mobile-button text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Mobile Experience</h3>
                    <p class="text-slate-500 text-sm">Powered by <strong>Revive Health</strong>, providing employees
                        with instant access to care and plan documents.</p>
                </div>
                <div class="p-8 group">
                    <div
                        class="w-20 h-20 bg-soft-blue rounded-3xl flex items-center justify-center text-accent mx-auto mb-8 transition group-hover:scale-110">
                        <i class="fas fa-hand-holding-dollar text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Corporate Savings</h3>
                    <p class="text-slate-500 text-sm">Average annual FICA recapture of $1,100 per employee, returned
                        directly to the business bottom line.</p>
                </div>
                <div class="p-8 group">
                    <div
                        class="w-20 h-20 bg-soft-blue rounded-3xl flex items-center justify-center text-accent mx-auto mb-8 transition group-hover:scale-110">
                        <i class="fas fa-clipboard-check text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Guaranteed Issue</h3>
                    <p class="text-slate-500 text-sm">No medical underwriting. No one is turned away. Seamless
                        enrollment for the entire workforce.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Calculator Section -->
    <section class="py-24 bg-slate-900 text-white overflow-hidden relative">
        <div
            class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')]">
        </div>
        <div class="max-w-7xl mx-auto px-4 relative z-10 grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
            <div>
                <h2 class="text-4xl font-black mb-6 leading-tight">The Funding Mechanism <br><span
                        class="text-accent">Redefined.</span></h2>
                <p class="text-slate-400 text-lg mb-8">W.I.M.P.E.R. isn't an expense. It's a revenue generator. We
                    redistribute FICA taxes to fund world-class wellness without touching employee take-home pay.</p>
                <div class="bg-white/5 p-8 rounded-2xl border border-white/10">
                    <p class="italic text-slate-300">"Our proprietary Chassis satisfies all bona-fide medical
                        requirement triggers automatically via the Revive mobile app."</p>
                </div>
            </div>
            <div class="bg-white p-10 rounded-3xl shadow-2xl text-slate-900">
                <h3 class="text-2xl font-bold mb-8 text-center">Recapture Estimation</h3>
                <div class="space-y-8">
                    <div>
                        <label class="block text-xs font-bold text-slate-400 uppercase tracking-widest mb-3">Total
                            Participating Employees</label>
                        <input type="range" id="calcRange" min="10" max="500" value="50"
                            class="w-full h-2 bg-blue-100 rounded-lg appearance-none cursor-pointer accent-blue-600"
                            oninput="updateHeroCalc()">
                        <div class="flex justify-between mt-6">
                            <div class="text-center">
                                <span class="text-xs uppercase font-bold text-slate-400 block mb-1">Headcount</span>
                                <span class="text-3xl font-black" id="calcCount">50</span>
                            </div>
                            <div class="text-center">
                                <span class="text-xs uppercase font-bold text-slate-400 block mb-1">Annual EBITDA
                                    Growth</span>
                                <span class="text-3xl font-black text-accent" id="calcSavings">$55,000</span>
                            </div>
                        </div>
                    </div>
                    <button onclick="navigateTo('contact')"
                        class="w-full bg-navy text-white py-4 rounded-xl font-bold hover:bg-accent transition shadow-lg">Request
                        Feasibility Audit</button>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- ================================================================================= -->
<!-- VIEW 2: METHOD (THE CHASSIS)                                                      -->
<!-- ================================================================================= -->
<div id="method" class="page-view flex-grow bg-white">
    <section class="pt-40 pb-24">
        <div class="max-w-5xl mx-auto px-4 text-center">
            <h1 class="text-5xl font-black text-slate-900 mb-6">The W.I.M.P.E.R. Chassis</h1>
            <p class="text-xl text-slate-500 font-medium max-w-2xl mx-auto">
                The secret is in the automated "Claims Trigger." Our platform ensures compliance by verifying health
                activity daily.
            </p>
        </div>
    </section>

    <section class="pb-24">
        <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
            <div class="bg-soft-blue p-12 rounded-3xl border border-blue-100 shadow-sm">
                <h3 class="text-3xl font-black text-navy mb-8">Integrated Medical Access</h3>
                <p class="text-slate-600 mb-8">Powered by <strong>Revive Health</strong>, the chassis satisfies all IRS
                    bona-fide requirement triggers automatically.</p>
                <ul class="space-y-6">
                    <li class="flex items-center space-x-4">
                        <div
                            class="w-10 h-10 bg-white rounded-xl shadow-sm flex items-center justify-center text-accent">
                            <i class="fas fa-video"></i>
                        </div>
                        <span class="font-semibold text-slate-700">24/7 Virtual Urgent Care</span>
                    </li>
                    <li class="flex items-center space-x-4">
                        <div
                            class="w-10 h-10 bg-white rounded-xl shadow-sm flex items-center justify-center text-accent">
                            <i class="fas fa-user-md"></i>
                        </div>
                        <span class="font-semibold text-slate-700">Virtual Primary Care</span>
                    </li>
                    <li class="flex items-center space-x-4">
                        <div
                            class="w-10 h-10 bg-white rounded-xl shadow-sm flex items-center justify-center text-accent">
                            <i class="fas fa-pills"></i>
                        </div>
                        <span class="font-semibold text-slate-700">Pharmacy Savings Benefit</span>
                    </li>
                </ul>
            </div>
            <div>
                <h2 class="text-4xl font-black text-slate-900 mb-6">Guaranteed Issue <br><span class="text-accent">No
                        Underwriting.</span></h2>
                <p class="text-lg text-slate-600 leading-relaxed mb-8">
                    Unlike traditional supplemental plans, W.I.M.P.E.R. is a guaranteed issue protocol. Your entire
                    workforce can join without medical exams or history checks.
                </p>
                <div class="bg-slate-50 border-l-4 border-accent p-8 rounded-r-xl mb-8">
                    <h4 class="font-bold text-slate-900 mb-2">Institutional Compliance</h4>
                    <p class="text-sm text-slate-500">Our plan documents and PHP triggers have been audited for over 20
                        years without a single adverse finding.</p>
                </div>
                <button onclick="navigateTo('contact')"
                    class="text-accent font-bold text-lg hover:text-navy transition">Get an Audit <i
                        class="fas fa-arrow-right ml-2"></i></button>
            </div>
        </div>
    </section>
</div>

<!-- ================================================================================= -->
<!-- VIEW 3: WEALTH STRATEGY (IUL)                                                     -->
<!-- ================================================================================= -->
<div id="iul" class="page-view flex-grow bg-white">
    <header class="pt-40 pb-20">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <span class="text-accent text-xs font-bold uppercase tracking-widest mb-4 block">Phase 2: Wealth
                Accumulation</span>
            <h1 class="text-5xl font-black text-slate-900 mb-6">The Zero-Cost Wealth Engine</h1>
            <p class="text-xl text-slate-600 font-medium leading-relaxed">
                You've reduced the tax surface area. Now, capture the surplus to secure the future.
            </p>
        </div>
    </header>

    <section class="py-24">
        <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-20 items-center">
            <div>
                <h2 class="text-4xl font-black text-slate-900 mb-8">Recaptured Savings <br>Meet Market Growth</h2>
                <p class="text-lg text-slate-600 mb-8 leading-relaxed">
                    By utilizing the FICA recapture from the W.I.M.P.E.R. chassis, employees can fund a tax-free
                    **Indexed Universal Life (IUL)** policy. This creates a powerful retirement vehicle without
                    decreasing their net take-home pay.
                </p>
                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-soft-blue p-6 rounded-2xl border border-blue-100">
                        <h4 class="font-bold text-accent mb-2">0% Market Floor</h4>
                        <p class="text-xs text-slate-500">Protect your principal. Participate in the gains, never the
                            losses.</p>
                    </div>
                    <div class="bg-soft-blue p-6 rounded-2xl border border-blue-100">
                        <h4 class="font-bold text-accent mb-2">Tax-Free Access</h4>
                        <p class="text-xs text-slate-500">Access your wealth through policy loans without IRS
                            intervention.</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="bg-navy p-12 rounded-3xl text-white shadow-2xl relative overflow-hidden">
                    <div class="absolute -top-10 -right-10 w-40 h-40 bg-accent rounded-full blur-3xl opacity-20"></div>
                    <h3 class="text-3xl font-black mb-6">Private Client Access</h3>
                    <p class="text-blue-100 mb-8 leading-relaxed text-sm">
                        Not in a corporate W.I.M.P.E.R. program? You can still structure an individual IUL policy
                        directly. We offer **Private Client** access to the same high-performance vehicles.
                    </p>
                    <a href="tel:5551234567"
                        class="block w-full bg-accent text-white text-center py-4 rounded-xl font-bold hover:bg-white hover:text-navy transition shadow-lg">Schedule
                        Private Quote</a>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- ================================================================================= -->
<!-- VIEW 4: TIMELINE (IMPLEMENTATION)                                                 -->
<!-- ================================================================================= -->
<div id="timeline" class="page-view flex-grow bg-slate-50">
    <header class="pt-40 pb-20">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h1 class="text-5xl font-black text-slate-900 mb-6">Execution Protocol</h1>
            <p class="text-xl text-slate-500 font-medium">Simple deployment. Zero disruption. Savings realized in 45
                days.</p>
        </div>
    </header>

    <div class="max-w-3xl mx-auto px-4 py-20">
        <div class="flex items-start mb-16 relative">
            <div
                class="w-12 h-12 bg-navy text-white rounded-full flex items-center justify-center font-bold z-10 shrink-0">
                1</div>
            <div class="ml-8">
                <h3 class="text-2xl font-bold text-slate-900 mb-2">Weekly Briefing & Fit Check</h3>
                <p class="text-slate-600">Join our weekly info session to determine if the program is a good fit for
                    your corporate structure. We verify feasibility and estimate savings.</p>
            </div>
        </div>
        <div class="flex items-start mb-16 relative">
            <div
                class="w-12 h-12 bg-accent text-white rounded-full flex items-center justify-center font-bold z-10 shrink-0">
                2</div>
            <div class="ml-8">
                <h3 class="text-2xl font-bold text-slate-900 mb-2">Guaranteed Issue Enrollment</h3>
                <p class="text-slate-600">We launch your custom Revive Health portal. Employees enroll paperlessly.
                    Since it is guaranteed issue, there are no medical underwriting barriers.</p>
            </div>
        </div>
        <div class="flex items-start relative">
            <div
                class="w-12 h-12 bg-green-500 text-white rounded-full flex items-center justify-center font-bold z-10 shrink-0">
                <i class="fas fa-check"></i>
            </div>
            <div class="ml-8">
                <h3 class="text-2xl font-bold text-slate-900 mb-2">Activation & Recapture</h3>
                <p class="text-slate-600">Go live. Employees access virtual care instantly. The business receives FICA
                    savings back, often offsetting the entire benefits cost.</p>
            </div>
        </div>

        <div class="mt-20 p-12 bg-white rounded-3xl text-center border border-slate-200">
            <h3 class="text-2xl font-bold text-slate-900 mb-4">Ready for the Mock Run?</h3>
            <button onclick="navigateTo('contact')"
                class="bg-navy text-white px-10 py-4 rounded-xl font-bold hover:bg-accent transition shadow-xl">Get
                Started</button>
        </div>
    </div>
</div>

<!-- VIEW 5: INSIGHTS & VIEW 6: CONTACT -->
<div id="blog" class="page-view flex-grow bg-white">
    <header class="pt-40 pb-20 bg-slate-900 text-white text-center">
        <h1 class="text-5xl font-black mb-6">The Executive Digest</h1>
        <p class="text-xl text-slate-400">Tax code updates and EBITDA strategy briefings.</p>
    </header>
    <div class="max-w-5xl mx-auto px-4 py-24 space-y-12">
        <article
            class="flex flex-col md:flex-row bg-white rounded-3xl border border-slate-100 overflow-hidden shadow-sm hover:shadow-md transition cursor-pointer">
            <div class="md:w-1/3 bg-slate-100 h-48 md:h-auto"></div>
            <div class="p-8 md:w-2/3">
                <span class="text-accent text-xs font-bold uppercase tracking-widest mb-2 block">Tax Strategy</span>
                <h3 class="text-2xl font-black text-slate-900 mb-4">Why the CFO is the New Chief Wellness Officer</h3>
                <p class="text-slate-500 mb-6">How Section 125 compliance is redefining boardroom priorities for EBITDA
                    growth in 2025.</p>
                <button class="text-navy font-bold text-sm uppercase tracking-widest hover:text-accent">Read Briefing <i
                        class="fas fa-arrow-right ml-2"></i></button>
            </div>
        </article>
    </div>
</div>

<div id="contact" class="page-view flex-grow bg-soft-blue">
    <header class="pt-40 pb-20 text-center">
        <h1 class="text-5xl font-black text-slate-900">Verify Eligibility.</h1>
        <p class="text-xl text-slate-500 mt-4 leading-relaxed">Submit your headcount for a preliminary FICA recapture
            audit.</p>
    </header>
    <div class="max-w-4xl mx-auto px-4 pb-32">
        <div class="bg-white rounded-3xl shadow-2xl overflow-hidden border border-slate-100">
            <iframe src="https://api.leadconnectorhq.com/widget/form/bnJjCYqGaVFUFp4v8wp6"
                style="width:100%;height:100%;border:none;min-height: 600px;" id="inline-bnJjCYqGaVFUFp4v8wp6"
                data-layout="{'id':'INLINE'}" data-trigger-type="alwaysShow" data-form-name="Calendar Form"
                title="Calendar Form">
            </iframe>
            <script src="https://link.msgsndr.com/js/form_embed.js"></script>
        </div>
    </div>
</div>

<?php get_footer(); ?>