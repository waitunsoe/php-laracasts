<?php

$config = require('config.php');

$heading = 'Note';
$currentUserId = 1;

$db = new Database($config['database'], 'username', 'password');

$sql = 'SELECT * FROM posts WHERE id=:id';
$note = $db->query($sql, ['id' => $_GET["id"]])->fetch();

if (!$note) {
    abort();
}


if ($note['user_id'] !== $currentUserId) {
    abort(Response::FORBIDDEN);
}

require_once 'views/note.view.php';
