

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
				
		<div class="event">
				
				<center><h3>AJOUTER UN ÉVÉNEMENT</h3></center>
				
            <form method="post" action="<?php echo site_url('Calendrier/calendrier'); ?>"/>

            	<p>
			Entrez le nom de l'equipe pour l'événement:           
			<input type="text" name="nom" required placeholder="Equipe..."/>
			</p>
			<p>
			Entrez un type pour l'événement(Entraînement/Compétition):           
			<input type="text" name="type" required placeholder="compétition"/>
			</p>

			<p>
			Entrez un numéro pour l'événement(Entraînement/Compétition):           
			<input type="number" name="idE" required placeholder="118"/>
			</p>

			<p>
			Entrez une date de début pour l'événement:           
			<input type="date" name="dated" required placeholder="02/10/17"/>
			</p>

			<p>
			Entrez une date de fin pour l'événement:           
			<input type="date" name="datef" required placeholder="02/10/17"/>
			</p>

			<p>
			Entrez un lieu pour l'événement:           
			<input type="text" name="lieu" required placeholder="Stade machin"/>
			</p>

			<p>
			Entrez une description pour l'événement:           
			<textarea name="description" id="msg" placeholder="Competion exterieur contre ..."></textarea>
			</p>

			<input type="submit" value="Envoyer"/>
			<input type="reset" value="Recommencer"/>
			</form>
		</div>
<!-- .......................................................... PIED DE PAGE ............................................................................ -->
	<?php include ("pdp.php");  ?>
	</body>
</html>
