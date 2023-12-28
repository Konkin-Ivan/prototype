<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);
$products = $db->query('select * from product where user_id = 1')->get();

view("product/index.view.php", [
    'heading' => 'Мое объявление',
    'product' => $products
]);