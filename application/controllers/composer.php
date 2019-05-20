<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Composer extends CI_Controller {
	
	public function _construct(){
		parent::_construct();
		
	}
	$this->load->model('CompoModel');
	$this->load->model('CompoLibModel');
	$idCompo = $this->uri->segment(3);
	public function getCompo($idCompo) {
		$this->load->model('CompoModel');
		$data['names'] = $this->CompoModel->getNames($idCompo);
		$data['infos'] = $this->CompoModel->getInfos($idCompo); 
		$data['bios'] = $this->CompoModel->getBios($idCompo);
		$data['periods'] = $this->CompoModel->getPeriods($idCompo);
		$data['images'] = $this->CompoModel->getImage($idCompo);
		//$data['alt'] = $this->compoModel->getAlt($idCompo);
		$data['musics'] = $this->CompoModel->getMusics($idCompo);
		
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
		$this->load->model('CompoLibModel');	
		if (isset($_COOKIE['user'])){
		$data['iduser']=$_COOKIE['user'];
		}
		$data['idcompo']=$idCompo;

		$this->CompoLibModel->addCompoFav($data);
		$this->load->view('header');
		$this->load->view('menuConnected');
		$this->load->view('addSuccess');				
	}
	
	public function addMusicFav(){
		$idMusique = $this->uri->segment(3);
		$this->load->model('CompoLibModel');	
		if (isset($_COOKIE['user'])){
		$data['iduser']=$_COOKIE['user'];
		}
		$data['idmusic']=$idMusique;

		$this->CompoLibModel->addMusicFav($data);
		$this->load->view('header');
		$this->load->view('menuConnected');
		$this->load->view('addSuccess');				
	}
	
	
}

/* End of file composer.php */
/*Location: ./ProjetWeb/application/controllers/composer.php */

?>