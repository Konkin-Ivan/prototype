<?php

use Core\Router;
use Core\Session;
use Core\ValidationException;

const BASE_PATH = __DIR__.'/../';

session_start();

require_once BASE_PATH . 'vendor/autoload.php';
require_once BASE_PATH . 'Core/functions.php';
require_once BASE_PATH . 'vendor/smsimple-api/smsimple.class.php';
require_once BASE_PATH . 'bootstrap.php';

$router = new Router();
require_once base_path('routers.php');

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

try {
    $router->route($uri, $method);
} catch (ValidationException $exception) {
    Session::flash('errors', $exception->errors);
    Session::flash('old', $exception->old);

    return redirect($router->previousUrl());
}

Session::unflash();
