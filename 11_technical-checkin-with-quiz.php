<?php

# start the variable with $ and end the statement with ;
$name = 'Codewall Technology';
$cost = 50;

$ct = [
    'name' => 'Codewall Technology',
    'cost' => 50,
    'courses' => ['app', 'web', 'design']
];

$ct['name']; // Codewall Technology
$ct['cost']; // 50

if ($ct['cost'] > 100) {
    echo 'NOT interested!';
}

foreach($ct['courses'] as $course){
    echo $course ."<br>";
}

function register($username, $password){
    // create user in DB
    // send confirmed email
}