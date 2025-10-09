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
            'purchaseUrl' => 'example.com'
        ],
        [
            'name' => 'Yes',
            'author' => 'Faaaaaaaa',
            'purchaseUrl' => 'example2.com'
        ]

    ];
    ?>


    <ul>
        <?php foreach ($books as $book): ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

</body>

</html>