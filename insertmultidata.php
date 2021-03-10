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
VALUES ('Irfana', 'K V', 'bhgt@gmail.com', 9789786780)";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email, contact)
VALUES ('Shilpa', 'A N', 'mnhj@gmail.com', 9879876540)";


if ($conn->multi_query($sql) === TRUE) {
    echo "New record created successfully";
}else {
    echo "Error:" . $sql . "<br>" . $conn->error;
}
$conn->close();
?>