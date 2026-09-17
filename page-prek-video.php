<?php
/**
 * Template Name: Georgia Pre-K Attendance Video
 *
 * Official KIDazzle Georgia Lottery Pre-K Parent Attendance Video Review Portal
 *
 * @package kidazzle_Theme
 */

$portal_file = KIDAZZLE_THEME_DIR . '/shorts/prek_video_review.html';
if (file_exists($portal_file)) {
    status_header(200);
    header('Content-Type: text/html; charset=UTF-8');
    readfile($portal_file);
    exit;
} else {
    get_header();
    echo '<div class="container py-20 text-center"><h1 class="text-3xl font-bold">Georgia Pre-K Attendance Notice</h1><p class="mt-4">Video review portal loading...</p></div>';
    get_footer();
}
