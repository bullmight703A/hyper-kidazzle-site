<?php
/**
 * Summit-only Brigance pilot intake and scoring endpoint.
 *
 * Optional access code for non-logged-in teacher testing:
 * define('KIDAZZLE_SUMMIT_BRIGANCE_PILOT_KEY', 'change-this-code');
 */

if (!defined('ABSPATH')) {
    exit;
}

function kidazzle_register_brigance_assessment_cpt()
{
    register_post_type('brigance_assessment', array(
        'labels' => array(
            'name' => 'Brigance Assessments',
            'singular_name' => 'Brigance Assessment',
        ),
        'public' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        'capability_type' => 'post',
        'supports' => array('title'),
        'menu_icon' => 'dashicons-clipboard',
    ));
}
add_action('init', 'kidazzle_register_brigance_assessment_cpt');

add_action('rest_api_init', function () {
    register_rest_route('kidazzle/v1', '/brigance-summit-assessment', array(
        'methods' => 'POST',
        'callback' => 'kidazzle_handle_summit_brigance_assessment',
        'permission_callback' => 'kidazzle_brigance_pilot_permission',
    ));
});

function kidazzle_brigance_pilot_permission(WP_REST_Request $request)
{
    if (current_user_can('edit_posts')) {
        return true;
    }

    if (!defined('KIDAZZLE_SUMMIT_BRIGANCE_PILOT_KEY') || KIDAZZLE_SUMMIT_BRIGANCE_PILOT_KEY === '') {
        return new WP_Error(
            'pilot_key_missing',
            'Summit Brigance pilot access is not configured.',
            array('status' => 403)
        );
    }

    $params = $request->get_json_params();
    $submitted_key = isset($params['pilot_access_code']) ? (string) $params['pilot_access_code'] : '';

    if (!hash_equals((string) KIDAZZLE_SUMMIT_BRIGANCE_PILOT_KEY, $submitted_key)) {
        return new WP_Error(
            'pilot_locked',
            'Brigance AI Lesson Plan individualization is currently in Testing Phase for SUMMIT LOCATION ONLY.',
            array('status' => 403)
        );
    }

    return true;
}

function kidazzle_handle_summit_brigance_assessment(WP_REST_Request $request)
{
    $body = $request->get_json_params();
    if (!is_array($body)) {
        return new WP_REST_Response(array('ok' => false, 'message' => 'Invalid JSON payload.'), 400);
    }

    $location_id = sanitize_key($body['location_id'] ?? '');
    if ($location_id !== 'summit') {
        return new WP_REST_Response(array(
            'ok' => false,
            'status' => 'pilot_locked',
            'message' => 'Brigance AI Lesson Plan individualization is active ONLY for Summit during this testing phase.',
        ), 423);
    }

    $allowed_classrooms = array(
        'summit_infant',
        'summit_toddler_13_24m',
        'summit_2_year_old',
        'summit_3_year_old',
        'summit_pre_k_4yo',
    );

    $classroom = sanitize_key($body['classroom'] ?? '');
    if (!in_array($classroom, $allowed_classrooms, true)) {
        return new WP_REST_Response(array('ok' => false, 'message' => 'Invalid Summit classroom.'), 422);
    }

    $responses = isset($body['responses']) && is_array($body['responses']) ? $body['responses'] : array();
    if (count($responses) < 10) {
        return new WP_REST_Response(array('ok' => false, 'message' => 'Assessment is incomplete.'), 422);
    }

    $clean_responses = array();
    foreach ($responses as $response) {
        if (!is_array($response)) {
            continue;
        }

        $status = sanitize_key($response['status'] ?? '');
        if (!in_array($status, array('mastery', 'emerging', 'needs_support'), true)) {
            continue;
        }

        $clean_responses[] = array(
            'domain' => sanitize_text_field($response['domain'] ?? ''),
            'item_id' => sanitize_key($response['item_id'] ?? ''),
            'item_label' => sanitize_text_field($response['item_label'] ?? ''),
            'status' => $status,
        );
    }

    if (count($clean_responses) < 10) {
        return new WP_REST_Response(array('ok' => false, 'message' => 'Assessment responses are invalid.'), 422);
    }

    $teacher_name = sanitize_text_field($body['teacher_name'] ?? '');
    $child_first_name = sanitize_text_field($body['child_first_name'] ?? '');
    $child_last_name = sanitize_text_field($body['child_last_name'] ?? '');
    $child_display_name = trim($child_first_name . ' ' . $child_last_name);

    if ($teacher_name === '' || $child_display_name === '') {
        return new WP_REST_Response(array('ok' => false, 'message' => 'Teacher and child name are required.'), 422);
    }

    $summary = kidazzle_score_brigance_responses($clean_responses);
    $lesson_plan_payload = kidazzle_build_brigance_lesson_payload($body, $summary);

    $post_id = wp_insert_post(array(
        'post_type' => 'brigance_assessment',
        'post_status' => 'private',
        'post_title' => sprintf('Summit Brigance - %s - %s - %s', $child_display_name, $classroom, current_time('Y-m-d')),
    ), true);

    if (is_wp_error($post_id)) {
        return new WP_REST_Response(array('ok' => false, 'message' => 'Could not save assessment.'), 500);
    }

    update_post_meta($post_id, 'location_id', 'summit');
    update_post_meta($post_id, 'classroom', $classroom);
    update_post_meta($post_id, 'age_group', sanitize_text_field($body['age_group'] ?? ''));
    update_post_meta($post_id, 'teacher_name', $teacher_name);
    update_post_meta($post_id, 'child_first_name', $child_first_name);
    update_post_meta($post_id, 'child_last_name', $child_last_name);
    update_post_meta($post_id, 'child_identifier', sanitize_text_field($body['child_identifier'] ?? ''));
    update_post_meta($post_id, 'assessment_date', sanitize_text_field($body['assessment_date'] ?? current_time('Y-m-d')));
    update_post_meta($post_id, 'assessment_responses_json', wp_json_encode($clean_responses));
    update_post_meta($post_id, 'brigance_summary_json', wp_json_encode($summary));
    update_post_meta($post_id, 'lesson_plan_payload_json', wp_json_encode($lesson_plan_payload));

    return new WP_REST_Response(array(
        'ok' => true,
        'assessment_id' => $post_id,
        'summary' => $summary,
        'lesson_plan_payload' => $lesson_plan_payload,
    ), 200);
}

