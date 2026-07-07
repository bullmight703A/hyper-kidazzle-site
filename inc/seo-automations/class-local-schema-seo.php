<?php
/**
 * Local Schema SEO Module
 *
 * @package kidazzle_Theme
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

class kidazzle_Local_Schema_SEO
{
    /**
     * Initialize the class
     */
    public static function init()
    {
        add_action('wp_head', array(__CLASS__, 'inject_local_schema'), 20);
    }

    /**
     * Inject DayCare JSON-LD schema block into the page head
     */
    public static function inject_local_schema()
    {
        // Only run on single location pages
        if (!is_singular('location')) {
            return;
        }

        $post_id = get_the_ID();
        if (!$post_id) {
            return;
        }

        $fields = kidazzle_get_location_fields($post_id);
        $title = get_the_title($post_id);
        $url = get_permalink($post_id);

        $schema = array(
            '@context' => 'https://schema.org',
            '@type'    => 'DayCare',
            '@id'      => esc_url($url) . '#school',
            'name'     => esc_html($title),
            'url'      => esc_url($url),
        );

        // Featured Image
        if (has_post_thumbnail($post_id)) {
            $image_url = get_the_post_thumbnail_url($post_id, 'full');
            if ($image_url) {
                $schema['image'] = esc_url($image_url);
            }
        }

        // Phone & Email
        if (!empty($fields['phone'])) {
            $schema['telephone'] = esc_html($fields['phone']);
        }
        if (!empty($fields['email'])) {
            $schema['email'] = sanitize_email($fields['email']);
        }

        // Postal Address
        if (!empty($fields['address']) || !empty($fields['city']) || !empty($fields['state']) || !empty($fields['zip'])) {
            $schema['address'] = array(
                '@type'           => 'PostalAddress',
                'streetAddress'   => esc_html($fields['address']),
                'addressLocality' => esc_html($fields['city']),
                'addressRegion'   => esc_html($fields['state']),
                'postalCode'      => esc_html($fields['zip']),
                'addressCountry'  => 'US',
            );
        }

        // Geo Coordinates
        if (!empty($fields['latitude']) && !empty($fields['longitude'])) {
            $schema['geo'] = array(
                '@type'     => 'GeoCoordinates',
                'latitude'  => floatval($fields['latitude']),
                'longitude' => floatval($fields['longitude']),
            );
        }

        // Extract Google Map URL from iframe if present
        $maps_embed = get_post_meta($post_id, 'location_maps_embed', true);
        if (!empty($maps_embed)) {
            if (preg_match('/src="([^"]+)"/i', $maps_embed, $matches)) {
                $schema['hasMap'] = esc_url($matches[1]);
            }
        }

        // Map post slug to GMB location config key
        $slug = get_post_field('post_name', $post_id);
        $slug_to_key = array(
            'doral'                         => 'miami',
            'kidazzle-midtown-atlanta'      => 'summit_building',
            'kidazzle-west-end-of-atlanta'  => 'west_end',
            'kidazzle-hampton-ga'           => 'hampton',
            'kidazzle-college-park-ga'      => 'college_park',
            'kidazzle-atlanta'              => 'atlanta_federal_center',
            'kidazzle-memphis'              => 'memphis',
        );
        $loc_key = isset($slug_to_key[$slug]) ? $slug_to_key[$slug] : '';

        // Inject dynamic reviews & aggregate rating from synced GMB reviews JSON
        $reviews_file = __DIR__ . '/gmb-reviews.json';
        if ($loc_key && file_exists($reviews_file)) {
            $reviews_data = json_decode(file_get_contents($reviews_file), true);
            if (!empty($reviews_data[$loc_key])) {
                $loc_reviews = $reviews_data[$loc_key];
                $schema_reviews = array();
                $total_rating = 0;
                $count = 0;

                foreach ($loc_reviews as $r) {
                    $rating_val = ($r['starRating'] === 'FIVE') ? 5 : (($r['starRating'] === 'FOUR') ? 4 : 5);
                    $total_rating += $rating_val;
                    $count++;

                    $schema_reviews[] = array(
                        '@type'        => 'Review',
                        'author'       => array(
                            '@type' => 'Person',
                            'name'  => esc_html($r['reviewer']),
                        ),
                        'reviewRating' => array(
                            '@type'       => 'Rating',
                            'ratingValue' => $rating_val,
                            'bestRating'  => 5,
                        ),
                        'reviewBody'   => esc_html($r['comment']),
                    );
                }

                if ($count > 0) {
                    $schema['review'] = $schema_reviews;
                    $schema['aggregateRating'] = array(
                        '@type'       => 'AggregateRating',
                        'ratingValue' => round($total_rating / $count, 1),
                        'reviewCount' => $count,
                        'bestRating'  => 5,
                    );
                }
            }
        }

        // Output JSON-LD block
        echo "\n<!-- KIDazzle Local Schema SEO Injection -->\n";
        echo '<script type="application/ld+json">' . wp_json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . "</script>\n";
        echo "<!-- End KIDazzle Local Schema SEO Injection -->\n\n";
    }
}
