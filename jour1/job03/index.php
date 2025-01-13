<?php
$estEtudiant = True;
$age = 31;
$prenom = "Noa";
$note = 4.5;

$type = Array();
$type[0] = "booléen";
$type[1] = "entier";
$type[2] = "chaîne de caractères";
$type[3] = "nombre à virgule";

$nom = Array();
$nom[0] = "estEtudiant";
$nom[1] = "age";
$nom[2] = "prenom";
$nom[3] = "note";

$valeur = Array();
$valeur[0] = $estEtudiant;
$valeur[1] = $age;
$valeur[2] = $prenom;
$valeur[3] = $note;

echo "<table>";
echo "<tr><th>type</th> <th>nom</th> <th>valeur</th></tr>";
echo "<tr><td>{$type[0]}</td> <td>{$nom[0]}</td> <td>{$valeur[0]}</td></tr>";
echo "<tr><td>{$type[1]}</td> <td>{$nom[1]}</td> <td>{$valeur[1]}</td></tr>";
echo "<tr><td>{$type[2]}</td> <td>{$nom[2]}</td> <td>{$valeur[2]}</td></tr>";
echo "<tr><td>{$type[3]}</td> <td>{$nom[3]}</td> <td>{$valeur[3]}</td></tr>";
echo "</table>";
?>