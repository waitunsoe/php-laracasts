<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();      

use Core\Session;
use Core\ValidationException;

const BASE_PATH = __DIR__ . '/../';

require_once BASE_PATH . 'vendor/autoload.php';
require_once BASE_PATH . 'Core/functions.php';

// require_once base_path('Response.php');
// require_once base_path('Database.php');

// spl_autoload_register(function ($class) {
//     // Core\Database
//     $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
//     require base_path($class . '.php');
// });


require base_path('bootstrap.php');
// require_once base_path('Core/Router.php');
$router = new \Core\Router;

require base_path('routes.php');
$uri = parse_url($_SERVER["REQUEST_URI"])['path'];

// $method = isset($_POST['_method']) ? $_POST['_method'] : $_SERVER["REQUEST_METHOD"];
$method = $_POST['_method'] ?? $_SERVER["REQUEST_METHOD"];
// routeToController($uri, $routes);
// $router->route($uri, $method);

try {
    $router->route($uri, $method);
} catch (ValidationException $exception) {
    Session::flash('errors', $exception->errors);
    Session::flash('old', $exception->old);
    // return redirect('/login');
    // return redirect($_SERVER['HTTP_REFERER']);
    return redirect($router->previousUrl());
}

// unset($_SESSION['_flash']);
Session::unflash();
