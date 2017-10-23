
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<title>Mon profil</title>
		<link rel='stylesheet' type='text/css' href='<?php echo base_url(); ?>styles/styleprofil.css'>
	</head>
	<body>
		<header id="haut">	
		<h1>Site de Sport</h1>
			
		</header>
<!-- .......................................................................MENU................................................................................ -->
				<?php include ("menu.php");  ?>

<!-- .................................................. COTE ........................................................................ -->
				
		<aside>   
			

			<?php 
				$this->load->model('Profil_model');


			?>
		</aside>


<!-- .......................................................... PIED DE PAGE ............................................................................ -->
		<?php include ("pdp.php");  ?>
	</body>
</html>
