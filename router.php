<?php
// router.php
$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

if ($uri !== '/' && file_exists(__DIR__ . $uri)) {
    return false;
}

$cleanPath = trim($uri, '/');

if ($cleanPath && file_exists(__DIR__ . "/{$cleanPath}.php")) {
    require __DIR__ . "/{$cleanPath}.php";
    exit;
}

if (file_exists(__DIR__ . '/404.php')) {
    http_response_code(404);
    require __DIR__ . '/404.php';
    exit;
}

require __DIR__ . '/index.php';
