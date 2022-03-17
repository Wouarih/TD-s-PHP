<?php 

	require_once "ModelVoiture.php";

	$voiture = new ModelVoiture("$_GET[marque]","$_GET[immatriculation]","$_GET[couleur]");

	//remplacer $_POST par $_POST si le formulaire est en méthode GET

	$voiture->afficher();
    $voiture->save();

?>