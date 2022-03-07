<?php

require_once 'Model.php';
require_once 'Trajet.php';
require_once 'Utilisateur.php';


$rep = Model::getPDO()->query("SELECT * FROM trajet");

$rep->setFetchMode(PDO::FETCH_CLASS, 'Trajet');

$tab_passager = $rep->fetchAll();

Utilisateur::findTrajets("$_GET[login]");
