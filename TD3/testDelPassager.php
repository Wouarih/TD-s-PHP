<?php


require_once 'Model.php';
require_once 'Trajet.php';
require_once 'Utilisateur.php';


$rep = Model::getPDO()->query("SELECT * FROM utilisateur");

$rep->setFetchMode(PDO::FETCH_CLASS, 'Utilisateur');


var_dump(Utilisateur::findTrajets('testpassager'));
Trajet::deletePassager("testpassager");
var_dump(Utilisateur::findTrajets('testpassager'));