<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LED extends CI_Controller {
	
	public function index()
	{
		$this->loadHeader();
		$this->load->view('test');
		$this->load->view('templates/footer');
	} 
	
	private function loadHeader()
	{
		$data['header'] = init_header('fr', 'LED Drita', 'utf-8');
		$data['dcterms'] = header_dcterms('Drita', 'connectedBag', '2017-05-09');
		$data['cssTags'] = array(css('style.css'));
		$data['jsTags'] = array();
		$data['lessTags'] = array();
		
		
		$this->load->view('templates/header', $data);
	}
	
}
