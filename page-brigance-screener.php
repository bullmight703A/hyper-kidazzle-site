<?php
/**
 * Template Name: Summit Brigance Screener
 *
 * Summit-only teacher screener for the Brigance individualization pilot.
 */

get_header();
?>

<main class="summit-brigance-page">
    <style>
        .summit-brigance-page {
            --navy: #023047;
            --gold: #fb8500;
            --line: #d9e2ec;
            --muted: #5c6675;
            --soft: #f7fafc;
            background: #f8fafc;
            color: #162033;
            font-family: Outfit, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            min-height: 100vh;
            padding: 48px 18px;
        }
        .summit-shell { max-width: 1180px; margin: 0 auto; }
        .summit-hero {
            display: grid;
            grid-template-columns: minmax(0, 1fr) 360px;
            gap: 24px;
            align-items: stretch;
            margin-bottom: 22px;
        }
        .summit-panel {
            background: #fff;
            border: 1px solid var(--line);
            border-radius: 8px;
            box-shadow: 0 18px 45px rgba(15, 23, 42, 0.08);
        }
        .summit-copy { padding: 34px; }
        .summit-eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            border: 1px solid rgba(251, 133, 0, 0.35);
            color: var(--navy);
            background: #fff7ed;
            font-size: 12px;
            font-weight: 800;
            letter-spacing: .08em;
            text-transform: uppercase;
            padding: 8px 10px;
            border-radius: 999px;
            margin-bottom: 18px;
        }
        .summit-copy h1 {
            color: var(--navy);
            font-size: clamp(32px, 5vw, 62px);
            line-height: .96;
            letter-spacing: 0;
            margin: 0 0 18px;
            max-width: 760px;
        }
        .summit-copy p { color: var(--muted); font-size: 18px; line-height: 1.55; max-width: 760px; margin: 0; }
        .summit-status { padding: 24px; background: var(--navy); color: #fff; display: flex; flex-direction: column; justify-content: space-between; }
        .summit-status h2 { margin: 0 0 10px; color: #fff; font-size: 24px; }
        .summit-status p { color: rgba(255,255,255,.76); line-height: 1.5; margin: 0; }
        .summit-pill-row { display: flex; flex-wrap: wrap; gap: 8px; margin-top: 22px; }
        .summit-pill { border: 1px solid rgba(255,255,255,.24); color: #fff; border-radius: 999px; padding: 8px 10px; font-size: 12px; font-weight: 800; }
        .summit-grid { display: grid; grid-template-columns: 360px minmax(0, 1fr); gap: 22px; align-items: start; }
        .summit-form-card { padding: 24px; }
        .summit-form-card h2, .summit-results h2 { color: var(--navy); margin: 0 0 16px; font-size: 24px; }
        .summit-field { margin-bottom: 16px; }
        .summit-field label { display: block; font-weight: 800; color: var(--navy); margin-bottom: 7px; font-size: 14px; }
        .summit-field input, .summit-field select, .summit-field textarea {
            width: 100%;
            border: 1px solid #cbd5e1;
            border-radius: 6px;
            padding: 12px;
            font: inherit;
            background: #fff;
            color: #172033;
        }
        .summit-field small { display: block; color: var(--muted); margin-top: 6px; line-height: 1.35; }
        .summit-question-card { padding: 22px; margin-bottom: 14px; border: 1px solid var(--line); border-radius: 8px; background: #fff; }
        .summit-question-card h3 { margin: 0 0 12px; color: var(--navy); font-size: 18px; }
        .summit-question { display: grid; grid-template-columns: minmax(0, 1fr) 360px; gap: 14px; align-items: center; border-top: 1px solid #edf2f7; padding: 14px 0; }
        .summit-question:first-of-type { border-top: 0; }
        .summit-question strong { color: #1f2937; }
        .summit-radio-group { display: grid; grid-template-columns: repeat(3, 1fr); gap: 8px; }
        .summit-radio-group label { border: 1px solid #cbd5e1; border-radius: 6px; padding: 9px; font-size: 12px; font-weight: 800; color: var(--muted); display: flex; align-items: center; gap: 6px; justify-content: center; }
        .summit-actions { display: flex; gap: 12px; align-items: center; margin-top: 18px; flex-wrap: wrap; }
        .summit-button {
            border: 0;
            border-radius: 6px;
            background: var(--gold);
            color: #111827;
            font-weight: 900;
            padding: 14px 18px;
            cursor: pointer;
        }
        .summit-button.secondary { background: #fff; color: var(--navy); border: 1px solid var(--line); }
        .summit-button:disabled { opacity: .55; cursor: not-allowed; }
        .summit-results { padding: 24px; }
        .summit-empty { border: 1px dashed #cbd5e1; border-radius: 8px; padding: 22px; color: var(--muted); background: var(--soft); }
        .summit-alert { border-radius: 6px; padding: 12px; font-weight: 750; line-height: 1.4; display: none; }
        .summit-alert.error { display: block; background: #fef2f2; color: #991b1b; border: 1px solid #fecaca; }
        .summit-alert.success { display: block; background: #ecfdf5; color: #065f46; border: 1px solid #a7f3d0; }
        .summit-focus-list { display: grid; gap: 10px; }
        .summit-focus-item { border: 1px solid var(--line); border-radius: 8px; padding: 14px; background: #fff; }
        .summit-focus-item strong { color: var(--navy); display: block; margin-bottom: 5px; }
        .summit-json { max-height: 280px; overflow: auto; background: #0f172a; color: #e2e8f0; padding: 14px; border-radius: 8px; font-size: 12px; line-height: 1.45; }
        @media (max-width: 900px) {
            .summit-hero, .summit-grid, .summit-question { grid-template-columns: 1fr; }
            .summit-radio-group { grid-template-columns: 1fr; }
            .summit-copy, .summit-status, .summit-form-card, .summit-results { padding: 20px; }
        }
    </style>

    <div class="summit-shell">
        <section class="summit-hero">
            <div class="summit-panel summit-copy">
                <div class="summit-eyebrow">Summit Pilot Only</div>
                <h1>Brigance classroom individualization screener</h1>
                <p>Use this 3-minute teacher screen to capture where a Summit child is showing mastery, emerging skill, or needs support. Submissions are locked to Summit during the testing phase and are shaped for weekly lesson-plan enrichment.</p>
            </div>
            <aside class="summit-panel summit-status">
                <div>
                    <h2>Testing guard active</h2>
                    <p>Only `location_id: summit` submissions are accepted. Other locations remain on standard static curriculum until the Summit pilot is verified.</p>
                </div>
                <div class="summit-pill-row">
                    <span class="summit-pill">Summit Infant</span>
                    <span class="summit-pill">Toddler</span>
                    <span class="summit-pill">2s</span>
                    <span class="summit-pill">3s</span>
                    <span class="summit-pill">Pre-K</span>
                </div>
            </aside>
        </section>

        <section class="summit-grid">
            <form class="summit-panel summit-form-card" id="summit-brigance-form">
                <h2>Assessment Setup</h2>
                <div class="summit-alert" id="summit-form-message"></div>

                <div class="summit-field">
                    <label for="pilot_access_code">Pilot Access Code</label>
                    <input id="pilot_access_code" name="pilot_access_code" type="password" autocomplete="off">
                    <small>Required unless the teacher is already logged into WordPress with staff access.</small>
                </div>

                <div class="summit-field">
                    <label for="location_id">Location</label>
                    <select id="location_id" name="location_id">
                        <option value="summit">KIDazzle Summit Location</option>
                    </select>
                </div>

                <div class="summit-field">
                    <label for="classroom">Classroom</label>
                    <select id="classroom" name="classroom" required>
                        <option value="summit_infant">Summit Infant</option>
                        <option value="summit_toddler_13_24m">Summit Toddler (13-24m)</option>
                        <option value="summit_2_year_old">Summit 2-Year-Old</option>
                        <option value="summit_3_year_old">Summit 3-Year-Old</option>
                        <option value="summit_pre_k_4yo">Summit Pre-K (4yo)</option>
                    </select>
                </div>

                <div class="summit-field">
                    <label for="age_group">Age Group</label>
                    <select id="age_group" name="age_group" required></select>
                </div>

                <div class="summit-field">
                    <label for="teacher_name">Teacher Name</label>
                    <input id="teacher_name" name="teacher_name" type="text" required>
                </div>

                <div class="summit-field">
                    <label for="child_first_name">Child First Name</label>
                    <input id="child_first_name" name="child_first_name" type="text" required>
                </div>

                <div class="summit-field">
                    <label for="child_last_name">Child Last Name</label>
                    <input id="child_last_name" name="child_last_name" type="text" required>
                </div>

                <div class="summit-field">
                    <label for="child_identifier">Child ID / Roster Note</label>
                    <input id="child_identifier" name="child_identifier" type="text">
                </div>

                <div class="summit-field">
                    <label for="assessment_date">Assessment Date</label>
                    <input id="assessment_date" name="assessment_date" type="date" required>
                </div>

                <div class="summit-field">
                    <label for="theme">Weekly Theme</label>
                    <input id="theme" name="theme" type="text" value="Teacher-selected weekly theme">
                </div>
            </form>

            <div>
                <div class="summit-panel summit-form-card">
                    <h2>Developmental Screen</h2>
                    <div id="summit-question-root"></div>
                    <div class="summit-actions">
                        <button class="summit-button" id="summit-submit" type="button">Submit Summit Assessment</button>
                        <button class="summit-button secondary" id="summit-reset" type="button">Reset</button>
                    </div>
                </div>

                <div class="summit-panel summit-results" style="margin-top:22px;">
                    <h2>Lesson Plan Output</h2>
                    <div id="summit-results">
                        <div class="summit-empty">Submit an assessment to generate the Summit classroom focus areas and lesson-plan payload.</div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script>
    (function () {
        const ACTIVE_TESTING_LOCATION = "summit";
        const endpoint = "<?php echo esc_url_raw(rest_url('kidazzle/v1/brigance-summit-assessment')); ?>";
        const classroomLabels = {
            summit_infant: "Summit Infant",
            summit_toddler_13_24m: "Summit Toddler (13-24m)",
            summit_2_year_old: "Summit 2-Year-Old",
            summit_3_year_old: "Summit 3-Year-Old",
            summit_pre_k_4yo: "Summit Pre-K (4yo)"
        };
        const classroomAgeMap = {
            summit_infant: "Infant",
            summit_toddler_13_24m: "Toddler",
            summit_2_year_old: "2-Year-Old",
            summit_3_year_old: "3-Year-Old",
            summit_pre_k_4yo: "Pre-K 4"
        };
        const domains = ["Physical / Motor", "Language & Communication", "Cognitive & Literacy", "Self-Help & Adaptive", "Social-Emotional"];
        const itemBank = {
            "Infant": [
                ["Physical / Motor", "Tummy time head lift or rolling attempt", "Sits with support or reaches toward toy"],
                ["Language & Communication", "Responds to familiar voices", "Coos, babbles, or vocalizes responsively"],
                ["Cognitive & Literacy", "Tracks moving objects", "Explores toys with hands or mouth"],
                ["Self-Help & Adaptive", "Participates in feeding routine", "Shows self-soothing behavior"],
                ["Social-Emotional", "Smiles responsively", "Shows preference for familiar caregiver"]
            ],
            "Toddler": [
                ["Physical / Motor", "Walks independently", "Stacks 3-4 blocks or climbs with assistance"],
                ["Language & Communication", "Uses single words functionally", "Follows a 1-step direction"],
                ["Cognitive & Literacy", "Attempts shape sorting", "Imitates simple household gestures"],
                ["Self-Help & Adaptive", "Uses spoon or cup with support", "Participates in hand washing"],
                ["Social-Emotional", "Waves bye-bye or greets familiar adult", "Engages in parallel play"]
            ],
            "2-Year-Old": [
                ["Physical / Motor", "Jumps with both feet", "Threads large beads or uses crayon"],
                ["Language & Communication", "Uses 2-3 word phrases", "Names common body parts"],
                ["Cognitive & Literacy", "Matches identical objects", "Recognizes primary colors"],
                ["Self-Help & Adaptive", "Assists with hand washing", "Participates in dressing routines"],
                ["Social-Emotional", "Uses words for basic feelings", "Practices basic turn-taking"]
            ],
            "3-Year-Old": [
                ["Physical / Motor", "Stands on one foot briefly", "Uses child scissors with support"],
                ["Language & Communication", "Uses 4-5 word sentences", "Understands in, on, and under"],
                ["Cognitive & Literacy", "Counts 1-5 objects", "Completes simple AB pattern"],
                ["Self-Help & Adaptive", "Pulls up pants or manages simple clothing", "Completes classroom job with reminder"],
                ["Social-Emotional", "Identifies basic feelings", "Participates in cooperative center play"]
            ],
            "Pre-K 4": [
                ["Physical / Motor", "Hops on one foot", "Uses tripod pencil grip or cuts straight line"],
                ["Language & Communication", "Retells simple story sequence", "Recognizes 10 or more letters"],
                ["Cognitive & Literacy", "Counts 10 or more objects", "Classifies by shape, color, or size"],
                ["Self-Help & Adaptive", "Completes bathroom routine independently", "Manages materials with limited support"],
                ["Social-Emotional", "Solves peer conflict with words", "Participates in collaborative group work"]
            ]
        };

        const form = document.getElementById("summit-brigance-form");
        const ageSelect = document.getElementById("age_group");
        const classroomSelect = document.getElementById("classroom");
        const questionRoot = document.getElementById("summit-question-root");
        const message = document.getElementById("summit-form-message");
        const results = document.getElementById("summit-results");
        const submitButton = document.getElementById("summit-submit");

        function populateAges() {
            Object.keys(itemBank).forEach(age => {
                const option = document.createElement("option");
                option.value = age;
                option.textContent = age;
                ageSelect.appendChild(option);
            });
        }

        function syncAgeToClassroom() {
            ageSelect.value = classroomAgeMap[classroomSelect.value] || "Pre-K 4";
            renderQuestions();
        }

        function renderQuestions() {
            const rows = itemBank[ageSelect.value] || itemBank["Pre-K 4"];
            questionRoot.innerHTML = "";

            domains.forEach((domain, domainIndex) => {
                const card = document.createElement("section");
                card.className = "summit-question-card";
                card.innerHTML = "<h3>" + domain + "</h3>";

                rows.filter(row => row[0] === domain).forEach((row, rowIndex) => {
                    row.slice(1).forEach((label, itemIndex) => {
                        const itemId = "q_" + domainIndex + "_" + rowIndex + "_" + itemIndex;
                        const question = document.createElement("div");
                        question.className = "summit-question";
                        question.innerHTML = `
                            <strong>${label}</strong>
                            <div class="summit-radio-group" role="radiogroup" aria-label="${label}">
                                <label><input type="radio" name="${itemId}" value="mastery" data-domain="${domain}" data-label="${label}" required> Mastery</label>
                                <label><input type="radio" name="${itemId}" value="emerging" data-domain="${domain}" data-label="${label}"> Emerging</label>
                                <label><input type="radio" name="${itemId}" value="needs_support" data-domain="${domain}" data-label="${label}"> Needs Support</label>
                            </div>
                        `;
                        card.appendChild(question);
                    });
                });

                questionRoot.appendChild(card);
            });
        }

        function setMessage(type, text) {
            message.className = "summit-alert " + type;
            message.textContent = text;
        }

        function collectResponses() {
            const responseGroups = Array.from(questionRoot.querySelectorAll(".summit-radio-group"));
            return responseGroups.map(group => {
                const checked = group.querySelector("input:checked");
                if (!checked) return null;
                return {
                    domain: checked.dataset.domain,
                    item_id: checked.name,
                    item_label: checked.dataset.label,
                    status: checked.value
                };
            });
        }

        function validateScreenerSubmission(payload) {
            if (payload.location_id !== ACTIVE_TESTING_LOCATION) {
                return {
                    status: "pilot_locked",
                    message: "Brigance AI Lesson Plan individualization is currently in Testing Phase for SUMMIT LOCATION ONLY."
                };
            }
            if (payload.responses.some(item => item === null)) {
                return { status: "incomplete", message: "Complete every rating before submitting." };
            }
            return { status: "ready" };
        }

        function renderResults(data) {
            const focus = data.summary.focus_areas || [];
            const focusHtml = focus.length
                ? `<div class="summit-focus-list">${focus.map(item => `
                    <div class="summit-focus-item">
                        <strong>${item.domain}: ${item.status}</strong>
                        <div>${item.recommended_activity}</div>
                    </div>
                `).join("")}</div>`
                : `<div class="summit-empty">No focus gaps flagged. This assessment is showing mastery across the selected screen.</div>`;

            results.innerHTML = `
                <div class="summit-alert success">Saved assessment #${data.assessment_id}. Summit lesson-plan payload generated.</div>
                <h3 style="color:#023047;margin:18px 0 10px;">Focus Areas</h3>
                ${focusHtml}
                <h3 style="color:#023047;margin:18px 0 10px;">Dispatcher Payload</h3>
                <pre class="summit-json">${JSON.stringify(data.lesson_plan_payload, null, 2)}</pre>
            `;
        }

        async function submitAssessment() {
            const formData = new FormData(form);
            const payload = Object.fromEntries(formData.entries());
            payload.location_id = ACTIVE_TESTING_LOCATION;
            payload.classroom_label = classroomLabels[payload.classroom];
            payload.responses = collectResponses();

            const validation = validateScreenerSubmission(payload);
            if (validation.status !== "ready") {
                setMessage("error", validation.message);
                return;
            }

            submitButton.disabled = true;
            submitButton.textContent = "Saving...";
            setMessage("success", "Submitting Summit pilot assessment...");

            try {
                const response = await fetch(endpoint, {
                    method: "POST",
                    headers: { "Content-Type": "application/json" },
                    body: JSON.stringify(payload)
                });
                const data = await response.json();

                if (!response.ok || !data.ok) {
                    throw new Error(data.message || "Assessment submission failed.");
                }

                setMessage("success", "Assessment saved for Summit pilot testing.");
                renderResults(data);
            } catch (error) {
                setMessage("error", error.message);
            } finally {
                submitButton.disabled = false;
                submitButton.textContent = "Submit Summit Assessment";
            }
        }

        populateAges();
        document.getElementById("assessment_date").valueAsDate = new Date();
        syncAgeToClassroom();
        classroomSelect.addEventListener("change", syncAgeToClassroom);
        ageSelect.addEventListener("change", renderQuestions);
        submitButton.addEventListener("click", submitAssessment);
        document.getElementById("summit-reset").addEventListener("click", () => {
            questionRoot.querySelectorAll("input[type=radio]").forEach(input => input.checked = false);
            results.innerHTML = '<div class="summit-empty">Submit an assessment to generate the Summit classroom focus areas and lesson-plan payload.</div>';
            message.className = "summit-alert";
            message.textContent = "";
        });
    })();
    </script>
</main>

<?php
get_footer();
