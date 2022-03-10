<?php 

	require_once "ModelVoiture.php";

	$voiture = new ModelVoiture("$_POST[marque]","$_POST[immatriculation]","$_POST[couleur]");

	//remplacer $_POST par $_POST si le formulaire est en méthode GET

	$voiture->afficher();
    $voiture->save();

?>