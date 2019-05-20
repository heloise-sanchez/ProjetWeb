<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class ListComposer_model extends CI_Model {
		public function _construct(){
			parent::__construct();
		}
		
		protected $table = 'composer';
		public function getComposers($nationality) {
			
			$this->load->database();
			$this->db->select('idcompo,lastnamecompo');
			$this->db->from('composer');
			$this->db->where('nationality',$nationality);
			$query = $this->db->get();
			return $query->result();
		}
		
			
	}


/* End of file listCompo_model.php */
/*Location: ./ProjetWeb/application/models/listCompo_model.php */

?>