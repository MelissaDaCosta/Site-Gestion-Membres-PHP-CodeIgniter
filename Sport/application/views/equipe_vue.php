
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

	<h3> Voulez-vous vous créer une équipe? </h3>
			
			<form method="post" action="<?php echo site_url('Equipe/equipe'); ?>"/>
		 <p>
			Entrez un nom pour l'équipe:           
			<input type="text" name="nom" required placeholder="durand"/>
			</p>

			<p>
			Entrez le mot de passe d'inscription pour l'équipe:           
			<input type="password" name="mdp" required placeholder="toto1234"/>
			</p>

<p>
			Entrez le sport de votre équipe:           
			<input type="text" name="sport" required placeholder="tennis"/>
			</p>

			<p>
			Choisissez la ville de votre équipe:
        
			<input type="text" name="ville" required placeholder="Fontainebleau"/>
			</p>

<p>
		Choisissez la description de votre équipe: <br>      
		<textarea name="msg" id="message" placeholder="description...."></textarea>
			</p>

<p>
			Donnez la mixité de l'équipe: 
<br>          
			 <input type="radio" name="mixte" value="mixte"> Équipe mixte<br>
  			<input type="radio" name="mixte" value="masculine"> Équipe Masculine<br>
  			<input type="radio" name="mixte" value="feminine"> Équipe Feminine<br>
			</p>
<p>
			Choisissez un logo:           
			<input type="file" name="logo" required/>
			</p>
<p>
			Choisissez une photo:           
			<input type="file" name="photo" required/>
			</p>

			<input type="submit" value="Envoyer"/>
			<input type="reset" value="Recommencer"/>
			</form>
			
</div>

<!-- ............................................... REVENIR EN HAUT ............................................................................................................. -->

			<button onclick="window.scrollTo(0,0)">^</button>
	
<!-- ................................................................................ PIED DE PAGE ............................................................................ -->
	<?php include ("pdp.php");  ?>
	</body>
</html>
