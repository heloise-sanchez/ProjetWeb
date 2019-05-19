<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class LibCompo extends CI_Controller {
	
	public function _construct(){
		parent::_construct();
		$this->load->model('compoModel');
		$this->load->model('compoLibModel');
		
		$idCompo = $this->uri->segment(3);
	}
	
	
	public function addCompoFav($idCompo) {
		$this->load->model('compoLibModel');
		
		if (isset($_COOKIE['user'])){
		$data['iduser']=$_COOKIE['user'];
		}
		$data['idcompo']=$idCompo;

		$this->compoLibModel->addCompoFav($data);
		$this->load->view('librariesView');
	}
	
	public function addMusicFav() {
		$this->compoLibModel->addMusicFav();
	}
}

/* End of file composer.php */
/*Location: ./ProjetWeb/application/controllers/composer.php */

?>