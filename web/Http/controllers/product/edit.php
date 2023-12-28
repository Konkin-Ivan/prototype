<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$currentUserId = 1;

$product = $db->query('select * from product where id = :id', [
    'id' => $_GET['id']
])->findOrFail();

authorize($product['user_id'] === $currentUserId);

view("product/edit.view.php", [
    'heading' => 'Edit Note',
    'errors' => [],
    'product' => $product
]);