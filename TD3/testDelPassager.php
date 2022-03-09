<?php


require_once 'Model.php';
require_once 'Trajet.php';
require_once 'Utilisateur.php';

$d["trajet_id"] = "$_GET[trajet]";
$d["utilisateur_login"] = "$_GET[login]";


$rep = Model::getPDO()->query("SELECT * FROM utilisateur");

$rep->setFetchMode(PDO::FETCH_CLASS, 'Utilisateur');



//var_dump(method_exists('Trajet', 'deletePassager'));

//print_r(Utilisateur::findTrajets('testpassager'));
Trajet::deletePassager($d);
//print_r(Utilisateur::findTrajets('testpassager'));

