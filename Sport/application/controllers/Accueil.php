<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Accueil extends CI_Controller {


	public function __construct() {
		parent::__construct();
		
	}

	public function index(){

	$this->accueil();
	}

	public function accueil(){
		$this->load->view('accueil_vue');   // charge vue html

	}

	public function formulaire(){
		$this->load->model('Accueil_model');  // charge model accueil
	
	}

}
