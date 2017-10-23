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
	<center><h3> Vous êtes inscrit vous pouvez maintenant vous connecter</h3></center>
	<br>
<center><a href="<?php echo site_url('Accueil/index'); ?>"<h2>SE CONNECTER</h2></a></center>

<!-- .......................................................... PIED DE PAGE ............................................................................ -->
		<?php include ("pdp.php");  ?>
	</body>
</html>
