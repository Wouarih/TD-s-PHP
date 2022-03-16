<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Liste des voitures</title>
</head>
<body>
<?php

    echo '<p> La voiture ' . $v->getMarque() . ' immatriculé '. $v->getImmatriculation() . ' est de couleur '. $v->getCouleur() .'.</p>';

?>

</body>
</html>
