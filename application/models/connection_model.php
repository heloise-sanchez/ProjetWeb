<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Connection_model extends CI_Model
	{
		public function _construct(){
			$this->load->database();
		}
		protected $table = 'User';
		
		public function login($email) {
			
			//  Récupération de l'utilisateur et de son pass hashé
			$this->db->select('*');
			$this->db->from('user');
			$this->db->where('email',$email);
			$query=$this->db->get();
			return $query->row_array();
		}

		

			
		
		
	}
?>


<?php 






//$query = $this->db->query('select user.password from user where user.email=?',$email);
		//	$password = $query->row_array();
			//var_dump($password);
			//var_dump($givedPassword);
			//var_dump($email);
		//	$login=password_verify($password['password'],$givedPassword);
		//	var_dump($login);
			/*if (password_verify($givedPassword,$password['password'])==true) {
				return true;
			}
			else {
				return false;
			}*/