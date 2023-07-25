<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


const BASE_PATH = __DIR__ . '/../';

require_once BASE_PATH . 'Core/functions.php';

// require_once base_path('Response.php');
// require_once base_path('Database.php');
spl_autoload_register(function ($class) {
    // Core\Database
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    require base_path($class . '.php');
});

require_once base_path('Core/router.php');
