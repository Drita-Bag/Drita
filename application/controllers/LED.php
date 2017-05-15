<?php 
   class LED extends CI_Controller {
	
       public function index() { 
		 
                    $this->loadHeader();
                    $this->load->view('led');
                    $this->load->view('templates/footer');
	  } 
          
        private function loadHeader()
	{
		$data['header'] = init_header('fr', 'Gestionnaire led', 'utf-8');
		$data['dcterms'] = header_dcterms('DritaTeam', 'DritaLedPage', '2017-05-09');
		$data['cssTags'] = array(css('style.css'), css('accueil_style.css'));
		$data['jsTags'] = array(js('bootstrap.min.js'), js('jquery.min.js'), js('script.js'),  js('sample.js'));
		$data['lessTags'] = array();		
		$this->load->view('templates/header', $data);
	}
   } 
?>