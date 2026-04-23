<?php
/**
 * Template Name: Teacher Portal Page
 *
 * @package kidazzle_Excellence
 */

get_header();

session_start();
$custom_passcode = '1212';

if (isset($_POST['custom_portal_pwd'])) {
    if ($_POST['custom_portal_pwd'] === $custom_passcode) {
        $_SESSION['teacher_unlocked'] = true;
    } else {
        $pwd_error = "Incorrect passcode.";
    }
}

$is_locked = !isset($_SESSION['teacher_unlocked']) || $_SESSION['teacher_unlocked'] !== true;

if (post_password_required() || $is_locked) {
    ?>
    <main id="view-teacher-portal" class="view-section active block py-32 bg-brand-cream min-h-screen">
        <div class="max-w-md mx-auto px-4 text-center">
            <div class="bg-white p-10 rounded-[3rem] shadow-xl border border-brand-ink/5">
                <div class="w-20 h-20 bg-kidazzle-red/10 text-kidazzle-red rounded-3xl flex items-center justify-center mx-auto mb-6 text-3xl">
                    <i class="fa-solid fa-lock"></i>
                </div>
                <h2 class="text-3xl font-serif font-bold text-brand-ink mb-4">Secured Portal</h2>
                <p class="text-brand-ink/70 mb-8 text-sm">Please enter the staff passcode to access classroom tools and protocols.</p>
                <div class="password-form-wrapper">
                    <?php if (post_password_required()): ?>
                        <?php echo get_the_password_form(); ?>
                    <?php else: ?>
                        <form method="post" style="display: flex; flex-direction: column; gap: 1rem;">
                            <input type="password" name="custom_portal_pwd" placeholder="Enter Passcode" required>
                            <?php if(isset($pwd_error)) echo "<p style='color:red; font-size:0.9rem; margin:0;'>$pwd_error</p>"; ?>
                            <input type="submit" value="Enter">
                        </form>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </main>
    <style>
        /* Style the default WP password form */
        .password-form-wrapper form { display: flex; flex-direction: column; gap: 1rem; }
        .password-form-wrapper label { font-size: 0; }
        .password-form-wrapper input[type="password"] { 
            width: 100%; padding: 1rem 1.5rem; border-radius: 9999px; border: 2px solid #e2e8f0; 
            font-size: 1rem; text-align: center; outline: none; transition: all 0.3s;
        }
        .password-form-wrapper input[type="password"]:focus { border-color: #5B21B6; /* kidazzle-purple */ }
        .password-form-wrapper input[type="submit"] {
            width: 100%; padding: 1rem 2rem; border-radius: 9999px; background-color: #5B21B6; 
            color: white; font-weight: bold; cursor: pointer; transition: all 0.3s;
        }
        .password-form-wrapper input[type="submit"]:hover { background-color: #4C1D95; transform: translateY(-2px); }
    </style>
    <?php
    get_footer();
    exit;
}
?>

<main id="view-teacher-portal" class="view-section active block">
    <!-- Daily Tools Section -->
    <section class="py-16 bg-brand-cream">
        <div class="max-w-7xl mx-auto px-4 lg:px-6">
            <h2 class="text-2xl font-serif font-bold text-brand-ink mb-10 border-b border-brand-ink/10 pb-4">Daily Classroom Tools</h2>
            <div class="grid md:grid-cols-4 gap-6 mb-20">
                <!-- AI Lesson Planner -->
                <div onclick="showForm('form-lesson-plan')" class="bg-white p-8 rounded-[2.5rem] border border-brand-ink/5 hover:shadow-xl transition-all group text-center cursor-pointer">
                    <div class="w-16 h-16 bg-kidazzle-purple/10 text-kidazzle-purple rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:bg-kidazzle-purple group-hover:text-white transition-all text-2xl">
                        <i class="fa-solid fa-robot"></i>
                    </div>
                    <h3 class="font-bold text-brand-ink mb-2">AI Lesson Planner</h3>
                    <p class="text-brand-ink/60 text-xs mb-6">Create custom, standards-aligned activities instantly.</p>
                    <span class="text-kidazzle-purple font-bold text-[10px] uppercase tracking-widest flex items-center justify-center gap-2 group-hover:underline">Start Planning <i class="fa-solid fa-arrow-right"></i></span>
                </div>

                <!-- Daily Checklist -->
                <div class="bg-white p-8 rounded-[2.5rem] border border-brand-ink/5 hover:shadow-xl transition-all group text-center cursor-pointer">
                    <div class="w-16 h-16 bg-kidazzle-green/10 text-kidazzle-green rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:bg-kidazzle-green group-hover:text-white transition-all text-2xl">
                        <i class="fa-solid fa-clipboard-check"></i>
                    </div>
                    <h3 class="font-bold text-brand-ink mb-2">Daily Checklists</h3>
                    <p class="text-brand-ink/60 text-xs mb-6">Safety, hygiene, and classroom opening reports.</p>
                    <a href="#" class="text-kidazzle-green font-bold text-[10px] uppercase tracking-widest flex items-center justify-center gap-2 hover:underline">Open List <i class="fa-solid fa-arrow-right"></i></a>
                </div>

                <!-- Staff Email -->
                <div class="bg-white p-8 rounded-[2.5rem] border border-brand-ink/5 hover:shadow-xl transition-all group text-center cursor-pointer">
                    <div class="w-16 h-16 bg-kidazzle-blue/10 text-kidazzle-blue rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:bg-kidazzle-blue group-hover:text-white transition-all text-2xl">
                        <i class="fa-solid fa-envelope-open-text"></i>
                    </div>
                    <h3 class="font-bold text-brand-ink mb-2">Staff Email</h3>
                    <p class="text-brand-ink/60 text-xs mb-6">Access your official @kidazzle.com inbox.</p>
                    <a href="https://box2215.bluehost.com:2096/" target="_blank" class="text-kidazzle-blue font-bold text-[10px] uppercase tracking-widest flex items-center justify-center gap-2 hover:underline">Login <i class="fa-solid fa-external-link text-[8px]"></i></a>
                </div>

                <!-- Weekly Tasks -->
                <div onclick="showForm('form-lesson-plan')" class="bg-white p-8 rounded-[2.5rem] border border-brand-ink/5 hover:shadow-xl transition-all group text-center cursor-pointer">
                    <div class="w-16 h-16 bg-kidazzle-orange/10 text-kidazzle-orange rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:bg-kidazzle-orange group-hover:text-white transition-all text-2xl">
                        <i class="fa-solid fa-layer-group"></i>
                    </div>
                    <h3 class="font-bold text-brand-ink mb-2">Weekly Workflow</h3>
                    <p class="text-brand-ink/60 text-xs mb-6">Submit supply requests and upcoming weekly plans.</p>
                    <span class="text-kidazzle-orange font-bold text-[10px] uppercase tracking-widest flex items-center justify-center gap-2 group-hover:underline">Submit Tasks <i class="fa-solid fa-arrow-right"></i></span>
                </div>
            </div>

            <!-- Forms & Reporting -->
            <h2 class="text-2xl font-serif font-bold text-brand-ink mb-10 border-b border-brand-ink/10 pb-4">Reporting & Compliance</h2>
            <div class="grid md:grid-cols-4 gap-6 mb-20">
                <div class="bg-white p-6 rounded-2xl border border-brand-ink/5 hover:border-kidazzle-red/30 transition-all flex items-center gap-4 group cursor-pointer">
                    <div class="w-12 h-12 bg-kidazzle-red/10 text-kidazzle-red rounded-xl flex items-center justify-center shrink-0">
                        <i class="fa-solid fa-user-slash"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-brand-ink text-sm">Absentee</h4>
                        <p class="text-[10px] text-brand-ink/40 uppercase font-bold tracking-widest">Report Now &rarr;</p>
                    </div>
                </div>

                <div onclick="showForm('form-enrollment')" class="bg-white p-6 rounded-2xl border border-brand-ink/5 hover:border-kidazzle-blue/30 transition-all flex items-center gap-4 group cursor-pointer">
                    <div class="w-12 h-12 bg-kidazzle-blue/10 text-kidazzle-blue rounded-xl flex items-center justify-center shrink-0">
                        <i class="fa-solid fa-file-signature"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-brand-ink text-sm">Enrollment App</h4>
                        <p class="text-[10px] text-brand-ink/40 uppercase font-bold tracking-widest group-hover:text-kidazzle-blue transition-colors">Process &rarr;</p>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-2xl border border-brand-ink/5 hover:border-kidazzle-orange/30 transition-all flex items-center gap-4 group cursor-pointer">
                    <div class="w-12 h-12 bg-kidazzle-orange/10 text-kidazzle-orange rounded-xl flex items-center justify-center shrink-0">
                        <i class="fa-solid fa-bowl-food"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-brand-ink text-sm">Food Survey</h4>
                        <p class="text-[10px] text-brand-ink/40 uppercase font-bold tracking-widest">Feedback &rarr;</p>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-2xl border border-brand-ink/5 hover:border-brand-ink/30 transition-all flex items-center gap-4 group cursor-pointer">
                    <div class="w-12 h-12 bg-brand-ink/5 text-brand-ink/40 rounded-xl flex items-center justify-center shrink-0">
                        <i class="fa-solid fa-triangle-exclamation"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-brand-ink text-sm">Suspension</h4>
                        <p class="text-[10px] text-brand-ink/40 uppercase font-bold tracking-widest">File Report &rarr;</p>
                    </div>
                </div>
            </div>

            <!-- GHL Forms Container -->
            <div id="ghl-forms-area" class="mb-20">
                <!-- Lesson Plan Form -->
                <div id="form-lesson-plan" class="ghl-form-container hidden bg-white rounded-[3rem] p-8 shadow-xl border border-brand-ink/5">
                    <div class="flex justify-between items-center mb-6 border-b border-brand-ink/10 pb-4">
                        <h3 class="text-2xl font-serif font-bold text-brand-ink">Weekly Workflow & Lesson Plan</h3>
                        <button onclick="hideForms()" class="text-brand-ink/40 hover:text-kidazzle-red transition-colors text-xl"><i class="fa-solid fa-xmark"></i></button>
                    </div>
                    <iframe src="https://api.leadconnectorhq.com/widget/survey/AttvnaSbqgMaJxTBXSdS" style="border:none;width:100%;height:800px;" scrolling="auto" id="AttvnaSbqgMaJxTBXSdS" title="survey"></iframe>
                    <script src="https://link.msgsndr.com/js/form_embed.js"></script>
                </div>

                <!-- Enrollment Form -->
                <div id="form-enrollment" class="ghl-form-container hidden bg-white rounded-[3rem] p-8 shadow-xl border border-brand-ink/5 mt-8">
                    <div class="flex justify-between items-center mb-6 border-b border-brand-ink/10 pb-4">
                        <h3 class="text-2xl font-serif font-bold text-brand-ink">Master Enrollment Form</h3>
                        <button onclick="hideForms()" class="text-brand-ink/40 hover:text-kidazzle-red transition-colors text-xl"><i class="fa-solid fa-xmark"></i></button>
                    </div>
                    <iframe
                        src="https://api.leadconnectorhq.com/widget/form/zv8cXPa0HaShOybmKli4"
                        style="width:100%;height:731px;border:none;border-radius:4px"
                        id="inline-zv8cXPa0HaShOybmKli4" 
                        data-layout="{'id':'INLINE'}"
                        data-trigger-type="alwaysShow"
                        data-trigger-value=""
                        data-activation-type="alwaysActivated"
                        data-activation-value=""
                        data-deactivation-type="neverDeactivate"
                        data-deactivation-value=""
                        data-form-name="aster Enrollment form "
                        data-height="731"
                        data-layout-iframe-id="inline-zv8cXPa0HaShOybmKli4"
                        data-form-id="zv8cXPa0HaShOybmKli4"
                        title="aster Enrollment form "
                    ></iframe>
                    <script src="https://link.msgsndr.com/js/form_embed.js"></script>
                </div>
            </div>

            <script>
            function showForm(formId) {
                document.querySelectorAll('.ghl-form-container').forEach(el => {
                    el.classList.add('hidden');
                });
                const formEl = document.getElementById(formId);
                formEl.classList.remove('hidden');
                formEl.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
            function hideForms() {
                document.querySelectorAll('.ghl-form-container').forEach(el => {
                    el.classList.add('hidden');
                });
            }
            </script>

            <!-- Handbooks Section -->
            <div class="grid md:grid-cols-2 gap-8 mb-20">
                <a href="<?php echo get_stylesheet_directory_uri(); ?>/assets/docs/employee-handbook.pdf" target="_blank" class="flex items-center p-8 bg-brand-ink text-white rounded-[2.5rem] hover:bg-kidazzle-blueDark transition-all shadow-xl group">
                    <div class="w-16 h-16 bg-white/10 rounded-2xl flex items-center justify-center text-3xl mr-6 group-hover:scale-110 transition-transform"><i class="fa-solid fa-book-open-reader"></i></div>
                    <div class="flex-grow">
                        <h3 class="font-bold text-xl mb-1">Employee Handbook</h3>
                        <p class="text-white/50 text-xs">Official policies, procedures, and vision.</p>
                    </div>
                    <i class="fa-solid fa-download text-white/20 group-hover:text-white transition-colors"></i>
                </a>
                <a href="<?php echo get_stylesheet_directory_uri(); ?>/assets/docs/parent-handbook.pdf" target="_blank" class="flex items-center p-8 bg-white border border-brand-ink/10 rounded-[2.5rem] hover:border-kidazzle-blue transition-all shadow-soft group">
                    <div class="w-16 h-16 bg-kidazzle-blue/5 text-kidazzle-blue rounded-2xl flex items-center justify-center text-3xl mr-6 group-hover:scale-110 transition-transform"><i class="fa-solid fa-users"></i></div>
                    <div class="flex-grow">
                        <h3 class="font-bold text-xl mb-1 text-brand-ink">Parent Handbook</h3>
                        <p class="text-brand-ink/40 text-xs">Essential guide for KIDazzle families.</p>
                    </div>
                    <i class="fa-solid fa-download text-brand-ink/10 group-hover:text-kidazzle-blue transition-colors"></i>
                </a>
            </div>

            <!-- Health & Wellness Section -->
            <div class="bg-white rounded-[4rem] border border-brand-ink/5 p-12 md:p-20 shadow-soft">
                <div class="text-center mb-16">
                    <span class="text-kidazzle-red font-bold tracking-[0.2em] text-[10px] uppercase mb-3 block">Wellness First</span>
                    <h2 class="text-3xl md:text-5xl font-serif font-bold text-brand-ink">Health & Wellness Guide</h2>
                </div>

                <div class="grid md:grid-cols-2 gap-12">
                    <!-- Illness Guide -->
                    <div class="bg-brand-cream/50 rounded-[3rem] p-10 border border-brand-ink/5">
                        <h3 class="font-bold text-xl text-brand-ink mb-6 flex items-center gap-3">
                            <i class="fa-solid fa-virus-covid text-kidazzle-red"></i> Common Illnesses
                        </h3>
                        <div class="space-y-6">
                            <div class="bg-white p-6 rounded-2xl shadow-sm border border-brand-ink/5">
                                <h4 class="font-bold text-brand-ink text-sm mb-2">Hand, Foot, and Mouth (HFMD)</h4>
                                <p class="text-xs text-brand-ink/60 leading-relaxed">
                                    <strong>Watch for:</strong> Fever, sore throat, and small red spots/blisters on hands, feet, and inside the mouth.
                                </p>
                            </div>
                            <div class="bg-white p-6 rounded-2xl shadow-sm border border-brand-ink/5">
                                <h4 class="font-bold text-brand-ink text-sm mb-2">Stomach Flu (Norovirus)</h4>
                                <p class="text-xs text-brand-ink/60 leading-relaxed">
                                    <strong>Watch for:</strong> Sudden onset of nausea, vomiting, and diarrhea. Requires immediate exclusion.
                                </p>
                            </div>
                        </div>
                        <a href="#" class="inline-block mt-8 text-xs font-bold text-kidazzle-red uppercase tracking-widest hover:underline">Full Symptom Guide &rarr;</a>
                    </div>

                    <!-- Protocols -->
                    <div class="bg-brand-cream/50 rounded-[3rem] p-10 border border-brand-ink/5">
                        <h3 class="font-bold text-xl text-brand-ink mb-6 flex items-center gap-3">
                            <i class="fa-solid fa-shield-virus text-kidazzle-green"></i> Medical Protocols
                        </h3>
                        <div class="space-y-4">
                            <div class="flex gap-4">
                                <i class="fa-solid fa-circle-check text-kidazzle-green mt-1"></i>
                                <div>
                                    <h4 class="font-bold text-sm text-brand-ink">Fever Policy</h4>
                                    <p class="text-xs text-brand-ink/60">Fever over 100.4°F requires 24-hour exclusion without medication.</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <i class="fa-solid fa-circle-check text-kidazzle-green mt-1"></i>
                                <div>
                                    <h4 class="font-bold text-sm text-brand-ink">Medication</h4>
                                    <p class="text-xs text-brand-ink/60">Only prescription meds in original packaging with signed forms.</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <i class="fa-solid fa-circle-check text-kidazzle-green mt-1"></i>
                                <div>
                                    <h4 class="font-bold text-sm text-brand-ink">Hand Washing</h4>
                                    <p class="text-xs text-brand-ink/60">Minimum 20 seconds before meals and after diaper transitions.</p>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="inline-block mt-8 text-xs font-bold text-kidazzle-green uppercase tracking-widest hover:underline">Access Protocol Manual &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
