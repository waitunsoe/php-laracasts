<?php
require_once 'functions.php';
// require_once 'router.php';
require_once 'Database.php';

$config = require('config.php');

$db = new Database($config['database'], 'username', 'password');
$posts = $db->query('SELECT * FROM posts')->fetchAll();
// dd($posts);
foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}
