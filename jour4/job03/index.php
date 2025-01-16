<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 3</title>
</head>
<body>
    <form action="" method="post">
        <label for="surname">Prénom :</label>
        <input type="text" id="surname" name="Prénom" placeholder="Votre prénom"><br><br>

        <label for="name">Nom :</label>
        <input type="text" id="name" name="Nom" placeholder="Votre nom"><br><br>

        <label for="age">Age :</label>
        <input type="text" id="age" name="Age" placeholder="Votre âge"><br><br>

        <button type="submit">Envoyer</button>
    </form>

    <?php
    $compteur = 0;

    foreach ($_POST as $key => $value) {
        if ($value !== "") {
            $compteur++;
        }
    };
    echo "Le nombre d'arguments POST est ".$compteur;

?>
</body>
</html>