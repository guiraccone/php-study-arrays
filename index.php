<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>

    <h1>Recommended books </h1>

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

    function filter($items, $fn)
    {
        $filteredItems = [];

        foreach ($items as $item) {
            if ($fn($item)) {
                $filteredItems[] = $item;
            }
        }

        return $filteredItems;
    }

    $filteredItems  = filter($books, function ($book) {
        return $book['releaseYear'] <= 2000;
    });

    ?>


    <ul>
        <?php foreach ($filteredItems as $book): ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name'] ?> (<?= $book['releaseYear'] ?>) - by <?= $book['author'] ?>
                </a>
            </li>

        <?php endforeach; ?>
    </ul>


</body>

</html>