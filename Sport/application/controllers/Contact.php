<?php

class Contact extends CI_Controller {


	public function __construct() {
		parent::__construct();
	}

	public function contact(){
		$this->load->view('contact_vue');
	}
	
}