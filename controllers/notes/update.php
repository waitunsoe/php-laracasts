<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$currentUserId = 11;

// find the corresponding note
$sql = 'SELECT * FROM posts WHERE id=:id';
$note = $db->query($sql, ['id' => $_POST["id"]])->findOrFail();

// authorize that the current user can edit the note
authorize($note['user_id'] === $currentUserId);

// validate the form
$errors = [];

if (!Validator::string($_POST["title"], 1, 1000)) {
    $errors['title'] = 'Title field is required';
}

// if no validation errors, update the record in the notes database table
if (count($errors)) {
    return view('notes/edit.view.php', [
        'heading' => 'Edit Note',
        'errors' => $errors,
        'note' => $note
    ]);
}

$db->query("UPDATE posts SET title = :title WHERE id = :id", [
    'id' => $_POST['id'],
    'title' => $_POST["title"],
]);

// we direct the user
header('location: /notes');
die();
