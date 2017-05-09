<?php 
   class Login extends CI_Controller {
	
      public function index() { 
		 
                $data['titre'] = 'Connexion';
                
                $this->load->helper('url'); 
		$this->load->view('templates/header', $data);
                $this->load->view('login', $data);
                $this->load->view('templates/footer');
	  } 
   } 
?>