<?php

// Database connection
$servername = "localhost"; // Change this to your database server
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$dbname = "carbooking"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind the SQL statement
$stmt = $conn->prepare("SELECT id, fullname, email FROM customers WHERE id = ?");
$stmt->bind_param("i", $customer_id);

// Execute the query
$stmt->execute();

// Bind the result variables
$stmt->bind_result($id, $fullname, $email);

// Fetch the result
$stmt->fetch();

// Close the statement
$stmt->close();

// Close the connection
$conn->close();
?>

<section id="header">
    <nav class="navbar navbar-expand-md navbar-light" id="navbar_sticky" style="background:#00a0df">
        <div class="container-xl">
            <a class="navbar-brand fs-3 p-0 fw-bold text-white" href="index.html"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mb-0 ">
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="index.php" style="font-size:15px;font-family:Arial">HOME</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a style="font-size:15px;font-family:Arial" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            DESTINATION
                        </a>
                        <ul class="dropdown-menu drop_1" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#" style="font-size:12px"> USA</a></li>
                            <li><a class="dropdown-item border-0" href="#" style="font-size:12px">UK</a></li>
                            <li><a class="dropdown-item border-0" href="#" style="font-size:12px">Canada</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="about.php" style="font-size:15px;font-family:Arial">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" style="font-size:15px;font-family:Arial" href="contact.php">CONTACT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="reservation.php" style="font-size:15px;font-family:Arial">RESERVATION</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="cart.php" style="font-size:15px;font-family:Arial"><i class="fa fa-shopping-cart"></i></a>
                    </li>
                </ul>
                <ul class="navbar-nav mb-0 ms-auto">
                <?php if(isset($_SESSION['customer_id'])): ?>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="#" style="font-size:15px;font-family:Arial"></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a style="font-size:15px;font-family:Arial" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php echo $fullname; ?>
                        </a>
                        <ul class="dropdown-menu drop_1" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="logout.php" style="font-size:12px"> Logout</a></li>
                        </ul>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="login.php" style="font-size:15px;font-family:Arial">Sign In</a>
                    </li>
                    <li class="nav-item">
                        <a class="mx-2 nav-link button_2 ms-2 me-2" href="register.php" style="font-size:15px;font-family:Arial">Register <i class="fa fa-check-circle ms-1"></i></a>
                    </li>
                <?php endif; ?>
            </ul>
            </div>
        </div>
    </nav>
</section>
