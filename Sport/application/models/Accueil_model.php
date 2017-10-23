<?php

class Accueil_model extends CI_Model {


	public function __construct() {
		parent::__construct();
		$this->load->database();
		$this->formulaire();

	}

	public function formulaire(){

	if(isset($_POST['nom']) && isset ($_POST['prenom']) && isset($_POST['login']) && isset($_POST['mdp'])
		&& isset($_POST['mail']) && isset($_POST['avatar'])){
		$this->inscrire();
	}else if(isset($_POST['loginC']) && isset ($_POST['mdpC'])) {
		$this->connexion();

	}else{

		$this->load->view('accueil_vue');
	}

}

		
public function inscrire(){
		$nom=$_POST['nom'];
		$prenom=$_POST['prenom'];
		$login=$_POST['login'];
		$mpd=$_POST['mdp'];
		$mail=$_POST['mail'];
		$avatar=$_POST['avatar'];

		$this->db->select('login', 'mail');
		$this->db->from('Utilisateur');
		$this->db->where(array('login' => $login));
		$this->db->or_where(array('mail' => $mail ));
		$donnee = $this->db->get();


			if($donnee->result()==null){  // si ya pas d'utilisateur du meme login et mail deja inscrit

				$user=array(
					'nom'=> $nom,
					'prenom'=>$prenom,
					'login'=>$login,
					'motdepasse'=>$mpd,
					'mail'=>$mail,
					'avatar'=>$avatar
					);

				$this->db->insert('Utilisateur', $user);
				$this->load->view('inscrit_vue');

			}else{
				  $this->load->view('accueil_vue');
			}
	}


	public function connexion(){
			$loginC=$_POST['loginC'];
			$mdpC=$_POST['mdpC'];
			
			$this->db->select('login');
			$this->db->from('Utilisateur');
			$this->db->where(array('login' => $loginC));
			$this->db->where(array('motdepasse' => $mdpC ));
			$donnee = $this->db->get();


			if($donnee->result()!=null){

				//$_SESSION['login']=$loginC;

   //voir si l'utilisateur est admin ou pas
			$cookie = array(   // creer cookie
				'name'=> 'connecter',
				'value'=> $loginC,  
				'expire' => time()+3600
				);

			$this->input->set_cookie($cookie);

			//setcookie('connecter', $loginC, time()+3600);
			//$this->load->view('profil_vue');


			}else{
if(isset($_COOKIE['login'])){
delete_cookie('connecter'); 
}
    $this->load->view('accueil_vue');
   
}
$this->load->view('profil_vue');		
		

	}
}
