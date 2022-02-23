<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Test Voiture</title>
    </head>


        <body>

        <?php

        require_once "Voiture.php";






        $voiture1 = new Voiture("Fiat","beige","NAZ8AZ");

        $voiture1->afficher();

        


        ?>

        </body>

</html>
