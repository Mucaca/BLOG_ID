<?php
// On active les sessions :
session_start();
 
// On teste la présence des sessions d'identification :
if((isset($_SESSION['identifiant'])) && (isset($_SESSION['mot_de_passe'])))
{
	// Si celles-ci existent, on inclus les données de connexion :
	include('./donnees.php');
 
	// On teste les données des sessions avec celles du fichier :
	if(($_SESSION['identifiant'] != $Identifiant)
	|| ($_SESSION['mot_de_passe'] != $Mot_de_passe))
	{
		// Si elles ne correspondent pas, on redirige le visiteur :
		header('Location: ./index.php');
		exit();
	}
}
else
{
	// Si les sessions n'existent pas, on redirige à la page d'authentification :
	header('Location: ./index.php');
	exit();
}
?>