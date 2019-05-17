<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


	class CompoLibModel extends CI_Model
	{
		public function _construct(){
			$this->load->database();
		}
		
		protected $table = 'contain';
		
		public function getCompoFav(){
			
			
		}
		
		
		
		
		public function addCompoFav() {
			$this->db->select('numLib');
			$this->db->from('library','user');
			$this->db->join('library', 'library.idUser = user.idUser');
			$this->db->where('nameLib','MyComposers');
			$query = $this->db->get();
			$data = array(
				'numLib' => $query,
				'idCompo' => $idCompo
			);		
			return $this->db->insert($table->$data);	
		}
		
		public function addMusicFav() {
			$this->db->select('numLib');
			$this->db->from('library','user');
			$this->db->join('library', 'library.idUser = user.idUser');
			$this->db->where('nameLib','MyMusics');
			$query = $this->db->get();
			$data = array(
				'numLib' => $query,
				'idMusic' => $idMusic
			);		
			return $this->db->insert($table->$data);	
		}
	}
?>