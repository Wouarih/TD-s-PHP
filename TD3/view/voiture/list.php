<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Liste des voitures</title>
</head>
<body>
<?php
foreach ($tab_v as $v)
    echo '<p> Voiture d\'immatriculation <a href="../controller/routeur.php?action=read&immat=' . $v->getImmatriculation() . '"> '. $v->getImmatriculation() . '</a> </p>';
?>
</body>
</html>

<!-- <a me permet de de créer un lien direct vers le routeur qui utilise l'action read et qui renvoie le chemin URL vers la page demandé


