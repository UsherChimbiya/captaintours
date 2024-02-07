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
    $car_type = $_POST["car_type"];
    $pick_up_place = $_POST["pick_up_place"];
    $pick_up_date = $_POST["pick_up_date"];
    $pick_up_time = $_POST["pick_up_time"];
   // $drop_off_place = $_POST["drop_off_place"];
   // $drop_off_date = $_POST["drop_off_date"];
   // $drop_off_time = $_POST["drop_off_time"];
    $drop_off_place = isset($_POST["drop_off_place"]) ? $_POST["drop_off_place"] : "";
    $drop_off_date = isset($_POST["drop_off_date"]) ? $_POST["drop_off_date"] : "";
    $drop_off_time = isset($_POST["drop_off_time"]) ? $_POST["drop_off_time"] : "";

    // Prepare and execute SQL statement
    $sql = "INSERT INTO reservations (car_type, pick_up_place, pick_up_date, pick_up_time, drop_off_place, drop_off_date, drop_off_time)
            VALUES ('$car_type', '$pick_up_place', '$pick_up_date', '$pick_up_time', '$drop_off_place', '$drop_off_date', '$drop_off_time')";

    if ($conn->query($sql) === TRUE) {
        echo "Reservation successfully added!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the connection
$conn->close();
?>
