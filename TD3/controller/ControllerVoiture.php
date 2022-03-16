<?php
require_once ('../model/ModelVoiture.php'); // chargement du modèle
class ControllerVoiture {
    public static function readAll() {
        $tab_v = ModelVoiture::getAllVoitures();     //appel au modèle pour gerer la BD
        require ('../view/voiture/list.php');  //"redirige" vers la vue
    }
    //tab_v : tableau de voiture
    //routeur.php?action=readAll
    public static function read()
    {
        $v = ModelVoiture::getVoitureByImmat($_GET["immat"]);
        require('../view/voiture/detail.php');
    }
    //v : voiture seul
    //routeur.php?action=read&immat=....
    //try and catch pour la gestion d'erreur?
}
?>
