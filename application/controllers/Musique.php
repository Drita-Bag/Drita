<?php 
   class Musique extends CI_Controller {
	
       public function index() { 
		 
                    $this->loadHeader();
                    $this->load->view('musique');
                    $this->load->view('templates/footer');
	  } 
          
        private function loadHeader()
	{
		$data['header'] = init_header('fr', 'Musique Drita', 'utf-8');
		$data['dcterms'] = header_dcterms('DritaTeam', 'DritaMusicPage', '2017-05-09');
		$data['cssTags'] = array(css('style.css'), css('accueil_style.css'));
		$data['jsTags'] = array();
		$data['lessTags'] = array();		
		$this->load->view('templates/header', $data);
	}
   } 
?>