<?php
/**
 * Template Name: Digital Resources Parent Hub
 *
 * @package kidazzle_Excellence
 */

get_header();

$theme_uri = get_template_directory_uri();
$asset = function ($path) use ($theme_uri) {
    return esc_url($theme_uri . '/' . ltrim($path, '/'));
};

$resource_links = array(
    array('label' => 'KIDazzle Curriculum', 'url' => home_url('/curriculum/'), 'type' => 'KIDazzle'),
    array('label' => 'Programs by Age', 'url' => home_url('/programs/'), 'type' => 'KIDazzle'),
    array('label' => 'Parent Resources', 'url' => home_url('/parents/'), 'type' => 'KIDazzle'),
    array('label' => 'Find a Location', 'url' => home_url('/locations/'), 'type' => 'KIDazzle'),
    array('label' => 'Schedule a Tour', 'url' => home_url('/contact/'), 'type' => 'KIDazzle'),
    array('label' => 'Brigance Screenings', 'url' => home_url('/brigance/'), 'type' => 'KIDazzle'),
    array('label' => 'Environmental Rating Scales', 'url' => home_url('/ers/'), 'type' => 'KIDazzle'),
    array('label' => 'Parent Handbook', 'url' => $asset('assets/docs/parent-handbook.pdf'), 'type' => 'Download'),
    array('label' => 'NAEYC', 'url' => 'https://www.naeyc.org/', 'type' => 'Outside resource'),
    array('label' => 'Georgia DECAL', 'url' => 'https://www.decal.ga.gov/', 'type' => 'Outside resource'),
    array('label' => 'Georgia GELDS', 'url' => 'https://gelds.decal.ga.gov/', 'type' => 'Outside resource'),
    array('label' => 'Teaching Strategies', 'url' => 'https://teachingstrategies.com/', 'type' => 'Outside resource'),
    array('label' => 'ERS Institute Scales', 'url' => 'https://www.ersi.info/scales', 'type' => 'Outside resource'),
);

$age_guides = array(
    array(
        'id' => 'infants',
        'label' => 'Infants',
        'range' => '0-12 months',
        'image' => 'assets/images/multicultural_infants_cover_1772749039948.png',
        'focus' => 'Responsive care, safe routines, language exposure, tummy time, and early trust.',
        'questions' => array('How are feeding and naps tracked?', 'How do teachers talk and respond during care?', 'What does safe floor play look like?'),
    ),
    array(
        'id' => 'toddlers',
        'label' => 'Toddlers',
        'range' => '12-24 months',
        'image' => 'assets/images/toddlers_playing_blocks_1772748809728.png',
        'focus' => 'Movement, naming objects, beginning routines, early independence, and parallel play.',
        'questions' => array('How do teachers support big feelings?', 'What table toys build focus?', 'How does play become language practice?'),
    ),
    array(
        'id' => 'twos',
        'label' => 'Two-Year-Olds',
        'range' => '2 years',
        'image' => 'assets/images/campus_blocks_area_1772749554264.png',
        'focus' => 'Choices, social coaching, table toys, art, dramatic play, and safe classroom routines.',
        'questions' => array('What does structured play mean?', 'How do teachers handle transitions?', 'How are children encouraged to use words?'),
    ),
    array(
        'id' => 'two-half',
        'label' => 'Two-and-a-Half',
        'range' => '2.5 years',
        'image' => 'assets/images/campus_indoor_play_1772749499195.png',
        'focus' => 'Longer attention, early problem solving, classroom jobs, and more independent routines.',
        'questions' => array('What does readiness look like before preschool?', 'How is toileting supported?', 'How do teachers document progress?'),
    ),
    array(
        'id' => 'threes',
        'label' => 'Three-Year-Olds',
        'range' => '3 years',
        'image' => 'assets/images/campus_art_studio_1772749582468.png',
        'focus' => 'Dramatic play, art, small-group learning, cooperative play, self-help skills, and curiosity.',
        'questions' => array('Why does dramatic play matter?', 'How does art support fine motor skills?', 'What should a parent ask at pickup?'),
    ),
    array(
        'id' => 'fours',
        'label' => 'Four-Year-Olds',
        'range' => '4 years',
        'image' => 'assets/images/pre_k_kids_reading_1772748826409.png',
        'focus' => 'School readiness, early literacy, math language, social confidence, and classroom responsibility.',
        'questions' => array('What is kindergarten readiness?', 'How do teachers build confidence?', 'How are letters and numbers introduced?'),
    ),
    array(
        'id' => 'summer-camp',
        'label' => 'Summer Camp',
        'range' => 'school age',
        'image' => 'assets/images/summer_camp_kids_1772748895785.png',
        'focus' => 'Projects, movement, friendship, field-style themes, creativity, and safe summer structure.',
        'questions' => array('How is summer different from the school year?', 'How much outdoor time is included?', 'How do projects build teamwork?'),
    ),
);

