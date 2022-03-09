<?php


require_once 'Model.php';
require_once 'Trajet.php';
require_once 'Utilisateur.php';


$rep = Model::getPDO()->query("SELECT * FROM utilisateur");

$rep->setFetchMode(PDO::FETCH_CLASS, 'Utilisateur');



//var_dump(method_exists('Trajet', 'deletePassager'));

//print_r(Utilisateur::findTrajets('testpassager'));
Trajet::deletePassager("Je ne peux pas appeler mes 2 paramètres ici");
//print_r(Utilisateur::findTrajets('testpassager'));

