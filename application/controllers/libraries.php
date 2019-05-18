<?php
class Libraries extends CI_Controller {
	
	public function _construct(){
		parent::_construct();
		$this->load->model('compoLibModel');
	}
	
	public function index() 
	{
		$this->load->model('compoLibModel');
		$this->load->view('header');
		$this->load->view('menuConnected');
		if (isset($_COOKIE['user'])){
			$iduser=$_COOKIE['user'];
		}
		$data['myComposers']=$this->compoLibModel->getCompoFav($iduser);
		$data['myMusics']=$res = $this->compoLibModel->getMusicFav($iduser);
		$this->load->view('librariesView',$data);
	}
	
}

/* End of file composer.php */
/*Location: ./ProjetWeb/application/controllers/composer.php */

?>