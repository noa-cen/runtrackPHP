<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Job 5</title>
    </head>
    <body>
    <?php 
        $str = "On n est pas le meilleur quand on le croit mais quand on le sait";
        $voyelles = "aeiouyAEIOUY";
        $consonnes = "zrtpqsdfghjklmwxcvbnZRTPQSDFGHJKLMWXCVBN";
        $dic = [
            "voyelles" => 0,
            "consonnes" => 0,
        ];

        $i = 0;
        while (isset($str[$i])) {
            $j = 0;
            while (isset($voyelles[$j])) {
                if ($str[$i] == $voyelles[$j]) {
                    $dic["voyelles"]++;
                }
                $j++;
            }
            $k = 0;
            while (isset($consonnes[$k])) {
                if ($str[$i] == $consonnes[$k]) {
                    $dic["consonnes"]++;
                }
                $k++;
            }
            $i++ ;
        };
    ?>
    <table>
        <tr>
            <th>Voyelles</th>
            <th>Consonnes</th>
        </tr>
        <tr>
            <td><?php echo $dic["voyelles"] ?></td>
            <td><?php echo $dic["consonnes"] ?></td>
        </tr>
    </table>
    </body>
</html>