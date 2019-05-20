<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


	class CompoLibModel extends CI_Model
	{
		public function _construct(){
			$this->load->database();
		}
		
		protected $table = 'contain';
		
		public function getCompoFav($iduser){
			$query = $this->db->query('select i.idCompo, c.lastNameCompo,c.firstNameCompo from composer c, include i, library l where l.idUser=? and l.numLib = i.numLib and i.idCompo=c.idCompo',$iduser);
			return $query->result();
			
		}
		
		public function getMusicFav($iduser){
			$query = $this->db->query('select m.linkMusic,m.nameMusic from music m, contain c, library l where l.idUser=? and l.numLib = c.numLib and c.idMusic=m.idMusic',$iduser);
			return $query->result();
			
		}
		
		
		
		public function addCompoFav($data) {
			$iduser=$data['iduser'];
			$idcompo=intval($data['idcompo']);
			$query = $this->db->query('select l.numLib from library l where l.idUser = ? and l.nameLib = "myComposers"',$iduser);
			$row = $query->row_array();
			$numlib=intval($row['numLib']);
			
			$dataI = array(
				'numLib' => $numlib,
				'idCompo' => $idcompo
			);
			return $this->db->insert('include',$dataI);
		}
		
		public function addMusicFav($data) {			
			$iduser=$data['iduser'];
			$idmusic=intval($data['idmusic']);
			$query = $this->db->query('select l.numLib from library l where l.idUser = ? and l.nameLib = "myMusics"',$iduser);
			$row = $query->row_array();
			$numlib=intval($row['numLib']);
			
			$dataI = array(
				'numLib' => $numlib,
				'idMusic' => $idmusic
			);
			return $this->db->insert('contain',$dataI);
		}
	}
?>