<?php
class Profil_model extends CI_Model {


	public function __construct() {
		parent::__construct();
		$this->load->database();
		$this->informations();

	}

	public function informations(){
		
		$this->db->select('login');
		$this->db->from('Utilisateur');
		$this->db->where(array('login' => $_COOKIE['connecter']));
		$donnee = $this->db->get();



foreach ($donnee->result() as $row){
  echo "Le profil de ".$row->login;
 // $image=$row->avatar;	
}


 /* echo "<h2>Profil de ".$_COOKIE['connecter']."</h2>";
	echo "<img src=".$image.">";*/

	}
}
