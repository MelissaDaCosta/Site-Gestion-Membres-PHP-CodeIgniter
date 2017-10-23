<?php

class Calendrier_model extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->formulaire();
	}

	public function formulaire(){
		if(isset($_POST['type']) && isset($_POST['idE']) && isset($_POST['dated']) && isset($_POST['datef']) && isset($_POST['lieu']) && isset($_POST['description']) && isset($_POST['nom'])){
			$this->ajouterEvenement();
		}else{

		$this->afficherCalendrier();
		}
	}

	public function ajouterEvenement(){

		extract($_POST);

		$this->db->select('idEvenement');
		$this->db->from('Evenement');
		$this->db->where(array('idEvenement' => $idE));
		$donnee = $this->db->get();

		if($donnee->result()==null){

			$event=array(
				'DateDebut'=> $dated,
				'DateFin'=>$datef,
				'Lieu'=>$lieu,
				'Description'=>$description,
				'Type'=>$type,
				'idEvenement'=>$idE,
				'NomEquipe'=>$nom
			
				);

			$this->db->insert('Evenement', $event);
			$this->load->view('calendrier_vue');
		}else{
			$this->load->view('evenement_vue');
			echo 'Erreur';
		}
	}

	public function afficherCalendrier(){

echo '<br>';

		$this->db->select('Evenement.NomEquipe, Evenement.DateFin, Evenement.DateDebut, Evenement.Lieu,Evenement.Description, Evenement.Type, idEvenement');
		$this->db->from('Membre')->join('Evenement', 'Membre.NomEquipe= Evenement.NomEquipe');
		$this->db->where(array('login' => $_COOKIE['connecter']));
		$mesevent=$this->db->get();

echo "Type | NomEquipe | DateDebut | DateFin | Lieu | Description | idEvenement";
echo '<br><br>';
		foreach($mesevent->result() as $ligne){
			echo $ligne->Type." | ";
			echo $ligne->NomEquipe." | ";
			echo $ligne->DateDebut." | ";
			echo $ligne->DateFin." | ";
			echo $ligne->Lieu." | ";
			echo $ligne->Description." | ";	
			echo $ligne->idEvenement;
echo '<br>';

		}
	}
}