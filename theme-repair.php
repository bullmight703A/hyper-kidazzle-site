<?php
// Surgical Maintenance Lock Cleaner
 = [];
 = [];

 = [
    dirname(dirname(dirname(__DIR__))) . '/.maintenance',
    __DIR__ . '/../../.maintenance',
    __DIR__ . '/../../../.maintenance',
    (['DOCUMENT_ROOT'] ?? '') . '/.maintenance'
];

foreach ( as ) {
    if ( && file_exists()) {
        [] = ;
        if (@unlink()) {
            [] = ;
        }
    }
}

header('Content-Type: application/json');
echo json_encode([
    'success' => true,
    'timestamp' => time(),
    'php_version' => phpversion(),
    'found' => ,
    'deleted' => ,
    'doc_root' => ['DOCUMENT_ROOT'] ?? '',
    'theme_dir' => __DIR__
]);
