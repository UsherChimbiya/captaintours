<?php
session_start();
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
    if(isset($_SESSION['customer_id'])) {
        $customer_id = $_SESSION['customer_id'];
        // Proceed with using $customer_id
        // Retrieve form data
        $car_type = $_POST["car_type"];
        $pick_up_place = $_POST["pick_up_place"];
        $pick_up_date = $_POST["pick_up_date"];
        $pick_up_time = $_POST["pick_up_time"];
        $drop_off_place = isset($_POST["drop_off_place"]) ? $_POST["drop_off_place"] : "";
        $drop_off_date = isset($_POST["drop_off_date"]) ? $_POST["drop_off_date"] : "";
        $drop_off_time = isset($_POST["drop_off_time"]) ? $_POST["drop_off_time"] : "";

        // Prepare and execute SQL statement
        $sql = "INSERT INTO reservations (car_type, pick_up_place, pick_up_date, pick_up_time, drop_off_place, drop_off_date, drop_off_time)
                VALUES ('$car_type', '$pick_up_place', '$pick_up_date', '$pick_up_time', '$drop_off_place', '$drop_off_date', '$drop_off_time')";

        if ($conn->query($sql) === TRUE) {
            header("Location:reservation.php");
            exit(); // Ensure script stops executing after redirection
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        // Handle the case where the user is not logged in
        //redirect them to the login page
        header("Location:\login.php");
        exit(); // Ensure script stops executing after redirection
    }
}

// Close the connection
$conn->close();

