<?php 
   class LED extends CI_Controller {
	
      public function index() { 
		 
		 $this->load->helper('url'); 
		 $this->load->view('templates/header');
         $this->load->view('led');
		 $this->load->view('templates/footer');
	  } 
   } 
?>