
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
	<center><h3> Vous êtes connecté(e) !</h3></center>

<?php
	if(isset($_COOKIE['connecter'])){
	echo "cookie";
}
?>

<!-- .......................................................... PIED DE PAGE ............................................................................ -->
		<?php include ("pdp.php");  ?>
	</body>
</html>
