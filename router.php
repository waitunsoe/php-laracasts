<?php

$uri = parse_url($_SERVER["REQUEST_URI"])['path'];

// if ($uri === '/') {
//     require_once 'controllers/index.php';
// } elseif ($uri === '/about') {
//     require_once 'controllers/about.php';
// } elseif ($uri === '/contact') {
//     require_once 'controllers/contact.php';
// }

$routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/notes' => 'controllers/notes.php',
    '/note' => 'controllers/note.php',
    '/contact' => 'controllers/contact.php',
];

function abort($statusCode = 404)
{
    http_response_code($statusCode);
    require_once "views/$statusCode.php";
    die();
}

function routeToController($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        require_once $routes[$uri];
    } else {
        abort();
    }
}

routeToController($uri, $routes);
