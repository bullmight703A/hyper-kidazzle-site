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

$id = set_favicon('https://summer.kidazzle.com/wp-content/uploads/2026/02/kidazzle-logo-140x140.webp');
if ($id) {
    echo "KIDAZZLE_FAVICON_SUCCESS: " . $id . "\n";
} else {
    echo "KIDAZZLE_FAVICON_FAIL\n";
}
