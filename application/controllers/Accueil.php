<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Accueil extends CI_Controller {
    
        public function __construct() 
        {
            parent::__construct();
            $this->load->helper('url_helper');
            $this->load->library('session');
        }
    
	public function index()
	{
                
                    $this->loadHeader();
                    $this->load->view('accueil');
                    $this->load->view('templates/footer');
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