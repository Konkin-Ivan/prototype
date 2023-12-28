<?php

use Core\Authenticator;
use Http\Forms\LoginForm;

$form = LoginForm::validate($attributes = [
    'email' => $_POST['email']
]);

$signedIn = (new Authenticator)->attempt(
    $attributes['email']
);

if (!$signedIn) {
    $form->error(
        'email', "Для этого адреса электронной почты не найдена соответствующая учетная запись."
    )->throw();
}

// проверка по смс

redirect('/');
