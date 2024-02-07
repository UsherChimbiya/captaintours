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
    $destination = $_POST["destination"];
    $transfer_type = $_POST["transfer_type"];
    $from_place = $_POST["from_place"];
    $to_place= $_POST["to_place"];
    $arrival_date = $_POST["arrival_date"];
    $departure_date = $_POST["departure_date"];
    $adult = $_POST["adult"];
    $children = $_POST["children"];

    // Prepare and execute SQL statement
    $sql = "INSERT INTO reservation (destination, transfer_type, from_place, to_place, arrival_date, departure_date, adult, children)
            VALUES ('$destination', '$transfer_type', '$from_place', '$to_place', '$arrival_date', '$departure_date', $adult, $children)";

    if ($conn->query($sql) === TRUE) {
        echo "Reservation successfully added!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the connection
$conn->close();
?>