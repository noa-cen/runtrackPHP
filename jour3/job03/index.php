<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Job 3</title>
    </head>
    <body>
    <?php 
        $str = "I'm sorry Dave I'm afraid I can't do that.";
        $vowels = "aeiouyAEIOUY";

        for ($i = 0; $i < strlen($str); $i++) {
            for ($j = 0; $j < strlen(($vowels)); $j++) {
                if ($str[$i] == $vowels[$j]) {
                    echo $str[$i]."<br />";
                }
            }
        };     
    ?>
    </body>
</html>