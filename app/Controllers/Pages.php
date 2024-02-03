<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function register(): string
    {
        return view('login/user_register');
    }
}
