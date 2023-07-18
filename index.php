<?php require_once './10_seperate-php-logic-from-template.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lambda Functions</title>
    <style>
        body {
            display: grid;
            place-items: center;
            height: 100vh;
            font-family: sans-serif;
            font-size: 2rem;
        }
    </style>
</head>
<body>

    <ul>
        <?php foreach ($filteredBooks as $book) : ?>
            <li>
                <?= $book['name'] ?> - By <?= $book['author'] ?>
            </li>
        <?php endforeach; ?>
    </ul>

</body>
</html>