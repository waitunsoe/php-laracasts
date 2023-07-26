<?php

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database'], 'username', 'password');

$currentUserId = 1;
// dd($_SERVER);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sql = 'SELECT * FROM posts WHERE id=:id';
    $note = $db->query($sql, ['id' => $_GET["id"]])->findOrFail();

    authorize($note['user_id'] === $currentUserId);

    // dd($_POST);
    $delSql = 'DELETE FROM posts WHERE id=:id';
    $db->query($delSql, ['id' => $_GET['id']]);
    header('location: /notes');
    exit();
} else {

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
}
