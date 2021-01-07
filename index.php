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
	<title> Universal Library </title>
	<!--link-css-file-->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="icon" href="images/favicon.ico"/>
	</head>

	<body>
		<nav id="sticky">
			<input type="checkbox" id="menu">
			<label for ="menu">
				<i class="fas fa-align-justify" id="signe"></i>
			</label>
				<h1> KD & MM </h1>
				<a href="index.html"><img id ="ipssi" src="images/logo.png" alt="Call 404"></a>
				<ul>
					<li><a href="#" class="active"> Accueil </a></li>
					<li><a href="menu/qsn.php"> Qui sommes-nous </a></li>
					<li><a href="menu/contact.php"> Contact </a></li>
				</ul>
        </nav>

			<div class="nom"><h2> "Universal Library" </h2></div>
			<div class="pa"><h2> "Il y a autant de livre que d'étoiles" </h2></div>
			<div class="pr"><h3> Bienvenue sur cette bibliothèque en ligne conçu par 2 étudiants d'IPSSI - MLV</h3></div>

			<hr class="hr">
			<div class="blkx"><h2 class="hiddenr">Hidden</h2></div>
			

		<!-- INCLUSION CODE PHP COURS POUR TEST -->
			<?php
           $link = mysqli_connect("localhost", "root", "", "bibliotheque");
        if(!$link) {
            echo "Erreur : Impossible de se connecter à MySQL" . PHP_EOL;
            echo "Errno de débogage: " . mysqli_connect_errno() . PHP_EOL;
            echo "Erreur de débogage : " . mysqli_connect_error() . PHP_EOL;
            exit;
        }

        echo "Succès : Une connexion correcte à MySQL a été faite! la base de donnée my_db est géniale " . PHP_EOL;
        //echo "Information d'hôte : " . mysqli_get_host_info($link)."<br>";

        $req = "SELECT isbn, editeur, genre FROM livre"; // Info de la BDD à mettre dans cette ligne mais après ... 
        $result = mysqli_query($link,$req);

        if($result){
            echo "SELECT a retourné". mysqli_num_rows($result)." lignes.<br>";
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
				echo "<p>ISBN : " . $row["isbn"] . "<br>";
				echo "<p> Editeur : " . $row["editeur"] . " <br>";
				echo "<p> Genre : " . $row["genre"] . " <br>";
            }
            mysqli_free_result($result);
        }
        mysqli_close($link);
        
    ?> 	
		<!-- FIN INCLUSION CODE PHP COURS POUR TEST -->
		<!-- Jour 5 ça marche toujours pas dans les morceaux HTML... -->

		    <section id="livre1">
			<h2 class="tabl">Cliquez sur les images pour en savoir plus sur les livres proposés !</h2>
			<figure class=fc1>
			<a href="livres/2845387660.php"><img src="images/Simp.png" class="bd" alt="Call 404"></a> 
			<figcaption class="fg1"><strong>Les Simpson Extravaganza</strong><br><span><?php echo "<p>ISBN : " . $row["isbn"] . "</p>" ?></span> <br>  Auteur: Matt Groening Editeur: Jungle </figcaption>
			</figure>	

			<figure>
			<a href="livres/2205025635.php"><img src="images/lasagne.png" class="bd" alt="Call 404"></a> 
			<figcaption class="fg1"> <strong>Garfield Prend du poids</strong> ISBN: 2205025635<br> Auteur: Jim Davis<br> Editeur: DARGAUD
			</figcaption>
			</figure>

			<figure>
			<a href="livres/9782845992795.php"><img src="images/bebop.png" class="bd" alt="Call 404"></a> 
			<figcaption class="fg1"> <strong>Bebop Cowboy</strong><br> ISBN: 9782845992795<br> Auteur: Cain KUGA<br> Editeur: PIKA
			</figcaption>
			</figure>

			<figure>
			<a href="livres/9782871291282.php"><img src="images/conan.png" class="bd" alt="Call 404"></a> 
			<figcaption class="fg1"><strong>Detective Conan</strong><br>ISBN: 9782871291282<br> Auteur: Gosho AOYAMA<br> Editeur: KANA </figcaption>
			</figure>

			<figure>
			<a href="livres/9782010009112.php"><img src="images/homere.png" class="bd" alt="Call 404"></a> 
			<figcaption class="fg1"><strong>Homère l'Odysée</strong><br>ISBN: 9782010009112<br> Auteur: Homère<br> Editeur: Jean Bérard</figcaption>
			</figure>

			<figure>
			<a href="livres/9781300985730.php"><img src="images/gilga.png" class="bd" alt="Call 404"></a> 
			<figcaption class="fg1"><strong>L'épopée de Gilgamesh</strong><br>ISBN: 9781300985730<br> Auteur: Blondel BRION<br> Editeur: Soleil</figcaption>
			</figure>

			<figure>
			<a href="livres/2845634609.php"><img src="images/oksa.png" class="bd" alt="Call 404"></a> 
			<figcaption class="fg1"><strong>Oksa</strong><br>ISBN: 2845634609<br> Auteur: Cendrine Wolf,<br> Anne Plichota<br> Editeur: XO EDITIONS</figcaption>
			</figure>

			<figure>
			<a href="livres/9782070102648.php"><img src="images/miserable.png" class="bd" alt="Call 404"></a> 
			<figcaption class="fg1"><strong>Les Misérables</strong><br>ISBN: 9782070102648<br> Auteur: Victor Hugo<br> Editeur: Maurice ALLEM</figcaption>
			</figure>

			<figure>
			<a href="livres/2283028426.php"><img src="images/poisson.png" class="bd" alt="Call 404"></a> 
			<figcaption class="fg1"><strong>La vie de couple des poissons rouges</strong><br>ISBN: 2283028426<br>Auteur: Guadalupe Nettel<br> Editeur: Buchet CHASTEL </figcaption>
			</figure>

			<figure>
			<a href="livres/9782070144488.php"><img src="images/mineurs.png" class="bd" alt="Call 404"></a> 
			<figcaption class="fg1"><strong> Héroïsmes Mineurs</strong><br>ISBN: 9782070144488<br> Auteur: Molly ANTOPOL<br> Editeur: Gallimard</figcaption>
			 </figure>
			 
			 <figure>
			<a href="livres/1974711099.php"><img src= "images/monster.png" class="bd" alt="Call 404"></a> 
			<figcaption class="fg1"><strong>Monster Hunter World,<br>The Official Complete Works</strong><br>ISBN: 1974711099<br> Auteur: Capcom<br> Editeur: VIZ Media</figcaption>
			 </figure>

			<figure>
			<a href="livres/1506715540.php"><img src="images/doom.png" class="bd" alt="Call 404"></a> 
			<figcaption class="fg1"><strong>The Art of DOOM Eternal</strong><br>ISBN: 1506715540<br> Auteur: iD Software<br> Editeur: Dark Horse Books</figcaption>
			</figure>
			</section>
						
			<section class="blk2"><h2 class="hiddenr2">Hidden</h2></section>

			<footer class="fbg"> 
				<p class="fp"> Ecole IPSSI - Campus Marne-La-Vallée - Projet Web </p>
				<p class="fp"> © 2020 Tous droits réservés </p>
				<div class="dgh">
					<p class="pgh"> Github </p>
					<a href="https://github.com/Azzord/biblio_btssio1"><img src="images/gh.png" class="gh" alt="call 404"></a>
				</div>
				</footer>
	
	</body>



</html>