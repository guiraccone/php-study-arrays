<?php

$books = [
    [
        'name' => 'Dune',
        'author' => 'Frank Herbert',
        'purchaseUrl' => 'example.com',
        'releaseYear' => 1965
    ],
    [
        'name' => 'Dune Messiah',
        'author' => 'Frank Herbert',
        'purchaseUrl' => 'example.com',
        'releaseYear' => 1969
    ],
    [
        'name' => 'Yes',
        'author' => 'Faaaaaaaa',
        'purchaseUrl' => 'example2.com',
        'releaseYear' => 2023

    ]

];


$filteredItems  = array_filter($books, function ($book) {
    return $book['releaseYear'] <= 2000;
});


require "index.view.php";
