<?php

$heading = 'Note';

$config = require('config.php');

$db = new Database($config['database'], 'username', 'password');

$sql = 'SELECT * FROM posts WHERE id=:id';
$note = $db->query($sql, ['id' => $_GET["id"]])->fetch();

require_once 'views/note.view.php';
