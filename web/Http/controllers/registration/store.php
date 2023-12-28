<?php

use Core\App;
use Core\Authenticator;
use Core\Database;
use Core\Validator;
use Http\Forms\LoginForm;

$db = App::resolve(Database::class);

$email = $_POST['email'];
$phoneNumber = $_POST['phoneNumber'];
$name = $_POST['name'];
//$password = $_POST['password'];

$_SESSION['email'] = $email;
$_SESSION['phoneNumber'] = $phoneNumber;
$_SESSION['name'] = $name;
//$_SESSION['password'] = $password;

$errors = [];

if (!Validator::email($email)) {
   $errors['email'] = 'Пожалуйста, представьте действующий адрес электронной почты.';
}

//if (!Validator::string($password, 7, 255)) {
//    $errors['password'] = 'Пожалуйста, укажите пароль длиной не менее семи символов.';
//}

if (!Validator::validateTel($phoneNumber)) {
    $errors['phoneNumber'] = 'Телефон введен не корректно.';
}

$user = $db->query('select * from userstest where email = :email', [
    'email' => $email
])->find();

if ($user) {
    $errors['email'] = "Пользователь с таким адресом: {$email} почты уже существует.";
} else {
    sendSms($phoneNumber);

    redirect('/confirmation');
}

if (! empty($errors)) {
    return view('registration/create.view.php', [
        'errors' => $errors
    ]);
}