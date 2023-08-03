<?php

use Core\Response;

function dd($value)
{
    echo '<pre>';
    if (is_array($value)) {
        print_r($value);
    } else {
        var_dump($value);
    }
    echo '</pre>';
    die();
}

function uriIs($value)
{
    return $_SERVER['REQUEST_URI'] === $value;
}

function abort($statusCode = 404)
{
    http_response_code($statusCode);
    require_once base_path("views/$statusCode.php");
    die();
}

function authorize($condition, $status = Response::FORBIDDEN)
{
    if (!$condition) {
        abort($status);
    }
}

function redirect($path)
{
    header('location: ' . $path);
    exit();
}

function base_path($path)
{
    return BASE_PATH . $path;
}

function view($path, $attributes = [])
{
    extract($attributes);
    require_once base_path('views/' . $path);
}
