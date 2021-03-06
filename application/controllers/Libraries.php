<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Libraries extends CI_Controller {
	
	function _construct(){
		parent::_construct();
		$this->load->model('CompoLibModel');
	}
	
	public function index() 
	{
		$this->load->model('CompoLibModel');
		$this->load->view('header');
		$this->load->view('menuConnected');
		if (isset($_COOKIE['user'])){
			$iduser=$_COOKIE['user'];
		}
		$data['myComposers']=$this->CompoLibModel->getCompoFav($iduser);
		$data['myMusics']=$res = $this->CompoLibModel->getMusicFav($iduser);
		$this->load->view('librariesView',$data);
	}
	
}

/* End of file composer.php */
/*Location: ./ProjetWeb/application/controllers/composer.php */

?>