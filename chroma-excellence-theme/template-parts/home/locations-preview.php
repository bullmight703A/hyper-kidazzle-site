<?php
/**
 * Template Part: Locations Preview
 * Interactive map + featured locations cards
 *
 * @package Chroma_Excellence
 */

$locations_data = chroma_home_locations_preview();
if (!$locations_data) {
    return;
}

if (!function_exists('chroma_region_emoji')) {
    function chroma_region_emoji($label)
    {
        $map = array(
            'Cobb County' => '🍑',
            'Gwinnett County' => '🌳',
            'North Metro' => '🏙️',
            'South Metro' => '⛰️',
        );

        return $map[$label] ?? '📍';
    }
}

if (!function_exists('chroma_region_colors')) {
    function chroma_region_colors($label)
    {
        $map = array(
            'Cobb County' => array('border' => 'chroma-red', 'bg' => 'chroma-redLight'),
            'Gwinnett County' => array('border' => 'chroma-blue', 'bg' => 'chroma-blueLight'),
            'North Metro' => array('border' => 'chroma-green', 'bg' => 'chroma-greenLight'),
            'South Metro' => array('border' => 'chroma-yellow', 'bg' => 'chroma-yellowLight'),
        );

        return $map[$label] ?? array('border' => 'chroma-red', 'bg' => 'chroma-redLight');
    }
}

$map_json = $locations_data['map_points'] ?? array();
$grouped = $locations_data['grouped'] ?? array();
?>

<section class="py-20 bg-white" data-section="locations">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Section Header -->
        <div class="text-center mb-12">
            <h2 class="text-4xl md:text-5xl font-bold text-brand-ink mb-3">
                <?php echo esc_html($locations_data['heading'] ?: 'Our Locations'); ?>
            </h2>
            <?php if (!empty($locations_data['subheading'])): ?>
                <p class="text-brand-ink/70 text-sm md:text-base max-w-2xl mx-auto">
                    <?php echo esc_html($locations_data['subheading']); ?>
                </p>
            <?php endif; ?>
        </div>

        <!-- Interactive Map -->
        <?php if (!empty($map_json)): ?>
            <div class="mb-12">
                <div id="chroma-locations-map" data-chroma-map
                    data-chroma-locations='<?php echo esc_attr(wp_json_encode($map_json)); ?>'
                    class="w-full h-96 rounded-xl shadow-lg"></div>
                <div class="text-center">
                    <a href="<?php echo esc_url($locations_data['cta_link']); ?>"
                        class="inline-block bg-brand-ink text-white px-8 py-4 rounded-full font-bold text-lg hover:bg-chroma-blueDark transition-colors">
                        <?php echo esc_html($locations_data['cta_label'] ?: get_theme_mod('chroma_locations_label', 'View All Locations')); ?>
                    </a>
                </div>
            <?php endif; ?>

        </div>
</section>