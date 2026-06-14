<?php
/**
 * Template Name: Generate City Pages
 * Description: Automates the creation of SEO-optimized City pages by saving metadata for the single-city.php template.
 */

// Ensure WordPress is loaded
if (!defined('ABSPATH')) {
    require_once('../../../wp-load.php');
}

// Check permissions / secret run query param
if (!current_user_can('manage_options') && (!isset($_GET['secret_run']) || $_GET['secret_run'] !== '1')) {
    wp_die('You do not have sufficient permissions to access this page.');
}

get_header();

// -------------------------------------------------------------------------
// 1. HARDCODED SUBDIVISIONS / NEIGHBORHOODS & COUNTIES
// -------------------------------------------------------------------------
$county_data = array(
    'Fulton' => array(
        'Atlanta' => ['Downtown', 'Midtown', 'West End', 'Buckhead', 'Adair Park', 'Pittsburgh', 'Oakland City', 'Mechanicsville', 'Summerhill', 'Peoplestown', 'Castleberry Hill', 'Old Fourth Ward', 'Inman Park', 'Virginia-Highland', 'Kirkwood', 'East Lake', 'Grant Park', 'Cascade Heights'],
        'College Park' => ['Historic College Park', 'Red Oak', 'Camp Creek', 'Conley Hills', 'North College Park'],
        'East Point' => ['Downtown East Point', 'Jefferson Park', 'Conley Hills', 'Historic East Point'],
        'Fairburn' => ['Durham Lakes', 'Renaissance', 'Cedar Grove'],
        'Union City' => ['Oakley Township', 'Shannon', 'South Fulton'],
        'Hapeville' => ['Downtown Hapeville', 'Virginia Highlands Atlanta', 'Hapeville East'],
    ),
    'DeKalb' => array(
        'Decatur' => ['Downtown Decatur', 'Oakhurst', 'Glenwood Hills', 'Winnona Park'],
        'Gresham Park' => ['Gresham', 'Sugar Creek', 'Bouldercrest'],
        'Druid Hills' => ['North Druid Hills', 'Emory Area', 'Toco Hills'],
        'North Decatur' => ['Medlock Park', 'Decatur Heights', 'Glendale Estates'],
    ),
    'Clayton' => array(
        'Forest Park' => ['Fort Gillem Area', 'Starr Park Area', 'Hendrix Drive'],
        'Riverdale' => ['Riverdale Heights', 'Valley Hill', 'Flat Shoals'],
        'Jonesboro' => ['Lake Spivey', 'Tara', 'Mundy\'s Mill', 'Irondale'],
        'Lake City' => ['Lake City Plaza Area', 'Reynolds Road'],
        'Morrow' => ['Southlake', 'Lake City', 'Reynolds Road'],
        'Ellenwood' => ['Panola Mountain', 'Fairview', 'Cedar Grove'],
        'Rex' => ['Rex Ridge', 'Homestead', 'Stagecoach'],
    ),
    'Henry' => array(
        'Hampton' => ['Crystal Lake', 'Atlanta Motor Speedway Area', 'Lovejoy'],
        'McDonough' => ['Lake Dow', 'Eagles Landing', 'Ola', 'Union Grove', 'City Square', 'Kelleytown'],
        'Stockbridge' => ['Eagles Landing', 'Monarch Village', 'Windy Hill', 'Spivey', 'Flippen'],
        'Locust Grove' => ['Heron Bay', 'Luella', 'Locust Grove Station'],
    ),
    'Fayette' => array(
        'Fayetteville' => ['Whitewater', 'Trilith', 'The Canoe Club', 'Starr\'s Mill', 'Redwine'],
        'Peachtree City' => ['Kedron', 'Braelinn', 'Glenloch', 'Wilksmoor', 'Aberdeen'],
        'Tyrone' => ['Southampton', 'River Crest', 'Windcastle', 'Berry Hill'],
    ),
    'Shelby' => array(
        'Memphis' => ['Downtown Memphis', 'Midtown Memphis', 'Whitehaven', 'Nonconnah', 'Oakhaven', 'Parkway Village', 'Orange Mound', 'Cooper-Young', 'Cordova', 'Germantown', 'Bartlett', 'Collierville'],
        'Bartlett' => ['Bartlett Station', 'Elmore Park', 'Oak Road Area'],
        'Cordova' => ['Cordova Grange', 'Berryhill', 'Saddle Creek Area'],
    ),
    'DeSoto' => array(
        'Southaven' => ['Southaven Hills', 'Plum Point', 'Greenbrook'],
    ),
    'Crittenden' => array(
        'West Memphis' => ['Downtown West Memphis', 'Meadowbrook', 'Rich Road Area'],
    ),
    'Miami-Dade' => array(
        'Doral' => ['Downtown Doral', 'Doral Isles', 'Doral Meadow', 'Fontainebleau', 'Sweetwater'],
        'Hialeah' => ['Hialeah Gardens', 'West Hialeah', 'East Hialeah', 'Miami Springs'],
        'Kendall' => ['Kendall West', 'The Hammocks', 'Pinecrest', 'Coral Gables'],
        'Miami' => ['Downtown Miami', 'Brickell', 'Coconut Grove', 'Miami Beach', 'Miami Springs', 'Miami Lakes', 'Hialeah Gardens', 'Westchester'],
    )
);

// Flatten for easy lookup
$city_neighborhoods_flat = array();
$city_county_map = array();

