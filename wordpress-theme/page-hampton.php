<?php get_header(); ?>

<!-- HERO -->
<section class="relative py-24 bg-green-800 text-white overflow-hidden"
    style="background: linear-gradient(rgba(15, 23, 42, 0.85), rgba(15, 23, 42, 0.85)), url('https://images.unsplash.com/photo-1596495578065-8a5a06c3a9b3?q=80&w=2560&auto=format&fit=crop'); background-size: cover; background-position: center;">
    <div class="relative max-w-7xl mx-auto px-6 text-center">
        <span
            class="inline-block py-1 px-3 rounded-full bg-emerald-500 text-white text-xs font-bold tracking-wider mb-4 uppercase">
            Now Enrolling
        </span>
        <h1 class="text-5xl md:text-6xl font-extrabold mb-4">Hampton Campus</h1>
        <p class="text-xl text-slate-200 max-w-2xl mx-auto">
            Serving Hampton, GA and Henry County with caring early education and strong support for middle and high
            school students.
        </p>
    </div>
</section>

<section class="max-w-7xl mx-auto px-6 py-16 bg-white">
    <div class="mb-10">
        <a href="<?php echo site_url('/locations'); ?>"
            class="inline-flex items-center text-emerald-600 font-bold hover:text-emerald-800 transition">
            <i data-lucide="arrow-left" class="w-4 h-4 mr-2"></i> Back to All Locations
        </a>
    </div>

    <div class="grid lg:grid-cols-3 gap-12">

        <!-- Main Content -->
        <div class="lg:col-span-2 space-y-12">

            <!-- Welcome -->
            <div>
                <h2 class="text-3xl font-bold text-slate-900 mb-6">Welcome to KIDazzle Hampton</h2>
                <p class="text-slate-600 leading-relaxed mb-4">
                    KIDazzle Hampton is a warm, community-focused campus just minutes from
                    <strong>Downtown Hampton</strong> and <strong>Atlanta Motor Speedway</strong>.
                    We serve families across Hampton, Lovejoy, McDonough, and the wider Henry County area.
                    Our center is designed to feel like a second home where students can learn, grow, and feel safe.
                </p>
                <p class="text-slate-600 leading-relaxed">
                    We support children from early childhood through the teen years, including
                    <strong>school-age care for grades 6–12</strong>. Our teachers focus on building strong
                    study habits, social skills, and confidence, while keeping families closely informed and involved.
                </p>
            </div>

            <!-- Campus Highlights -->
            <div>
                <h3 class="text-2xl font-bold text-slate-900 mb-6">Campus Highlights</h3>
                <div class="grid md:grid-cols-2 gap-6">
                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 flex items-start gap-4">
                        <div class="bg-indigo-100 p-3 rounded-lg text-indigo-600"><i data-lucide="school"></i></div>
                        <div>
                            <h4 class="font-bold text-slate-900">School-Age Lounge</h4>
                            <p class="text-sm text-slate-500">
                                Dedicated workspace for 6th–12th graders with Wi-Fi, tutoring support, and quiet zones
                                for homework.
                            </p>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 flex items-start gap-4">
                        <div class="bg-emerald-100 p-3 rounded-lg text-emerald-600"><i data-lucide="leaf"></i></div>
                        <div>
                            <h4 class="font-bold text-slate-900">Outdoor Learning</h4>
                            <p class="text-sm text-slate-500">
                                Secure outdoor play and learning areas where children explore nature and get active
                                every day.
                            </p>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 flex items-start gap-4">
                        <div class="bg-orange-100 p-3 rounded-lg text-orange-600"><i data-lucide="clock-3"></i></div>
                        <div>
                            <h4 class="font-bold text-slate-900">Extended Hours</h4>
                            <p class="text-sm text-slate-500">
                                Flexible before- and after-school options that work for commuting families and shift
                                workers.
                            </p>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 flex items-start gap-4">
                        <div class="bg-red-100 p-3 rounded-lg text-red-600"><i data-lucide="shield-check"></i></div>
                        <div>
                            <h4 class="font-bold text-slate-900">Secure Campus</h4>
                            <p class="text-sm text-slate-500">
                                Controlled entry, check-in/check-out procedures, and trained staff focused on child
                                safety.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Programs for Grades 6–12 -->
            <div>
                <h3 class="text-2xl font-bold text-slate-900 mb-4">Programs for Grades 6–12</h3>
                <p class="text-slate-600 leading-relaxed mb-4">
                    Our school-age and teen programs are designed for students in <strong>middle school and high
                        school</strong>.
                    We balance structure and independence so students can take ownership of their learning while still
                    having support.
                </p>
                <ul class="list-disc list-inside space-y-2 text-slate-600 text-sm md:text-base">
                    <li><strong>Homework Lab:</strong> Daily homework support, access to supplies, and quiet seating.
                    </li>
                    <li><strong>STEM & Tech Clubs:</strong> Hands-on projects in coding, robotics, and problem-solving.
                    </li>
                    <li><strong>Leadership & Life Skills:</strong> Workshops on communication, goal setting, and
                        teamwork.</li>
                    <li><strong>Creative Arts Time:</strong> Music, drawing, and digital creativity to help students
                        express themselves.</li>
                    <li><strong>College & Career Awareness:</strong> Age-appropriate exposure to future pathways and
                        planning skills.</li>
                </ul>
            </div>

            <!-- Local SEO Block -->
            <div>
                <h3 class="text-2xl font-bold text-slate-900 mb-4">Serving Families in Hampton, GA</h3>
                <p class="text-slate-600 leading-relaxed mb-3">
                    Our Hampton campus is conveniently located for families who live or work near:
                </p>
                <div class="grid md:grid-cols-2 gap-3 text-sm text-slate-600">
                    <ul class="list-disc list-inside space-y-1">
                        <li>Downtown Hampton</li>
                        <li>Atlanta Motor Speedway</li>
                        <li>McDonough & Lovejoy</li>
                        <li>Henry County schools</li>
                    </ul>
                    <ul class="list-disc list-inside space-y-1">
                        <li>Highway 19/41 corridor</li>
                        <li>Local logistics & warehouse employers</li>
                        <li>Retail and healthcare centers nearby</li>
                    </ul>
                </div>
                <p class="text-slate-600 leading-relaxed mt-3">
                    We partner with families who need reliable child care, school breaks coverage, and after-school
                    support
                    so that work, school, and home life can fit together more smoothly.
                </p>
            </div>

            <!-- Visit Us / Map -->
            <div>
                <h3 class="text-2xl font-bold text-slate-900 mb-6">Visit Us</h3>
                <div
                    class="rounded-3xl overflow-hidden shadow-lg border-4 border-white h-[450px] bg-slate-200 relative">
                    <!-- Placeholder for Google Map Embed -->
                    <div class="w-full h-full bg-slate-300 flex items-center justify-center text-slate-500 font-bold">
                        Google Maps Embed (Update in WordPress Admin)
                    </div>
                </div>
            </div>
        </div>

        <!-- Sidebar / Booking -->
        <div class="lg:col-span-1">
            <div class="bg-white p-6 rounded-3xl shadow-xl border border-emerald-100 sticky top-24">
                <div class="text-center mb-6">
                    <h3 class="text-2xl font-extrabold text-slate-900">Book a Hampton Tour</h3>
                    <p class="text-slate-500 text-sm mt-1">Choose a date and time that works for your family.</p>
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