<?php
// router.php
// --------------------------------------------------
// PHP router for clean URLs (no ".php")
// Handles root, static assets, page routing, and 404
// --------------------------------------------------

// 1. Get the requested URI path
// e.g., "/about", "/", "/contact"
$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

// 2. Normalize the path (remove leading/trailing slashes)
$cleanPath = trim($uri, '/');

// 3. ROOT HANDLING: If the request is "/", load index.php
if ($cleanPath === '') {
    require __DIR__ . '/index.php';
    exit;
}

// 4. STATIC FILES: If a file exists on disk (CSS, JS, images, PHP), serve it directly
if (file_exists(__DIR__ . $uri)) {
    return false; // let PHP serve the file normally
}

// 5. CLEAN URL PHP FILES: If a PHP file matches the clean path, include it
// e.g., "/about" → "about.php"
if (file_exists(__DIR__ . "/{$cleanPath}.php")) {
    require __DIR__ . "/{$cleanPath}.php";
    exit;
}

// 6. 404 HANDLING: If nothing matches, serve 404.php if it exists
if (file_exists(__DIR__ . '/404.php')) {
    http_response_code(404);
    require __DIR__ . '/404.php';
    exit;
}

// 7. FALLBACK: As a last resort, serve index.php
require __DIR__ . '/index.php';
