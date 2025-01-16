<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 5</title>
</head>
<body>
    <form action="" method="post">
        <label for="username">Username :</label>
        <input type="text" id="username" name="username" placeholder="Username"><br><br>

        <label for="password">Password :</label>
        <input type="password" id="password" name="password" placeholder="Password"><br><br>

        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($_POST["username"] === "John" && $_POST["password"] === "Rambo") {
            echo "It's not my war";
        }
        else echo "Your worst nightmare";
    };
    ?>
</body>
</html>