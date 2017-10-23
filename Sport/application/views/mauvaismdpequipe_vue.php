

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<title>Calendrier</title>
		<link rel='stylesheet' type='text/css' href='<?php echo base_url(); ?>styles/style.css'>
	</head>
	<body>
		<header id="haut">	
		<h1>Site de Sport</h1>
			
		</header>
<!-- .......................................................................MENU................................................................................ -->
				<?php include ("menu.php");  ?>
<!-- ......................................................... CONNECTER ......................................................................... -->


<br>
	<center><h2> Mot de passe incorrect ! Veuillez réessayer.</h2></center>
	<br>
<center><a href="<?php echo site_url('Liens/rejoindreequipe'); ?>"<h1>RECOMMENCER</h1></a></center>

<!-- .......................................................... PIED DE PAGE ............................................................................ -->
		<?php include ("pdp.php");  ?>
	</body>
</html>
