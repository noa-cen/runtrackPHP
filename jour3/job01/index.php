<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Job 1</title>
    </head>
    <body>
    <?php 
        $nombres = [200, 204, 173, 98, 171, 404, 459];
        foreach ($nombres as $x) {
            if ($x % 2 == 0) {
                echo "".$x." est paire <br />";
            }
            else {
                echo "".$x." est impaire <br />";
            }
        };
    ?>
    </body>
</html>