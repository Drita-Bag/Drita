<?php 
   class Musique extends CI_Controller {
	
       private function __controller()
       {
            $this->load->helper('form');
            $this->load->helper('url');
            $this->load->helper('html');
            //Charger le model musique
            $this->load->model('musique_model');
       }
       
      public function index()
        {
            $this->load->helper('url'); 
            $this->load->model('musique_model');
            $data['Songs']=$this->musique_model->lecture();
            $this->load->view('templates/header');
            $this->load->view('musique',$data);
            $this->load->view('templates/footer');
	 } 
   }