<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Job 5</title>
    </head>
    <body>
    <?php 
        $estPremier = False;
        for ($x=2; $x<=1000; $x++) {
            $nbDiviseurs = 0;
            for ($n=1; $n<=$x; $n++) {
                if ($x % $n == 0) {
                    $nbDiviseurs++;
                }
            }
            if ($nbDiviseurs == 2) {
                $estPremier = True;
                echo $x;
                echo "<br>";
            }
        };
    ?>
    </body>
</html>