foreach ($county_data as $county => $cities) {
    foreach ($cities as $city => $hoods) {
        $city_neighborhoods_flat[$city] = $hoods;
        $city_county_map[$city] = $county;
    }
}

// -------------------------------------------------------------------------
// 2. MAIN EXECUTION LOGIC
// -------------------------------------------------------------------------

echo '<div class="wrap">';
echo '<h1>Generating City Pages (Template-Based Architecture)</h1>';

// Parse locations.md
$locations_file = get_template_directory() . '/locations.md';
if (!file_exists($locations_file)) {
    wp_die('Error: locations.md not found.');
}

$lines = file($locations_file);
$city_map = array(); // City Name => [School Name, School Address, School ID]

// Find all published locations first to map names to IDs
$all_locations = get_posts(array('post_type' => 'location', 'posts_per_page' => -1));
$location_lookup = array();
foreach ($all_locations as $loc) {
    $location_lookup[trim($loc->post_title)] = $loc->ID;
}

foreach ($lines as $line) {
    if (strpos($line, '|') === false || strpos($line, 'School Name') !== false)
        continue;

    $parts = array_map('trim', explode('|', $line));
    if (count($parts) < 4)
        continue; // Need at least empty parts

    $school_name = $parts[1];
    $address = $parts[2];
    $target_cities_str = $parts[3];

    if (empty($target_cities_str))
        continue;

    $target_cities = array_map('trim', explode(',', $target_cities_str));
    $school_id = isset($location_lookup[$school_name]) ? $location_lookup[$school_name] : 0;

    foreach ($target_cities as $city) {
        if (empty($city))
            continue;
        if (!isset($city_map[$city])) {
            $city_map[$city] = array();
        }
        $city_map[$city][] = array(
            'school_name' => $school_name,
            'address' => $address,
            'id' => $school_id
        );
    }
}

// Process Each City
foreach ($city_map as $city_name => $schools) {
    echo "<hr><h3>Processing: $city_name</h3>";

    // 1. Get Neighborhoods & County
    $neighborhoods = isset($city_neighborhoods_flat[$city_name]) ? $city_neighborhoods_flat[$city_name] : array();
    $county = isset($city_county_map[$city_name]) ? $city_county_map[$city_name] : 'Local';

    // Fallback: Use School Names as neighborhoods if none hardcoded
    if (empty($neighborhoods)) {
        foreach ($schools as $s) {
            $neighborhoods[] = str_replace(['Campus', 'Academy by Kidazzle Early Learning'], '', $s['school_name']);
        }
    }

    // 2. Get Hero Image (From First School)
    $hero_image_url = '';
    if (!empty($schools)) {
        $primary_school_id = $schools[0]['id'];
        if ($primary_school_id) {
            // Try Hero Gallery First
            $gallery_raw = get_post_meta($primary_school_id, 'location_hero_gallery', true);
            if ($gallery_raw) {
                $gallery_lines = explode("\n", $gallery_raw);
                if (!empty($gallery_lines)) {
                    $hero_image_url = trim($gallery_lines[0]);
                }
            }
            // Fallback to Featured Image
            if (empty($hero_image_url)) {
                $hero_image_url = get_the_post_thumbnail_url($primary_school_id, 'full');
            }
        }
    }

    // 3. Create/Update Post
    // We do NOT generate HTML content anymore. The template handles it.
    $page_title = "Best Daycare & Preschool in $city_name, GA | Kidazzle Early Learning";

    $existing_page = get_page_by_title($city_name, OBJECT, 'city');

    $post_data = array(
        'post_title' => $city_name, // Slug will be city name
        'post_content' => '', // Empty content, template does the work
        'post_status' => 'publish',
        'post_type' => 'city',
        'post_author' => get_current_user_id(),
    );

    if ($existing_page) {
        $post_data['ID'] = $existing_page->ID;
        $post_id = wp_update_post($post_data);
        echo "Updated page for $city_name (ID: $post_id)<br>";
    } else {
        $post_id = wp_insert_post($post_data);
        echo "Created page for $city_name (ID: $post_id)<br>";
    }

    if (is_wp_error($post_id)) {
        echo "Error creating page: " . $post_id->get_error_message() . "<br>";
        continue;
    }

    // 4. Update Meta Data (The "Model" for our View)
    update_post_meta($post_id, 'city_county', $county);
    update_post_meta($post_id, 'city_neighborhoods', $neighborhoods);

    $school_ids = array_column($schools, 'id');
    update_post_meta($post_id, 'related_location_ids', $school_ids);

    if ($hero_image_url) {
        update_post_meta($post_id, 'city_hero_image', $hero_image_url);
    }

    // SEO Meta
    update_post_meta($post_id, '_yoast_wpseo_title', $page_title);
    update_post_meta($post_id, '_yoast_wpseo_metadesc', "Looking for 5-star rated daycare in $city_name? Kidazzle offers accredited infant care, toddler programs, and Free GA Pre-K at convenient locations near you.");

    // Keywords
    $keywords = array("daycare $city_name", "preschool $city_name", "child care $city_name", "early learning $city_name");
    foreach ($schools as $s) {
        $keywords[] = $s['school_name'];
    }
    update_post_meta($post_id, 'meta_keywords', implode(', ', $keywords));
}

echo '<p>All operations completed. City pages are now using the new template architecture.</p>';
echo '</div>';

get_footer();
