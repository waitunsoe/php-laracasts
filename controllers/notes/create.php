<?php

require 'Validator.php';

$config = require('config.php');
$db = new Database($config['database'], 'usename', 'password');

$heading = 'Create New Note';

if ($_SERVER["REQUEST_METHOD"] === 'POST') {

    // $validator = new Validator;
    $errors = [];

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

require_once './views/notes/create.view.php';
