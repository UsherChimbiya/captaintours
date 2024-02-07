<?php
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

    if ($stmt->execute()) {
        // Registration successful, redirect to login page
        $success_message = "Registered Successfully.";
        header("Location: login.html");
        exit(); // Ensure script stops executing after redirection
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
   <section id="header">
    <nav class="navbar navbar-expand-md navbar-light" id="navbar_sticky" style="background:#00a0df">
      <div class="container-xl">
        <a class="navbar-brand fs-3 p-0 fw-bold text-white" href="index.html"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mb-0 ">
        <li class="nav-item dropdown">
          <a style="font-size:15px;font-family:Arial" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            DESTINATION
          </a>
          <ul class="dropdown-menu drop_1" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="blog.html" style="font-size:12px"> Blog</a></li>
            <li><a class="dropdown-item border-0" href="blog_detail.html" style="font-size:12px"> Blog Detail</a></li>
          </ul>
          </li>
        <li class="nav-item">
              <a class="nav-link mx-2" href="about.html" style="font-size:15px;font-family:Arial">ABOUT US</a>
            </li>
        <li class="nav-item">
          <a class="nav-link mx-2" style="font-size:15px;font-family:Arial" href="contact.html">CONTACT US</a>
          </li>
        <li class="nav-item">
              <a class="nav-link mx-2" href="reservation.html" style="font-size:15px;font-family:Arial">RESERVATION</a>
            </li>
        <li class="nav-item">
          <a class="nav-link mx-2" href="cart.html" style="font-size:15px;font-family:Arial"><i class="fa fa-shopping-cart"></i></a>
          </li>
          </ul>
        <ul class="navbar-nav mb-0 ms-auto">
        <li class="nav-item">
              <a class="nav-link mx-2" href="login.php" style="font-size:15px;font-family:Arial">Sign In</a>
            </li>
        <li class="nav-item">
              <a class="mx-2 nav-link button_2 ms-2 me-2" href="register.php" style="font-size:15px;font-family:Arial">Register <i class="fa fa-check-circle ms-1"></i></a>
            </li>
        
          </ul>
        </div>
      </div>
    </nav>
</section>
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

<section id="footer" class="pt-3 pb-3" style="background:#00a0df;color:white">
  <div class="container-xl">
    <div class="row footer_1">
      <div class="col-md-4">
     <div class="footer_1i">
      <h4><a href="index.html"><img src="img/companylogo.png" alt="footer logo" width="40%"></a></h4>
      <p class="mt-3 text-white" >Use securing confined his shutters. Delightful as he it acceptance an solicitude discretion.</p>
      <h6 class="mt-3 fw-normal text-white"><i class="fa fa-map col_oran me-1"></i> 36 Nora Dreek,  Old East 2360, India</h6>
      <h6 class="mt-3 fw-normal text-white"><a href="#" class="text-white"><i class="fa fa-phone col_oran me-1"></i> (123) 456-7890</a></h6>
      <h6 class="mt-3 mb-0 fw-normal text-white"><a href="#" class="text-white"><i class="fa fa-envelope col_oran me-1"></i> info@gmail.com</a></h6>
     </div>
    </div>
    <div class="col-md-2">
     <div class="footer_1i">
      <h4>COMPANY</h4>
      <div class="row">
      <h6 class="fw-normal mt-2 col-md-12 col-6 text-white"><a href="#" class="text-white">New York</a></h6>
      <h6 class="fw-normal mt-2 col-md-12 col-6 text-white"><a href="#" class="text-white">Careers</a></h6>
      <h6 class="fw-normal mt-2 col-md-12 col-6 text-white"><a href="#" class="text-white">Mobile</a></h6>
      <h6 class="fw-normal mt-2 col-md-12 col-6 text-white"><a href="#" class="text-white">Blog</a></h6>
      <h6 class="fw-normal mt-2 col-md-12 col-6 text-white"><a href="#" class="text-white">About Us</a></h6>
      <h6 class="fw-normal mt-2 mb-0 col-md-12 col-6 text-white"><a href="#" class="text-white">How we work</a></h6>
      </div>
     </div>
    </div>
    <div class="col-md-3">
     <div class="footer_1i">
      <h4>WORK HOURS</h4>
        <p class="mt-3" style="color:white">Mon - Fri: <span class="fw-bold" style="color:white">09:00AM - 09:00PM</span></p>
      <p class="mt-3" style="color:white">Sat: <span class="fw-bold" style="color:white">09:00AM - 06:00PM</span></p>
      <p class="mt-3 mb-0" style="color:white">Sun: <span class="fw-bold" style="color:white">Closed</span></p>
     </div>
    </div>
    <div class="col-md-3">
     <div class="footer_1i">
      <h4>SUBSCRIPTION</h4>
        <p class="mt-3" style="color:white">Subscribe your Email address for latest news & updates.</p>
      <input class="form-control" placeholder="Enter Email Address" type="text">
      <h6 class="mb-0 mt-4"><a class="button pt-3 pb-3" href="#">Submit <i class="fa fa-check-circle ms-1"></i> </a></h6>
     </div>
    </div>
    </div><hr>
    <div class="row footer_2">
     <div class="col-md-8">
      <div class="footer_2l">
     <p class="mb-0 mt-1 text-center" style="color:white">© 2024 Captain Travel & Tour. All Rights Reserved</p>
    </div>
     </div>
     <div class="col-md-4">
      <div class="footer_2r text-end">
      <ul class="social-network social-circle mb-0">
            <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
            <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-pinterest"></i></a></li>
            <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
          </ul>
    </div>
     </div>
    </div>
  </div>
  </section>

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