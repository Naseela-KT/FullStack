<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "aiclDB";

 //create connection
 $conn = new mysqli($servername,$username,$password,$dbname);

 //check connection
 if(conn->connect_error) {
     die("Connection faied:" .$conn->connect_error)
 }

 $sql = "INSERT INTO AiclTable(fisrtname,lastname,email,contact)
         VALUES(Naseela,K T,abcd@gmail.com,9876543210)";
 $sql = "INSERT INTO AiclTable(fisrtname,lastname,email,contact)
         VALUES(Irfana,K V,efgh@gmail.com,9898767609)";
 $sql = "INSERT INTO AiclTable(fisrtname,lastname,email,contact)
         VALUES(Fathima,Dilsha,ijk@gmail.com,9876543210)";
 
 if(conn->multi_query($sql) === TRUE) {
     echo "New records created successfully";
 }else {
     echo "Error:" . $sql ."<br>" .$conn->error;
 } 
 $conn->close();
 ?>