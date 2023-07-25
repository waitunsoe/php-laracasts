<?php

require base_path('Validator.php');

$config = require base_path('config.php');
$db = new Database($config['database'], 'username', 'password');

$errors = [];

if ($_SERVER["REQUEST_METHOD"] === 'POST') {

    // $validator = new Validator;

    // dd($validator->string($_POST["title"], 1, 10));

    if (!Validator::string($_POST["title"], 1, 1000)) {
        $errors['title'] = 'Title field is required';
    }

    if (empty($errors)) {
        $db->query("INSERT INTO posts (title, user_id) VALUES (:title, :user_id)", [
            'title' => $_POST["title"],
            'user_id' => 1,
        ]);
    }
}

view('notes/create.view.php', [
    'heading' => 'Create New Note',
    'errors' => $errors
]);
