<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class Connection extends CI_Controller {
		function _construct(){
			parent:: _construct();
			$this->load->model('Connection_model');//chargement du model
			
		}
		
		
			
		public function createForm()
		{
			$this->load->helper('form');
			$this->load->library('form_validation');
			
			$this->load->model('Connection_model');
	
			//règles pour que le form soit validé
			$this->form_validation->set_rules('email', 'E-mail','trim|required|encode_php_tags|valid_email|callback_checkNickname',array('required'=>'Veuillez indiquer votre email.'));
			$this->form_validation->set_rules('nickname','Identifiant','trim|required|alpha_dash|encode_php_tags',array('required'=>'Veuillez indiquer votre identifiant.'));
			$this->form_validation->set_rules('password', 'Mot de passe','trim|required|alpha_dash|encode_php_tags|callback_checkPassword',array('required'=>'Veuillez indiquer votre mot de passe.'));

			
			
			$this->load->view('header');
			if ($this->form_validation->run() === FALSE)
			{
					
					$this->load->view('connectionView');				
			}
			else
			{
				$this->input->set_cookie('user', $_POST['nickname'],24*3600, '', '/', '',null,true);
				$this->load->view('connectionSuccessView');
			}				
		}
		
		
		//règle de vérification du form: mot de passe correct ou non
		public function checkPassword() {
		
			$login = $this->Connection_model->login($_POST['email']);
			$givedPassword=$this->input->post('password');
			if (password_verify($_POST['password'],$login['password'])){
				return true;
			}
			else {
				$this->form_validation->set_message('checkPassword','mot de passe, email ou identifiant incorrect');
				return false;
			}
		}
			
		public function checkNickname() {
			$log=$this->Connection_model->login($_POST['email']);
			$givedNickname = $this->input->post('nickname');
			if ($log['idUser']==$givedNickname){
				return true;
			}
			else {
				$this->form_validation->set_message('checkNickname','mot de passe, email ou identifiant incorrect');
				return false;
			}											
		}
		
		
	}
	
?>