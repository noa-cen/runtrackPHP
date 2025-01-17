<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 2</title>
</head>
<body>
    <?php 
        $jour = False;
        function bonjour($jour) {
            if ($jour) {
                return "Bonjour !";
            }
            else {
                return "Bonsoir !";
            }
        }
    ?>
    <h1><?php echo bonjour($jour) ?></h1>
</body>
</html>