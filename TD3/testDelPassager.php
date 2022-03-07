<?php


require_once 'Model.php';
require_once 'Trajet.php';
require_once 'Utilisateur.php';


$rep = Model::getPDO()->query("SELECT * FROM utilisateur");

$rep->setFetchMode(PDO::FETCH_CLASS, 'Utilisateur');

Trajet::deletePassager(4);