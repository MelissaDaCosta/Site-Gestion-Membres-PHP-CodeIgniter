<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<title>Équipe</title>
		<link rel='stylesheet' type='text/css' href='<?php echo base_url(); ?>styles/styleequipe.css'>
	</head>
	<body>
		<header id="haut">	
		<h1>Site de Sport</h1>
			
		</header>
<!-- .......................................................................MENU................................................................................ -->
			<?php include ("menu.php");  ?>

<!-- ....................................................................... CREER EQUIPE ................................................................................ -->

<div class="equipe">

	<h3> Voulez-vous vous rejoindre une équipe? </h3>
			
			<form method="post" action="<?php echo site_url('Equipe/equipe'); ?>"/>
		 <p>
			Entrez le nom de l'équipe:           
			<input type="text" name="nom" required placeholder="durand"/>
			</p>

			<p>
			Entrez le sport de votre équipe:           
			<input type="text" name="sport" required placeholder="tennis"/>
			</p>

			<p>
			Entrez le mot de passe d'inscription de l'équipe:           
			<input type="password" name="mdp" required placeholder="toto1234"/>
			</p>

			<input type="submit" value="Envoyer"/>
			<input type="reset" value="Recommencer"/>
			</form>
			
</div>

<!-- ............................................... REVENIR EN HAUT ............................................................................................................. -->

			<div class="bouton">
				<a href="equipe.html#haut" title="Revenir en haut de la page"><img src="../img/haut.png" alt="test"></a>
			</div>
	
<!-- ................................................................................ PIED DE PAGE ............................................................................ -->
	<?php include ("pdp.php");  ?>
	</body>
</html>
