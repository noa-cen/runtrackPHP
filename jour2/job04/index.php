<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Job 4</title>
    </head>
    <body>
    <?php 
        $x = 1;
        while ($x <= 100) {
            if ($x % 3 == 0 && $x % 5 !== 0) {
                echo "Fizz";
                echo "<br>";
                $x++;
            }
            elseif ($x % 5 == 0 && $x % 3 !== 0) {
                echo "Buzz";
                echo "<br>";
                $x++;
            }
            elseif ($x % 3 == 0 && $x % 5 == 0) {
                echo "FizzBuzz";
                echo "<br>";
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