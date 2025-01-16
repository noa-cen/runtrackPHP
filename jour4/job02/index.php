<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Job 2</title>
    </head>
    <body>
        <form action="/index.php" method="GET">
            <label for="prenom">Prénom:</label><br>
            <input type="text" id="prenom" name="prenom" value=""><br>

            <label for="nom">Nom:</label><br>
            <input type="text" id="nom" name="nom" value=""><br>

            <label for="age">Age:</label><br>
            <input type="text" id="age" name="age" value=""><br><br>

            <input type="submit" value="Submit">
        </form> 
        <br>
        <table>
            <tr>
                <?php 
                foreach ($_GET as $name => $value) {
                    echo "<th>".$name."</th>";
                };
                ?>
            </tr>
            <tr>
            <?php 
                foreach ($_GET as $name => $value) {
                    echo "<td>".$value."</td>";
                };
                ?>
            </tr>
        </table>
        <style>
            table, th, td {border: 1px solid #000;
            border-collapse: collapse;}
        </style>
    </body>
</html>