function kidazzle_score_brigance_responses(array $responses)
{
    $domain_scores = array();

    foreach ($responses as $response) {
        $domain = $response['domain'];
        if (!isset($domain_scores[$domain])) {
            $domain_scores[$domain] = array(
                'domain' => $domain,
                'mastery' => 0,
                'emerging' => 0,
                'needs_support' => 0,
                'total' => 0,
                'needs_support_items' => array(),
            );
        }

        $status = $response['status'];
        $domain_scores[$domain][$status]++;
        $domain_scores[$domain]['total']++;

        if ($status !== 'mastery') {
            $domain_scores[$domain]['needs_support_items'][] = $response['item_label'];
        }
    }

    $focus_areas = array();
    foreach ($domain_scores as $domain => &$score) {
        $score['mastery_rate'] = $score['total'] > 0 ? round($score['mastery'] / $score['total'], 2) : 0;
        $score['status'] = 'Mastery';

        if ($score['needs_support'] > 0) {
            $score['status'] = 'Needs Support';
        } elseif ($score['emerging'] > 0 || $score['mastery_rate'] < 0.75) {
            $score['status'] = 'Emerging';
        }

        if ($score['status'] !== 'Mastery') {
            $focus_areas[] = array(
                'domain' => $domain,
                'status' => $score['status'],
                'target_students_count' => 1,
                'recommended_activity' => kidazzle_brigance_activity_for_domain($domain),
                'observed_items' => array_slice($score['needs_support_items'], 0, 4),
            );
        }
    }
    unset($score);

    return array(
        'domain_scores' => array_values($domain_scores),
        'focus_areas' => $focus_areas,
        'overall_status' => empty($focus_areas) ? 'Mastery' : 'Individualization Needed',
    );
}

function kidazzle_brigance_activity_for_domain($domain)
{
    $activities = array(
        'Physical / Motor' => 'Fine-motor centers, outdoor balance work, and teacher-modeled movement games',
        'Language & Communication' => 'Picture vocabulary, repeated read-alouds, classroom direction games, and teacher narration',
        'Cognitive & Literacy' => 'Matching, sorting, counting, shape hunts, puzzles, and story sequence cards',
        'Self-Help & Adaptive' => 'Arrival, meal, hygiene, and classroom job routines with visual prompts',
        'Social-Emotional' => 'Turn-taking games, emotion cards, calm-down routines, and cooperative center play',
    );

    return $activities[$domain] ?? 'Small-group teacher observation and targeted practice centers';
}

function kidazzle_build_brigance_lesson_payload(array $body, array $summary)
{
    return array(
        'testing_phase' => true,
        'location_id' => 'summit',
        'location_name' => 'KIDazzle Summit Location',
        'classroom' => sanitize_text_field($body['classroom_label'] ?? $body['classroom'] ?? ''),
        'week_of' => sanitize_text_field($body['week_of'] ?? gmdate('Y-m-d', strtotime('next monday'))),
        'theme' => sanitize_text_field($body['theme'] ?? 'Teacher-selected weekly theme'),
        'classroom_brigance_summary' => array(
            'total_students' => 1,
            'focus_areas' => $summary['focus_areas'],
        ),
    );
}
