<?php

$config = require('config.php');
$db = new Database($config['database'], 'username', 'password');

$heading = 'Note';
$currentUserId = 1;

$sql = 'SELECT * FROM posts WHERE id=:id';
$note = $db->query($sql, ['id' => $_GET["id"]])->findOrFail();

authorize($note['user_id'] === $currentUserId);
// if (!$note) {
//     abort();
// }

// if ($note['user_id'] !== $currentUserId) {
//     abort(Response::FORBIDDEN);
// }

require_once 'views/note.view.php';
