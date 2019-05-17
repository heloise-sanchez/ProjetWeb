<?php
class Home extends CI_Controller {
	//contructeur
	//methode appellee
	public function index() 
	{
		$this->load->helper('html');
		$connection = $this->uri->segment(3);
		$this->load->view('header');
		if ($connection != null){
			$this->input->set_cookie('connection', '',24*3600, '', '/', '',null,true);
		}
		if (isset($_COOKIE['connection'])){
			$this->load->view('menuConnected');
		}
		else {
			$this->load->view('menu');
		}
		$this->load->view('homeView');
		
	}
}

/* End of file Home.php */
/*Location: ./ProjetWeb/application/controllers/home.php */

?>