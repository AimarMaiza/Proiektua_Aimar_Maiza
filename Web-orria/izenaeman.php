<?php
$servername = "localhost:3308";
$username = "root";
$password = "";
$dbname = "taula";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$erabil = $_POST["izena"];
$pasa = $_POST["pasahitza"];
$email = $_POST["korreoa"];

$sql = "INSERT INTO taula (erabiltzailea, pasahitza, korreoa)
VALUES ('$erabil', '$pasa', '$email')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 