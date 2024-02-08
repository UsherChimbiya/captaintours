<?php
include("conf.php");
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: index.php");
    exit();
}

if (isset($_GET['id'])) {
    $reservationId = $_GET['id'];
    
    // Update the status to "Approved"
    $sql = "UPDATE reservations SET status = 'Approved' WHERE id = $reservationId";
    if ($conn->query($sql) === TRUE) {
        $successMessage = "Reservation approved successfully.";
    } else {
        $errorMessage = "Error updating record: " . $conn->error;
    }
} else {
    $errorMessage = "Invalid reservation ID.";
}

// Redirect back to the reservations page
header("Location: reservation.php?successMessage=$successMessage&errorMessage=$errorMessage");
exit();
