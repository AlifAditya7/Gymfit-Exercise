<?php

namespace App\Controllers;

class Pages extends BaseController
{

    public function profil()
    {
        $data = [
            'title' => 'Profil | Gymfit Excercise' 
        ];
        return view('pages/profil', $data);
    }

    public function program_latihan()
    {
        $data = [
            'title' => 'Program Latihan | Gymfit Excercise'
        ];
        
        return view('pages/program_latihan', $data);
    }

    public function panduan_nutrisi()
    {
        $data = [
            'title' => 'Panduan Nutrisi | Gymfit Excercise' 
        ];
        return view('pages/panduan_nutrisi', $data);
    }

    public function lokasi_gym()
    {
        $data = [
            'title' => 'Lokasi Gym Terdekat | Gymfit Excercise' 
        ];
        return view('pages/lokasi_gym', $data);
    }

    public function bmi()
    {
        $data = [
            'title' => 'Body Mass Index | Gymfit Excercise' 
        ];
        return view('pages/bmi', $data);
    }
}