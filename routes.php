<?php

// return [
//     '/' => 'controllers/index.php',
//     '/about' => 'controllers/about.php',
//     '/notes' => 'controllers/notes/index.php',
//     '/note' => 'controllers/notes/show.php',
//     '/notes/create' => 'controllers/notes/create.php',
//     '/contact' => 'controllers/contact.php',
// ];

$router->get('/', 'controllers/index.php');
$router->get('/about', 'controllers/about.php');
$router->get('/contact', 'controllers/contact.php');

$router->get('/notes', 'controllers/notes/index.php');
$router->get('/note', 'controllers/notes/show.php');

$router->get('/note/edit', 'controllers/notes/edit.php');
$router->put('/note/update', 'controllers/notes/update.php');

$router->get('/notes/create', 'controllers/notes/create.php');
$router->post('/notes/store', 'controllers/notes/store.php');
$router->delete('/note/delete', 'controllers/notes/destroy.php');