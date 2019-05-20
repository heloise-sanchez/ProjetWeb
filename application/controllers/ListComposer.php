<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ListComposer extends CI_Controller {
	
	function _construct() {		
		parent::_construct();			
		$nationality = $this->uri->segment(3);
	}
	
	public function getCompo($nationality) {
		$this->load->model('ListComposer_model');
		$data['composers'] = $this->ListComposer_model->getComposers($nationality);
		$data['nationality'] = $nationality;
		$this->load->view('header');
		if (isset($_COOKIE['user'])){
			$this->load->view('menuConnected');
		}
		else {
			$this->load->view('menu');
		}
		$this->load->view('listCompoView', $data);
		
	
	}
}
/* End of file listCompo.php */
/*Location: ./ProjetWeb/application/controllers/listCompo.php */
?>