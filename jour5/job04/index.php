<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 4</title>
</head>
<body>
    <h1>Calculatrice</h1>
    <form action="" method="post">
        <label for="nombre1">Entrez un nombre: </label><br>
        <input type="number" id="nombre1" name="nombre1"><br><br>

        <label for="operateur">Choisissez l'opération à effectuer:</label><br>
        <input type="text" id="operateur" name="operateur"><br><br>

        <label for="nombre2">Entrez un nombre: </label><br>
        <input type="number" id="nombre2" name="nombre2"><br><br>

        <button type="submit">Calculer</button>
    </form>
    <?php 
        function calcul($nombre1, $operateur, $nombre2) {
            switch ($operateur) {
                case "+":
                    return $nombre1 + $nombre2;
                    break;
                case "-":
                    return $nombre1 - $nombre2;
                    break;
                case "*":
                    return $nombre1 * $nombre2;
                    break;
                case "/":
                    if ($nombre2 != 0) {
                        return $nombre1 / $nombre2;
                        break;
                    }
                    else {
                        return "La division par 0 est impossible.";
                        break;
                    }
                case "%":
                    return $nombre1 % $nombre2;
                    break;
                default: 
                    return "Il y a eu une erreur dans le choix de l'opérateur.";
            }
        }
    ?>
    <p><?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre1 = $_POST["nombre1"];
            $operateur = $_POST["operateur"];
            $nombre2 = $_POST["nombre2"];

            echo $nombre1." ".$operateur." ".$nombre2." = ".calcul($nombre1, $operateur, $nombre2);
        } ?></p>
</body>
</html>