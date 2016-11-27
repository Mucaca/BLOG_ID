<?php 
	include('./verification.php');
?>

<!-- Methode post/get -->

<!doctype html>

<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Blog Traitement Formulaire</title>
	<link rel="stylesheet" href="style.css">
</head>
<script src="script.js"></script>

<!--BODY-->
	<body>
		<form action="blog.php" method="POST">
		<h1><center>Blog de Lucas Muré</center></h1>
		<p>
		<a href="./deconnexion.php" title="Se déconnecter">Se déconnecter</a>



		</p>


		</form>
		
	</body>
	<footer>
		<form action="blog.php" method="POST">

			<h2><center>FORMULAIRE</center></h2>   <!-- FORMULAIRE DANS LE FOOTER -->
			<div>
				<p>
					<center><label for="pseudo"><strong>Pseudo : </strong></label><input type="text" name="pseudo" /></center>  <!--- PSEUDO BOX-->
					<br/>
					<br/>
					<center><label for="titre"><strong>Titre : </label><input type="text" name="titre" /></center> <!--- TITRE BOX -->
					<br/>
					<br/>
							
					<center><textarea name="message" for="message"  placeholder="Message ici!" rows="4" cols="20"></textarea></center>   <!--- MESSAGE BOX -->
							
					<br/>
					<br/>
					<center><input type="submit" value="Envoyer" /></center>  <!--- SUBMIT BOUTTON -->
					<br/>
					<br/>
					<center>Muca's blog. 2016.</center>
				</p>
			</div>
		</form>
	</footer>
</html>



<div class="scroll">
<?php
	
	date_default_timezone_set('Europe/Paris'); //FUSEAU HORAIRE
	$jour=date('d');
	$mois=date('m');
	$annee=date('Y');
	$heure=date('H');
	$minute=date('i');

	if(isset($_POST['pseudo']) AND isset($_POST['titre']) AND isset($_POST['message']) )
	{
		$file = fopen("TP.txt", "a+");		//OUVERTURE FICHIER TXT
		echo '<br/>';
		fwrite($file,"Date : ".$jour.'/'.$mois.'/'.$annee.' '.$heure.':'.$minute."<br/>"."<br/>");	//ECRITURE DATE
		echo '<br/>';
		fwrite($file,"Pseudo : ".$_POST['pseudo']."<br/>"."<br/>");     //ECRITURE PSEUDO
		echo '<br/>';
		fwrite($file,"Titre : ".$_POST['titre']."<br/>"."<br/>");		//ECRITURE TITRE
		echo '<br/>';
		fwrite($file,"Message : ".$_POST['message']."<br/>"."<br/>");	//ECRITURE MESSAGE
		echo '<br/>';
		fwrite($file,"- - - - - - - - - - - - - - - - - - - - - - - - - - - - "."<br/>");  //ECRITURE SEPARATION
		echo '<br/>';
		 
		$lines = file("tp.txt");		
		foreach($lines as $n => $line)   //AFFICHAGE FICHIER TXT
		{
		echo $line . "<br/>";
		}
	}
?>




	
	
	