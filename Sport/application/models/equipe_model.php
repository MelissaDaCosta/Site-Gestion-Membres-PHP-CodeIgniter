<?php

class Equipe_model extends CI_Model {


	public function __construct() {
		parent::__construct();
		$this->load->database();
		
		$this->formulaire();
	}

public function formulaire(){

	if(isset($_POST['nom']) && isset($_POST['mdp']) && isset($_POST['sport']) && isset($_POST['ville']) 
		&& isset($_POST['msg']) && isset($_POST['mixte']) && isset($_POST['logo']) && isset($_POST['photo'])){
		$this->creerEquipe();

	}else if(isset($_POST['nomE']) && isset ($_POST['mdpE']) && isset($_POST['sportE'])) {
		$this->rejoindreEquipe();
		
	}else{
		$this->afficherEquipe();
	}

}

	public function creerEquipe(){
	
extract($_POST); 

		$this->db->select('nom', 'sport');
		$this->db->from('Equipe');
		$this->db->where(array('nom' => $nom));
		$this->db->where(array('sport' => $sport));
		$donnee3 = $this->db->get();

		if($donnee3->result()==null){  // si ya pas dequipe du meme nom et sport déjà creer

			$equipe=array(
				'nom'=> $nom,
				'motdepasse'=>$mdp,
				'sport'=>$sport,
				'ville'=>$ville,
				'description'=>$msg,
				'mixite'=>$mixte,
				'logo'=>$logo,
				'photo'=>$photo,
				'Nbmembre'=>0
				);

			$this->db->insert('Equipe', $equipe);

			//user devient adminequipe
			$user = $this->db->get_where('Utilisateur',array('login' => $_COOKIE['connecter']));
			foreach($user->result() as $ligne){
			$login=$ligne->login;			
			$nomU=$ligne->nom;
			$prenom=$ligne->prenom;
			$mail=$ligne->mail;
			$motdepasse=$ligne->motdepasse;
			$avatar=$ligne->avatar;
		}

			$admin=array(
			'login'=>$login,
			'nomEquipe'=>$nom,
			'nom' => $nomU,
			'prenom'=>$prenom,
			'mail'=> $mail,
			'motdepasse'=>$motdepasse,
			'avatar'=>$avatar
			);

		$this->db->insert('AdminEquipe', $admin);

			$this->load->view('mesequipe_vue');
		
		}

	}

	public function rejoindreEquipe(){
		$nomE=$_POST['nomE'];
		$sportE=$_POST['sportE'];
		$mdpE=$_POST['mdpE'];

		$this->db->select('motdepasse');
		$this->db->from('Equipe');
		$this->db->where(array('nom' => $nomE));
		$this->db->where(array('sport' => $sportE));
		$this->db->where(array('motdepasse' => $mdpE));
		$donneemdp = $this->db->get();

		if($donneemdp->result()!=null){

		
		$user = $this->db->get_where('Utilisateur',array('login' => $_COOKIE['connecter']));

		foreach($user->result() as $ligne){
			$login=$ligne->login;			
			$nom=$ligne->nom;
			$prenom=$ligne->prenom;
			$mail=$ligne->mail;
			$motdepasse=$ligne->motdepasse;
			$avatar=$ligne->avatar;
		}

		
	/*	extract($user->result()); */

		$this->db->select('Nbmembre');
		$this->db->from('Equipe');
		$this->db->where(array('nom' => $nomE));
		$this->db->where(array('sport' => $sportE));
		$id=$this->db->get();
		
		foreach($id->result() as $ligne){
			$idm=$ligne->Nbmembre;
		}
		$membre=array(
			'idMembre'=>$idm,
			'login'=>$login,
			'NomEquipe' => $nomE,
			'nom'=>$nom,
			'prenom' =>$prenom,
			'mail'=> $mail,
			'motdepasse'=>$motdepasse,
			'avatar'=>$avatar
			);

		$this->db->insert('Membre', $membre);

		$this->load->view('mesequipe_vue');

		}else{
			$this->load->view('mauvaismdpequipe_vue');
		}
	}

	public function afficherEquipe(){

echo '<br>';

		$this->db->select('NomEquipe');
		$this->db->from('Membre');
		$this->db->where(array('login' => $_COOKIE['connecter']));
		$mesequipes=$this->db->get();

echo 'Nom Equipe ';
echo '<br>';
		foreach($mesequipes->result() as $ligne){
			echo $ligne->NomEquipe;
echo '<br>';

		}
	}

}