<?php

//-> appel fonction / :: appel fonction static

require_once 'Model.php';
require_once 'Voiture.php';

$rep = Model::getPDO()->query("SELECT * FROM voiture");


/*$tab_obj = $rep->fetchAll(PDO::FETCH_OBJ);*/

$rep->setFetchMode(PDO::FETCH_CLASS, 'Voiture');

$tab_voit = $rep->fetchAll();

foreach($tab_voit as $key){
        $key->afficher();
}

//$car = new Voiture("CASOUALE", "Citroen", "Noir");

//Voiture::getVoitureByImmat("0A100E2S");

//$car->save();



