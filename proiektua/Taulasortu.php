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

// sql to create table
$sql = "CREATE TABLE taula (
erabiltzailea VARCHAR(30) NOT NULL,
pasahitza VARCHAR(30) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>