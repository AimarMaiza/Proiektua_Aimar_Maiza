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

$sql = "INSERT INTO taula (erabiltzailea, pasahitza)
VALUES ('Aner', '1234'),('Alaska', '1234'),('Mario', '1234')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 