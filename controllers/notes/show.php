<?php

use Core\Database;
use Core\App;

$db = App::resolve(Database::class);

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
