

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<title>Calendrier</title>
		<link rel='stylesheet' type='text/css' href='<?php echo base_url(); ?>styles/stylecalendrier.css'>
	</head>
	<body>
		<header id="haut">	
		<h1>Site de Sport</h1>
			
		</header>
<!-- .......................................................................MENU................................................................................ -->
				<?php include ("menu.php");  ?>
				
				
				
				<h3>Calendrier</h3>
				
				
				<center><a href="<?php echo site_url('Liens/evenement'); ?>"<h2>Cliquez ici pour ajouter un événement</h2></a></center>

				<?php
		$model=$this->load->model('Calendrier_model');
			


			?>
				
<!-- .......................................................... PIED DE PAGE ............................................................................ -->
	<?php include ("pdp.php");  ?>
	</body>
</html>
