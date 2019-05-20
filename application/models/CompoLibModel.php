<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


	class CompoLibModel extends CI_Model
	{
		public function _construct(){
			$this->load->database();
		}
		
		protected $table = 'contain';
		
		public function getCompoFav($iduser){
			$query = $this->db->query('select i.idcompo, c.lastnamecompo,c.firstnamecompo from composer c, include i, library l where l.idUser=? and l.numLib = i.numlib and i.idcompo=c.idcompo',$iduser);
			return $query->result();
			
		}
		
		public function getMusicFav($iduser){
			$query = $this->db->query('select m.linkmusic,m.namemusic from music m, contain c, library l where l.iduser=? and l.numlib = c.numlib and c.idmusic=m.idmusic',$iduser);
			return $query->result();
			
		}
		
		
		
		public function addCompoFav($data) {
			$iduser=$data['iduser'];
			$idcompo=intval($data['idcompo']);
			$query = $this->db->query('select l.numlib from library l where l.iduser = ? and l.namelib = "myComposers"',$iduser);
			$row = $query->row_array();
			$numlib=intval($row['numlib']);
			
			$dataI = array(
				'numlib' => $numlib,
				'idcompo' => $idcompo
			);
			return $this->db->insert('include',$dataI);
		}
		
		public function addMusicFav($data) {			
			$iduser=$data['iduser'];
			$idmusic=intval($data['idmusic']);
			$query = $this->db->query('select l.numlib from library l where l.iduser = ? and l.namelib = "myMusics"',$iduser);
			$row = $query->row_array();
			$numlib=intval($row['numlib']);
			
			$dataI = array(
				'numlib' => $numlib,
				'idmusic' => $idmusic
			);
			return $this->db->insert('contain',$dataI);
		}
	}
?>