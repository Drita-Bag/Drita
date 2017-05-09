<?php 
   class Login extends CI_Controller {
	
        public function index() { 
		 
                    $this->loadHeader();
                    $this->load->view('login');
                    $this->load->view('templates/footer');
	  } 
          
        private function loadHeader()
	{
		$data['header'] = init_header('fr', 'Connexion Drita', 'utf-8');
		$data['dcterms'] = header_dcterms('DritaTeam', 'DritaLoginPage', '2017-05-09');
		$data['cssTags'] = array(css('style.css'), css('accueil_style.css'));
		$data['jsTags'] = array();
		$data['lessTags'] = array();		
		$this->load->view('templates/header', $data);
	}
   } 
?>