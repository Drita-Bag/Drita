<?php 
   class LED extends CI_Controller {
	
      public function index() { 
		$data['titre'] = 'LED';
                
		$this->load->helper('url'); 
		$this->load->view('templates/header', $data);
                $this->load->view('led', $data);
		$this->load->view('templates/footer');
	  } 
   } 
?>