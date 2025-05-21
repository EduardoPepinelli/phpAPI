<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'GET' && $_SERVER['REQUEST_URI'] === '/api/hello') {
    echo json_encode(['message' => 'Olá, mundo! API funcionando.']);
} else {
    http_response_code(404);
    echo json_encode(['error' => 'Endpoint não encontrado']);
}
