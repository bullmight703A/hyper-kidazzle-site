<?php
/**
 * Template Part: Contact CTA Section
 * 
 * @package kidazzle
 */

if (!defined('ABSPATH')) {
    exit;
}

$form_id = get_theme_mod('kidazzle_contact_form_id', 'N8RYaUY1SuORexcyA6la');
?>
<div
    class="bg-gradient-to-br from-[#4c1d95] to-[#c026d3] rounded-[3rem] p-6 md:p-12 text-center text-white shadow-2xl mt-8">
    <h3 class="text-4xl font-extrabold mb-4"><?php esc_html_e('Start Your Journey', 'kidazzle'); ?></h3>
    <p class="text-purple-100 text-lg mb-8">
        <?php esc_html_e('Schedule a tour today and see why families have trusted us for 31 years.', 'kidazzle'); ?></p>

    <div class="bg-white rounded-[2rem] p-2 overflow-hidden max-w-4xl mx-auto h-[600px] shadow-lg">
        <iframe src="https://api.leadconnectorhq.com/widget/form/<?php echo esc_attr($form_id); ?>"
            style="width:100%;height:100%;border:none;border-radius:20px" id="inline-<?php echo esc_attr($form_id); ?>"
            data-layout="{'id':'INLINE'}" data-trigger-type="alwaysShow" data-trigger-value=""
            data-activation-type="alwaysActivated" data-activation-value="" data-deactivation-type="neverDeactivate"
            data-deactivation-value="" data-form-name="2023 New KIDazzel website contact" data-height="870"
            data-layout-iframe-id="inline-<?php echo esc_attr($form_id); ?>"
            data-form-id="<?php echo esc_attr($form_id); ?>" title="<?php esc_attr_e('Contact Form', 'kidazzle'); ?>">
        </iframe>
        <script src="https://link.msgsndr.com/js/form_embed.js"></script>
    </div>
</div>