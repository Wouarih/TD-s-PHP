<?php
    include_once ('TD3/model/ModelVoiture.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Liste des voitures</title>
    </head>
    <body>
        <?php
        $tab_v = array(
                $tab_v["immatriculation"] = "TESTTEST"
        );
        foreach ($tab_v as $v)
            ModelVoiture::getVoitureByImmat("TEST1");
            echo '<p> Voiture d\'immatriculation ' . $v-> getImmatriculation(). '.</p>';
        ?>
    </body>
</html>
