<?php

use Core\App;
use Core\Database;
use Core\Validator;

$user_email = $_POST['email'];
$user_password = $_POST['password'];

$errors = [];

if (!Validator::email($user_email)) {
    $errors['email'] = 'Please provide a valid email address.';
}
if (!Validator::string($user_password, 7, 255)) {
    $errors['password'] = 'Please provide provide a password of at least 7 characters.';
}

if (!empty($errors)) {
    return view('registration/create.view.php', [
        'errors' => $errors,
    ]);
}

$db = App::resolve(Database::class);

$user = $db->query('select * from users where email = :email', [
    'email' => $user_email
])->get();

if ($user) {
    header('location: /');
    exit();
}

$db->query('insert into users (email, password) values (:email, :password);', [
    'email' => $user_email,
    'password' => $user_password
]);

$_SESSION['user'] = [
    'email' => $user_email
];

header('location: /');
exit();
