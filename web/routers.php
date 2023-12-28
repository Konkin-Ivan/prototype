<?php

$router->get('/', '/index.php');
$router->get('/about', 'about.php');
$router->get('/contact', 'contact.php');

// Register
$router->get('/register', '/registration/create.php')->only('guest');
$router->post('/register', '/registration/store.php')->only('guest');

// Confirm
$router->get('/confirmation', '/confirmation/create.php')->only('guest');
$router->post('/confirmation', '/confirmation/store.php')->only('guest');

// Login
$router->get('/login', '/session/create.php')->only('guest');
$router->post('/session', '/session/store.php')->only('guest');
$router->delete('/session', '/session/destroy.php')->only('auth');

// Product
$router->get('/products', 'product/index.php')->only('auth');
$router->get('/product', 'product/show.php');
$router->delete('/product', 'product/destroy.php')->only('auth');

$router->get('/product/edit', 'product/edit.php')->only('auth');
$router->patch('/product', 'product/update.php')->only('auth');

$router->get('/products/create', 'product/create.php')->only('auth');
$router->post('/products', 'product/store.php')->only('auth');
