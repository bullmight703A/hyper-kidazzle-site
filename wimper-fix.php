require_once('wp-load.php');
if ( ! function_exists( 'wp_handle_sideload' ) ) {
    require_once( ABSPATH . 'wp-admin/includes/file.php' );
    require_once( ABSPATH . 'wp-admin/includes/image.php' );
    require_once( ABSPATH . 'wp-admin/includes/media.php' );
}

function set_favicon($url) {
    $tmp = download_url( $url );
    if ( is_wp_error( $tmp ) ) return false;
    
    $file_array = array(
        'name'     => basename( $url ),
        'tmp_name' => $tmp
    );
    
    $id = media_handle_sideload( $file_array, 0 );
    if ( is_wp_error( $id ) ) {
        @unlink( $file_array['tmp_name'] );
        return false;
    }
    
    update_option( 'site_icon', $id );
    return $id;
}

// 1. Set Favicon
$id = set_favicon('https://n13jwn1zon.wpdns.site/wp-content/uploads/2026/02/w-logo-blue-white-bg.png');
if ($id) {
    echo "WIMPER_FAVICON_SUCCESS: " . $id . "\n";
} else {
    echo "WIMPER_FAVICON_FAIL\n";
}

// 2. Fix CSS Contrast for Single Blog Posts
$css = get_option('wp_custom_css');
if (strpos($css, '.single-post h2') === false) {
    $new_css = $css . "\n\n/* Masterchef Night Protocol Fix */\n.single-post h2, .single-post h3, .single-post h4 { color: #ffffff !important; }\n";
    wp_update_custom_css_post($new_css);
    echo "WIMPER_CSS_FIX_APPLIED\n";
} else {
    echo "WIMPER_CSS_ALREADY_EXISTS\n";
}
