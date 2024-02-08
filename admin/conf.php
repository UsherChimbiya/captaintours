<?php
 $host = "localhost"; // Replace with your MySQL host
 $username = "root"; // Replace with your MySQL username
 $password = ""; // Replace with your MySQL password
 $database = "carbooking"; // Replace with your MySQL database name
 $conn = new mysqli($host, $username, $password, $database);
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }
?>