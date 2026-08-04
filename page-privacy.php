<?php
/**
 * Template Name: Privacy Policy
 *
 * Public privacy policy page for parents, website visitors, and Meta/Facebook
 * lead-ad review.
 *
 * @package kidazzle_Excellence
 * @since 1.0.0
 */

get_header();

$page_id = get_the_ID();
$last_updated = $page_id ? get_post_meta($page_id, 'privacy_last_updated', true) : '';
$last_updated = $last_updated ?: 'July 28, 2026';

$default_sections = array(
    array(
        'title' => '1. Commitment to Privacy',
        'content' => '<p>KIDazzle Child Care Inc. ("KIDazzle", "we", "us", or "our") respects the privacy of families, children, team members, applicants, and website visitors. This policy explains what information we collect, how we use it, and how families can contact us with privacy questions.</p>',
    ),
    array(
        'title' => '2. Information We Collect',
        'content' => '<p>We may collect information that you provide through our website, online forms, phone calls, tours, enrollment packets, lead forms, and parent communications. This may include parent or guardian name, child name and age, contact information, preferred location, enrollment interest, tour requests, program needs, and messages you send to us.</p><p>During enrollment or childcare operations, we may also collect records required for licensing, safety, nutrition, attendance, emergency contact, medical, immunization, authorized pickup, billing, subsidy, or program participation purposes.</p>',
    ),
    array(
        'title' => '3. Website, Advertising, and Form Tracking',
        'content' => '<p>Our website may use cookies, analytics tools, Meta/Facebook advertising tools, Google tools, GoHighLevel/LeadConnector forms, and similar technologies to understand page visits, improve our website, measure ad performance, and respond to enrollment inquiries.</p><p>If you submit a Facebook, Instagram, website, or GoHighLevel lead form, we use the information to contact you about KIDazzle programs, Georgia Lottery Pre-K enrollment, tours, tuition, availability, and related family resources.</p>',
    ),
    array(
        'title' => '4. How We Use Information',
        'content' => '<p>We use information to respond to inquiries, schedule tours, process enrollment interest, communicate with families, support childcare operations, comply with licensing and legal requirements, improve our services, and measure marketing performance.</p><p>We do not sell family or child information. We may share information with service providers that help us operate our website, forms, communications, advertising, childcare management, or enrollment workflows, but only for business purposes connected to KIDazzle operations.</p>',
    ),
    array(
        'title' => '5. Children and Family Records',
        'content' => '<p>Because KIDazzle serves children and families, we treat child-related information with heightened care. Childcare, medical, emergency, attendance, billing, and enrollment records are used for childcare operations, safety, compliance, and family communication. Access is limited to authorized personnel and service providers with a legitimate operational need.</p>',
    ),
    array(
        'title' => '6. Choices and Family Rights',
        'content' => '<p>Families may ask to review, correct, or update contact and enrollment information. Families may also request that we stop marketing communications, subject to communications still required for enrollment, childcare operations, safety, billing, or legal compliance.</p><p>You may adjust cookie or advertising preferences through your browser, device settings, Meta/Facebook settings, Google settings, or other platform controls.</p>',
    ),
    array(
        'title' => '7. Data Security',
        'content' => '<p>We use reasonable administrative, technical, and physical safeguards to protect information. No website, form, email, or online platform can guarantee absolute security, so families should avoid sending highly sensitive information through general contact forms unless the form specifically asks for it as part of an enrollment or operational process.</p>',
    ),
    array(
        'title' => '8. Contact Us',
        'content' => '<p>If you have questions about this policy or want to update your information, contact KIDazzle at <a href="mailto:info@kidazzle.com">info@kidazzle.com</a> or call <a href="tel:18774101002">877-410-1002</a>.</p>',
    ),
);

$sections = array();
if ($page_id) {
    for ($i = 1; $i <= 8; $i++) {
        $title = get_post_meta($page_id, "privacy_section{$i}_title", true);
        $content = get_post_meta($page_id, "privacy_section{$i}_content", true);
        if ($title || $content) {
            $sections[] = array(
                'title' => $title,
                'content' => $content,
            );
        }
    }
}

if (empty($sections)) {
    $sections = $default_sections;
}
?>

<main class="bg-brand-cream text-brand-ink">
    <section class="relative overflow-hidden bg-slate-950 text-white">
        <div class="absolute inset-0 bg-gradient-to-br from-sky-900/40 via-slate-950 to-emerald-900/30"></div>
        <div class="relative max-w-5xl mx-auto px-4 py-20 md:py-28">
            <p class="text-xs uppercase tracking-[0.22em] text-cyan-200 font-black mb-4">KIDazzle Privacy</p>
            <h1 class="text-4xl md:text-6xl font-black tracking-tight mb-6">Privacy Policy</h1>
            <p class="max-w-3xl text-lg md:text-xl text-slate-200 leading-relaxed">
                How KIDazzle handles website inquiries, enrollment interest, family communication, and childcare-related information.
            </p>
            <p class="text-sm text-slate-400 mt-6">Last updated: <?php echo esc_html($last_updated); ?></p>
        </div>
    </section>

    <section class="max-w-4xl mx-auto px-4 py-14 md:py-20">
        <div class="space-y-10 text-slate-700 leading-relaxed">
            <?php foreach ($sections as $section): ?>
                <article class="border-b border-slate-200 pb-8 last:border-b-0">
                    <?php if (!empty($section['title'])): ?>
                        <h2 class="text-2xl md:text-3xl font-black text-slate-950 mb-4">
                            <?php echo esc_html($section['title']); ?>
                        </h2>
                    <?php endif; ?>

                    <?php if (!empty($section['content'])): ?>
                        <div class="privacy-section-content space-y-4 text-base md:text-lg">
                            <?php echo wp_kses_post($section['content']); ?>
                        </div>
                    <?php endif; ?>
                </article>
            <?php endforeach; ?>
        </div>
    </section>
</main>

<?php
get_footer();
