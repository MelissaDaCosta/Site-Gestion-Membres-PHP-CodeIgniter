<?php

class Liens extends CI_Controller {

	public function __construct() {
		parent::__construct();
	$this->load->helper('url');
	}

public function menuaccueil(){
		$this->load->view('accueil_vue');  
}
public function menuequipe(){

	if(isset($_COOKIE['connecter'])){
			
		$this->load->view('mesequipe_vue');  
		}else{
			
			$this->load->view('pasconnecter_vue');
		}
		
}
public function creerequipe(){

	$this->load->view('equipe_vue');  

}

public function menudeco(){

    if(isset($_COOKIE['connecter'])){
    delete_cookie('connecter');
    }
    $this->load->view('accueil_vue');
}

public function menucalendrier(){

	if(isset($_COOKIE['connecter'])){
		$this->load->view('calendrier_vue');  
		}else{
			$this->load->view('pasconnecter_vue');
		}
		
}
public function menuprofil(){

	if(isset($_COOKIE['connecter'])){

		$this->load->view('profil_vue');  
		}else{
			$this->load->view('pasconnecter_vue');
		}
		
		
}
public function menucontact(){
		$this->load->view('contact_vue');  
}

public function evenement(){
$this->load->view('evenement_vue');
}

public function rejoindreequipe(){

if(isset($_COOKIE['connecter'])){
		$this->load->view('rejoindreequipe_vue');  
		}else{
			$this->load->view('pasconnecter_vue');
		}

}
}
