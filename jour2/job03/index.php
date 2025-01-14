<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Job 3</title>
    </head>
    <body>
        <?php 
            $x = 0;
            while ($x <= 100) {
                if ($x <= 20) {
                    echo "<em>".$x."</em>";
                    echo "<br>";
                    $x++;
                }
                elseif ($x >=25 && $x <=50) {
                    if ($x == 42) {
                        echo "LaPlateforme_";
                        echo "<br>";
                    }
                    else {
                        echo "<u>".$x."</u>";
                        echo "<br>";
                    }
                    $x++;
                }
                else {
                    echo $x;
                    echo "<br>";
                    $x++;
                }
            }
        ?>
    </body>
</html>