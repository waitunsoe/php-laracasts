<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$errors = [];

if (!Validator::string($_POST["title"], 1, 1000)) {
    $errors['title'] = 'Title field is required';
}

if (!empty($errors)) {
    return view('notes/create.view.php', [
        'heading' => 'Create New Note',
        'errors' => $errors
    ]);
}

$db->query("INSERT INTO posts (title, user_id) VALUES (:title, :user_id)", [
    'title' => $_POST["title"],
    'user_id' => 1,
]);

header('location: /notes');
die();
