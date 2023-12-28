<?php

use Core\App;
use Core\Authenticator;
use Core\Database;

$db = App::resolve(Database::class);

$phoneNumber = $_SESSION['phoneNumber'];
$email = $_SESSION['email'];
$name = $_SESSION['name'];
$message_id = $_SESSION['message_id'];
$sms = $_POST['codeFromSms'];

if ($message_id === $sms) {
    $user = $db->query('INSERT INTO userstest(email, phoneNumber, name) VALUES(:email, :phoneNumber, :name)', [
        'email' => $email,
        'phoneNumber' => $phoneNumber,
        'name' => $name
        //'password' => password_hash($password, PASSWORD_BCRYPT)
    ]);

    (new Authenticator)->login(['email' => $email]);

    redirect('/');
} else {
    $errors = [];

    $errors['codeFromSms'] = 'Не верный код.';

    if (! empty($errors)) {
        return view('confirmation/create.view.php', [
            'errors' => $errors
        ]);
    }
}

