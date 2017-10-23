<?php

class Profil extends CI_Controller {


	public function __construct() {
		parent::__construct();
	}

	public function profil(){
		$this->load->view('profil_vue');
	}
	
}