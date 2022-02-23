<?php 

	require_once "Voiture.php";

	$voiture = new Voiture("$_POST[marque]","$_POST[couleur]","$_POST[immatriculation]");

	//remplacer $_POST par $_POST si le formulaire est en méthode GET

	$voiture->afficher();

?>