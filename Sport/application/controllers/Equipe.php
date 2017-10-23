<?php

class Equipe extends CI_Controller {


	public function __construct() {
		parent::__construct();
	}

	public function equipe(){
		$this->load->model('Equipe_model');  // charge model accueil
	}

}