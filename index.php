<?php
require_once 'functions.php';
// require_once 'router.php';
require_once 'Database.php';

$db = new Database;
$posts = $db->query('SELECT * FROM posts')->fetchAll(PDO::FETCH_ASSOC);
// dd($posts);
foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}
