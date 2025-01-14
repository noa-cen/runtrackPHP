<?php
$estEtudiant = True;
$age = 31;
$prenom = "Noa";
$note = 4.5;

$type = ["booléen", "entier", "chaîne de caractères", "nombre à virgule"];

$nom = ["estEtudiant", "age", "prenom", "note"];

$valeur = [$estEtudiant, $age, $prenom, $note];

echo "<table>";
echo "<tr><th>Type</th> <th>nom</th> <th>valeur</th></tr>";
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
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Affichage d'un tableau</title>
    </head>
    <body>
        <table>
            <tr>
                <th>Type</th>
                <th>Nom</th>
                <th>Valeur</th>
            </tr>
            <tr>
                <td><?php echo $type[0] ?></td>
                <td><?php echo $nom[0] ?></td>
                <td><?php echo $valeur[0] ?></td>
            </tr> 
            <tr>
                <td><?php echo $type[1] ?></td>
                <td><?php echo $nom[1] ?></td>
                <td><?php echo $valeur[1] ?></td>
            </tr> 
            <tr>
                <td><?php echo $type[2] ?></td>
                <td><?php echo $nom[2] ?></td>
                <td><?php echo $valeur[2] ?></td>
            </tr>
            <tr>
                <td><?php echo $type[3] ?></td>
                <td><?php echo $nom[3] ?></td>
                <td><?php echo $valeur[3] ?></td>
            </tr> 
        </table>
    </body>
</html>