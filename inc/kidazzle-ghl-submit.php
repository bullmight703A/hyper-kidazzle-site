<?php
/**
 * KIDazzle GA Pre-K lead endpoint.
 *
 * Install as a small WordPress plugin or include from the active theme's
 * functions.php. Store the GHL webhook URL in wp-config.php:
 *
 * define('KIDAZZLE_GHL_GA_PREK_WEBHOOK_URL', 'https://...your-ghl-workflow-webhook...');
 */

if (!defined('ABSPATH')) {
    exit;
}

add_action('rest_api_init', function () {
    register_rest_route('kidazzle/v1', '/ga-prek-lead', [
        'methods' => 'POST',
        'callback' => 'kidazzle_handle_ga_prek_lead',
        'permission_callback' => '__return_true',
    ]);
});

function kidazzle_handle_ga_prek_lead(WP_REST_Request $request) {
    $body = $request->get_json_params();
    if (!is_array($body)) {
        return new WP_REST_Response(['ok' => false, 'message' => 'Invalid request.'], 400);
    }

    $first_name = sanitize_text_field($body['first_name'] ?? '');
    $last_name = sanitize_text_field($body['last_name'] ?? '');
    $email = sanitize_email($body['email'] ?? '');
    $phone = sanitize_text_field($body['phone'] ?? '');

    if ($first_name === '' || $last_name === '' || $email === '' || $phone === '') {
        return new WP_REST_Response(['ok' => false, 'message' => 'Missing required fields.'], 422);
    }

    if (!defined('KIDAZZLE_GHL_GA_PREK_WEBHOOK_URL') || KIDAZZLE_GHL_GA_PREK_WEBHOOK_URL === '') {
        return new WP_REST_Response(['ok' => false, 'message' => 'CRM endpoint is not configured.'], 500);
    }

    $payload = [
        'firstName' => $first_name,
        'lastName' => $last_name,
        'name' => trim($first_name . ' ' . $last_name),
        'email' => $email,
        'phone' => $phone,
        'child_birthdate' => sanitize_text_field($body['child_birthdate'] ?? ''),
        'preferred_contact' => sanitize_text_field($body['preferred_contact'] ?? ''),
        'message' => sanitize_textarea_field($body['message'] ?? ''),
        'program' => sanitize_text_field($body['program'] ?? 'GA Pre-K Lottery - College Park'),
        'source_page' => sanitize_text_field($body['source_page'] ?? 'kidazzle-ga-prek-native-form'),
        'utm_source' => sanitize_text_field($body['utm_source'] ?? ''),
        'utm_medium' => sanitize_text_field($body['utm_medium'] ?? ''),
        'utm_campaign' => sanitize_text_field($body['utm_campaign'] ?? ''),
        'utm_content' => sanitize_text_field($body['utm_content'] ?? ''),
        'utm_term' => sanitize_text_field($body['utm_term'] ?? ''),
    ];

    $response = wp_remote_post(KIDAZZLE_GHL_GA_PREK_WEBHOOK_URL, [
        'timeout' => 12,
        'headers' => [
            'Content-Type' => 'application/json',
        ],
        'body' => wp_json_encode($payload),
    ]);

    if (is_wp_error($response)) {
        return new WP_REST_Response([
            'ok' => false,
            'message' => 'CRM submission failed.',
        ], 502);
    }

    $status = wp_remote_retrieve_response_code($response);
    if ($status < 200 || $status >= 300) {
        return new WP_REST_Response([
            'ok' => false,
            'message' => 'CRM rejected submission.',
            'status' => $status,
        ], 502);
    }

    return new WP_REST_Response(['ok' => true], 200);
}
