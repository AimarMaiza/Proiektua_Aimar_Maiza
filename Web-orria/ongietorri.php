<?php
session_start();
if (!isset($_SESSION["erabiltzailea"])) {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="eu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Osasuna - Hasiera</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            background: url('irudiak/osasunafondo.jpg') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
            color: white;
        }

        .edukia {
            background-color: rgba(0, 43, 92, 0.85); 
            padding: 40px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 0 20px rgba(0,0,0,0.5);
        }

        h1 {
            color: #d6001c; 
            margin-bottom: 20px;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #d6001c;
            color: white;
            text-decoration: none;
            font-weight: bold;
            border-radius: 8px;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #a40015;
        }
    </style>
</head>
<body>
    <div class="edukia">
        <h1>Ongi etorri, <?php echo htmlspecialchars($_SESSION['erabiltzailea']); ?>!</h1>
        <a href="irten.php">Irten</a>
    </div>
</body>
</html>