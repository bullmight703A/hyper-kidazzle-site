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
    array('label' => 'KIDazzle Curriculum', 'url' => home_url('/curriculum/'), 'type' => 'KIDazzle', 'summary' => 'See how classroom routines, play, observation, and weekly planning become intentional early learning.'),
    array('label' => 'Programs by Age', 'url' => home_url('/programs/'), 'type' => 'KIDazzle', 'summary' => 'Compare infant, toddler, preschool, Pre-K, and school-age pathways before choosing the best fit.'),
    array('label' => 'Parent Resources', 'url' => home_url('/parents/'), 'type' => 'KIDazzle', 'summary' => 'A family-facing resource area for policies, questions, updates, and parent support.'),
    array('label' => 'Find a Location', 'url' => home_url('/locations/'), 'type' => 'KIDazzle', 'summary' => 'Choose the center that best fits your commute, family schedule, and tour preference.'),
    array('label' => 'Schedule a Tour', 'url' => home_url('/contact/'), 'type' => 'KIDazzle', 'summary' => 'Connect with the KIDazzle team, ask questions, and request a visit with a center director.'),
    array('label' => 'Brigance Screenings', 'url' => home_url('/brigance/'), 'type' => 'KIDazzle', 'summary' => 'Learn how developmental screening snapshots help teachers and families notice growth over time.'),
    array('label' => 'Environmental Rating Scales', 'url' => home_url('/ers/'), 'type' => 'KIDazzle', 'summary' => 'Understand how classroom environment, routines, materials, interactions, and care practices shape quality.'),
    array('label' => 'Parent Handbook', 'url' => $asset('assets/docs/parent-handbook.pdf'), 'type' => 'Download', 'summary' => 'Review center policies for family communication, health, feeding, safety, and daily expectations.'),
    array('label' => 'NAEYC', 'url' => 'https://www.naeyc.org/resources/position-statements/dap/contents', 'type' => 'Outside resource', 'summary' => 'NAEYC explains developmentally appropriate practice: joyful, play-based, strengths-based learning for young children.'),
    array('label' => 'Georgia DECAL', 'url' => 'https://www.decal.ga.gov/CCS/RulesAndRegulations.aspx', 'type' => 'Outside resource', 'summary' => 'Georgia DECAL licenses and regulates child care programs. Parents can review current Child Care Learning Center rules here.'),
    array('label' => 'Georgia GELDS', 'url' => 'https://gelds.decal.ga.gov/', 'type' => 'Outside resource', 'summary' => 'GELDS gives Georgia early learning standards for birth through age five and connects classroom activities to development.'),
    array('label' => 'Teaching Strategies', 'url' => 'https://teachingstrategies.com/', 'type' => 'Outside resource', 'summary' => 'Teaching Strategies supports early childhood curriculum, assessment, and classroom observation practices.'),
    array('label' => 'ERS Institute Scales', 'url' => 'https://www.ersi.info/scales', 'type' => 'Outside resource', 'summary' => 'ERSI publishes the Environment Rating Scales, including ITERS-3 for infants/toddlers, ECERS-3 for preschool, and SACERS-U for school-age care.'),
);

