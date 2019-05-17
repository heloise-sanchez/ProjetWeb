<?php

	class Inscription extends CI_Controller {
		public function index() {
			$this->load->inscriptionView;
			$this->load->inscription_model;
			//Loading libraries and helpers
			$this->load->helper(array('form', 'url'));
			$this->load->library('form_validation');
			
		public function checkForm() {
			
			//Definition of field rules
			$this->form_validation->set_rules('email', 'E-mail','trim|required|min_length[5]|max_length[128]|alpha_dash|encode_php_tags|xss_clean|valid_email');
			$this->form_validation->set_rules('nickname','Identifiant','trim|required|min_length[5]|max_length[40]|alpha_dash|encode_php_tags|xss_clean|is_unique[users.nickname]');
			$this->form_validation->set_rules('password', 'Mot de passe','trim|required|min_length[5]|max_length[128]|alpha_dash|encode_php_tags|xss_clean');
			
			//error message
			$this->form_validation->set_message('required', '{field} doit être rempli');
			$this->form_validation->set_message('valid_email', '{field} incorrect');
			$this->form_validation->set_message('min_length', '{field} doit avoir au moins {param} caractères.');
			$this->form_validation->set_message('max_length', '{field} doit avoir au plus {param} caractères.');
			$this->form_validation->set_message('is_unique[]', '{field} non disponible');
			//Data recovery
			$email = $this->input->post('email');
			$nickname = $this->input->post('nickname');
			$password = $this->input->post('password');
			
			if($this->form_validation->run())
			{
				//Form is valid
				$this->load->view('inscriptionSuccessView');
			}
			else
			{
				//Form is not valid
				$this->load->view('inscriptionView');
			}
		}
	}
	
	
/* End of file inscription.php */
/*Location: ./ProjetWeb/application/controllers/inscription.php */
?>