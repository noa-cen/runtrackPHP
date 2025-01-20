<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 7</title>
</head>
<body>
    <h1>Changer le style</h1>
    <form action="" method="post">
        <label for="str">Entrez une phrase: </label><br>
        <input type="text" id="str" name="str"><br><br>

        <label for="select">Choisissez le style à appliquer:</label><br>
        <select name="styleOption">
            <option value="gras">Gras</option>
            <option value="cesar">César</option>
            <option value="plateforme">Plateforme</option>
        </select><br><br>

        <button type="submit">Changer</button>
    </form>
    <?php 
        function gras($str) {
            $pattern = "/\b[A-Z][a-z]+/";
            return preg_replace($pattern, "<strong>$0</strong>", $str);
        }
        
    ?>
    <p><?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $str = $_POST["str"];

            if ($_POST["styleOption"] == "gras") {
                echo gras($str);
            }
            // elseif ($_POST["styleOption"] == "cesar") {
            //     echo cesar($str, $nombre = 2);
            // }
            // else {
            //     echo plateforme($str);
            // }
        } ?></p>
</body>
</html>