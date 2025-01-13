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