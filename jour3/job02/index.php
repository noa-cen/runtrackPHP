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
        for ($x=0; $x<=strlen($str); $x+=2) {
            echo $x."<br />";
        };
    ?>
    </body>
</html>