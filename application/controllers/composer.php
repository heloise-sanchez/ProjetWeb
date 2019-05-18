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
		if (isset($_COOKIE['user'])){
			$this->load->view('menuConnected');
			$this->load->view('compoView',$data);
		}
		else {
			$this->load->view('menu');
			$this->load->view('compoNoConnectedView',$data);
		}
		
		
	}
	
	public function addCompoFav(){
		$idCompo = $this->uri->segment(3);
		$this->load->model('compoLibModel');	
		if (isset($_COOKIE['user'])){
		$data['iduser']=$_COOKIE['user'];
		}
		$data['idcompo']=$idCompo;

		$this->compoLibModel->addCompoFav($data);
		$this->load->view('header');
		$this->load->view('menuConnected');
		$this->load->view('addSuccess');				
	}
	
	public function addMusicFav(){
		$idMusique = $this->uri->segment(3);
		$this->load->model('compoLibModel');	
		if (isset($_COOKIE['user'])){
		$data['iduser']=$_COOKIE['user'];
		}
		$data['idmusic']=$idMusique;

		$this->compoLibModel->addMusicFav($data);
		$this->load->view('header');
		$this->load->view('menuConnected');
		$this->load->view('addSuccess');				
	}
	
	
}

/* End of file composer.php */
/*Location: ./ProjetWeb/application/controllers/composer.php */

?>