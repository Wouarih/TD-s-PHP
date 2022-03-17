<?php

require_once "../model/ModelVoiture.php";
require_once "ControllerVoiture.php";


$voiture = new ModelVoiture("$_GET[marque]","$_GET[immatriculation]","$_GET[couleur]");

$voiture -> save();

ControllerVoiture::readAll();
