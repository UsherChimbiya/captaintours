<?php
session_start();
    // Check if the session variable is set
    if(isset($_SESSION['customer_id'])) {
        $customer_id = $_SESSION['customer_id'];
        // Proceed with using $customer_id
    } 
$error_message = ""; // Initialize error message variable
$success_message = ""; // Initialize success message variable

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
    $stmt = $conn->prepare("INSERT INTO customers (fullname, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $fullname, $email, $password);

    // Set parameters and execute
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password for security

    // After successful registration
    if ($stmt->execute()) {
        // Registration successful, set session variables and redirect to login page
        $_SESSION['customer_id'] = $conn->insert_id; // Assuming you have a user ID
        // Set other session variables as needed
        header("Location: reservation.php");
        exit();
    } else {
        if ($conn->errno == 1062) { // Error code for duplicate entry
            // Email address already exists, set error message
            $error_message = "Email address already exists.";
        } else {
            $error_message = "Error: " . $stmt->error;
        }

        // Redirect back to registration page with error message as query parameter
        header("Location: register.php?error=" . urlencode($error_message));
        exit(); // Ensure script stops executing after redirection
    }
    $stmt->close();
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Car Lease</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/global.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#email').blur(function() {
                var email = $(this).val();
                $.ajax({
                    url: 'check_email.php',
                    type: 'POST',
                    data: {email: email},
                    success: function(response) {
                        if (response === 'exists') {
                            $('#emailError').text('Email already exists');
                            $('#email').addClass('is-invalid');
                        } else {
                            $('#emailError').text('');
                            $('#email').removeClass('is-invalid');
                        }
                    }
                });
            });
        });
    </script>
</head>
<body>
<div class="main_o clearfix position-relative">
 <div class="main_1 clearfix position-absolute top-0 w-100">
 <?php include 'header.php'; ?>
 </div>
 <div class="main_2 clearfix">
 <section id="center" class="center_reg">
   <div class="center_om clearfix">
     <div class="container-xl">
  <div class="row center_o1">
   <div class="col-md-12">
      <h2 class="text-white">Register</h2>
	  <h6 class="mb-0 mt-3 fw-normal col_oran"><a class="text-light" href="#">Home</a> <span class="mx-2 col_light">/</span> Register</h6>
   </div>
  </div>
 </div>
   </div>
 </section>
 </div>
 
</div>

<section id="login" class="p_3">
  <div class="container-xl">
      <div class="row">
          <div class="col-md-12">
              <div class="login_1 p-4 m-auto">
                 <!-- JavaScript to display error message if it exists -->
    <script>
      // Function to parse query parameters from URL
      function getParameterByName(name, url) {
          if (!url) url = window.location.href;
          name = name.replace(/[\[\]]/g, "\\$&");
          var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
              results = regex.exec(url);
          if (!results) return null;
          if (!results[2]) return '';
          return decodeURIComponent(results[2].replace(/\+/g, " "));
      }
      
      // Get error message from query parameter
      var errorMessage = getParameterByName('error');
      
      // If error message exists, display it
      if (errorMessage) {
          alert(errorMessage);
      }
  </script>
                  <form action="register.php" method="post">
                      <h3 class="col_oran">Register</h3>
                      <p>Create your account</p>
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
                      <div class="d-flex justify-content-between mt-4">
                          <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="remember">
                              <label class="form-check-label" for="remember">I agree with the <a class="col_oran" href="#">Terms Of Service</a></label>
                          </div>
                      </div>
                      <button type="submit" class="button">Register<i class="fa fa-sign-in ms-1"></i></button>
                      <p class="mt-4 mb-0">Already have an account? <a class="col_oran" href="login.html">Login</a></p>
                  </form>
              </div>
          </div>
      </div>
  </div>
</section>

<section id="ride">
<div class="ride_m">
 <div class="container-xl">
 <div class="row ride_1">
  <div class="col-md-8">
   <div class="ride_1l">
    <h1 class="text-white">Save big with our cheap <br> car rental!</h1>
	<p class="text-light mb-0 fs-4 mt-3">Top Airports. Local Suppliers. 24/7 Support.</p>
   </div>
  </div>
  <div class="col-md-4">
   <div class="ride_1r mt-4 text-end">
     <h6 class="mb-0"><a class="button_2" href="#">Book Ride <i class="fa fa-check-circle ms-1"></i> </a></h6>
   </div>
  </div>
 </div>
</div>
</div>
</section>
<?php include('footer.php'); ?>
<script>
window.onscroll = function() {myFunction()};

var navbar_sticky = document.getElementById("navbar_sticky");
var sticky = navbar_sticky.offsetTop;
var navbar_height = document.querySelector('.navbar').offsetHeight;

function myFunction() {
  if (window.pageYOffset >= sticky + navbar_height) {
    navbar_sticky.classList.add("sticky")
	document.body.style.paddingTop = navbar_height + 'px';
  } else {
    navbar_sticky.classList.remove("sticky");
	document.body.style.paddingTop = '0'
  }
}
</script>

</body>

</html>