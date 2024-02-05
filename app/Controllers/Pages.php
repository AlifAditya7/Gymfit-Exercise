<?php

namespace App\Controllers;

class Pages extends BaseController
{

    public function index(): string
    {
        $data = [
            'title' => 'Home | Gymfit Excercise' 
        ];
        return view('home', $data);
    }

    public function profil(): string
    {
        $data = [
            'title' => 'Profil | Gymfit Excercise' 
        ];
        return view('pages/profil', $data);
    }

    public function program_latihan(): string
    {
        $data = [
            'title' => 'Program Latihan | Gymfit Excercise',
            $url = "https://api.api-ninjas.com/v1/exercises",
        ];
        return view('pages/program_latihan', $data);
    }

    public function panduan_nutrisi(): string
    {
        $data = [
            'title' => 'Panduan Nutrisi | Gymfit Excercise' 
        ];
        return view('pages/panduan_nutrisi', $data);
    }

    public function lokasi_gym(): string
    {
        $data = [
            'title' => 'Lokasi Gym Terdekat | Gymfit Excercise' 
        ];
        return view('pages/lokasi_gym', $data);
    }
}