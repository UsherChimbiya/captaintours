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
        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $subject = $_POST['subject'];
        $website = $_POST['website'];
    
        // Prepare and execute SQL statement
        $sql = "INSERT INTO contactus (full_name, email, message, subject, website) VALUES ('$full_name', '$email', '$message', '$subject', '$website')";
    
        if ($conn->query($sql) === TRUE) {
            echo "Reservation successfully added!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    
    // Close the connection
    $conn->close();
    
    ?>
