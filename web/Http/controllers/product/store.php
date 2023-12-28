<?php

use Core\App;
use Core\Validator;
use Core\Database;

$db = App::resolve(Database::class);
$errors = [];

if (! Validator::string($_POST['body'], 1, 1000)) {
    $errors['body'] = 'Требуется объем не более 1000 символов.';
}

if (! empty($errors)) {
    return view("product/create.view.php", [
        'heading' => 'Создать запись',
        'errors' => $errors
    ]);
}

$db->query('INSERT INTO product(body, user_id) VALUES(:body, :user_id)', [
    'body' => $_POST['body'],
    'user_id' => 1
]);

redirect('/product');
