<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


	class Inscription_model extends CI_Model
	{
		function _construct(){
			parent::__construct();
			$this->load->database();
		}
		protected $table = 'user';
		
		public function add_user($data)
		{
			$this->load->helper('url');
			
					
			return $this->db->insert('user',$data);
						
		}
		
		public function addLibCompo($data)
		{
			$dataC = array(
				'namelib'=>'MyComposers',
				'iduser'=>$data['idUser']
			);
			return $this->db->insert('library',$dataC);
			
		}
		
		public function addLibMusic($data)
		{
			$dataM = array(
				'namelib'=>'MyMusics',
				'iduser'=>$data['idUser']
			);
			return $this->db->insert('library',$dataM);
			
		}
	}

?>
