<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_user;

class Register extends Controller
{
    public function index()
    {
        //include helper form
        helper(['form']);
        $data = [];
        echo view('login/user_register', $data);
    }

    public function save()
    {
        //include helper form
        helper(['form']);
        //set rules validation form
        $rules = [
            'username'          => 'required|min_length[3]|max_length[30]',
            'fullname'          => 'required|min_length[6]|max_length[255]',
            'email'         => 'required|min_length[6]|max_length[255]|valid_email|is_unique[user.email]',
            'no_hp'         => 'required|min_length[11]|max_length[25]',
            'password'      => 'required|min_length[8]|max_length[255]',
        ];

        if($this->validate($rules)){
            $model = new M_user();
            $data = [
                'username'     => $this->request->getVar('username'),
                'fullname'     => $this->request->getVar('fullname'),
                'email'    => $this->request->getVar('email'),
                'no_hp'     => $this->request->getVar('no_hp'),
                'password' => md5($this->request->getVar('password'))
            ];
            $model->save($data);
            return redirect()->to('/login');
        }else{
            $data['validation'] = $this->validator;
            echo view('login/user_register', $data);
        }

    }
}