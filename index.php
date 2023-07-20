<?php
require_once 'functions.php';
// require_once 'router.php';
require_once 'Database.php';

$config = require('config.php');

$db = new Database($config['database'], 'admin', 'wtsisadmin');

$id = $_GET["id"];

// $sql = 'SELECT * FROM posts WHERE id = ?';
// $post = $db->query($sql, [$id])->fetch();

$sql = 'SELECT * FROM posts WHERE id = :id';
// $post = $db->query($sql, [':id' => $id])->fetch();
$post = $db->query($sql, ['id' => $id])->fetch();

dd($post);
