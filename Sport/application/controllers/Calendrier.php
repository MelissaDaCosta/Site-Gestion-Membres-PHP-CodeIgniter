<?php

class Calendrier extends CI_Controller {


	public function __construct() {
		parent::__construct();

	}

	public function calendrier(){
    	$this->load->model('Calendrier_model');
	
	}
	
	
}
