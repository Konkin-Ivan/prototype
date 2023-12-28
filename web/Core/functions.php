<?php

use Core\Response;

function urlIs($value): bool
{
    return $_SERVER['REQUEST_URI'] === $value;
}

function abort($code = 404): void
{
    http_response_code($code);

    require base_path("templates/{$code}.php");

    die();
}

function authorize($condition, $status = Response::FORBIDDEN): bool
{
    if (! $condition) {
        abort($status);
    }

    return true;
}

function base_path($path): string
{
    return BASE_PATH . $path;
}

function view($path, $attributes = []): void
{
    extract($attributes);

    require base_path('templates/' . $path);
}

function redirect($path): void
{
    header("location: {$path}");
    exit();
}

function old($key, $default = ''): mixed
{
    return Core\Session::get('old')[$key] ?? $default;
}

function sendSms($phoneNumber): void
{
//    $sms = new SMSimple([
//        'url'      => 'http://api.smsimple.ru',
//        'username' => 'Xenlp_dev', // имя учетной записи
//        'password' => '3Brother', // и пароль
//    ]);
//
//    try {
//        // Подключаемся к сервису
//        $sms->connect();
//
//        // при помощи метода $sms->origins() можно получить список зарегистрированных подписей отправителя
//        $origin_id = '';
//        $message = 'Hello, world!'; // сообщение в кодировке UTF-8
//
//        // Производим отправку сообщения
//        $message_id = $sms->send($origin_id, $phoneNumber, $message);
//
//        // Записываем в сессию $message_id
//        $_SESSION['message_id'] = $message_id;
//
//        // В случае успешной отправки получаем $message_id, по которому можно проверить статус доставки сообщения
//        $success = 'done';
//        $suc_desc = 'Сообщение #'.$message_id.' отправлено';
//
//
//    }
//    catch (SMSimpleException $e) {
//        echo $e->getMessage();
//    }
    $message_id = '112';
    $_SESSION['message_id'] = $message_id;
}
