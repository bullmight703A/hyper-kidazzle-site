<?php get_header(); ?>

<!-- HERO -->
<section class="relative py-24 bg-orange-900 text-white overflow-hidden"
    style="background: linear-gradient(rgba(15, 23, 42, 0.85), rgba(15, 23, 42, 0.85)), url('https://images.unsplash.com/photo-1555431189-0fabf2667795?q=80&w=2560&auto=format&fit=crop'); background-size: cover; background-position: center;">
    <div class="relative max-w-7xl mx-auto px-6 text-center">
        <span
            class="inline-block py-1 px-3 rounded-full bg-lime-500 text-white text-xs font-bold tracking-wider mb-4 uppercase">
            Now Enrolling
        </span>
        <h1 class="text-5xl md:text-6xl font-extrabold mb-4">Atlanta Federal Center</h1>
        <p class="text-xl text-slate-200 max-w-2xl mx-auto">
            Secure, dependable child care and school-age programs for federal employees and downtown Atlanta
            professionals.
        </p>
    </div>
</section>

<section class="max-w-7xl mx-auto px-6 py-16 bg-white">
    <div class="mb-10">
        <a href="<?php echo site_url('/locations'); ?>"
            class="inline-flex items-center text-lime-600 font-bold hover:text-lime-800 transition">
            <i data-lucide="arrow-left" class="w-4 h-4 mr-2"></i> Back to All Locations
        </a>
    </div>

    <div class="grid lg:grid-cols-3 gap-12">

        <!-- Main Content -->
        <div class="lg:col-span-2 space-y-12">

            <!-- Welcome -->
            <div>
                <h2 class="text-3xl font-bold text-slate-900 mb-6">Welcome to KIDazzle at Atlanta Federal Center</h2>
                <p class="text-slate-600 leading-relaxed mb-4">
                    Located in the heart of <strong>Downtown Atlanta</strong> near the Atlanta Federal Center,
                    our campus serves families working in federal agencies, courthouses, and nearby office towers.
                    We understand the demands of public service and downtown work life, and we design our days to match.
                </p>
                <p class="text-slate-600 leading-relaxed">
                    KIDazzle provides early childhood education as well as structured <strong>programming for grades
                        6–12</strong>.
                    Students have a safe, supervised place to go after school that is close to where parents work,
                    reducing commute stress
                    and making everyday logistics easier.
                </p>
            </div>

            <!-- Campus Highlights -->
            <div>
                <h3 class="text-2xl font-bold text-slate-900 mb-6">Campus Highlights</h3>
                <div class="grid md:grid-cols-2 gap-6">
                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 flex items-start gap-4">
                        <div class="bg-lime-100 p-3 rounded-lg text-lime-600"><i data-lucide="shield"></i></div>
                        <div>
                            <h4 class="font-bold text-slate-900">Security First</h4>
                            <p class="text-sm text-slate-500">
                                Controlled access, ID-based check-in, and safety procedures aligned with the needs of
                                federal families.
                            </p>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 flex items-start gap-4">
                        <div class="bg-sky-100 p-3 rounded-lg text-sky-600"><i data-lucide="map-pin"></i></div>
                        <div>
                            <h4 class="font-bold text-slate-900">Walkable from Work</h4>
                            <p class="text-sm text-slate-500">
                                Convenient to Five Points, Peachtree Center, and nearby government buildings and
                                offices.
                            </p>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 flex items-start gap-4">
                        <div class="bg-amber-100 p-3 rounded-lg text-amber-600"><i data-lucide="calendar-clock"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900">Reliable Scheduling</h4>
                            <p class="text-sm text-slate-500">
                                Consistent hours and routines to match standard workdays and reduce last-minute child
                                care stress.
                            </p>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 flex items-start gap-4">
                        <div class="bg-indigo-100 p-3 rounded-lg text-indigo-600"><i data-lucide="book-open-check"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900">Academic Support</h4>
                            <p class="text-sm text-slate-500">
                                Homework help, reading support, and quiet workspaces for middle and high school
                                students.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Programs for Grades 6–12 -->
            <div>
                <h3 class="text-2xl font-bold text-slate-900 mb-4">School-Age & Teen Programs</h3>
                <p class="text-slate-600 leading-relaxed mb-4">
                    For students in grades 6–12, our Atlanta Federal Center campus is structured and calm.
                    We keep things age-appropriate while helping students handle growing independence.
                </p>
                <ul class="list-disc list-inside space-y-2 text-slate-600 text-sm md:text-base">
                    <li><strong>After-School Care:</strong> Daily check-in, snack, homework time, and supervised free
                        time.</li>
                    <li><strong>Study Skills & Organization:</strong> Support with planners, project planning, and time
                        management.</li>
                    <li><strong>Civic & Community Projects:</strong> Service-minded activities that connect to the work
                        of nearby agencies.</li>
                    <li><strong>Career Exploration:</strong> Age-appropriate exposure to careers in government, law, and
                        public service.</li>
                    <li><strong>Technology Access:</strong> Guided computer time for assignments and research in a
                        supervised setting.</li>
                </ul>
            </div>

            <!-- Local SEO Block -->
            <div>
                <h3 class="text-2xl font-bold text-slate-900 mb-4">Serving Downtown Atlanta Families</h3>
                <p class="text-slate-600 leading-relaxed mb-3">
                    Our Atlanta Federal Center location is ideal for parents who work in or near:
                </p>
                <div class="grid md:grid-cols-2 gap-3 text-sm text-slate-600">
                    <ul class="list-disc list-inside space-y-1">
                        <li>Atlanta Federal Center and nearby federal agencies</li>
                        <li>Downtown courthouses and legal offices</li>
                        <li>Five Points and Peachtree Center</li>
                        <li>State and city government buildings</li>
                    </ul>
                    <ul class="list-disc list-inside space-y-1">
                        <li>Downtown corporate headquarters</li>
                        <li>Restaurants, retail, and hotels in the city center</li>
                        <li>Nearby MARTA stations and transit hubs</li>
                    </ul>
                </div>
                <p class="text-slate-600 leading-relaxed mt-3">
                    Because we are close to where parents work, pick-up and drop-off become simpler, even on busy days
                    filled
                    with hearings, meetings, or agency deadlines.
                </p>
            </div>

            <!-- Visit Us / Map -->
            <div>
                <h3 class="text-2xl font-bold text-slate-900 mb-6">Visit Us</h3>
                <div
                    class="rounded-3xl overflow-hidden shadow-lg border-4 border-white h-[450px] bg-slate-200 relative">
                    <!-- Placeholder for Map -->
                    <div class="w-full h-full bg-slate-300 flex items-center justify-center text-slate-500 font-bold">
                        Google Maps Embed (Update in WordPress Admin)
                    </div>
                </div>
            </div>
        </div>

        <!-- Sidebar / Booking -->
        <div class="lg:col-span-1">
            <div class="bg-white p-6 rounded-3xl shadow-xl border border-lime-100 sticky top-24">
                <div class="text-center mb-6">
                    <h3 class="text-2xl font-extrabold text-slate-900">Book a Federal Center Tour</h3>
                    <p class="text-slate-500 text-sm mt-1">See how our downtown campus fits your workday rhythm.</p>
                </div>

                <div class="calendar-container w-full overflow-hidden bg-slate-50 rounded-xl"
                    style="min-height: 600px;">
                    <!-- Placeholder for Booking Widget -->
                    <div
                        class="w-full h-full bg-slate-100 flex items-center justify-center text-slate-400 p-8 text-center">
                        Calendar Embed (Update code with GHL widget)
                    </div>
                </div>

                <div class="mt-6 text-center text-xs text-slate-400">
                    <p>Questions? Call us at <strong class="text-slate-600">877-410-1002</strong></p>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Footer Script -->
<script src="https://link.msgsndr.com/js/embed.js" type="text/javascript"></script>

<?php get_footer(); ?>