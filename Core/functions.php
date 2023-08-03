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

function login($user)
{
    $_SESSION['user'] = [
        'email' => $user['email']
    ];

    // session_regenerate_id(true);
}

function logout()
{
    $_SESSION = [];
    session_destroy();

    $params = session_get_cookie_params();
    setcookie('PHPSESSID', '', time() - 3600, $params['path'], $params['domain'], $params['secure'], $params['httponly']);
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
