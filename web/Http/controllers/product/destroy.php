<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$currentUserId = 1;

$product = $db->query('select * from product where id = :id', [
    'id' => $_POST['id']
])->findOrFail();

authorize($product['user_id'] === $currentUserId);

$db->query('delete from product where id = :id', [
    'id' => $_POST['id']
]);

header('location: /product');
exit();
