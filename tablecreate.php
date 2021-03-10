<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "AiclDB";

// Create connection with database
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "connected";

// sql to create table
$sql = "CREATE TABLE AiclTable (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50) NOT NULL,
contact VARCHAR(10) NOT NULL)";

if ($conn->query($sql) === TRUE) {
  echo "Table AiclTable created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>