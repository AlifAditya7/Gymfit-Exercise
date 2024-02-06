<?php namespace App\Models;
use CodeIgniter\Model;

class M_user extends Model
{
      protected $table = 'user';
      protected $allowedFields = ['username','fullname','email','no_hp','password'];

	public function get_data($email, $password)
	{
      return $this->db->table('user')
      ->where(array('email' => $email, 'password' => $password))
      ->get()->getRowArray();
	}
}