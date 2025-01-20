<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Job 6</title>
    </head>
    <body>
        <h1>Leet speak</h1>
        <form action="" method="post">
            <label for="str">Ecrivez une phrase: </label><br>
            <input type="text" id="str" name="str"><br><br>

            <input type="submit" value="Traduire"><br><br>
        </form>
        <?php 
        function leetSpeak($str) {
            $leetDict = [
                'a' => '4', 'b' => '8', 'e' => '3', 'i' => '1', 'o' => '0', 's' => '5', 't' => '7',
                'A' => '4', 'B' => '8', 'E' => '3', 'I' => '1', 'O' => '0', 'S' => '5', 'T' => '7'
            ];
            $traduction = "";

            for ($i = 0; isset($str[$i]); $i++) {
                if (isset($leetDict[$str[$i]])) {
                    $traduction .= $leetDict[$str[$i]];
                } else {
                    $traduction .= $str[$i];
                }
            }
            return $traduction;
        }
        ?>
        <p><?php 
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $str = $_POST["str"];

                echo leetSpeak($str);
            }
        ?></p>
    </body>
</html>