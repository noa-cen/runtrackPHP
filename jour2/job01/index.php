<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Job 1</title>
    </head>
    <body>
    <?php 
        $x = 0;
        while ($x <= 1337) {
            if ($x == 42) {
                echo "<strong>".$x."</strong>";
            }
            else {
                echo $x;
            }
            echo "<br>";
            $x++;
        }
    ?>
    </body>
</html>