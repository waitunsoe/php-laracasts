<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


const BASE_PATH = __DIR__ . '/../';

require_once BASE_PATH . 'functions.php';

// require_once base_path('Response.php');
// require_once base_path('Database.php');
spl_autoload_register(function ($class) {
    require base_path('Core/' . $class . '.php');
});

require_once base_path('router.php');
