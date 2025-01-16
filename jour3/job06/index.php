<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Job 6</title>
    </head>
    <body>
    <?php
        $str = "Les choses que l'on Possede finissent par nous posseder";
        $inverse = " ";
        $longeur= 0;
        while(isset($str[$longeur])){
            $longeur++;
        }
        for ($i = $longeur -1; $i > 0 ; $i-- ) {
            $inverse .= $str[$i];
        }
        echo $inverse;
    ?>
    
    </body>
</html>