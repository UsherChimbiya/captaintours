<?php
    // Replace with your actual database credentials
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "carbooking";
    
    // Create a connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // Handle form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
       
        $email = $_POST['email'];
       
    
        // Prepare and execute SQL statement
        $sql = "INSERT INTO subscriptions (email) VALUES ('$email')";
    
        if ($conn->query($sql) === TRUE) {
            echo "Subscribed successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    
    // Close the connection
    $conn->close();
    
    ?>
