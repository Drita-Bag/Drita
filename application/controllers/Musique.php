<?php 
   class Musique extends CI_Controller {
	
      public function index()
        {
            $this->load->helper('url'); 
            $this->load->model('musique_model');
            $data['Songs']=$this->musique_model->lecture();
            $this->load->view('templates/header');
            $this->load->view('musique',$data);
            var_dump($data);
            $this->load->view('templates/footer');
	 } 
   } 
?>  