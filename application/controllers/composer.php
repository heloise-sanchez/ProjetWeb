<?php
class Composer extends CI_Controller {
	
	public function _construct(){
		parent::_construct();
		$this->load->model('compoModel');
		$this->load->model('compoLibModel');
		
		$idCompo = $this->uri->segment(3);
	}
	
	public function getCompo($idCompo) {
		$this->load->model('compoModel');
		
		$data['names'] = $this->compoModel->getNames($idCompo);
		$data['infos'] = $this->compoModel->getInfos($idCompo); 
		$data['bios'] = $this->compoModel->getBios($idCompo);
		$data['periods'] = $this->compoModel->getPeriods($idCompo);
		$data['images'] = $this->compoModel->getImage($idCompo);
		//$data['alt'] = $this->compoModel->getAlt($idCompo);
		$data['musics'] = $this->compoModel->getMusics($idCompo);
		
		$this->load->view('header');
		if (isset($_COOKIE['connection'])){
			$this->load->view('menuConnected');
		}
		else {
			$this->load->view('menu');
		}
		$this->load->view('compoView',$data);
		
	}
	
	public function addCompoFav() {
		$this->compoLibModel->addCompoFav();
	}
	
	public function addMusicFav() {
		$this->compoLibModel->addMusicFav();
	}
}

/* End of file composer.php */
/*Location: ./ProjetWeb/application/controllers/composer.php */

?>