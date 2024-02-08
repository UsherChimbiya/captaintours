<?php
include("conf.php");
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: index.php");
    exit();
}
$alertClass = "";
$successMessage = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect user input
    $username = $_POST["fullname"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT); // Hash the password
    

    $sql = "INSERT INTO users (fullname,email, password) VALUES ('$username','$email','$password')";

    if ($conn->query($sql) === TRUE) {
        $alertClass = "alert alert-success";
        $successMessage = "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Car Lease </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link rel="stylesheet" href="./vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./vendor/owl-carousel/css/owl.theme.default.min.css">
    <link href="./vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">



</head>

<body>

<?php
include("header.php");



include("sidebar.php");
?>
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
            <?php
    if (!empty($successMessage)) {
        echo "<div class='$alertClass'>$successMessage</div>";
    }
    ?>
        <section id="login" class="p_3">
  <div class="container-xl">
      <div class="row">
          <div class="col-md-12">
              <div class="login_1 p-4 m-auto">
        <form action="" method="post">
                      <h3 class="col_oran">Register</h3>
                      <p>Create a user account</p>
                      <div class="mb-3">
                          <label for="fullname" class="form-label">Full Name</label>
                          <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Your Name" required>
                      </div>
                      <div class="mb-3">
                          <label for="email" class="form-label">Email Address</label>
                          <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
                          <div class="invalid-feedback" id="emailError"></div>
                      </div>
                      <div class="mb-3">
                          <label for="password" class="form-label">Password</label>
                          <input type="password" class="form-control" id="password" name="password" placeholder="Your Password" required>
                      </div>
                      <!-- Your existing form fields -->
                      
                      <button type="submit" class="btn btn-primary mt-3">Register <i class="fa fa-sign-in ms-1"></i></button>
                  </form>
              </div>
          </div>
      </div>
  </div>
</section>
</div>
</div>
        <!--**********************************
            Footer start
        ***********************************-->
   
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
    <script src="./js/quixnav-init.js"></script>
    <script src="./js/custom.min.js"></script>


    <!-- Vectormap -->
    <script src="./vendor/raphael/raphael.min.js"></script>
    <script src="./vendor/morris/morris.min.js"></script>


    <script src="./vendor/circle-progress/circle-progress.min.js"></script>
    <script src="./vendor/chart.js/Chart.bundle.min.js"></script>

    <script src="./vendor/gaugeJS/dist/gauge.min.js"></script>

    <!--  flot-chart js -->
    <script src="./vendor/flot/jquery.flot.js"></script>
    <script src="./vendor/flot/jquery.flot.resize.js"></script>

    <!-- Owl Carousel -->
    <script src="./vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <!-- Counter Up -->
    <script src="./vendor/jqvmap/js/jquery.vmap.min.js"></script>
    <script src="./vendor/jqvmap/js/jquery.vmap.usa.js"></script>
    <script src="./vendor/jquery.counterup/jquery.counterup.min.js"></script>


    <script src="./js/dashboard/dashboard-1.js"></script>

</body>

</html>
