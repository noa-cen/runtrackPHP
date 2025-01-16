<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 1</title>
</head>
<body>
    <form action="" method="get">
        <label for="surname">Prénom :</label>
        <input type="text" id="surname" name="Prénom" placeholder="Votre prénom"><br><br>

        <label for="name">Nom :</label>
        <input type="text" id="name" name="Nom" placeholder="Votre nom"><br><br>

        <label for="age">Age :</label>
        <input type="text" id="age" name="Age" placeholder="Votre âge"><br><br>

        <button type="submit">Envoyer</button>
    </form>

    <?php
    // Initialiser un tableau vide pour stocker les arguments non vides
    $compteur = 0;

    // Parcourir chaque élément de $_GET
    foreach ($_GET as $key => $value) {
        // Vérifier si la valeur n'est pas vide
        if ($value !== "") {
            // Ajouter l'élément dans le tableau des arguments non vides
            $compteur++;
        }
    };
    echo "Le nombre d'arguments GET est ".$compteur;

?>
</body>
</html>