<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Formulaire Voiture</title>
</head>
<body>
<form method="get">

    <fieldset>
        <legend>Mon formulaire :</legend>
        <p>
            <label for="immat_id">Immatriculation</label> :
            <input type="text" placeholder="Immatriculation" name="immatriculation" id="immat_id" required/>
        </p>

        <p>
            <label for="marq_id">Marque</label> :
            <input type="text" placeholder="Marque" name="marque" id="marq_id" required/>
        </p>

        <p>
            <label for="coul_id">Couleur</label> :
            <input type="text" placeholder="Couleur" name="couleur" id="coul_id" required/>
        </p>


        <p>
            <input type="submit" value="Envoyer" />
        </p>
        <input type='hidden' name='action' value='created'>
    </fieldset>
</form>

</body>
</html>
