<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


	class Inscription_model extends CI_Model
	{
		public function _construct(){
			$this->load->database();
		}
		protected $table = 'user';
		
		public function add_user($data)
		{
			$this->load->helper('url');
			
					
			return $this->db->insert('user',$data);
						
		}
		
		public function addLibCompo()
		{
			$date = array(
				'nameLib'=>'MyComposers',
				'idUser'=>$this->input->post('idUser')
			);
			return $this->db->insert('library',$data);
			
		}
		
		public function addLibMusic()
		{
			$date = array(
				'nameLib'=>'MyMusics',
				'idUser'=>$this->input->post('idUser')
			);
			return $this->db->insert('library',$data);
			
		}
	}

?>
