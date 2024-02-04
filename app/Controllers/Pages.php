<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index() 
    {
        if (session()->get('username') == '') {
            session()->setFlashdata('gagal', 'Anda belum login');
            return redirect()->to(base_url('login'));
         }
         return view('user_view');
    }
    public function informasi_pengguna() 
    {
        if (session()->get('username') == '') {
            session()->setFlashdata('gagal', 'Anda belum login');
            return redirect()->to(base_url('login'));
         }
         return view('page/informasi_pengguna');
    }
    public function lokasi_gym() 
    {
        if (session()->get('username') == '') {
            session()->setFlashdata('gagal', 'Anda belum login');
            return redirect()->to(base_url('login'));
         }
         return view('page/lokasi_gym');
    }
    public function panduan_nutrisi() 
    {
        if (session()->get('username') == '') {
            session()->setFlashdata('gagal', 'Anda belum login');
            return redirect()->to(base_url('login'));
         }
         return view('page/panduan_nutrisi');
    }
    public function program_latihan() 
    {
        if (session()->get('username') == '') {
            session()->setFlashdata('gagal', 'Anda belum login');
            return redirect()->to(base_url('login'));
         }
         return view('page/program_latihan');
    }
}
