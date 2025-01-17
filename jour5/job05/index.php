<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Job 5</title>
    </head>
    <body>
        <h1>Occurence</h1>
        <form action="" method="post">
            <label for="str">Entrez plusieurs caractères: </label><br>
            <input type="text" id="str" name="str"><br><br>

            <label for="char">Entrez une lettre: </label><br>
            <input type="text" id="char" name="char"><br><br>

            <input type="submit" value="Calculer"><br><br>
        </form>
        <?php 
        function occurences($str, $char) {
            $compteur = 0;
            $i = 0;
            while (isset($str[$i])) {
                if ($str[$i] ==  $char) {
                    $compteur++;
                }
                $i++;
                
            }
            return $compteur;
        }
        ?>
        <p><?php 
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $str = $_POST["str"];
                $char = $_POST["char"];

                echo $char." apparaît ".occurences($str, $char)." dans ".$str;
            }
        ?></p>
    </body>
</html>