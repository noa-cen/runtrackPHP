<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Job 5</title>
    </head>
    <body>
    <?php 
        $str = "Les choses que l'on Possède finissent par nous posséder";
        $i = 0;
        while(isset($str[$i])) {
            $i++;
        };
        for ($j = $i; $j >= 0; $j--) {
            echo $str[$j];
        };
    ?>
    
    </body>
</html>