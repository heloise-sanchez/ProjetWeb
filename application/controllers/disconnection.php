<?php
	class Disconnection extends CI_Controller {
		public function _construct(){
			parent:: _construct();
			
		}
		
		public function index() {
			delete_cookie('user');
			$this->load->view('disconnectionView');
		}	
		
	}
	
?>