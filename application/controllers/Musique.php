<?php 
   class Musique extends CI_Controller {
	
      public function index()
        {
            $this->load->helper('url'); 
            $this->load->model('musique_model');
            $data['test']=$this->musique_model->lecture();
            $this->load->view('templates/header');
            $this->load->view('musique',$data);
            $this->load->view('templates/footer');
            
            var_dump($_POST['saisie']);
	 } 
   } 
?>  