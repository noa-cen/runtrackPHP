<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 1</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #ddd;
            text-align: left;
            padding: 10px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <form action="" method="get">
        <label for="surname">Prénom :</label>
        <input type="text" id="surname" name="Prénom" placeholder="Votre prénom"><br><br>

        <label for="name">Nom :</label>
        <input type="text" id="name" name="Nom" placeholder="Votre nom"><br><br>

        <label for="age">Age :</label>
        <input type="text" id="age" name="Age" placeholder="Votre âge"><br><br>

        <button type="submit">Envoyer</button>
    </form>
    <table>
        <tr>
            <?php 
            foreach ($_GET as $name => $value) {
                echo "<th>".$name."</th>";
            }
            ?>
        </tr>
        <tr>
            <?php 
            foreach ($_GET as $name => $value) {
                echo "<td>".$value."</td>";
            }
            ?>
        </tr>
    </table>

</body>
</html>
