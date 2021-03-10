<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aiclDB";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die ("Connection failed:" .$conn->connect_error);
}
$sql = "INSERT INTO AiclTable (firstname, lastname, email, contact)
VALUES ('Naseela', 'K T', 'abc@gmail.com', 9876543210)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
}else {
    echo "Error:" . $sql . "<br>" . $conn->error;
}
$conn->close();
?>