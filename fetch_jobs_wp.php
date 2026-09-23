<?php
if (!defined('ABSPATH') && php_sapi_name() !== 'cli') {
    http_response_code(403);
    exit('Direct access not permitted.');
}
if (file_exists('wp-load.php')) {
    require_once('wp-load.php');
} elseif (file_exists('../../../wp-load.php')) {
    require_once('../../../wp-load.php');
}
$url = "https://app.acquire4hire.com/careers/list.json?id=4668";
$response = wp_remote_get($url);
if (is_wp_error($response)) {
    echo "Error: " . $response->get_error_message();
} else {
    echo wp_remote_retrieve_body($response);
}
?>
