<?php

$routes = require('routes.php');

function routeToController($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        require_once $routes[$uri];
    } else {
        abort();
    }
}

function abort($statusCode = 404)
{
    http_response_code($statusCode);
    require_once "views/$statusCode.php";
    die();
}

$uri = parse_url($_SERVER["REQUEST_URI"])['path'];
routeToController($uri, $routes);
