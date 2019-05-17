<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


	class CompoModel extends CI_Model
	{
		public function _construct(){
			$this->load->database();
		}
		protected $table = 'composer';
		
		public function getImage($idCompo) {
			$this->db->select('srcImage,altImage');
			$this->db->from('image');
			$this->db->where('idCompo',$idCompo);
			$query = $this->db->get();
			return $query->result();	
		}
		
		/*public function getAlt($idCompo) {
			$this->db->select('altImage');
			$this->db->from('image');
			$this->db->where('idCompo',$idCompo);
			$query = $this->db->get();
			return $query->result();	
		}*/
		
		public function getNames($idCompo) {
			$this->db->select('firstNameCompo,lastNameCompo');
			$this->db->from('composer');
			$this->db->where('idCompo',$idCompo);
			$query = $this->db->get();
			return $query->result();	
		}
		
		public function getInfos($idCompo) {
			$this->db->select('birthDate,deathDate,nationality');
			$this->db->from('composer');
			$this->db->where('idCompo',$idCompo);
			$query = $this->db->get();
			return $query->result();	
		}
		
		public function getPeriods($idCompo) {
			$this->db->select('nameEra');
			$this->db->from('period');
			$this->db->join('composer', 'composer.numEra = period.numEra');
			$this->db->where('idCompo',$idCompo);
			$query = $this->db->get();
			return $query->result();
		}
		
		public function getBios($idCompo) {
			$this->db->select('biography');
			$this->db->from('composer');
			$this->db->where('idCompo',$idCompo);
			$query = $this->db->get();
			return $query->result();	
		}
		
		public function getMusics($idCompo) {
			$this->db->select('linkMusic,nameMusic');
			$this->db->from('music');
			$this->db->where('idCompo',$idCompo);
			$query = $this->db->get();
			return $query->result();	
		}
		
	}

?>