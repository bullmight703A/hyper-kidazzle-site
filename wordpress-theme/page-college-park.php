<?php get_header(); ?>

<!-- HERO -->
<section class="relative py-24 bg-blue-900 text-white overflow-hidden"
    style="background: linear-gradient(rgba(15, 23, 42, 0.85), rgba(15, 23, 42, 0.85)), url('https://images.unsplash.com/photo-1523050854058-8df90110c9f1?q=80&w=2560&auto=format&fit=crop'); background-size: cover; background-position: center;">
    <div class="relative max-w-7xl mx-auto px-6 text-center">
        <span
            class="inline-block py-1 px-3 rounded-full bg-fuchsia-500 text-white text-xs font-bold tracking-wider mb-4 uppercase">
            Now Enrolling
        </span>
        <h1 class="text-5xl md:text-6xl font-extrabold mb-4">College Park Campus</h1>
        <p class="text-xl text-slate-200 max-w-2xl mx-auto">
            Reliable care and enrichment for families near Hartsfield-Jackson, Downtown College Park, and Camp Creek.
        </p>
    </div>
</section>

<section class="max-w-7xl mx-auto px-6 py-16 bg-white">
    <div class="mb-10">
        <a href="<?php echo site_url('/locations'); ?>"
            class="inline-flex items-center text-fuchsia-600 font-bold hover:text-fuchsia-800 transition">
            <i data-lucide="arrow-left" class="w-4 h-4 mr-2"></i> Back to All Locations
        </a>
    </div>

    <div class="grid lg:grid-cols-3 gap-12">

        <!-- Main Content -->
        <div class="lg:col-span-2 space-y-12">

            <!-- Welcome -->
            <div>
                <h2 class="text-3xl font-bold text-slate-900 mb-6">Welcome to KIDazzle College Park</h2>
                <p class="text-slate-600 leading-relaxed mb-4">
                    Our College Park campus is designed for busy families who live and work near
                    <strong>Hartsfield-Jackson Atlanta International Airport</strong>, Main Street College Park,
                    and the Camp Creek corridor. Whether you work in aviation, logistics, hospitality, or public
                    service,
                    we provide consistent care that keeps up with your schedule.
                </p>
                <p class="text-slate-600 leading-relaxed">
                    We offer early childhood programs along with <strong>robust after-school and teen programs</strong>
                    for 6th–12th graders. Students find a safe space to study, relax, and connect with positive role
                    models
                    before heading home.
                </p>
            </div>

            <!-- Campus Highlights -->
            <div>
                <h3 class="text-2xl font-bold text-slate-900 mb-6">Campus Highlights</h3>
                <div class="grid md:grid-cols-2 gap-6">
                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 flex items-start gap-4">
                        <div class="bg-fuchsia-100 p-3 rounded-lg text-fuchsia-600"><i data-lucide="bus"></i></div>
                        <div>
                            <h4 class="font-bold text-slate-900">Transportation Friendly</h4>
                            <p class="text-sm text-slate-500">
                                Close to MARTA, airport access roads, and major employers, with family drop-off and
                                pick-up in mind.
                            </p>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 flex items-start gap-4">
                        <div class="bg-sky-100 p-3 rounded-lg text-sky-600"><i data-lucide="plane"></i></div>
                        <div>
                            <h4 class="font-bold text-slate-900">Support for Shift Workers</h4>
                            <p class="text-sm text-slate-500">
                                Program options designed around non-traditional schedules common in aviation and
                                hospitality.
                            </p>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 flex items-start gap-4">
                        <div class="bg-amber-100 p-3 rounded-lg text-amber-600"><i data-lucide="lightbulb"></i></div>
                        <div>
                            <h4 class="font-bold text-slate-900">STEM & Project-Based Learning</h4>
                            <p class="text-sm text-slate-500">
                                Real-world projects connect science, technology, and critical thinking with students’
                                interests.
                            </p>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 flex items-start gap-4">
                        <div class="bg-emerald-100 p-3 rounded-lg text-emerald-600"><i data-lucide="smile"></i></div>
                        <div>
                            <h4 class="font-bold text-slate-900">Positive Culture</h4>
                            <p class="text-sm text-slate-500">
                                Staff trained in social-emotional learning, conflict resolution, and mentoring for
                                teens.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Programs for Grades 6–12 -->
            <div>
                <h3 class="text-2xl font-bold text-slate-900 mb-4">Programs for Middle & High School Students</h3>
                <p class="text-slate-600 leading-relaxed mb-4">
                    For older students, we focus on structure, independence, and real-life skills.
                    Our College Park campus is a calm, productive stop between school and home.
                </p>
                <ul class="list-disc list-inside space-y-2 text-slate-600 text-sm md:text-base">
                    <li><strong>After-School Program (Grades 6–12):</strong> Homework time, tutoring check-ins, and
                        academic support.</li>
                    <li><strong>Study & Test Prep Blocks:</strong> Quiet spaces and guided study strategies for quizzes
                        and exams.</li>
                    <li><strong>Entrepreneurship & Money Basics:</strong> Age-appropriate lessons on budgeting, saving,
                        and planning.</li>
                    <li><strong>Creative Labs:</strong> Art, media, and design time for students to explore their
                        interests.</li>
                    <li><strong>Health & Wellness:</strong> Movement breaks, mindfulness activities, and healthy snack
                        options.</li>
                </ul>
            </div>

            <!-- Local SEO Block -->
            <div>
                <h3 class="text-2xl font-bold text-slate-900 mb-4">Serving Families in College Park, GA</h3>
                <p class="text-slate-600 leading-relaxed mb-3">
                    We welcome families from across the south metro Atlanta area, including:
                </p>
                <div class="grid md:grid-cols-2 gap-3 text-sm text-slate-600">
                    <ul class="list-disc list-inside space-y-1">
                        <li>Downtown College Park & Main Street</li>
                        <li>East Point and Hapeville</li>
                        <li>Camp Creek Marketplace area</li>
                        <li>Old National Highway corridor</li>
                    </ul>
                    <ul class="list-disc list-inside space-y-1">
                        <li>Employees at Hartsfield-Jackson</li>
                        <li>Airport hotels and logistics hubs</li>
                        <li>Nearby Fulton County schools</li>
                    </ul>
                </div>
                <p class="text-slate-600 leading-relaxed mt-3">
                    Our location makes drop-off and pick-up simple, especially for families juggling airport shifts,
                    downtown commutes, and multiple school schedules.
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
            <div class="bg-white p-6 rounded-3xl shadow-xl border border-fuchsia-100 sticky top-24">
                <div class="text-center mb-6">
                    <h3 class="text-2xl font-extrabold text-slate-900">Book a College Park Tour</h3>
                    <p class="text-slate-500 text-sm mt-1">Schedule a visit around your work and travel schedule.</p>
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