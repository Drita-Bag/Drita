<?php 
   class Musique extends CI_Controller {
	
      public function index() { 
		 
		 $this->load->helper('url'); 
		 $this->load->view('templates/header');
         $this->load->view('musique');
		 $this->load->view('templates/footer');
	  } 
   } 
?>