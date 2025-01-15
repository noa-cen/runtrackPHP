<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Job 2</title>
    </head>
    <body>
    <?php 
        $str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";
        $i = 0;
        while (isset($str[$i])) {
            echo $str[$i];
            $i +=2 ;
        };
    ?>
    </body>
</html>