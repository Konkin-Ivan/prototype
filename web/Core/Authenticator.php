<?php

namespace Core;

class Authenticator
{
    public function attempt($email)
    {
        $user = App::resolve(Database::class)
            ->query('select * from userstest where email = :email', [
            'email' => $email
        ])->find();

        if ($user) {

                $this->login([
                    'email' => $email
                ]);

                return true;

        }

        return false;
    }

    public function login($user)
    {
        $_SESSION['user'] = [
            'email' => $user['email']
        ];

        session_regenerate_id(true);
    }

    public function logout()
    {
        Session::destroy();
    }
}