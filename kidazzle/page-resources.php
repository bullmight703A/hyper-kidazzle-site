<?php
/**
 * Template Name: Resources Page
 *
 * @package kidazzle_Excellence
 */

get_header();
?>

<main id="view-resources" class="view-section active block">
    <!-- AI Feature Section -->
    <section class="py-24 bg-brand-cream border-t border-brand-ink/5">
        <div class="max-w-7xl mx-auto px-4 lg:px-6">
            <div class="bg-white rounded-[4rem] shadow-soft border border-brand-ink/5 overflow-hidden flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 p-12 md:p-20">
                    <span class="text-kidazzle-purple font-bold tracking-[0.2em] text-[10px] uppercase mb-4 block">Educational Technology</span>
                    <h2 class="text-3xl md:text-5xl font-serif font-bold text-brand-ink mb-6">AI Lesson Plan Bot</h2>
                    <p class="text-brand-ink/70 text-lg leading-relaxed mb-10">
                        Our proprietary AI Lesson Plan Bot helps KIDazzle educators transform the Creative Curriculum® into personalized daily activities instantly. By streamlining administrative work, we ensure our teachers spend more time where it matters most: with your child.
                    </p>
                    <a href="<?php echo esc_url(home_url('/teacher-portal')); ?>" class="inline-flex items-center gap-2 px-8 py-4 bg-kidazzle-purple text-white font-bold rounded-full uppercase tracking-widest text-xs hover:bg-brand-ink transition-all shadow-lg">
                        Access Teacher Tools <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
                <div class="md:w-1/2 bg-kidazzle-purple/[0.03] self-stretch flex items-center justify-center p-20 relative">
                    <div class="absolute inset-20 bg-kidazzle-purple/10 rounded-full blur-3xl animate-pulse"></div>
                    <i class="fa-solid fa-robot text-[120px] text-kidazzle-purple/20 relative z-10"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- Resources Grid -->
    <section class="py-24 bg-white border-t border-brand-ink/5">
        <div class="max-w-7xl mx-auto px-4 lg:px-6">
            <div class="text-center mb-16">
                <span class="text-kidazzle-blue font-bold tracking-[0.2em] text-[10px] uppercase mb-3 block">Quick Access</span>
                <h2 class="text-3xl md:text-5xl font-serif font-bold text-brand-ink">Family Toolbox</h2>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Enrollment Forms -->
                <div class="bg-brand-cream p-10 rounded-[3rem] border border-brand-ink/5 hover:-translate-y-2 transition-all group text-center">
                    <div class="w-20 h-20 bg-kidazzle-purple/10 text-kidazzle-purple rounded-[2rem] flex items-center justify-center text-4xl mb-8 mx-auto group-hover:bg-kidazzle-purple group-hover:text-white transition-all shadow-sm">
                        <i class="fa-solid fa-file-invoice"></i>
                    </div>
                    <h3 class="text-2xl font-serif font-bold text-brand-ink mb-3">Enrollment Portal</h3>
                    <p class="text-brand-ink/70 mb-8 leading-relaxed">Submit enrollment details, health records, and required state forms efficiently via our secure portal.</p>
                    <a href="<?php echo esc_url(home_url('/contact')); ?>" class="inline-flex items-center gap-2 font-bold text-xs uppercase tracking-widest text-kidazzle-purple border-b-2 border-kidazzle-purple/20 pb-1 hover:border-kidazzle-purple transition-all">Go to Admissions <i class="fa-solid fa-chevron-right"></i></a>
                </div>

                <!-- Academic Calendar -->
                <div class="bg-brand-cream p-10 rounded-[3rem] border border-brand-ink/5 hover:-translate-y-2 transition-all group text-center">
                    <div class="w-20 h-20 bg-kidazzle-blue/10 text-kidazzle-blue rounded-[2rem] flex items-center justify-center text-4xl mb-8 mx-auto group-hover:bg-kidazzle-blue group-hover:text-white transition-all shadow-sm">
                        <i class="fa-solid fa-calendar-day"></i>
                    </div>
                    <h3 class="text-2xl font-serif font-bold text-brand-ink mb-3">Academic Calendar</h3>
                    <p class="text-brand-ink/70 mb-8 leading-relaxed">Stay updated on curriculum themes, school closures, holiday events, and special campus celebrations.</p>
                    <a href="#" class="inline-flex items-center gap-2 font-bold text-xs uppercase tracking-widest text-kidazzle-blue border-b-2 border-kidazzle-blue/20 pb-1 hover:border-kidazzle-blue transition-all">View 2024-25 Calendar <i class="fa-solid fa-chevron-right"></i></a>
                </div>

                <!-- Report Absence -->
                <div class="bg-brand-cream p-10 rounded-[3rem] border border-brand-ink/5 hover:-translate-y-2 transition-all group text-center">
                    <div class="w-20 h-20 bg-kidazzle-red/10 text-kidazzle-red rounded-[2rem] flex items-center justify-center text-4xl mb-8 mx-auto group-hover:bg-kidazzle-red group-hover:text-white transition-all shadow-sm">
                        <i class="fa-solid fa-bell"></i>
                    </div>
                    <h3 class="text-2xl font-serif font-bold text-brand-ink mb-3">Report Absence</h3>
                    <p class="text-brand-ink/70 mb-8 leading-relaxed">Quickly notify your center director of a student absence to ensure proper attendance tracking and meal planning.</p>
                    <a href="<?php echo esc_url(home_url('/contact')); ?>" class="inline-flex items-center gap-2 font-bold text-xs uppercase tracking-widest text-kidazzle-red border-b-2 border-kidazzle-red/20 pb-1 hover:border-kidazzle-red transition-all">Notify Center <i class="fa-solid fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section class="py-24 bg-white border-t border-brand-ink/5">
        <div class="max-w-7xl mx-auto px-4 lg:px-6">
            <div class="flex justify-between items-end mb-12">
                <div>
                    <span class="text-kidazzle-orange font-bold tracking-[0.2em] text-[10px] uppercase mb-3 block">From the Classroom</span>
                    <h2 class="text-3xl md:text-5xl font-serif font-bold text-brand-ink">Latest News & Tips</h2>
                </div>
                <a href="<?php echo esc_url(home_url('/stories')); ?>" class="hidden md:inline-flex items-center gap-2 text-xs font-bold uppercase tracking-widest text-kidazzle-orange border-b-2 border-kidazzle-orange/20 pb-1 hover:border-kidazzle-orange transition-all">
                    View All Stories <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>

            <div class="grid md:grid-cols-3 gap-10">
                <div class="group">
                    <div class="aspect-[4/3] rounded-[2.5rem] bg-kidazzle-purple/10 mb-6 overflow-hidden border border-brand-ink/5 relative flex items-center justify-center text-5xl">📚</div>
                    <h3 class="text-xl font-bold text-brand-ink mb-2 group-hover:text-kidazzle-purple transition-colors">Early Literacy Tips</h3>
                    <p class="text-brand-ink/70 text-sm mb-4 leading-relaxed">Simple ways to foster a love for reading at home using our classroom techniques.</p>
                    <a href="<?php echo esc_url(home_url('/stories')); ?>" class="text-[10px] font-bold uppercase tracking-widest text-kidazzle-purple hover:underline">Read More</a>
                </div>
                <div class="group">
                    <div class="aspect-[4/3] rounded-[2.5rem] bg-kidazzle-orange/10 mb-6 overflow-hidden border border-brand-ink/5 relative flex items-center justify-center text-5xl">🍎</div>
                    <h3 class="text-xl font-bold text-brand-ink mb-2 group-hover:text-kidazzle-orange transition-colors">Healthy Habits</h3>
                    <p class="text-brand-ink/70 text-sm mb-4 leading-relaxed">Encouraging nutritious choices for toddlers during the transition to table food.</p>
                    <a href="<?php echo esc_url(home_url('/stories')); ?>" class="text-[10px] font-bold uppercase tracking-widest text-kidazzle-orange hover:underline">Read More</a>
                </div>
                <div class="group">
                    <div class="aspect-[4/3] rounded-[2.5rem] bg-kidazzle-green/10 mb-6 overflow-hidden border border-brand-ink/5 relative flex items-center justify-center text-5xl">🎨</div>
                    <h3 class="text-xl font-bold text-brand-ink mb-2 group-hover:text-kidazzle-green transition-colors">The Power of Play</h3>
                    <p class="text-brand-ink/70 text-sm mb-4 leading-relaxed">Why unstructured play is vital for social development and cognitive brain power.</p>
                    <a href="<?php echo esc_url(home_url('/stories')); ?>" class="text-[10px] font-bold uppercase tracking-widest text-kidazzle-green hover:underline">Read More</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Support Section -->
    <section class="py-24 bg-brand-cream border-t border-brand-ink/5 text-center">
        <div class="max-w-4xl mx-auto px-4">
            <h2 class="text-3xl font-serif font-bold text-brand-ink mb-6">Need additional assistance?</h2>
            <p class="text-lg text-brand-ink/70 mb-10 max-w-2xl mx-auto">If you can't find the resource you're looking for, please reach out directly to your center director or our regional support office.</p>
            <div class="flex flex-wrap justify-center gap-6">
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="px-10 py-5 bg-brand-ink text-white font-bold rounded-full uppercase tracking-widest text-xs hover:bg-kidazzle-blue transition-all shadow-xl">Contact Support Office</a>
                <a href="<?php echo esc_url(home_url('/locations')); ?>" class="px-10 py-5 bg-white border border-brand-ink/10 text-brand-ink font-bold rounded-full uppercase tracking-widest text-xs hover:border-kidazzle-blue hover:text-kidazzle-blue transition-all">Contact My Center</a>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
