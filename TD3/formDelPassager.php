<?php

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Annulation Trajet</title>
</head>

<body>
<form method="get" action="testDelPassager.php">
    <fieldset>
        <legend>Entrez votre trajet</legend>
        <p>
            <label for="trajet">ID</label> :
            <input type="text" placeholder="trajet" name="trajet" id="trajet_id" required/>
        </p>
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