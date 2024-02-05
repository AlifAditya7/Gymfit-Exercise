<?php

namespace App\Controllers;

class Pages extends BaseController
{

    public function profil()
    {
        if (session()->get('username') == '') {
            session()->setFlashdata('gagal', 'Anda belum login');
            return redirect()->to(base_url('login'));
         }
        $data = [
            'title' => 'Profil | Gymfit Excercise' 
        ];
        return view('pages/profil', $data);
    }

    public function program_latihan()
    {
        if (session()->get('username') == '') {
            session()->setFlashdata('gagal', 'Anda belum login');
            return redirect()->to(base_url('login'));
         }
        $data = [
            'title' => 'Program Latihan | Gymfit Excercise'
        ];
        
        return view('pages/program_latihan', $data);
    }

    public function panduan_nutrisi()
    {
        if (session()->get('username') == '') {
            session()->setFlashdata('gagal', 'Anda belum login');
            return redirect()->to(base_url('login'));
         }
        $data = [
            'title' => 'Panduan Nutrisi | Gymfit Excercise' 
        ];
        return view('pages/panduan_nutrisi', $data);
    }

    public function lokasi_gym()
    {
        if (session()->get('username') == '') {
            session()->setFlashdata('gagal', 'Anda belum login');
            return redirect()->to(base_url('login'));
         }
        $data = [
            'title' => 'Lokasi Gym Terdekat | Gymfit Excercise' 
        ];
        return view('pages/lokasi_gym', $data);
    }
}