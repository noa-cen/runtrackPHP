<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 6</title>
</head>
<body>
    <form action="" method="get">
        <label for="nombre">Nombre :</label>
        <input type="number" id="nombre" name="nombre" placeholder="Entrez un nombre"><br><br>

        <button type="submit">Envoyer</button>
    </form>

    <?php
        if (isset($_GET['nombre'])) {
            $nombre = $_GET['nombre'];

                if ($nombre % 2 == 0) {
                    echo "<p>Nombre pair</p>";
                } else {
                    echo "<p>Nombre impair</p>";
                }
            };
    ?>
</body>
</html>