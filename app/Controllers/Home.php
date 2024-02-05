<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Home | Gymfit Excercise' 
        ];
        return view('home', $data);
    }
}