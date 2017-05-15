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
                if($this->session->has_userdata('logged_in'))//"logged_in" est initalisée dans le controller "login.php". Si la variable de session n'existe pas, celà siginifie que la personne n'est pas connectée.
                {
                    $this->loadHeader();
                    $this->load->view('accueil');
                    $this->load->view('templates/footer');
                }
                else
                {
                    redirect('login');
                }

	}
	
	private function loadHeader()
	{
		$data['header'] = init_header('fr', 'Accueil Drita', 'utf-8');
		$data['dcterms'] = header_dcterms('DritaTeam', 'DritaHomePage', '2017-05-09');
		$data['cssTags'] = array(css('style.css'), css('accueil_style.css')); //Ajouter chaque css que vous souhaitez appliquer sur la page
		$data['jsTags'] = array(js('bootstrap.min.js'), js('jquery.min.js'), js('script.js'),  js('sample.js')); // Ajouter chaque js que vous souhaitez appliquer sur la page
		$data['lessTags'] = array();		
		
		$this->load->view('templates/header', $data);
	}
}