<?php

//-> appel fonction / :: appel fonction static

require_once '../model/Model.php';
require_once 'TD3/model/ModelVoiture.php';

$rep = Model::getPDO()->query("SELECT * FROM voiture");


/*$tab_obj = $rep->fetchAll(PDO::FETCH_OBJ);*/

//$rep->setFetchMode(PDO::FETCH_CLASS, 'ModelVoiture');

//$tab_voit = $rep->fetchAll();

$tab = ModelVoiture::getAllVoitures();

foreach($tab as $key => $value){
    echo "<p>$key : $value</p>";
}

//$car = new ModelVoiture("CASOUALE", "Citroen", "Noir");

//ModelVoiture::getVoitureByImmat("0A100E2S");

//$car->save();



