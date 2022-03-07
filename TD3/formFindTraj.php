<?php

$message ='';

if(!empty($_GET)){
    if(empty($_GET['login'])){
        $message = 'Veuillez indiquer votre login';
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
    <title>Formulaire Passager</title>
</head>

<body>
<form method="get" action="testFindTraj.php">
    <fieldset>
        <legend>Entrez votre login</legend>
        <p>
            <label for="login">ID</label> :
            <input type="text" placeholder="Login" name="login" id="login" required/>
        </p>
        <p>
            <input type="submit" value="Envoyer"/>
        </p>
    </fieldset>
</body>
</html>
