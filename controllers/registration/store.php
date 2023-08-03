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
if (!Validator::string($password, 8, 16)) {
    $errors['password'] = 'Please provide a password at least 8';
}

if (!empty($errors)) {
    return view('registration/create.view.php', [
        'heading' => 'Register Here!',
        'errors' => $errors
    ]);
}

$db = App::resolve(Database::class);
// check if the account already exists
$user = $db->query('SELECT * FROM users WHERE email = :email', ['email' => $email])->find();
if ($user) {
    // if yes, redirect to a login page,
    // email already exist

    $errors['email'] = 'Email or password already exist!';
    return view('registration/create.view.php', [
        'heading' => 'Register Here!',
        'errors' => $errors
    ]);
} else {
    // // if no, save one to the database, and then log the user in, and redirect
    // $user = $db->query('INSERT INTO users(email, password) VALUES(:email, :password)', [
    //     'email' => $email,
    //     'password' => password_hash($password, PASSWORD_BCRYPT)
    // ]);

    // // mark that the user has logged in

    // // $_SESSION['user'] = [
    // //     'email' => $email
    // // ];
    // login($user);

    // if no, save one to the database, and then log the user in, and redirect
    $user = $db->query('INSERT INTO users(email, password) VALUES(:email, :password)', [
        'email' => $email,
        'password' => password_hash($password, PASSWORD_BCRYPT)
    ]);

    login($user);

    header('location: /');
    exit();
}
