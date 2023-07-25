<?php

$heading = 'My Notes';

$config = require('config.php');

$db = new Database($config['database'], 'username', 'password');

$sql = 'SELECT * FROM posts WHERE user_id=1';
$notes = $db->query($sql)->get();

require_once 'views/notes/index.view.php';
