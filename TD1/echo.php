<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> Mon premier php </title>
    </head>
   
    <body>
        Voici le résultat du script PHP : 
        <?php
          // Ceci est un commentaire PHP sur une ligne
          /* Ceci est le 2ème type de commentaire PHP
          sur plusieurs lignes */
           
          // On met la chaine de caractères "hello" dans la variable 'texte'
          // Les noms de variable commencent par $ en PHP
          $texte = "hello world !";

          // On écrit le contenu de la variable 'texte' dans la page Web
          echo $texte;

          //Exercice 2

          $prenom = "Marc";

          echo "Bonjour " . $prenom;
          echo "\n";
          echo "Bonjour $prenom";
          echo "\n";
          echo 'Bonjour $prenom';
          echo "\n";
          echo $prenom;
          echo "\n";
          echo "$prenom";

          //Exercice 3
          $immatriculation ="35EB3773";
          $marque = "Ferrari";
          $couleur = "rouge";
        

          $voiture = array(
            "immatriculation" => "12918HJZA", 
            "marque" => "Renault Clio",
            "couleur" => "bordeaux");

          //print_r($voiture);

          echo "<p>Voiture $immatriculation de marque $marque (couleur $couleur)</p>";


          echo "<p>Voiture {$voiture["immatriculation"]} de marque {$voiture["marque"]} (couleur {$voiture["couleur"]})</p>";

            ?>

         



        




    </body>
</html> 