

<!DOCTYPE html>

<html lang="fr">

	<head>

		<meta charset="UTF-8" />

		<title>Accueil</title>

		<link rel='stylesheet' type='text/css' href='<?php echo base_url(); ?>styles/styleaccueil.css'>

	</head>

	<body>
	<header id="haut">	
		<h1>Site de Sport</h1>
		</header>

<!-- ............................................................................MENU................................................................................ -->

		<?php include ("menu.php");  

		?>
<!-- .................................................................. PRESENTATION ........................................................................... -->


		<div class="accueil">  

			<h2> Bienvenue sur le site de gestion des équipes de sport</h2>

			<div class ="connexion">
				<h3> Voulez-vous vous connecter? </h3>

			<form method="post" action="<?php echo site_url('Accueil/formulaire'); ?>"/> 
			<p>
			Entrez votre login:           
			<input type="text" name="loginC" required placeholder="toto"/>
			</p>
			<p>
Entrez votre mot de passe:           
			<input type="password" name="mdpC" required placeholder="toto1234"/>
			</p>
			
			<input type="submit" value="Envoyer"/>
			<input type="reset" value="Recommencer"/>

			</form>
</div>



<div class= "inscrire">

				<h3> Voulez-vous vous inscrire? </h3>
			<form method="post" action="<?php echo site_url('Accueil/formulaire'); ?>"/>

		 <p>
			Entrez votre nom:           
			<input type="text" name="nom" required placeholder="durand"/>
	</p>
<p>
			Entrez votre prénom:           
			<input type="text" name="prenom" required placeholder="Jacques"/>
			</p>
<p>
			Entrez votre login:           
			<input type="text" name="login" required placeholder="toto"/>
			</p><p>
			Entrez votre mot de passe:           
			<input type="password" name="mdp" required placeholder="toto1234"/>

			</p>
<p>
			Entrez votre adresse mail:           
			<input type="email" name="mail" required placeholder="toto@orange.fr"/>
			</p>
			<p>
			Choisissez un avatar:           
			<input type="file" name="avatar" required/>
			</p>
			
			<input type="submit" value="Envoyer"/>
			<input type="reset" value="Recommencer"/>
			</form>
</div>
		</div>

<!-- ................................................................. PIED DE PAGE ............................................................................... -->
<?php include ("pdp.php");  ?>
	</body>

</html>
