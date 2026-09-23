<?php
/**
 * Maintenance Lock Cleaner (Protected Utility)
 *
 * @package kidazzle_Theme
 */

if (!isset($_GET['repair_key']) || $_GET['repair_key'] !== 'kidazzle_recover_9921') {
    http_response_code(403);
    die('Forbidden.');
}

$found = [];
$deleted = [];

$paths = [
    dirname(dirname(dirname(__DIR__))) . '/.maintenance',
    __DIR__ . '/../../.maintenance',
    __DIR__ . '/../../../.maintenance',
    ($_SERVER['DOCUMENT_ROOT'] ?? '') . '/.maintenance'
];

foreach ($paths as $path) {
    if (!empty($path) && file_exists($path)) {
        $found[] = $path;
        if (@unlink($path)) {
            $deleted[] = $path;
        }
    }
}

header('Content-Type: application/json');
echo json_encode([
    'success' => true,
    'timestamp' => time(),
    'php_version' => phpversion(),
    'found' => $found,
    'deleted' => $deleted,
    'doc_root' => $_SERVER['DOCUMENT_ROOT'] ?? '',
    'theme_dir' => __DIR__
]);
