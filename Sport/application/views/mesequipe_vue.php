

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<title>Mes Équipe</title>
		<link rel='stylesheet' type='text/css' href='<?php echo base_url(); ?>styles/styleequipe.css'>
	</head>
	<body>
		<header id="haut">	
		<h1>Site de Sport</h1>
			
		</header>
<!-- .......................................................................MENU................................................................................ -->
				<?php include ("menu.php");  ?>


			<br>
			<center><a href="<?php echo site_url('Liens/creerequipe'); ?>"><h3> Cliquez ici pour créer une équipe</h3></a></center>
			<center><a href="<?php echo site_url('Liens/rejoindreequipe'); ?>"><h3> Cliquez ici pour rejoindre une équipe</h3></a></center>
			
			
			<h4>Mes Équipes</h4>
			
			<?php
		$model=$this->load->model('Equipe_model');

			?>
<!-- .......................................................... PIED DE PAGE ............................................................................ -->
		<?php include ("pdp.php");  ?>
	</body>
</html>
