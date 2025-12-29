<?php

header('Content-Type: application/json');

$routes = require __DIR__ . '/../routes/api.php';

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];

$response = [
    'message' => 'Sistema de Funilaria API',
    'path' => $path,
    'method' => $method,
    'routes' => $routes['v1'] ?? [],
];

echo json_encode($response);
