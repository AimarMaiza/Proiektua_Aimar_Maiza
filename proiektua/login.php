<?php
session_start();
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

$sql = "SELECT erabiltzailea, pasahitza FROM taula WHERE erabiltzailea='$erabil' AND pasahitza='$pasa'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  $_SESSION["erabiltzailea"] = $erabil;
  header("Location: ongietorri.php");
  exit();
} else {
  echo "0 results";
}
$conn->close();
?> 
