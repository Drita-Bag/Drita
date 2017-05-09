<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Accueil extends CI_Controller {
    
        public function __construct() 
        {
            parent::__construct();
            $this->load->model('Login_model');
            $this->load->helper('url_helper');
        }
    
	public function index()
	{
                if($this->Login_model->IsConnected())
                {
                    $this->loadHeader();
                    $this->load->view('accueil');
                    $this->load->view('templates/footer');
                }
                else
                {
                    header('location:login');
                }
		
	}
	
	private function loadHeader()
	{
		$data['header'] = init_header('fr', 'Accueil Drita', 'utf-8');
		$data['dcterms'] = header_dcterms('DritaTeam', 'DritaHomePage', '2017-05-09');
		$data['cssTags'] = array(css('style.css'), css('accueil_style.css'));
		$data['jsTags'] = array();
		$data['lessTags'] = array();		
		
		$this->load->view('templates/header', $data);
	}
}