$brigance_cards = array(
    array('label' => 'Infant Brigance Snapshot', 'url' => $asset('assets/img/brigance/infant.png')),
    array('label' => 'Toddler Brigance Snapshot', 'url' => $asset('assets/img/brigance/toddler.png')),
    array('label' => 'Two-Year-Old Brigance Snapshot', 'url' => $asset('assets/img/brigance/2-years.png')),
    array('label' => 'Two-and-a-Half Brigance Snapshot', 'url' => $asset('assets/img/brigance/2-5-years.png')),
);

$lesson_query = new WP_Query(array(
    'post_type' => 'program',
    'posts_per_page' => 6,
    'meta_query' => array(
        array(
            'key' => 'program_lesson_plan_file',
            'value' => '',
            'compare' => '!=',
        ),
    ),
    'orderby' => 'modified',
    'order' => 'DESC',
));

$lesson_snapshots = array();
if ($lesson_query->have_posts()) {
    while ($lesson_query->have_posts()) {
        $lesson_query->the_post();
        $lesson_snapshots[] = array(
            'title' => get_the_title(),
            'date' => get_the_modified_date('M j, Y'),
            'url' => get_post_meta(get_the_ID(), 'program_lesson_plan_file', true),
            'program_url' => get_permalink(),
        );
    }
    wp_reset_postdata();
}

if (empty($lesson_snapshots)) {
    $lesson_snapshots = array(
        array('title' => 'Toddler Table Toys and Structured Play', 'date' => date_i18n('M j, Y'), 'url' => home_url('/programs/'), 'program_url' => home_url('/programs/')),
        array('title' => 'Three-Year-Old Dramatic Play and Art', 'date' => date_i18n('M j, Y'), 'url' => home_url('/curriculum/'), 'program_url' => home_url('/curriculum/')),
        array('title' => 'Four-Year-Old Language and Classroom Jobs', 'date' => date_i18n('M j, Y'), 'url' => home_url('/programs/'), 'program_url' => home_url('/programs/')),
    );
}
?>

