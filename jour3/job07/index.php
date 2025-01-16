<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Job 7</title>
    </head>
    <body>
    <?php 
        $str = "Certaines choses changent, et d'autres ne changeront jamais.";
        $inverse = "";
        
        $i = 0;
        while(isset($str[$i])) {
            $i++;
        };
        
        for ($j = 0; $j < $i; $j++) {
            if ($j == $i - 1) {
                $inverse .= $str[0];
            }
            else {
                $inverse .= $str[$j + 1];
            }
        };
        echo $inverse;
    ?>
    
    </body>
</html>