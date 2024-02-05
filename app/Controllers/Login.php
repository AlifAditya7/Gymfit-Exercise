<?php 
namespace App\Controllers;

use App\Models\M_user;

class Login extends BaseController
{
	public function index()
	{
      helper(['form']);
		return view('login/user_form');
   }
   
   public function login_action() 
   {
      $muser = new M_user();

      $email = $this->request->getPost('email');
      $password = md5($this->request->getPost('password'));

      $cek = $muser->get_data($email, $password);

      if ($cek && $cek['email'] == $email && $cek['password'] == $password)
      {
         session()->set('email', $cek['email']);
         session()->set('username', $cek['username']);
         session()->set('id', $cek['id']);
         return redirect()->to(base_url('user'));
      } else {
         session()->setFlashdata('gagal', 'Username / Password salah');
         return redirect()->to(base_url('login'));
      }
   }

   public function logout() 
   {
      session()->destroy();
      return redirect()->to(base_url('login'));
   }


}