<style>
    .digital-hub {
        --ink: #14213d;
        --muted: #496173;
        --line: #d9e4de;
        --cream: #fbfaf3;
        --mint: #dff5ec;
        --teal: #0f8f87;
        --coral: #f47b63;
        --sun: #f3b43f;
        background: #fbfaf3;
        color: var(--ink);
        font-family: Inter, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
    }

    .digital-hub a { color: inherit; }
    .digital-shell { max-width: 1180px; margin: 0 auto; padding: 0 20px; }
    .digital-band { padding: 72px 0; }
    .digital-hero {
        position: relative;
        min-height: 560px;
        display: flex;
        align-items: end;
        overflow: hidden;
        background: #10223a;
    }
    .digital-hero img {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        opacity: .72;
    }
    .digital-hero::after {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(180deg, rgba(16,34,58,.2), rgba(16,34,58,.9));
    }
    .digital-hero-content {
        position: relative;
        z-index: 2;
        max-width: 900px;
        padding: 0 20px 72px;
        color: white;
    }
    .digital-pill {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        border-radius: 999px;
        padding: 8px 12px;
        background: rgba(255,255,255,.88);
        color: #15304f;
        font-weight: 800;
        font-size: 12px;
        text-transform: uppercase;
        letter-spacing: .08em;
    }
    .digital-title {
        margin: 18px 0;
        font-family: "Playfair Display", Georgia, serif;
        font-size: clamp(42px, 7vw, 78px);
        line-height: .95;
        font-weight: 800;
        letter-spacing: 0;
    }
    .digital-copy {
        max-width: 760px;
        color: rgba(255,255,255,.9);
        font-size: 20px;
        line-height: 1.55;
    }
    .digital-actions { display: flex; flex-wrap: wrap; gap: 12px; margin-top: 28px; }
    .digital-button {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        min-height: 48px;
        border-radius: 12px;
        padding: 12px 18px;
        font-weight: 850;
        text-decoration: none;
        border: 1px solid transparent;
        background: var(--teal);
        color: white;
    }
    .digital-button.secondary { background: rgba(255,255,255,.12); border-color: rgba(255,255,255,.32); }
    .digital-section-head { display: flex; justify-content: space-between; align-items: end; gap: 24px; margin-bottom: 28px; }
    .digital-section-head h2 { font-size: clamp(30px, 4vw, 48px); font-family: "Playfair Display", Georgia, serif; line-height: 1; margin: 0; }
    .digital-section-head p { max-width: 620px; margin: 10px 0 0; color: var(--muted); line-height: 1.65; }
    .digital-grid { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 18px; }
    .digital-card {
        background: white;
        border: 1px solid var(--line);
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 18px 50px rgba(20,33,61,.06);
    }
    .digital-card.pad { padding: 22px; }
    .digital-card img { width: 100%; height: 190px; object-fit: cover; display: block; }
    .digital-card h3 { margin: 0 0 8px; font-size: 22px; line-height: 1.1; }
    .digital-card p { margin: 0; color: var(--muted); line-height: 1.55; }
    .digital-card-body { padding: 20px; }
    .digital-card-link { display: inline-flex; margin-top: 16px; font-weight: 850; color: var(--teal); text-decoration: none; }
    .digital-two { display: grid; grid-template-columns: 1.08fr .92fr; gap: 24px; align-items: start; }
    .digital-resource-list { display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 12px; }
    .digital-resource-list a {
        display: flex;
        justify-content: space-between;
        gap: 12px;
        padding: 14px;
        border: 1px solid var(--line);
        border-radius: 8px;
        background: white;
        text-decoration: none;
        font-weight: 800;
    }
    .digital-resource-list span { color: var(--muted); font-weight: 700; font-size: 12px; }
    .age-tabs { display: flex; flex-wrap: wrap; gap: 10px; margin-bottom: 20px; }
    .age-tabs a {
        text-decoration: none;
        border: 1px solid var(--line);
        border-radius: 999px;
        padding: 10px 14px;
        background: white;
        font-weight: 800;
        color: var(--ink);
    }
    .age-guide { scroll-margin-top: 130px; }
    .question-list { margin: 16px 0 0; padding-left: 18px; color: var(--muted); line-height: 1.6; }
    .lesson-list { display: grid; gap: 12px; }
    .lesson-item {
        display: grid;
        grid-template-columns: 1fr auto;
        gap: 16px;
        align-items: center;
        padding: 16px;
        border: 1px solid var(--line);
        border-radius: 8px;
        background: white;
    }
    .lesson-item small { display: block; color: var(--muted); font-weight: 750; margin-top: 4px; }
    .digital-chat {
        position: sticky;
        top: 120px;
        background: #10223a;
        color: white;
        border-radius: 8px;
        padding: 18px;
        border: 1px solid rgba(255,255,255,.12);
    }
    .chat-log {
        height: 270px;
        overflow: auto;
        display: flex;
        flex-direction: column;
        gap: 10px;
        margin: 14px 0;
        padding-right: 4px;
    }
    .chat-msg {
        border-radius: 12px;
        padding: 10px 12px;
        line-height: 1.45;
        font-size: 14px;
        background: rgba(255,255,255,.1);
    }
    .chat-msg.parent { align-self: end; background: var(--mint); color: var(--ink); }
    .chat-options { display: grid; gap: 8px; }
    .chat-options button {
        text-align: left;
        border: 1px solid rgba(255,255,255,.22);
        border-radius: 8px;
        background: rgba(255,255,255,.08);
        color: white;
        padding: 10px;
        font-weight: 750;
        cursor: pointer;
    }
    .brigance-grid { display: grid; grid-template-columns: repeat(4, minmax(0, 1fr)); gap: 14px; }
    .brigance-grid a { text-decoration: none; }
    .back-link { display: inline-flex; margin-top: 14px; color: var(--teal); font-weight: 850; text-decoration: none; }
    .digital-note { background: var(--mint); border: 1px solid #b7e3d2; border-radius: 8px; padding: 16px; color: #173c36; line-height: 1.55; }

    @media (max-width: 900px) {
        .digital-grid, .digital-two, .digital-resource-list, .brigance-grid { grid-template-columns: 1fr; }
        .digital-section-head { display: block; }
        .digital-hero { min-height: 620px; }
        .digital-chat { position: static; }
        .lesson-item { grid-template-columns: 1fr; }
    }
</style>

<div class="digital-hub">
    <section class="digital-hero" id="top">
        <img src="<?php echo $asset('assets/images/campus_classroom_1772749511378.png'); ?>" alt="KIDazzle classroom with early learning centers">
        <div class="digital-shell digital-hero-content">
            <span class="digital-pill">KIDazzle Parent Learning Library</span>
            <h1 class="digital-title">A friendly rabbit hole for smarter childcare questions.</h1>
            <p class="digital-copy">Start with one question, then follow the links into curriculum, classrooms, screenings, age guides, and lesson-plan snapshots. The goal is not pressure. The goal is helping parents understand what quality childcare can look like.</p>
            <div class="digital-actions">
                <a class="digital-button" href="#resource-map">Explore the resource map</a>
                <a class="digital-button secondary" href="#ask-kidazzle">Ask a childcare question</a>
            </div>
        </div>
    </section>

    <section class="digital-band" id="resource-map">
        <div class="digital-shell">
            <div class="digital-section-head">
                <div>
                    <h2>Start anywhere.</h2>
                    <p>Every card links parents deeper into a specific part of childcare quality: curriculum, age groups, screening, classroom environment, family policies, and outside education sources.</p>
                </div>
                <a class="digital-button" href="<?php echo esc_url(home_url('/contact/')); ?>">Talk with KIDazzle</a>
            </div>
            <div class="digital-grid">
                <article class="digital-card">
                    <img src="<?php echo $asset('assets/images/campus_reading_nook_1772749540264.png'); ?>" alt="Reading nook in a KIDazzle classroom">
                    <div class="digital-card-body">
                        <h3>Curriculum and lesson plans</h3>
                        <p>See how Teaching Strategies, classroom routines, teacher observations, and weekly plans turn play into learning.</p>
                        <a class="digital-card-link" href="#lesson-plans">View lesson snapshots</a>
                    </div>
                </article>
                <article class="digital-card">
                    <img src="<?php echo $asset('assets/images/campus_blocks_area_1772749554264.png'); ?>" alt="Blocks and learning materials for children">
                    <div class="digital-card-body">
                        <h3>Age-by-age parent guides</h3>
                        <p>Each age group has a focused page section with questions parents can ask before choosing a childcare program.</p>
                        <a class="digital-card-link" href="#age-guides">Pick an age group</a>
                    </div>
                </article>
                <article class="digital-card">
                    <img src="<?php echo $asset('assets/images/campus_outdoor_playground_1772749595504.png'); ?>" alt="Outdoor playground for gross motor development">
                    <div class="digital-card-body">
                        <h3>Quality and accreditation</h3>
                        <p>Learn the difference between a pretty room and an intentional learning environment with standards, routines, and safety practices.</p>
                        <a class="digital-card-link" href="#quality-links">Open quality links</a>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section class="digital-band" id="lesson-plans" style="background:#fff;">
        <div class="digital-shell digital-two">
            <div>
                <div class="digital-section-head">
                    <div>
                        <h2>Fresh lesson-plan snapshots.</h2>
                        <p>When a program record has a lesson-plan file attached, this section pulls the newest plans first. If no file is attached yet, parents still see example pathways until the teacher-plan pipeline publishes new files.</p>
                    </div>
                </div>
                <div class="lesson-list">
                    <?php foreach ($lesson_snapshots as $lesson): ?>
                        <article class="lesson-item">
                            <div>
                                <strong><?php echo esc_html($lesson['title']); ?></strong>
                                <small>Updated <?php echo esc_html($lesson['date']); ?></small>
                            </div>
                            <div class="digital-actions" style="margin:0;">
                                <a class="digital-button" href="<?php echo esc_url($lesson['url']); ?>">Open plan</a>
                                <a class="digital-button secondary" style="color:#14213d;border-color:#d9e4de;background:#fff;" href="<?php echo esc_url($lesson['program_url']); ?>">Program page</a>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
                <a class="back-link" href="#resource-map">Back to resource map</a>
            </div>
            <aside class="digital-note">
                <strong>Content loop:</strong> this is the clean path for rotating teacher lesson plans onto the public site. IRO can publish the safest completed plan by age group and date, without tying the resource to one location unless you choose to.
            </aside>
        </div>
    </section>

    <section class="digital-band" id="age-guides">
        <div class="digital-shell">
            <div class="digital-section-head">
                <div>
                    <h2>Age-group rabbit holes.</h2>
                    <p>Parents can pick the age of their child and get better questions to ask about the classroom, the teacher's role, and what learning looks like at that stage.</p>
                </div>
            </div>
            <nav class="age-tabs" aria-label="Age group resource links">
                <?php foreach ($age_guides as $guide): ?>
                    <a href="#age-<?php echo esc_attr($guide['id']); ?>"><?php echo esc_html($guide['label']); ?></a>
                <?php endforeach; ?>
            </nav>
            <div class="digital-grid">
                <?php foreach ($age_guides as $guide): ?>
                    <article class="digital-card age-guide" id="age-<?php echo esc_attr($guide['id']); ?>">
                        <img src="<?php echo $asset($guide['image']); ?>" alt="<?php echo esc_attr($guide['label']); ?> learning guide">
                        <div class="digital-card-body">
                            <span class="digital-pill" style="background:#dff5ec;"><?php echo esc_html($guide['range']); ?></span>
                            <h3 style="margin-top:14px;"><?php echo esc_html($guide['label']); ?></h3>
                            <p><?php echo esc_html($guide['focus']); ?></p>
                            <ul class="question-list">
                                <?php foreach ($guide['questions'] as $question): ?>
                                    <li><?php echo esc_html($question); ?></li>
                                <?php endforeach; ?>
                            </ul>
                            <a class="digital-card-link" href="#ask-kidazzle" data-chat-topic="<?php echo esc_attr($guide['label']); ?>">Ask about <?php echo esc_html($guide['label']); ?></a>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
            <a class="back-link" href="#resource-map">Back to resource map</a>
        </div>
    </section>

    <section class="digital-band" id="quality-links" style="background:#fff;">
        <div class="digital-shell digital-two">
            <div>
                <div class="digital-section-head">
                    <div>
                        <h2>Quality links and backlinks.</h2>
                        <p>These are the places a parent can use to keep learning. KIDazzle should be the helpful guide, while also pointing families to trusted outside sources.</p>
                    </div>
                </div>
                <div class="digital-resource-list">
                    <?php foreach ($resource_links as $link): ?>
                        <?php $is_external = strpos($link['url'], 'http') === 0 && strpos($link['url'], home_url()) !== 0; ?>
                        <a href="<?php echo esc_url($link['url']); ?>" <?php echo $is_external ? 'target="_blank" rel="noopener"' : ''; ?>>
                            <?php echo esc_html($link['label']); ?>
                            <span><?php echo esc_html($link['type']); ?></span>
                        </a>
                    <?php endforeach; ?>
                </div>
                <a class="back-link" href="#resource-map">Back to resource map</a>
            </div>
            <div class="digital-card pad">
                <h3>What parents should look for</h3>
                <p>A strong childcare program should be able to explain its curriculum, daily routines, teacher communication, health practices, classroom layout, developmental observation process, and how children practice independence through play.</p>
                <a class="digital-card-link" href="<?php echo esc_url(home_url('/curriculum/')); ?>">Read the curriculum page</a>
            </div>
        </div>
    </section>

    <section class="digital-band" id="brigance">
        <div class="digital-shell">
            <div class="digital-section-head">
                <div>
                    <h2>Developmental screening snapshots.</h2>
                    <p>The Brigance links now point directly to the available image assets, so parents are not left clicking into a dead path.</p>
                </div>
            </div>
            <div class="brigance-grid">
                <?php foreach ($brigance_cards as $card): ?>
                    <a class="digital-card pad" href="<?php echo esc_url($card['url']); ?>">
                        <h3><?php echo esc_html($card['label']); ?></h3>
                        <p>Open the screening snapshot image.</p>
                        <span class="digital-card-link">View image</span>
                    </a>
                <?php endforeach; ?>
            </div>
            <a class="back-link" href="#resource-map">Back to resource map</a>
        </div>
    </section>

    <section class="digital-band" id="ask-kidazzle" style="background:#fff;">
        <div class="digital-shell digital-two">
            <div>
                <div class="digital-section-head">
                    <div>
                        <h2>Ask KIDazzle.</h2>
                        <p>This quick guide answers common parent questions from the page content. The next step is to connect this same panel to the approved Ripple/KIDazzle knowledge base when you provide the shareable source.</p>
                    </div>
                </div>
                <div class="digital-card pad">
                    <h3>Good questions to ask any childcare provider</h3>
                    <p>How do teachers plan the week? How are children observed? What does play teach? What happens if my child is sick? How do families get updates? What standards shape the classroom?</p>
                    <a class="digital-card-link" href="<?php echo esc_url(home_url('/contact/')); ?>">Ask the center directly</a>
                </div>
            </div>
            <aside class="digital-chat" aria-label="KIDazzle parent question helper">
                <h3 style="margin:0;">KIDazzle Parent Guide</h3>
                <p style="margin:8px 0 0;color:rgba(255,255,255,.76);">Pick a question and follow the next link.</p>
                <div class="chat-log" id="kidazzle-parent-chat">
                    <div class="chat-msg">Hi. I can help you find the right KIDazzle resource. What do you want to learn first?</div>
                </div>
                <div class="chat-options">
                    <button type="button" data-answer="curriculum">What curriculum do you use?</button>
                    <button type="button" data-answer="lesson">Can I see lesson plans?</button>
                    <button type="button" data-answer="quality">How do I measure quality?</button>
                    <button type="button" data-answer="sick">What if my child gets sick?</button>
                    <button type="button" data-answer="age">Which age guide should I read?</button>
                </div>
            </aside>
        </div>
    </section>
</div>

<script>
    (function () {
        const log = document.getElementById('kidazzle-parent-chat');
        if (!log) return;

        const answers = {
            curriculum: 'KIDazzle uses a structured early learning approach connected to Teaching Strategies and classroom lesson planning. Start with the Curriculum page, then review the lesson-plan snapshots on this page.',
            lesson: 'Yes. This page pulls available lesson-plan files from program records when they are attached. Use the lesson-plan section to open the newest available snapshots.',
            quality: 'Look for routines, teacher communication, safe supervision, intentional classroom areas, observation notes, and clear developmental goals. The NAEYC, ERS, DECAL, and GELDS links are good places to keep learning.',
            sick: 'Start with the Parent Handbook and ask the center how symptoms, return-to-care, communication, and documentation are handled for your child.',
            age: 'Pick the age closest to your child: infants, toddlers, twos, two-and-a-half, threes, fours, or summer camp. Each section gives questions you can ask a provider.'
        };

        function addMessage(text, kind) {
            const msg = document.createElement('div');
            msg.className = 'chat-msg' + (kind === 'parent' ? ' parent' : '');
            msg.textContent = text;
            log.appendChild(msg);
            log.scrollTop = log.scrollHeight;
        }

        document.querySelectorAll('[data-answer]').forEach((button) => {
            button.addEventListener('click', () => {
                addMessage(button.textContent, 'parent');
                addMessage(answers[button.dataset.answer] || answers.quality, 'guide');
            });
        });

        document.querySelectorAll('[data-chat-topic]').forEach((link) => {
            link.addEventListener('click', () => {
                addMessage('Tell me about ' + link.dataset.chatTopic + '.', 'parent');
                addMessage('Open that age section and look at the focus statement plus the parent questions. Those are the best starting points for a center visit or pickup conversation.', 'guide');
            });
        });
    })();
</script>

<?php
get_footer();
