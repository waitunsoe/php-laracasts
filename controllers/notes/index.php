<?php

use Core\App;
use Core\Database;

// $db = App::container()->resolve('Core\Database');
$db = App::resolve(Database::class);

$sql = 'SELECT * FROM posts WHERE user_id=1';
$notes = $db->query($sql)->get();

view('notes/index.view.php', [
    'heading' => 'My Notes',
    'notes' => $notes
]);
