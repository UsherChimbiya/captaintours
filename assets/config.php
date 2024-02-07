<?php
// Database credentials
$servername = "localhost"; // Change this if your MySQL server is running on a different host
$username = "root"; // Replace 'username' with your MySQL username
$password = ""; // Replace 'password' with your MySQL password
$database = "carbooking"; // Replace 'database_name' with the name of your MySQL database

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$conn->close();
?>
