<?php
session_start();
if (!isset($_SESSION["erabiltzailea"])){
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="eu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo $_SESSION['erabiltzailea']; ?>
    <a href="irten.php">Irten<a>
</body>
</html>