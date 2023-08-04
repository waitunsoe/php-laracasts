<?php

view('sessions/create.view.php', [
    'heading' => 'Login Here!',
    'errors' => $_SESSION['_flash']['errors'] ?? []
]);
