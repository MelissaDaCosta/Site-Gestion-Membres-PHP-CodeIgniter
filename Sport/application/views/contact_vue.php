<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<title>Contact</title>
		<link rel='stylesheet' type='text/css' href='<?php echo base_url(); ?>styles/stylecontact.css'>
	</head>
	<body>
		<header>	
		<h1>Site de Sport</h1>
			
		</header>
<!-- ..................................................MENU................................................................................ -->
				<?php include ("menu.php");  ?>

			
<!-- ............................................................... CONTACT .................................................................................... -->
			<div class="formulaire">
				
				
				<form method="post" action="contact.php">
					<fieldset>
						<legend>Formulaire de contact</legend>
						<p>
							<label for="nom">Entrez votre nom: </label>  
							<input type="text" id="nom" name="nom" required>  <!-- required pour obliger remplir -->
						</p>
						<br>
						<p>
							<label for="mail">Entrez votre email: </label>  
							<input type="email" id="mail" name="mail" required>
						</p>
						<br>
						<p>
							<label for="message">Message: </label>
							<textarea name="msg" id="message"></textarea>
						</p>
						<br><br>
						<input type="submit" value="Envoyer">
						<input type="reset" value="Recommencer">
					
					</fieldset>
				</form>
			</div>

			<div class= "rapport">
					<center><h2>Rapport</h2></center>

					<h3>Introduction</h3>
					<p>Notre projet porte sur l'élaboration d'un site web sur la gestion d'un club de sport. 
					Nous avons débuté par la phase d'analyse et de conception mi-mai, avant de commencer la phase de développement.
					Nous avons travailler environ quatre heures par semaines.
						</p><br><br>

					Notre site est composé de six onglets pour faciliter l'accessibilité du site: Accueil, Équipe, Calendrier, mon Profil, Déconnexion et Contact.<br>
					L'onglet accueil permet de s'inscrire ou de se connecter, l'onglet Équipe permet de voir les équipes dans lesquelles l'utilisateur est membre, 
					et également de créer et ou rejoindre un équipe.<br>
					Grâce au calendrier, le membre pourra voir les événements organisées par l'entraîneur d'une de ses équipes.<br>
					L'utilisateur pourra voir son profil grâce à l'onglet mmon Profil. <br>
					Pour se déconnecter, il suffit de cliquer sur l'onglet deconnexion.<br>
					La partie contact permettra de contacter l'administrateur du site.<br>
					<br><br>
					Répartition des tâches:
					<br>
					Chloé à commencé par concevoir la base de données du site et les triggers.
					Tandis que Mélissa à pris en main CodeIgniter puis nous avons réalisé le développement du site ensemble.
					<br><br><br>

					<TABLE BORDER>
	<TR>
		<TH>Notions apprises</TH> <TH>Notions développées</TH> 
	</TR>
	<TR>
		<TD>COOKIE</TD> <TD>approfondissement de l'utilisation des cookies.</TD>
	<TR>
		<TD>Frameword CodeIgniter</TD> <TD>Développement en MVC</TD>
	</TR>
	<TR>
		<TD>Php myadmin </TD> <TD>Gestion d'une base de données</TD>
	</TR>
</TABLE>	

				<br><br><h3>Conclusion</h3>	

				Ce projet à été dense à réaliser. Il nous à cependant permis de comprendre l'architecture Modèles View Controller grâce au framework CodeIgniter.
				<br>
				Ainsi que la gestion et la création d'une base de données sous php myadmin également son utilisation sous php.


		</div>
<!-- ......................................................................... PIED DE PAGE ............................................................................................. -->
			
<!-- ...................................................................................................................................................................... -->
	<?php include ("pdp.php");  ?>
	</body>
</html>
