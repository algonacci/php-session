<?php
session_start();

// unset($_SESSION["name"]);

session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Session</title>
</head>
<body>
    <p>You've been logout</p>
    <a href="./index.php">Back to home page!</a>
</body>
</html>
