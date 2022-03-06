<?php

    $message ='';

    if(!empty($_GET)){
        if(empty($_GET['trajet_id'])){
            $message = 'Veuillez indiquer votre numéro de trajet';
        }
        else{
            $message ='Voici votre trajet';
        }
    }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Formulaire Trajet</title>
</head>

<body>
    <form method="get" action="testFindUtil.php">
        <fieldset>
            <legend>Entrez l'ID Trajet</legend>
            <p>
                <label for="trajet_id">ID</label> :
                <input type="text" placeholder="ID" name="id" id="trajet_id" required/>
            </p>
            <p>
                <input type="submit" value="Envoyer"/>
            </p>
        </fieldset>
</body>
</html>
