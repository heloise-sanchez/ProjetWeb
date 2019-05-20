<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


	class CompoModel extends CI_Model
	{
		public function _construct(){
			$this->load->database();
		}
		protected $table = 'composer';
		
		public function getImage($idCompo) {
			$this->db->select('srcimage,altimage');
			$this->db->from('image');
			$this->db->where('idcompo',$idCompo);
			$query = $this->db->get();
			return $query->result();	
		}
		
		
		
		public function getNames($idCompo) {
			$this->db->select('idcompo,firstnamecompo,lastnamecompo');
			$this->db->from('composer');
			$this->db->where('idcompo',$idCompo);
			$query = $this->db->get();
			return $query->result();	
		}
		
		public function getInfos($idCompo) {
			$this->db->select('birthdate,deathdate,nationality');
			$this->db->from('composer');
			$this->db->where('idcompo',$idCompo);
			$query = $this->db->get();
			return $query->result();	
		}
		
		public function getPeriods($idCompo) {
			$this->db->select('nameera');
			$this->db->from('period');
			$this->db->join('composer', 'composer.numera = period.numera');
			$this->db->where('idcompo',$idCompo);
			$query = $this->db->get();
			return $query->result();
		}
		
		public function getBios($idCompo) {
			$this->db->select('biography');
			$this->db->from('composer');
			$this->db->where('idcompo',$idCompo);
			$query = $this->db->get();
			return $query->result();	
		}
		
		public function getMusics($idCompo) {
			$this->db->select('idmusic,linkmusic,namemusic');
			$this->db->from('music');
			$this->db->where('idcompo',$idCompo);
			$query = $this->db->get();
			return $query->result();	
		}
		
	}

?>