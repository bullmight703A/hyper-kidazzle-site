<?php
/**
 * Kidazzle Shorts & Video Media Router
 *
 * Routes branded URLs such as /shorts/prek_video_review.html,
 * /prek-video, /prek-attendance-video, and related media assets.
 *
 * @package kidazzle_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

add_action('template_redirect', 'kidazzle_handle_shorts_routing', 0);

function kidazzle_handle_shorts_routing()
{
    if (is_admin()) {
        return;
    }

    $request_uri = isset($_SERVER['REQUEST_URI']) ? wp_unslash($_SERVER['REQUEST_URI']) : '';
    $path = parse_url($request_uri, PHP_URL_PATH);
    $path = trim((string) $path, '/');

    // 1. Check if this is the Pre-K video review portal
    if (
        $path === 'shorts/prek_video_review.html' ||
        $path === 'shorts/prek_video_review' ||
        $path === 'prek-video' ||
        $path === 'prek-video/' ||
        $path === 'prek-attendance-video' ||
        $path === 'prek-attendance-notice'
    ) {
        $portal_file = KIDAZZLE_THEME_DIR . '/shorts/prek_video_review.html';
        if (file_exists($portal_file)) {
            status_header(200);
            header('Content-Type: text/html; charset=UTF-8');
            header('X-Robots-Tag: noindex, nofollow');
            readfile($portal_file);
            exit;
        }
    }

    // 2. Check if this is the thumbnail image
    if ($path === 'shorts/prek_attendance_notice_thumbnail.jpg') {
        $thumb_file = KIDAZZLE_THEME_DIR . '/shorts/prek_attendance_notice_thumbnail.jpg';
        if (file_exists($thumb_file)) {
            status_header(200);
            header('Content-Type: image/jpeg');
            header('Cache-Control: public, max-age=86400');
            header('Accept-Ranges: bytes');
            readfile($thumb_file);
            exit;
        }
    }

    // 3. Media streaming / redirect handler for video & audio assets under /shorts/
    if (strpos($path, 'shorts/') === 0) {
        $filename = basename($path);

        $allowed_media = array(
            'prek_attendance_robert_hoodie_master.mp4',
            'prek_attendance_robert_hoodie_subtitled.mp4',
            'prek_attendance_robert_hoodie_isolated.mp4',
            'prek_attendance_robert_hoodie_sts.mp4',
            'prek_attendance_notice_thumbnail.jpg',
            'robert_elevenlabs_isolated.mp3',
            'robert_elevenlabs_sts.mp3',
            'robert_real_recording_prek.mp3'
        );

        if (in_array($filename, $allowed_media, true)) {
            $local_path = KIDAZZLE_THEME_DIR . '/shorts/' . $filename;
            if (file_exists($local_path) && filesize($local_path) > 0) {
                $mime = (substr($filename, -4) === '.mp4') ? 'video/mp4' : ((substr($filename, -4) === '.mp3') ? 'audio/mpeg' : 'image/jpeg');
                status_header(200);
                header('Content-Type: ' . $mime);
                header('Cache-Control: public, max-age=86400');
                header('Accept-Ranges: bytes');
                header('Content-Length: ' . filesize($local_path));
                readfile($local_path);
                exit;
            }

            // High-speed CDN/storage origin stream redirect (Transparent to browser video player)
            $origin_url = 'https://openseelight.bullmight.com/shorts/' . $filename;
            if (substr($filename, -4) === '.mp3') {
                $origin_url = 'https://openseelight.bullmight.com/ugc_bases/' . $filename;
            }
            wp_redirect($origin_url, 307);
            exit;
        }
    }
}
