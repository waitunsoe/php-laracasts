<?php
require_once 'functions.php';
// require_once 'router.php';

// connect to our MYSQL database;


$servername = "localhost";
$port = 3306;
$dbname = "test";
$dsn = "mysql:host=$servername;port=$port;dbname=$dbname";

$username = "username";
$password = "password";

$pdo = new PDO($dsn, $username, $password);

$statement = $pdo->prepare('SELECT * FROM posts');
$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

// dd($posts);
foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}
