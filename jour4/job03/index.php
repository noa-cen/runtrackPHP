<?php 
$compteur = 0;
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    foreach ($_POST as $name => $value) {
        $compteur++;
    };
};
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Job 3</title>
    </head>
    <body>
        <h1>Ce formulaire récupère <?php echo $compteur; ?> arguments POST.</h1>
        <form action="/index.php" method="POST">
            <label for="prenom">Prénom:</label><br>
            <input type="text" id="prenom" name="prenom" value=""><br>

            <label for="nom">Nom:</label><br>
            <input type="text" id="nom" name="nom" value=""><br><br>

            <input type="submit" value="Submit">
        </form> 
    </body>
</html>