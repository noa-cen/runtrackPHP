<?php
$estEtudiant = True;
$age = 31;
$prenom = "Noa";
$note = 4.5;

$type = ["booléen", "entier", "chaîne de caractères", "nombre à virgule"];

$nom = ["estEtudiant", "age", "prenom", "note"];

$valeur = [$estEtudiant, $age, $prenom, $note];

echo "<table>";
echo "<tr><th>type</th> <th>nom</th> <th>valeur</th></tr>";
echo "<tr><td>{$type[0]}</td> <td>{$nom[0]}</td> <td>{$valeur[0]}</td></tr>";
echo "<tr><td>{$type[1]}</td> <td>{$nom[1]}</td> <td>{$valeur[1]}</td></tr>";
echo "<tr><td>{$type[2]}</td> <td>{$nom[2]}</td> <td>{$valeur[2]}</td></tr>";
echo "<tr><td>{$type[3]}</td> <td>{$nom[3]}</td> <td>{$valeur[3]}</td></tr>";
echo "</table>";

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage des recettes</title>
</head>
<body>
    <ul>
        <?php for ($lines = 0; $lines <= 3; $lines++) : ?>
            <li><?php echo $recipes[$lines]['title'] . ' (' . $recipes[$lines]['author'] . ')'; ?></li>
        <?php endfor; ?>
    </ul>
</body>
</html>