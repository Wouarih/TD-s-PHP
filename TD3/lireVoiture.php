<?php

//-> appel fonction / :: appel fonction static

require_once 'Model.php';
require_once 'ModelVoiture.php';

$rep = Model::getPDO()->query("SELECT * FROM voiture");


/*$tab_obj = $rep->fetchAll(PDO::FETCH_OBJ);*/

$rep->setFetchMode(PDO::FETCH_CLASS, 'ModelVoiture');

$tab_voit = $rep->fetchAll();

foreach($tab_voit as $key){
        $key->afficher();
}

//$car = new ModelVoiture("CASOUALE", "Citroen", "Noir");

//ModelVoiture::getVoitureByImmat("0A100E2S");

//$car->save();



