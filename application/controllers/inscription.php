<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class Inscription extends CI_Controller {
		function _construct(){
			parent:: _construct();
			
			
		}
		
		public function create()
		{
			$this->load->helper('security');
			$this->load->helper('form');
			$this->load->library('form_validation');


			$dataT['title'] = 'Inscription';

			$this->form_validation->set_rules('email', 'E-mail','trim|required|min_length[5]|max_length[128]|encode_php_tags|xss_clean|valid_email',array('required'=>'Veuillez indiquer votre email.'));
			$this->form_validation->set_rules('idUser','Identifiant','trim|required|min_length[5]|max_length[40]|alpha_dash|encode_php_tags|xss_clean|is_unique[user.idUser]',array('required'=>'Veuillez indiquer un identifiant.','min_length'=>'Identifiant trop court.','max_length'=>'Identifiant trop long.','alpha_dash'=>'Identifiant: Caractères autorisés: alpha-numéric,-,_','is_unique'=>'Identifiant déjà pris.'));
			$this->form_validation->set_rules('password', 'Mot de passe','trim|required|min_length[5]|max_length[128]|alpha_dash|encode_php_tags|xss_clean');			
			
			$data = array(
				'email' => $this->input->post('email'),
				'idUser' => $this->input->post('idUser'),
							
			);
			$password = $this->input->post('password');
	
			$data['password'] = password_hash($password, PASSWORD_DEFAULT);
			
			$this->load->view('header');
			if ($this->form_validation->run() === FALSE)
			{
				
				$this->load->view('inscriptionView',$dataT);				
			}
			else
			{
				$this->load->model('Inscription_model');
				$this->Inscription_model->add_user($data);
				$this->Inscription_model->addLibCompo($data);
				$this->Inscription_model->addLibMusic($data);
				$this->load->view('inscriptionSuccessView');
			}
		}
	}
?>

