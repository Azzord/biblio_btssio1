<!DOCTYPE html>
<html lang="fr">
<head>
		<!-- fonts + charset -->	
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">
	<!-- Font Awesome kit's code-->
	<script src="https://kit.fontawesome.com/35d9663f9e.js" crossorigin="anonymous"></script>
	<!-- titre -->
	<title> Contact </title>
	<!--link-css-file-->
	<link rel="stylesheet" type="text/css" href="../css/style_contact.css">
	<link rel="icon" href="../images/favicon.ico"/>
</head>
<body>
	<nav id="sticky">
			<input type="checkbox" id="menu">
			<label for ="menu">
				<i class="fas fa-align-justify" id="signe"></i>
			</label>
				<h1> Contact </h1>
				<a href="../index.html"><img id ="ipssi" src="../images/logo.png" alt="Call 404"></a>
				<ul>
					<li><a href="../index.php"> Accueil </a></li>
					<li><a href="qsn.php"> Qui sommes-nous </a></li>
					<li><a href="#" class="active"> Contact </a></li>
				</ul>
		</nav>

		<section><h1 class="mail"> Vous pouvez nous contacter directement sur nos 
		<span id="email">adresses mails</span></h1>.
		<div class="inf"><span id="email2"> e-mail DAYOT</span> : k.dayot@ecole-ipssi.net
		<br>
		<span id="email3"> e-mail MAURICE</span> : m.maurice@ecole-ipssi.net
		</div>
		<div class="reme"> Nous vous remercions d'avoir visité notre bibliothèque en ligne &#33;</div>
		</section>


		<form method="post">

				<label for="name" class="cat"> Pseudonyme: </label>
				<input type="text" id ="name" name="client_name" autofocus required><br>
		
				<label for ="mail" class="cat"> Courriel:</label>
				<input type="email" id="mail" name="client_mail" required><br>

				<label for="pack" class="cat"> Raison:</label>
				<select class="cat">
					<option value="Design"> Design du site </option>
					<option value="Bug">Bug rencontré </option>
					<option value="Bug">Suggestion(s)</option>
				</select>
				<br>	

				<label for = "addreq" class="cat"><br>Informations complémentaires: </label><br>
				<textarea id ="addreq" placeholder="Entrez ici vos remarques" class="cat2"></textarea>
			
				<br>
				<button type="reset">Tout effacer</button>
				<button type="submit">Envoyer</button>

			</form>
			
			<footer class="fbg"> 
				<p class="fp"> Ecole IPSSI - Campus Marne-La-Vallée - Projet Web </p>
				<p class="fp"> © 2020 Tous droits réservés </p>
				</footer>
			
</body>
</html>