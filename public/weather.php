<?php

header('Content-Type: application/json');

$file = __DIR__ . '/../storage/current.json';

if (!file_exists($file)) {
    echo json_encode([
        "ok" => false,
        "error" => "current.json non trovato"
    ]);
    exit;
}

if (filesize($file) === 0) {
    echo json_encode([
        "ok" => false,
        "error" => "current.json è vuoto"
    ]);
    exit;
}

echo file_get_contents($file);