<?php 
$compteur = 0;
foreach ($_GET as $name => $value) {
    $compteur++;
};
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Job 1</title>
    </head>
    <body>
        <h1>Ce formulaire récupère <?php echo $compteur ?> arguments GET.</h1>
        <form action="/index.php" method="GET">
            <label for="prenom">Prénom:</label><br>
            <input type="text" id="prenom" name="prenom" value=""><br>

            <label for="nom">Nom:</label><br>
            <input type="text" id="nom" name="nom" value=""><br><br>

            <input type="submit" value="Submit">
        </form> 
    </body>
</html>