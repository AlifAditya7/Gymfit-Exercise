<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function register(): string
    {
        return view('login/user_register');
    }
}
