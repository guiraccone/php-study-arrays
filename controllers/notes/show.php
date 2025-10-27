<?php

use Core\Database;

$config = require basePath("config.php");
$db = new Database($config['database']);
$currentUserId = 1;


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $note = $db->query("select * from notes where id = :id;", [
        'id' =>  $_GET['id']
    ])->findOrFail();

    authorize($note['user_id'] === $currentUserId);

    $note = $db->query("delete from notes where id = :id;", [
        'id' =>  $_GET['id']
    ]);

    header('location: /notes');
    exit();
}



$note = $db->query("select * from notes where id = :id;", [
    'id' =>  $_GET['id']
])->findOrFail();

authorize($note['user_id'] === $currentUserId);

view("notes/show.view.php", [
    'heading' => 'Note',
    'note' => $note
]);
