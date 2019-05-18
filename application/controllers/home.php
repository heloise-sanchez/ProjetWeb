<?php
class Home extends CI_Controller {
	//contructeur
	//methode appellee
	public function index() 
	{
		$this->load->helper('url');
		$this->load->view('header');
		if (isset($_COOKIE['user'])){
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