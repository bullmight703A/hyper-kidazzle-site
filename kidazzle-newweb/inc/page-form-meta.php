<?php
/**
 * Page Form Meta Box
 *
 * Adds a generic form shortcode field to all Pages.
 *
 * @package kidazzle
 * @since 1.0.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register Form Meta Box
 */
function kidazzle_page_form_meta_box() {
	add_meta_box(
		'KIDazzle-form-settings',
		__( 'Form Settings', 'kidazzle' ),
		'kidazzle_page_form_meta_box_render',
		'page',
		'normal',
		'default'
	);
}
add_action( 'add_meta_boxes', 'kidazzle_page_form_meta_box' );

/**
 * Render Form Meta Box
 */
function kidazzle_page_form_meta_box_render( $post ) {
	wp_nonce_field( 'kidazzle_page_form_meta', 'kidazzle_page_form_nonce' );

	$form_shortcode = get_post_meta( $post->ID, 'kidazzle_form_shortcode', true );
	?>
	<table class="form-table">
		<tr>
			<th><label for="kidazzle_form_shortcode">Form Shortcode</label></th>
			<td>
				<input type="text" id="kidazzle_form_shortcode" name="kidazzle_form_shortcode"
					   value="<?php echo esc_attr( $form_shortcode ); ?>"
					   class="large-text" placeholder="[contact-form-7 id=&quot;123&quot; ...]" />
				<p class="description">Paste the shortcode for the form you want to display on this page (e.g., Fluent Forms, Gravity Forms, etc.).</p>
			</td>
		</tr>
	</table>
	<?php
}

/**
 * Save Form Meta
 */
function kidazzle_save_page_form_meta( $post_id ) {
	// Check if this is a page
	if ( get_post_type( $post_id ) !== 'page' ) {
		return;
	}

	// Verify Nonce
	if ( ! isset( $_POST['kidazzle_page_form_nonce'] ) || ! wp_verify_nonce( $_POST['kidazzle_page_form_nonce'], 'kidazzle_page_form_meta' ) ) {
		return;
	}

	// Check autosave
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}

	// Check permissions
	if ( ! current_user_can( 'edit_page', $post_id ) ) {
		return;
	}

	// Save existing value even if empty (to allow clearing)
	if ( isset( $_POST['kidazzle_form_shortcode'] ) ) {
		// Allow some HTML for shortcodes but sanitize reasonably
		$value = wp_kses_post( $_POST['kidazzle_form_shortcode'] ); 
		update_post_meta( $post_id, 'kidazzle_form_shortcode', $value );
	}
}
add_action( 'save_post', 'kidazzle_save_page_form_meta' );
