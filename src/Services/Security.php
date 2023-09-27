<?php

namespace App\Services;

use App\Entity\User;

class Security
{
    public const EMAIL = 'demo@demo.fr';
    public const PWD = 'demo';
    public array $session;

    public function init()
    {
        session_start();
        $this->session = &$_SESSION;
    }

    public function login($email, $password)
    {

        if($email == self::EMAIL && $password == self::PWD) {

            $user = new User($email, $password);

            $this->session['user'] = serialize($user);
        }
    }

    public function logout()
    {
        $this->session['user'] = null;
    }
}
