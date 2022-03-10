<?php

require_once 'Model.php';
require_once 'Voiture.php';

$rep = Model::getPDO()->query("SELECT * FROM ModelVoiture");


/*$tab_obj = $rep->fetchAll(PDO::FETCH_OBJ);*/

$rep->setFetchMode(PDO::FETCH_CLASS, 'ModelVoiture');

$tab_voit = $rep->fetchAll();

foreach($tab_voit as $key){
        $key->afficher();
}





/*foreach($tab_obj as $key => $value){
    echo "<p>$value->immatriculation</p>";
    echo "<p>$value->marque</p>";
    echo "<p>$value->couleur</p>";


}*/



