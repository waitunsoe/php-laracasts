<?php

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database'], 'username', 'password');

$currentUserId = 1;
$sql = 'SELECT * FROM posts WHERE id=:id';
$note = $db->query($sql, ['id' => $_GET["id"]])->findOrFail();

authorize($note['user_id'] === $currentUserId);

// dd($_POST);
$delSql = 'DELETE FROM posts WHERE id=:id';
$db->query($delSql, ['id' => $_POST['id']]);
header('location: /notes');
exit();
