<?php
// Include database connection code here if not already done
include("conf.php");
$alertClass = "";
$successMessage = "";
if (isset($_GET['id'])) {
    $userId = $_GET['id'];
    $sql = "DELETE FROM users WHERE id = $userId";
    if ($conn->query($sql) === TRUE) {
        $alertClass = "alert alert-success";
        $successMessage = "Registration successful!";
        header("location:view_user.php");
    } else {
        echo "Error deleting user: " . $conn->error;
    }
}
?>