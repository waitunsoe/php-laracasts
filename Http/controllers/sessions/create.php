<?php

use Core\Session;

view('sessions/create.view.php', [
    'heading' => 'Login Here!',
    // 'errors' => $_SESSION['_flash']['errors'] ?? []
    'errors' => Session::get('errors') ?? []
]);
