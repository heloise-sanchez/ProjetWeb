<?php
class Libraries extends CI_Controller {
	
	public function _construct(){
		parent::_construct();
		$this->load->model('libModel');
	}
	
	public function index() 
	{
		$this->load->view('header');
		$this->load->view('menuConnected');
		$this->load->view('librariesView');
	}
	
	public function myComposers()
	{
		$data['myComposers'] = $this->libModel->getCompoFav();
		$this->load->view('myComposers', $data);
	}
	
	public function myMusics()
	{
		$data['myMusics'] = $this->libModel->getMusicFav();
		$this->load->view('myComposers', $data);
	}
	
}

/* End of file composer.php */
/*Location: ./ProjetWeb/application/controllers/composer.php */

?>