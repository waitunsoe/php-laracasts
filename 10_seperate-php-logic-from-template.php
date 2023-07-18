<?php

$books = [
    [
        'name' => 'book 1',
        'author' => 'author 1',
        'publishedYear' => '2021',
        'purchaseUrl' => 'http://example.com'
    ],
    [
        'name' => 'book 2',
        'author' => 'author 2',
        'publishedYear' => '2022',
        'purchaseUrl' => 'http://example.com'
    ],
    [
        'name' => 'book 3',
        'author' => 'author 1',
        'publishedYear' => '2023',
        'purchaseUrl' => 'http://example.com'
    ],
];

// function filter($items, $key, $value)
// {

//     $filteredItems = [];

//     foreach ($items as $item) {
//         if ($item[$key] === $value) {
//             $filteredItems[] = $item;
//         }
//     }

//     return $filteredItems;
// }

// $filteredBooks = filter($books, 'author', 'author 1');

function filter($items, $fn)
{
    $filteredBooks =     [];

    foreach ($items as $item) {
        if ($fn($item)) {
            // array_push($filteredBooks,$item);
            $filteredBooks[] = $item;
        }
    }

    return $filteredBooks;
}

// $filteredBooks = filter($books, function ($book) {
//     return $book['publishedYear'] > 2000;
// });

$filteredBooks = array_filter($books, function ($book) {
    return $book['publishedYear'] > 2000;
});

