<?php
/**
 * Location Data Migrator
 * Updates location posts to align with official Google Business Profile addresses, phone numbers, and maps embeds.
 *
 * @package kidazzle_Excellence
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

class kidazzle_Location_Migrator
{
    /**
     * Run migration hook
     */
    public static function init()
    {
        add_action('wp_loaded', [__CLASS__, 'maybe_run_migration']);
    }

    /**
     * Run the migration once per version
     */
    public static function maybe_run_migration()
    {
        // Execute only once
        if (get_option('kidazzle_location_migration_v4')) {
            return;
        }

        self::execute_migration();
        update_option('kidazzle_location_migration_v4', true);
    }

    /**
     * Execute metadata updates for the 7 active locations
     */
    private static function execute_migration()
    {
        $locations_data = [
            // 1. West End
            [
                'original_slugs' => ['kidazzle-west-end-of-atlanta', 'west-end'],
                'original_titles' => ['KIDazzle West End of Atlanta'],
                'new_title' => 'KIDazzle Child Care - West End',
                'meta' => [
                    'location_address' => '831 York Ave',
                    'location_city' => 'Atlanta',
                    'location_state' => 'GA',
                    'location_zip' => '30310',
                    'location_phone' => '(404) 753-7537',
                    'location_maps_embed' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3317.9042701223984!2d-84.41758462449754!3d33.737291473277224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88f503152c16c0cd%3A0xb38668fb068fc4de!2sKIDazzle%20Childcare%20Inc%20%7C%20West%20End!5e0!3m2!1sen!2sus!4v1764706171838!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
                ]
            ],
            // 2. Midtown Atlanta (Summit Building)
            [
                'original_slugs' => ['kidazzle-midtown-atlanta', 'midtown'],
                'original_titles' => ['KIDazzle Midtown Atlanta'],
                'new_title' => 'Peachtree Summit Child Care Center',
                'meta' => [
                    'location_address' => '401 W Peachtree St',
                    'location_city' => 'Atlanta',
                    'location_state' => 'GA',
                    'location_zip' => '30308',
                    'location_phone' => '(404) 331-1600',
                    'location_maps_embed' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3316.824600416082!2d-84.38717799999999!3d33.7651981!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88f5047a3b061fb3%3A0xabb7f660053ffd7d!2sKIDazzle%20Childcare%20Inc%3A%20Peachtree%20Summit%20Building!5e0!3m2!1sen!2sus!4v1764706094255!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
                ]
            ],
            // 3. Memphis
            [
                'original_slugs' => ['kidazzle-memphis', 'memphis'],
                'original_titles' => ['KIDazzle Memphis'],
                'new_title' => 'KIDazzle Childcare Inc: Memphis Flying Start',
                'meta' => [
                    'location_address' => '3194 Independent Rd',
                    'location_city' => 'Memphis',
                    'location_state' => 'TN',
                    'location_zip' => '38118',
                    'location_phone' => '(901) 362-9222',
                    'location_maps_embed' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3265.584990000446!2d-89.9572704!3d35.0671136!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x887f8649068f2b31%3A0x5732b905c7700a3c!2sKIDazzle%20Childcare%20Inc%3A%20Memphis%20Flying%20Start!5e0!3m2!1sen!2sus!4v1764706152852!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
                ]
            ],
            // 4. Atlanta (Atlanta Federal Center)
            [
                'original_slugs' => ['kidazzle-atlanta', 'atlanta'],
                'original_titles' => ['KIDazzle Atlanta'],
                'new_title' => 'KIDazzle Child Care Inc. - Atlanta Federal Center',
                'meta' => [
                    'location_address' => '100 Alabama Street',
                    'location_city' => 'Atlanta',
                    'location_state' => 'GA',
                    'location_zip' => '30303',
                    'location_phone' => '(404) 681-0665',
                    'location_maps_embed' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3317.2857967942564!2d-84.39613042449686!3d33.75327987327117!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88f503047618b09f%3A0x629352f9f114d652!2sKIDazzle%20Child%20Care%20Inc%3A%20Atlanta%20Federal%20Center!5e0!3m2!1sen!2sus!4v1764706190628!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
                ]
            ],
            // 5. College Park (Little Flyers CDC)
            [
                'original_slugs' => ['kidazzle-college-park-ga', 'college-park'],
                'original_titles' => ['KIDazzle College Park GA'],
                'new_title' => 'KIDazzle Child Care - LittleFlyers CDC',
                'meta' => [
                    'location_address' => '1701 Columbia Ave',
                    'location_city' => 'Atlanta',
                    'location_state' => 'GA',
                    'location_zip' => '30337',
                    'location_phone' => '(404) 305-6950',
                    'location_maps_embed' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3321.1589085139653!2d-84.44864012450137!3d33.65304417330991!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88f4e2b65fa0569b%3A0xd8e28edb0911e956!2sKIDazzle%20Childcare%20Inc%3A%20Little%20Flyers%20College%20Park!5e0!3m2!1sen!2sus!4v1764706220357!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
                ]
            ],
            // 6. Hampton
            [
                'original_slugs' => ['kidazzle-hampton-ga', 'hampton'],
                'original_titles' => ['KIDazzle Hampton Ga'],
                'new_title' => 'KIDazzle Child Care - FAA/Hampton',
                'meta' => [
                    'location_address' => '49 Woolsey Rd',
                    'location_city' => 'Hampton',
                    'location_state' => 'GA',
                    'location_zip' => '30228',
                    'location_phone' => '(770) 210-7290',
                    'location_maps_embed' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3331.636815414267!2d-84.30074322451348!3d33.38054657341737!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88f4f5c3c595069d%3A0x66cf60bb1b78594a!2sKIDazzle%20Child%20Care%20Inc%3A%20Hampton!5e0!3m2!1sen!2sus!4v1764706257946!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
                ]
            ],
            // 7. Miami (Doral)
            [
                'original_slugs' => ['doral', 'miami'],
                'original_titles' => ['KIDazzle Child Care Doral/ Miami'],
                'new_title' => 'KIDazzle Child Care Inc: Tailwinds Development Center',
                'meta' => [
                    'location_address' => '8300 NW 53rd St',
                    'location_city' => 'Doral',
                    'location_state' => 'FL',
                    'location_zip' => '33166',
                    'location_phone' => '(305) 592-3000',
                    'location_maps_embed' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3591.349395065274!2d-80.32185912481461!3d25.825029777312196!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9ba324548b6a5%3A0x260687cfcf36d761!2sKIDazzle%20Child%20Care%20Inc%3A%20Tailwinds%20Development%20Center!5e0!3m2!1sen!2sus!4v1764706295520!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
                ]
            ]
        ];

        foreach ($locations_data as $loc) {
            $post = self::find_location_post($loc['original_slugs'], $loc['original_titles']);
            if (!$post) {
                error_log('KIDAZZLE MIGRATOR: Could not find post for slugs: ' . implode(',', $loc['original_slugs']));
                continue;
            }

            // 1. Update Post Title if it does not match
            if ($post->post_title !== $loc['new_title']) {
                wp_update_post([
                    'ID' => $post->ID,
                    'post_title' => $loc['new_title'],
                ]);
            }

            // 2. Update Meta Fields
            foreach ($loc['meta'] as $key => $val) {
                update_post_meta($post->ID, $key, $val);
            }

            error_log('KIDAZZLE MIGRATOR: Successfully updated location fields for ID ' . $post->ID);
        }
    }

    /**
     * Find location post helper
     */
    private static function find_location_post(array $slugs, array $titles)
    {
        // Try slug search first
        foreach ($slugs as $slug) {
            $posts = get_posts([
                'post_type' => 'location',
                'name' => $slug,
                'posts_per_page' => 1,
                'post_status' => 'any'
            ]);
            if (!empty($posts)) {
                return $posts[0];
            }
        }

        // Try title search
        foreach ($titles as $title) {
            $posts = get_posts([
                'post_type' => 'location',
                'title' => $title,
                'posts_per_page' => 1,
                'post_status' => 'any'
            ]);
            if (!empty($posts)) {
                return $posts[0];
            }
        }

        return null;
    }
}
