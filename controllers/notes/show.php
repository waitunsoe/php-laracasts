<?php

$config = require base_path('config.php');
$db = new Database($config['database'], 'admin', 'wtsisadmin');

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

view('notes/show.view.php', [
    'heading' => 'Note',
    'note' => $note
]);
