<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accueil extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('accueil');
		$this->load->view('templates/footer');
	}
}
