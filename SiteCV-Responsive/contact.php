<?php
	// si on clic sur le bouton envoi :
	if(isset($_POST['envoi']))
	{
		mail("liamtardieu@gmail.com", $_POST['sujet'], $_POST['message'], $_POST['expediteur']);
		// mail : fonction prédéfinie en PHP.
	}
?>
<!Doctype html>
<html>
	<head>
		<link rel="stylesheet" href="style.css" />
	</head>
	<body>
		<header>
			<div class="conteneur">
				<div class="haut-gauche">
					<a href="index.html">
						<!-- <img src="logo.jpg" height="80"/> -->
						<h1>Monnom Monprenom</h1>
					</a>
					<!-- <div class="clear"></div> -->
					<h2><span>C</span>ommunication / <span>M</span>arketing / <span>D</span>igital</h2>
				</div>
				<div class="haut-droit">
					<a href="fichier/cv.pdf">Télécharger mon CV</a>
					<a href="">Partagez</a>
				</div>
				<div class="clear"></div>
				<nav>
					<a href="index.html">Accueil</a>
					<a href="moncv.html">Mon CV</a>
					<a href="mesprojets.html">Mes Projets</a>
					<a href="contact.php">Contact</a>
				</nav>
			</div>
		</header>
		<section>
			<div class="conteneur contact">
				<h2>Contact</h2>
				<div class="contact-gauche">
					<form method="post" action="">
						<label for="expediteur">Expediteur</label>
						<input type="email" name="expediteur" id="expediteur" placeholder="votreadresse@site.com" /><br /><br />
						
						<label for="sujet">Sujet</label>
						<input type="text" name="sujet" id="sujet" placeholder="votre sujet..." /><br /><br />
						
						<label for="message">Message</label>
						<textarea name="message" id="message" placeholder="message..."></textarea><br /><br />
						
						<input type="submit" name="envoi" value="envoi" />
					</form>
				</div>
				<div class="contact-droit">
					<img src="img/email.jpg" class="email" />
				</div>
				<div class="clear"></div>
			</div>
		</section>
		<footer>
			<div class="conteneur">
				<a href="">Informations</a> -
				<a href="">Mentions Légales</a> -
				<a href="contact.php">Contact</a>
				<br />
				<p>© 2013 Conception et réalisation par Nom Prenom. Tous droits réservés.</p>
			</div>
		</footer>
	</body>
</html>















