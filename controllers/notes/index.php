<?php

use Core\Database;

$config = require(base_path('config.php'));

$db = new Database($config['database'], 'username', 'password');

$sql = 'SELECT * FROM posts WHERE user_id=1';
$notes = $db->query($sql)->get();

view('notes/index.view.php', [
    'heading' => 'My Notes',
    'notes' => $notes
]);
