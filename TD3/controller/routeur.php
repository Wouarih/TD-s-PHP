<?php
require_once 'ControllerVoiture.php';
// On recupère l'action passée dans l'URL
$action = "routeur.php?action=readAll";
// Appel de la méthode statique $action de ControllerVoiture
ControllerVoiture::$action();
?>

