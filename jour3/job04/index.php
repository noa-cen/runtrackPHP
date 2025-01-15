<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Job 4</title>
    </head>
    <body>
    <?php 
        $str = "Dans l'espace, personne ne vous entend crier.";

        $i = 0;
        while (isset($str[$i])) {
            $i++ ;
        };
        echo "Cette chaîne de caractère possède ".$i." caractères.";
    ?>
    </body>
</html>