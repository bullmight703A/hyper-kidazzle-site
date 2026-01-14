<?php
/**
 * Meta Box: Show in Newsroom
 * Adds a checkbox to posts to toggle visibility in the Newsroom.
 *
 * @package Kidazzle_Excellence
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

class Kidazzle_Post_Newsroom
{
    public function register()
    {
        add_action('add_meta_boxes', [$this, 'add_meta_box']);
        add_action('save_post', [$this, 'save_meta_box']);
    }

    public function add_meta_box()
    {
        add_meta_box(
            'Kidazzle_post_newsroom',
            'Newsroom Settings',
            [$this, 'render_meta_box'],
            'post',
            'side',
            'high'
        );
    }

    public function render_meta_box($post)
    {
        wp_nonce_field('Kidazzle_post_newsroom_nonce', 'Kidazzle_post_newsroom_nonce');
        $show_in_newsroom = get_post_meta($post->ID, '_Kidazzle_show_in_newsroom', true);
        ?>
        <div class="Kidazzle-meta-box">
            <label for="Kidazzle_show_in_newsroom">
                <input type="checkbox" id="Kidazzle_show_in_newsroom" name="Kidazzle_show_in_newsroom" value="1" <?php checked($show_in_newsroom, '1'); ?>>
                Show in Newsroom
            </label>
            <p class="description">Check this box to display this post on the Newsroom page.</p>
        </div>
        <?php
    }

    public function save_meta_box($post_id)
    {
        if (!isset($_POST['Kidazzle_post_newsroom_nonce']) || !wp_verify_nonce($_POST['Kidazzle_post_newsroom_nonce'], 'Kidazzle_post_newsroom_nonce')) {
            return;
        }

        if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
            return;
        }

        if (!current_user_can('edit_post', $post_id)) {
            return;
        }

        $val = isset($_POST['Kidazzle_show_in_newsroom']) ? '1' : '0';
        update_post_meta($post_id, '_Kidazzle_show_in_newsroom', $val);
    }
}
