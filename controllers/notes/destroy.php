<?php

use Core\App;
use Core\Database;

// $db = App::container()->resolve('Core\Database');
$db = App::resolve(Database::class);

$currentUserId = 1;
$sql = 'SELECT * FROM posts WHERE id=:id';
$note = $db->query($sql, ['id' => $_POST["id"]])->findOrFail();

authorize($note['user_id'] === $currentUserId);

// dd($_POST);
$delSql = 'DELETE FROM posts WHERE id=:id';
$db->query($delSql, ['id' => $_POST['id']]);
header('location: /notes');
exit();
