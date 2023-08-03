<?php

use Core\App;
use Core\Database;
use Core\Validator;

$email = $_POST['email'];
$password = $_POST['password'];

// validate the form input
$errors = [];
if (!Validator::email($email)) {
    $errors['email'] = 'Please provide a valid email address';
}
if (!Validator::string($password)) {
    $errors['password'] = 'Please provide a valid password';
}

if (!empty($errors)) {
    return view('sessions/create.view.php', [
        'heading' => 'Login Here!',
        'errors' => $errors
    ]);
}

// login the user if the credentials match

$db = App::resolve(Database::class);

// check email
$user = $db->query('SELECT * FROM users WHERE email = :email', ['email' => $email])->find();

if ($user) {

    // check password
    if (password_verify($password, $user['password'])) {

        login($user);
        header('location: /');
        exit();
    }
}

$errors['email'] = 'Email or password wrong!';
return view('sessions/create.view.php', [
    'heading' => 'Login Here!',
    'errors' => $errors
]);
