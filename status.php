<?php
session_start();

$name  = $_SESSION["name"];
$email = $_SESSION["email"];

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
    <h3>
        Thank you <?php echo $name; ?>, you've subscribed with the email: <?php echo $email; ?>
    </h3>

    <a href="home.php">
        Go to home page
    </a>
</body>
</html>