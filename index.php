<?php
if (isset($_POST["submit"])) {
 session_start();

 $_SESSION["name"]  = htmlentities($_POST["name"]);
 $_SESSION["email"] = htmlentities($_POST["email"]);

 header("Location: status.php");
}
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
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
        <input type="text" name="name" placeholder="Enter name">
        <br>
        <input type="text" name="email" placeholder="Enter email">
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>