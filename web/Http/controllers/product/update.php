<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$currentUserId = 222221;

// найди соответствующий продукт
$product = $db->query('select * from product where id = :id', [
    'id' => $_POST['id']
])->findOrFail();

// разрешить текущему пользователю редактировать продукт
authorize($product['user_id'] === $currentUserId);

// подтвердить форму
$errors = [];

if (! Validator::string($_POST['body'], 1, 10)) {
    $errors['body'] = 'Допускается объем не более 1000 символов.';
}

// если ошибок проверки нет, обновить запись в таблице базы данных продукта.
if (count($errors)) {
    return view('product/edit.view.php', [
        'heading' => 'Редактировать запись',
        'errors' => $errors,
        'product' => $product
    ]);
}

$db->query('update product set body = :body where id = :id', [
    'id' => $_POST['id'],
    'body' => $_POST['body']
]);

// перенаправить пользователя
redirect('/product');
