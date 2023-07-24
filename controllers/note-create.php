<?php

$config = require('config.php');
$db = new Database($config['database'], 'username', 'password');

$heading = 'Create New Note';

if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    $db->query("INSERT INTO posts (title, user_id) VALUES (:title, :user_id)", [
        'title' => $_POST["title"],
        'user_id' => 1,
    ]);
}

require_once './views/note-create.view.php';
