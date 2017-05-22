<?php 
   class Musique extends CI_Controller {
	
       public function index() { 
		 
                    //$this->loadHeader();
                    $this->load->view('templates/header');
                    $this->load->view('musique');
                    $this->load->view('templates/footer');
	  } 
          
        /*private function loadHeader()
	{
		$data['header'] = init_header('fr', 'Musique Drita', 'utf-8');
		$data['dcterms'] = header_dcterms('DritaTeam', 'DritaMusicPage', '2017-05-09');
		$data['cssTags'] = array(css('style.css'), css('accueil_style.css')); //Ajouter chaque css que vous souhaitez appliquer sur la page
		$data['jsTags'] = array(js('bootstrap.min.js'), js('jquery.min.js'), js('script.js'),  js('sample.js')); // Ajouter chaque js que vous souhaitez appliquer sur la page
		$data['lessTags'] = array();		
		$this->load->view('templates/header', $data);
	}*/
   } 
?>