$age_guides = array(
    array(
        'id' => 'infants',
        'label' => 'Infants',
        'range' => '0-12 months',
        'image' => 'assets/images/multicultural_infants_cover_1772749039948.png',
        'focus' => 'Responsive care, safe routines, language exposure, tummy time, and early trust.',
        'questions' => array('How are feeding and naps tracked?', 'How do teachers talk and respond during care?', 'What does safe floor play look like?'),
        'day' => array('Warm arrival and handoff', 'Parent feeding plan review', 'Labeled bottles, breast milk, or formula', 'Diapering and hygiene checks', 'Supervised tummy time and floor play', 'Books, songs, naming, and responsive talk', 'Safe sleep in an approved crib', 'Outdoor time when weather permits', 'Daily communication at pickup'),
        'look_for' => array('Teachers hold young infants during feedings and never prop bottles.', 'The room has calm routines, clean surfaces, and active supervision.', 'Families understand safe sleep, feeding, illness, and what to bring each day.'),
        'good_fit' => 'A strong fit for families who want warm infant care with structure, communication, safe sleep practices, developmental routines, and partnership with teachers.',
        'not_fit' => 'May not fit families looking for drop-in babysitting, private nanny-style care, or care that does not follow licensed group-care routines.',
    ),
    array(
        'id' => 'toddlers',
        'label' => 'Toddlers',
        'range' => '12-24 months',
        'image' => 'assets/images/toddlers_playing_blocks_1772748809728.png',
        'focus' => 'Movement, naming objects, beginning routines, early independence, and parallel play.',
        'questions' => array('How do teachers support big feelings?', 'What table toys build focus?', 'How does play become language practice?'),
        'day' => array('Arrival and predictable routines', 'Movement and climbing practice', 'Naming objects, songs, and simple books', 'Self-feeding and cup practice', 'Diapering or early toileting support', 'Parallel play and gentle social coaching', 'Outdoor play', 'Rest time and family updates'),
        'look_for' => array('Teachers narrate the day and give children words for needs and feelings.', 'Activities invite movement without losing safety and supervision.', 'The classroom supports independence while keeping routines predictable.'),
        'good_fit' => 'A strong fit for families who want active learning, language growth, and patient support as children begin doing more for themselves.',
        'not_fit' => 'May not fit families expecting a quiet academic classroom or a program without messy, active toddler learning.',
    ),
    array(
        'id' => 'twos',
        'label' => 'Two-Year-Olds',
        'range' => '2 years',
        'image' => 'assets/images/campus_blocks_area_1772749554264.png',
        'focus' => 'Choices, social coaching, table toys, art, dramatic play, and safe classroom routines.',
        'questions' => array('What does structured play mean?', 'How do teachers handle transitions?', 'How are children encouraged to use words?'),
        'day' => array('Greeting and classroom jobs', 'Table toys and fine-motor play', 'Art and sensory work', 'Dramatic play', 'Outdoor gross-motor time', 'Meals and self-help practice', 'Rest and quiet activities', 'Pickup notes'),
        'look_for' => array('Teachers coach children through sharing, waiting, and transitions.', 'The room offers real choices without becoming unstructured.', 'Language, art, and movement are part of the daily plan.'),
        'good_fit' => 'A strong fit for families who want their two-year-old to practice independence, words, routines, and safe peer play.',
        'not_fit' => 'May not fit families expecting children to sit for long academic lessons or move through the day without transition support.',
    ),
    array(
        'id' => 'two-half',
        'label' => 'Two-and-a-Half',
        'range' => '2.5 years',
        'image' => 'assets/images/campus_indoor_play_1772749499195.png',
        'focus' => 'Longer attention, early problem solving, classroom jobs, and more independent routines.',
        'questions' => array('What does readiness look like before preschool?', 'How is toileting supported?', 'How do teachers document progress?'),
        'day' => array('Arrival conversation', 'Problem-solving toys', 'Early preschool routines', 'Toileting partnership', 'Small-group work', 'Art, music, and movement', 'Outdoor play', 'Rest or quiet reset'),
        'look_for' => array('Teachers understand that readiness can grow before a child changes classrooms.', 'Toileting support is respectful and coordinated with parents.', 'Children get more responsibility without losing warmth.'),
        'good_fit' => 'A strong fit for families whose child is growing beyond toddler routines but still needs patience, repetition, and emotional support.',
        'not_fit' => 'May not fit families expecting every child to advance on the same schedule regardless of development or classroom readiness.',
    ),
    array(
        'id' => 'threes',
        'label' => 'Three-Year-Olds',
        'range' => '3 years',
        'image' => 'assets/images/campus_art_studio_1772749582468.png',
        'focus' => 'Dramatic play, art, small-group learning, cooperative play, self-help skills, and curiosity.',
        'questions' => array('Why does dramatic play matter?', 'How does art support fine motor skills?', 'What should a parent ask at pickup?'),
        'day' => array('Morning meeting', 'Centers and dramatic play', 'Small-group teacher activity', 'Art and fine-motor work', 'Story, music, and vocabulary', 'Outdoor play', 'Meals and self-help routines', 'Rest or quiet activities'),
        'look_for' => array('Play has a purpose: language, friendship, problem solving, and imagination.', 'Teachers ask questions and extend children\'s ideas.', 'Families hear what their child practiced, not only whether the day was good.'),
        'good_fit' => 'A strong fit for families who value curiosity, social confidence, creative work, and developmentally appropriate preschool learning.',
        'not_fit' => 'May not fit families looking for worksheet-heavy preschool or a program that treats play as separate from learning.',
    ),
    array(
        'id' => 'fours',
        'label' => 'Four-Year-Olds',
        'range' => '4 years',
        'image' => 'assets/images/pre_k_kids_reading_1772748826409.png',
        'focus' => 'School readiness, early literacy, math language, social confidence, and classroom responsibility.',
        'questions' => array('What is kindergarten readiness?', 'How do teachers build confidence?', 'How are letters and numbers introduced?'),
        'day' => array('Morning meeting and classroom leadership', 'Literacy-rich centers', 'Math language and sorting', 'Writing, drawing, and fine-motor work', 'Science and discovery', 'Outdoor play', 'Social problem solving', 'Georgia Pre-K readiness conversations'),
        'look_for' => array('Readiness includes confidence, communication, self-help, and relationships.', 'Letters and numbers are introduced through meaningful activities.', 'Children practice responsibility without losing joy.'),
        'good_fit' => 'A strong fit for families preparing for kindergarten, Georgia Lottery Pre-K, or a richer final preschool year.',
        'not_fit' => 'May not fit families who want kindergarten pushed down into preschool instead of balanced readiness.',
    ),
    array(
        'id' => 'summer-camp',
        'label' => 'Summer Camp',
        'range' => 'school age',
        'image' => 'assets/images/summer_camp_kids_1772748895785.png',
        'focus' => 'Projects, movement, friendship, field-style themes, creativity, and safe summer structure.',
        'questions' => array('How is summer different from the school year?', 'How much outdoor time is included?', 'How do projects build teamwork?'),
        'day' => array('Group welcome', 'Theme-based projects', 'Outdoor and movement blocks', 'Creative challenges', 'Friendship and teamwork', 'Meals and hydration', 'Quiet reset', 'End-of-day recap'),
        'look_for' => array('Summer has freedom, but still needs supervision, routines, and safe transitions.', 'Projects let children create, move, talk, and collaborate.', 'Families know what supplies, trips, or theme days are coming.'),
        'good_fit' => 'A strong fit for families who want school-age care with structure, movement, creativity, and safe summer energy.',
        'not_fit' => 'May not fit families looking for unstructured drop-off recreation with no planned activities or communication.',
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
    button.digital-card-link {
        appearance: none;
        border: 0;
        background: transparent;
        padding: 0;
        cursor: pointer;
        font: inherit;
        text-align: left;
    }
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
    .deep-guide-grid { display: grid; gap: 18px; margin-top: 28px; }
    .deep-guide {
        display: grid;
        grid-template-columns: .78fr 1.22fr;
        gap: 22px;
        background: white;
        border: 1px solid var(--line);
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 18px 50px rgba(20,33,61,.06);
    }
    .deep-guide img { width: 100%; height: 100%; min-height: 320px; object-fit: cover; }
    .deep-guide-content { padding: 24px; }
    .guide-columns { display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 18px; margin-top: 18px; }
    .guide-mini {
        border: 1px solid var(--line);
        border-radius: 8px;
        padding: 16px;
        background: #fbfaf3;
    }
    .guide-mini h4, .survey-card h4 { margin: 0 0 10px; font-size: 17px; }
    .guide-mini ul { margin: 0; padding-left: 18px; color: var(--muted); line-height: 1.55; }
    .fit-row { display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 12px; margin-top: 16px; }
    .fit-box { border-radius: 8px; padding: 14px; line-height: 1.5; background: #e9f8f2; border: 1px solid #b7e3d2; }
    .fit-box.alt { background: #fff6e2; border-color: #f4d598; }
    .survey-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 18px; align-items: start; }
    .survey-card {
        background: white;
        border: 1px solid var(--line);
        border-radius: 8px;
        padding: 18px;
    }
    .survey-card label { display: block; font-weight: 800; margin: 14px 0 8px; }
    .survey-card select, .survey-card input {
        width: 100%;
        min-height: 44px;
        border: 1px solid var(--line);
        border-radius: 8px;
        padding: 10px 12px;
        color: var(--ink);
        background: #fff;
    }
    .survey-result { min-height: 180px; }
    .resource-row { display: grid; grid-template-columns: 1fr auto; gap: 10px; align-items: stretch; }
    .resource-info {
        border: 1px solid var(--line);
        border-radius: 8px;
        background: #fbfaf3;
        color: var(--teal);
        font-weight: 900;
        width: 48px;
        cursor: pointer;
    }
    .modal-backdrop {
        position: fixed;
        inset: 0;
        z-index: 9999;
        display: none;
        align-items: center;
        justify-content: center;
        background: rgba(16,34,58,.68);
        padding: 20px;
    }
    .modal-backdrop.is-open { display: flex; }
    .resource-modal {
        width: min(560px, 100%);
        background: white;
        color: var(--ink);
        border-radius: 8px;
        padding: 24px;
        box-shadow: 0 24px 70px rgba(0,0,0,.25);
    }
    .resource-modal h3 { margin: 0 0 10px; font-size: 26px; }
    .resource-modal p { color: var(--muted); line-height: 1.65; }
    .location-fit-grid { display: grid; grid-template-columns: repeat(7, minmax(0, 1fr)); gap: 10px; margin-top: 18px; }
    .location-chip {
        min-height: 92px;
        border: 1px solid var(--line);
        border-radius: 8px;
        background: white;
        padding: 12px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        box-shadow: 0 12px 28px rgba(20,33,61,.05);
    }
    .location-chip strong { display: block; line-height: 1.1; }
    .location-chip span { color: var(--muted); font-size: 13px; line-height: 1.25; }
    .age-modal {
        position: fixed;
        inset: 0;
        z-index: 10000;
        display: none;
        align-items: center;
        justify-content: center;
        padding: 22px;
    }
    .age-modal[aria-hidden="false"] { display: flex; }
    .age-modal-backdrop {
        position: absolute;
        inset: 0;
        background: rgba(16,34,58,.72);
        backdrop-filter: blur(8px);
    }
    .age-modal-panel {
        position: relative;
        width: min(980px, 100%);
        height: min(740px, calc(100vh - 44px));
        border-radius: 12px;
        overflow: hidden;
        background: white;
        box-shadow: 0 28px 80px rgba(0,0,0,.28);
        border: 1px solid rgba(255,255,255,.4);
    }
    .age-modal-head {
        height: 58px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 16px;
        padding: 0 16px 0 20px;
        background: #10223a;
        color: white;
    }
    .age-modal-close {
        border: 1px solid rgba(255,255,255,.35);
        background: rgba(255,255,255,.12);
        color: white;
        border-radius: 999px;
        min-width: 38px;
        height: 38px;
        font-size: 22px;
        line-height: 1;
        cursor: pointer;
    }
    .age-modal-frame {
        width: 100%;
        height: calc(100% - 58px);
        border: 0;
        background: #fbfaf3;
    }

    @media (max-width: 900px) {
        .digital-grid, .digital-two, .digital-resource-list, .brigance-grid, .deep-guide, .guide-columns, .fit-row, .survey-grid, .location-fit-grid { grid-template-columns: 1fr; }
        .digital-section-head { display: block; }
        .digital-hero { min-height: 620px; }
        .digital-chat { position: static; }
        .lesson-item { grid-template-columns: 1fr; }
        .deep-guide img { height: 260px; min-height: 0; }
        .age-modal { padding: 10px; }
        .age-modal-panel { height: calc(100vh - 20px); }
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
                <a class="digital-button secondary" href="#parent-fit">Take the parent fit survey</a>
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
                            <button class="digital-card-link" type="button" data-resource-topic="<?php echo esc_attr($guide['id']); ?>">Ask about <?php echo esc_html($guide['label']); ?></button>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
            <div class="age-modal" id="age-resource-modal" aria-hidden="true" role="dialog" aria-modal="true" aria-labelledby="age-resource-title">
                <div class="age-modal-backdrop" data-close-age-modal></div>
                <div class="age-modal-panel">
                    <div class="age-modal-head">
                        <strong id="age-resource-title">KIDazzle age guide</strong>
                        <button class="age-modal-close" type="button" data-close-age-modal aria-label="Close age guide">&times;</button>
                    </div>
                    <iframe class="age-modal-frame" id="age-resource-frame" title="KIDazzle age guide details"></iframe>
                </div>
            </div>
            <div hidden>
                <?php foreach ($age_guides as $guide): ?>
                    <template id="resource-template-<?php echo esc_attr($guide['id']); ?>">
                        <article class="popup-guide">
                            <span class="digital-pill" style="background:#dff5ec;"><?php echo esc_html($guide['range']); ?></span>
                            <h1><?php echo esc_html($guide['label']); ?> parent guide</h1>
                            <p class="lead"><?php echo esc_html($guide['focus']); ?></p>
                            <div class="guide-columns">
                                <div class="guide-mini">
                                    <h4>What the day can include</h4>
                                    <ul>
                                        <?php foreach ($guide['day'] as $item): ?>
                                            <li><?php echo esc_html($item); ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                                <div class="guide-mini">
                                    <h4>What to look for on a tour</h4>
                                    <ul>
                                        <?php foreach ($guide['look_for'] as $item): ?>
                                            <li><?php echo esc_html($item); ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="fit-row">
                                <div class="fit-box"><strong>Likely a good fit:</strong> <?php echo esc_html($guide['good_fit']); ?></div>
                                <div class="fit-box alt"><strong>May not be the right fit:</strong> <?php echo esc_html($guide['not_fit']); ?></div>
                            </div>
                            <div class="digital-actions">
                                <a class="digital-button" href="<?php echo esc_url(home_url('/contact/')); ?>" target="_parent">Schedule a tour</a>
                                <a class="digital-button secondary" href="<?php echo esc_url(home_url('/curriculum/')); ?>" target="_parent">Read curriculum</a>
                            </div>
                        </article>
                    </template>
                <?php endforeach; ?>
            </div>
            <a class="back-link" href="#resource-map">Back to resource map</a>
        </div>
    </section>

    <section class="digital-band" id="parent-fit" style="background:#fff;">
        <div class="digital-shell">
            <div class="digital-section-head">
                <div>
                    <h2>Find your childcare fit.</h2>
                    <p>This short survey helps parents decide whether to keep reading, ask a director, request tuition information, or schedule a tour. It also helps families self-select when a different care model may be better.</p>
                </div>
            </div>
            <div class="survey-grid">
                <form class="survey-card" id="kidazzle-fit-survey">
                    <h4>Parent fit survey</h4>
                    <label for="fit-language">Preferred language</label>
                    <select id="fit-language" name="language">
                        <option value="English">English</option>
                        <option value="Spanish">Spanish</option>
                    </select>
                    <label for="fit-age">Child age</label>
                    <select id="fit-age" name="age">
                        <option value="infant">Infant / expecting</option>
                        <option value="toddler">12-24 months</option>
                        <option value="twos">2 years / 2.5 years</option>
                        <option value="preschool">3-4 years / Pre-K</option>
                        <option value="school-age">School age / summer camp</option>
                    </select>
                    <label for="fit-priority">Biggest question right now</label>
                    <select id="fit-priority" name="priority">
                        <option value="safety">Safety, licensing, and supervision</option>
                        <option value="feeding">Feeding, naps, or infant routines</option>
                        <option value="curriculum">Curriculum and lesson planning</option>
                        <option value="location">Location, schedule, and availability</option>
                        <option value="tuition">Tuition and enrollment steps</option>
                    </select>
                    <label for="fit-location">Preferred location</label>
                    <select id="fit-location" name="location">
                        <option value="not sure">Not sure yet</option>
                        <option value="Summit">Summit</option>
                        <option value="Atlanta Federal Center">Atlanta Federal Center / Downtown Atlanta</option>
                        <option value="West End Atlanta">West End Atlanta</option>
                        <option value="College Park">College Park</option>
                        <option value="Hampton">Hampton, GA</option>
                        <option value="Memphis">Memphis, TN</option>
                        <option value="Miami">Miami, FL</option>
                    </select>
                    <button class="digital-button" type="submit" style="margin-top:18px;width:100%;">Show my next step</button>
                </form>
                <div class="survey-card survey-result" id="fit-result">
                    <h4>Your next step will appear here</h4>
                    <p style="color:var(--muted);line-height:1.6;">Answer the quick questions and this page will recommend whether to read an age guide, talk with a director, or schedule a tour.</p>
                </div>
            </div>
            <div class="location-fit-grid" aria-label="KIDazzle locations">
                <?php foreach ($kidazzle_locations as $location): ?>
                    <article class="location-chip">
                        <strong><?php echo esc_html($location['name']); ?></strong>
                        <span><?php echo esc_html($location['market']); ?></span>
                    </article>
                <?php endforeach; ?>
            </div>
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
                        <div class="resource-row">
                            <a href="<?php echo esc_url($link['url']); ?>" <?php echo $is_external ? 'target="_blank" rel="noopener"' : ''; ?>>
                                <?php echo esc_html($link['label']); ?>
                                <span><?php echo esc_html($link['type']); ?></span>
                            </a>
                            <button class="resource-info" type="button" data-resource-title="<?php echo esc_attr($link['label']); ?>" data-resource-summary="<?php echo esc_attr($link['summary']); ?>" data-resource-url="<?php echo esc_url($link['url']); ?>">?</button>
                        </div>
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
                        <p>This quick guide answers common parent questions from the page content, invites Spanish-speaking families to choose Spanish, and routes tour-ready parents toward the center team.</p>
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
                <p style="margin:8px 0 0;color:rgba(255,255,255,.76);">Pick a question, choose a language, or ask for the next tour step.</p>
                <div class="chat-log" id="kidazzle-parent-chat">
                    <div class="chat-msg">Hi. I can help you find the right KIDazzle resource. Would you like support in English or Spanish?</div>
                </div>
                <div class="chat-options">
                    <button type="button" data-answer="spanish">Prefiero Espanol</button>
                    <button type="button" data-answer="curriculum">What curriculum do you use?</button>
                    <button type="button" data-answer="lesson">Can I see lesson plans?</button>
                    <button type="button" data-answer="quality">How do I measure quality?</button>
                    <button type="button" data-answer="infants">What happens in the infant room?</button>
                    <button type="button" data-answer="tour">I want to schedule a tour</button>
                    <button type="button" data-answer="sick">What if my child gets sick?</button>
                    <button type="button" data-answer="age">Which age guide should I read?</button>
                </div>
            </aside>
        </div>
    </section>
</div>

<div class="modal-backdrop" id="resource-modal" role="dialog" aria-modal="true" aria-labelledby="resource-modal-title">
    <div class="resource-modal">
        <h3 id="resource-modal-title">Resource</h3>
        <p id="resource-modal-summary"></p>
        <div class="digital-actions">
            <a class="digital-button" id="resource-modal-link" href="#">Open resource</a>
            <button class="digital-button secondary" style="color:#14213d;border-color:#d9e4de;background:#fff;" type="button" id="resource-modal-close">Close</button>
        </div>
    </div>
</div>

<script>
    (function () {
        const log = document.getElementById('kidazzle-parent-chat');
        if (!log) return;

        const answers = {
            spanish: 'Claro. Podemos orientar a su familia en espanol. Puede revisar esta pagina, tomar la encuesta de ajuste familiar, o pedir que un director se comunique con usted para hablar sobre ubicacion, horario, edad del nino y proximos pasos.',
            curriculum: 'KIDazzle uses a structured early learning approach connected to Teaching Strategies and classroom lesson planning. Start with the Curriculum page, then review the lesson-plan snapshots on this page.',
            lesson: 'Yes. This page pulls available lesson-plan files from program records when they are attached. Use the lesson-plan section to open the newest available snapshots.',
            quality: 'Look for routines, teacher communication, safe supervision, intentional classroom areas, observation notes, and clear developmental goals. The NAEYC, ERS, DECAL, and GELDS links are good places to keep learning.',
            infants: 'A strong infant day includes warm handoff, labeled bottles or breast milk, a written feeding plan, diapering checks, supervised tummy time, safe sleep, responsive talk, and daily family updates. Open the Infants parent guide for the full path.',
            tour: 'Good next step. Use the parent fit survey to choose language, age group, biggest concern, and preferred location. Then schedule a tour or ask a director to call you.',
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

        const ageModal = document.getElementById('age-resource-modal');
        const ageFrame = document.getElementById('age-resource-frame');
        const ageTitle = document.getElementById('age-resource-title');

        function buildAgeFrame(content) {
            return '<!doctype html><html><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><style>' +
                'body{margin:0;background:#fbfaf3;color:#14213d;font-family:Inter,system-ui,-apple-system,BlinkMacSystemFont,"Segoe UI",sans-serif;line-height:1.55}' +
                '.popup-guide{padding:28px;max-width:860px;margin:0 auto}' +
                '.digital-pill{display:inline-flex;align-items:center;border-radius:999px;padding:8px 12px;background:#dff5ec;color:#173c36;font-weight:850;font-size:12px;text-transform:uppercase;letter-spacing:.08em}' +
                'h1{font-family:Georgia,serif;font-size:clamp(34px,6vw,58px);line-height:1;margin:16px 0 12px}' +
                'h4{margin:0 0 10px;font-size:17px}' +
                '.lead{font-size:19px;color:#496173}' +
                '.guide-columns{display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:18px;margin-top:20px}' +
                '.guide-mini{border:1px solid #d9e4de;border-radius:8px;padding:16px;background:white}' +
                '.guide-mini ul{margin:0;padding-left:18px;color:#496173}' +
                'li{margin:8px 0}' +
                '.fit-row{display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:12px;margin-top:16px}' +
                '.fit-box{border-radius:8px;padding:14px;line-height:1.5;background:#e9f8f2;border:1px solid #b7e3d2}' +
                '.fit-box.alt{background:#fff6e2;border-color:#f4d598}' +
                '.digital-actions{display:flex;flex-wrap:wrap;gap:12px;margin-top:22px}' +
                '.digital-button{display:inline-flex;align-items:center;justify-content:center;min-height:48px;border-radius:12px;padding:12px 18px;font-weight:850;text-decoration:none;background:#0f8f87;color:white}' +
                '.digital-button.secondary{background:white;color:#14213d;border:1px solid #d9e4de}' +
                '@media(max-width:760px){.guide-columns,.fit-row{grid-template-columns:1fr}.popup-guide{padding:22px}}' +
                '</style></head><body>' + content + '</body></html>';
        }

        function openAgeGuide(topicId, label) {
            if (!ageModal || !ageFrame) return;
            const template = document.getElementById('resource-template-' + topicId);
            if (!template) return;
            if (ageTitle) ageTitle.textContent = label || 'KIDazzle age guide';
            ageFrame.srcdoc = buildAgeFrame(template.innerHTML);
            ageModal.setAttribute('aria-hidden', 'false');
            document.documentElement.style.overflow = 'hidden';
            addMessage(label + ' opened in the parent guide pop-up.', 'parent');
            addMessage('Good. Keep them on the page, answer the age-specific question, then offer a tour or curriculum link as the next step.', 'guide');
        }

        function closeAgeGuide() {
            if (!ageModal || !ageFrame) return;
            ageModal.setAttribute('aria-hidden', 'true');
            ageFrame.removeAttribute('srcdoc');
            document.documentElement.style.overflow = '';
        }

        document.querySelectorAll('[data-resource-topic]').forEach((button) => {
            button.addEventListener('click', () => {
                openAgeGuide(button.dataset.resourceTopic, button.textContent);
            });
        });

        document.querySelectorAll('[data-close-age-modal]').forEach((control) => {
            control.addEventListener('click', closeAgeGuide);
        });

        const survey = document.getElementById('kidazzle-fit-survey');
        const result = document.getElementById('fit-result');
        if (survey && result) {
            survey.addEventListener('submit', (event) => {
                event.preventDefault();
                const data = new FormData(survey);
                const language = data.get('language');
                const age = data.get('age');
                const priority = data.get('priority');
                const location = data.get('location');
                const ageLinks = {
                    infant: '#age-infants',
                    toddler: '#age-toddlers',
                    twos: '#age-two-half',
                    preschool: '#age-fours',
                    'school-age': '#age-summer-camp'
                };
                const priorityText = {
                    safety: 'Start with quality links and ask the center director about supervision, ratios, safe sleep or rest, illness policies, and parent communication.',
                    feeding: 'Start with the infant or toddler guide, then ask the director about feeding plans, labeled bottles, breast milk or formula routines, naps, and daily updates.',
                    curriculum: 'Start with lesson-plan snapshots and the curriculum page so you can see how play, standards, and teacher observation connect.',
                    location: 'Start with location matching and a tour request so the team can confirm availability, schedule needs, and the best center contact.',
                    tuition: 'Ask for a director or enrollment team follow-up. Tuition, subsidy, and start-date questions are best handled by a center team member.'
                };
                const languageLine = language === 'Spanish'
                    ? 'Spanish support requested. A bilingual follow-up should be offered when the lead is routed.'
                    : 'English selected. Continue with the guide or ask for a director follow-up.';
                result.innerHTML = '<h4>Recommended next step</h4><p style="color:var(--muted);line-height:1.6;">' + languageLine + ' Preferred location: ' + location + '.</p><p style="color:var(--muted);line-height:1.6;">' + priorityText[priority] + '</p><div class="digital-actions"><a class="digital-button" href="' + ageLinks[age] + '">Open age guide</a><a class="digital-button secondary" style="color:#14213d;border-color:#d9e4de;background:#fff;" href="<?php echo esc_url(home_url('/contact/')); ?>">Schedule a tour</a></div>';
                addMessage('I completed the parent fit survey.', 'parent');
                addMessage('Based on your answers, review the recommended guide and schedule a tour if the location and care model fit your family.', 'guide');
            });
        }

        const modal = document.getElementById('resource-modal');
        const modalTitle = document.getElementById('resource-modal-title');
        const modalSummary = document.getElementById('resource-modal-summary');
        const modalLink = document.getElementById('resource-modal-link');
        const modalClose = document.getElementById('resource-modal-close');
        if (modal && modalTitle && modalSummary && modalLink && modalClose) {
            document.querySelectorAll('[data-resource-title]').forEach((button) => {
                button.addEventListener('click', () => {
                    modalTitle.textContent = button.dataset.resourceTitle;
                    modalSummary.textContent = button.dataset.resourceSummary;
                    modalLink.href = button.dataset.resourceUrl;
                    modal.classList.add('is-open');
                });
            });
            modalClose.addEventListener('click', () => modal.classList.remove('is-open'));
            modal.addEventListener('click', (event) => {
                if (event.target === modal) modal.classList.remove('is-open');
            });
            document.addEventListener('keydown', (event) => {
                if (event.key === 'Escape') modal.classList.remove('is-open');
            });
        }
        document.addEventListener('keydown', (event) => {
            if (event.key === 'Escape') closeAgeGuide();
        });
    })();
</script>

<?php
get_footer();
