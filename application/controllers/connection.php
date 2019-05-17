<?php
	class Connection extends CI_Controller {
		public function _construct(){
			parent:: _construct();
			$this->load->model('connection_model');//chargement du model
			
		}
		
		
			
		public function createForm()
		{
			$this->load->helper('form');
			$this->load->library('form_validation');
			
			$this->load->model('connection_model');
	
			//règles pour que le form soit validé
			$this->form_validation->set_rules('nickname','Identifiant','trim|required|alpha_dash|encode_php_tags');
			$this->form_validation->set_rules('password', 'Mot de passe','trim|required|alpha_dash|encode_php_tags|callback_checkPassword');

			
			
			$this->load->view('header');
			if ($this->form_validation->run() === FALSE)
			{
					
					$this->load->view('connectionView');				
			}
			else
			{
				$data['idUser']=$_POST['nickname'];
				$this->load->view('connectionSuccessView',$data);
			}
		}
		
		//règle de vérification du form: mot de passe correct ou non
		public function checkPassword() {
		
			$login = $this->connection_model->login($_POST['email']);
			$givedPassword=$this->input->post('password');
			if (password_verify($_POST['password'],$login['password'])){
				return true;
			}
			else {
				$this->form_validation->set_message('checkPassword','mot de passe ou identifiant incorrect');
				return false;
			}
			
		
		}
		
		
	}
	
?>