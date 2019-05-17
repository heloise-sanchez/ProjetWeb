<?php

	class Connection extends CI_Controller {
		public function check() {
			//Loading libraries and helpers
			$this->load->helper(array('form', 'url'));
			$this->load->library('form_validation');
			//Definition of field rules
			$this->form_validation->set_rules('email', 'E-mail','trim|required|min_length[5]|max_length[128]|alpha_dash|encode_php_tags|xss_clean|valid_email|in_list[/*mails de la bd*/]');
			$this->form_validation->set_rules('nickname','Identifiant','trim|required|min_length[5]|max_length[40]|alpha_dash|encode_php_tags|xss_clean|in_list[/*mails de la bd*/]');
			$this->form_validation->set_rules('password', 'Mot de passe','trim|required|min_length[5]|max_length[128]|alpha_dash|encode_php_tags|xss_clean|matches[/*mdp de la bd*/');
			
			//error message
			$this->form_validation->set_message('required', '{field} doit être rempli');
			$this->form_validation->set_message('valid_email', '{field} incorrect');
			$this->form_validation->set_message('in-list[]', '{field} incorrect');
			$this->form_validation->set_message('matches[]', '{field} incorrect');
			
			//Data recovery
			$email = $this->input->post('email');
			$nickname = $this->input->post('nickname');
			$password = $this->input->post('password');
			
			if($this->form_validation->run())
			{
				//Form is valid
				$this->load->view('connectionSuccessView');
			}
			else
			{
				//Form is not valid
				$this->load->view('connectionView');
			}
		}
	}
	
	
/* End of file connection.php */
/*Location: ./ProjetWeb/application/controllers/connection.php */
?>

<!--$query = $this->db->query('SELECT * FROM USER');

foreach ($query->result() as $row)
{
        echo $row->idUser;
        echo $row->email;
        echo $row->password;
}-->










