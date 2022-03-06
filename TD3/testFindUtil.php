<?php

require_once 'Model.php';
require_once 'Trajet.php';
require_once 'Utilisateur.php';


$rep = Model::getPDO()->query("SELECT * FROM utilisateur");

$rep->setFetchMode(PDO::FETCH_CLASS, 'Utilisateur');

$tab_passager = $rep->fetchAll();

/*foreach($tab_passager as $key) {
    $key->afficher();
}*/


Trajet::findPassagers("$_GET[id]");

