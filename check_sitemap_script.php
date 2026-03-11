<?php
require_once('wp-load.php');

if (!class_exists('kidazzle_Combo_Page_Generator')) {
    echo "Combo Page Generator not loaded.\n";
    exit;
}

$combos = kidazzle_Combo_Page_Generator::get_all_combos();
$total = count($combos);

$published = 0;
$draft = 0;
$auto = 0;

foreach ($combos as $combo) {
    if (class_exists('kidazzle_Combo_Page_Data')) {
        $program_slug = $combo['program']->post_name;
        $city_slug = sanitize_title($combo['city']);
        $state = $combo['state'];
        
        $saved_data = kidazzle_Combo_Page_Data::get($program_slug, $city_slug, $state);
        $status = $saved_data['status'] ?? 'auto';
        
        if ($status === 'published' || $status === 'publish') {
            $published++;
            // Reset to 'auto' for bulk reset
            if (isset($argv[1]) && $argv[1] === 'reset') {
                 kidazzle_Combo_Page_Data::save($program_slug, $city_slug, $state, ['status' => 'auto']);
            }
        } elseif ($status === 'draft') {
            $draft++;
        } else {
            $auto++;
        }
    }
}

echo "Total Combo Pages: $total\n";
echo "Published (Sitemap Included): $published\n";
echo "Draft: $draft\n";
echo "Auto (Default): $auto\n";

if (isset($argv[1]) && $argv[1] === 'reset') {
    echo "\nPerformed bulk reset of published combo pages to 'auto'.\n";
} else {
    echo "\nRun with argument 'reset' to bulk reset published combos.\n";
}
