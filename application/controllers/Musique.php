<?php 
   class Musique extends CI_Controller {
	
      public function index() { 
		 
                $data['titre'] = 'Musique';
                
		$this->load->helper('url'); 
		$this->load->view('templates/header', $data);
                $this->load->view('musique', $data);
		$this->load->view('templates/footer');
	  } 
   } 
?>