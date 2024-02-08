<?php
session_start();

include("CSRF_Protect.php");
$csrf = new CSRF_Protect();

// Initialize error message variable
$error_message = isset($_GET['error_message']) ? urldecode($_GET['error_message']) : '';
$success_message = isset($_GET['success_message']) ? urldecode($_GET['success_message']) : '';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection parameters
    $servername = "localhost"; // Change this to your database server
    $username = "root"; // Change this to your database username
    $password = ""; // Change this to your database password
    $dbname = "carbooking"; // Change this to your database name

    // Create PDO connection
    try {
        $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // Set PDO error mode to exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    }

    // Check for empty email or password
    if (empty($_POST['email']) || empty($_POST['password'])) {
        $error_message .= "Email and/or Password can not be empty.<br>";
    } else {
        // Retrieve form data and sanitize
        $email = $_POST["email"];
        $password = $_POST["password"];

        // Prepare and execute SQL query
        $statement = $pdo->prepare("SELECT * FROM customers WHERE email=?");
        $statement->execute(array($email));
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        if (empty($result)) {
            $error_message .= 'Email Address does not match<br>';
        } else {
            foreach ($result as $row) {
                $hashed_password = $row['password'];

                if (password_verify($password, $hashed_password)) {
                    // Passwords match, user is authenticated
                    $_SESSION['customer_id'] = $row['id']; // Assuming 'id' is the user ID field
                    $success_message .= 'Logged in Successfully<br>';
                    header("location: index.php");
                    exit();
                } else {
                    // Passwords do not match
                    $error_message .= 'Password does not match<br>';
                }
            }
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<?php include('head.php'); ?>
<body>

<div class="main_o clearfix position-relative">
 <div class="main_1 clearfix position-absolute top-0 w-100">
 <?php include 'header.php'; ?>
 </div>
 <div class="main_2 clearfix">


 <section id="center" class="center_login">
   <div class="center_om clearfix">
     <div class="container-xl">
  <div class="row center_o1">
   <div class="col-md-12">
      <h2 class="text-white">Login</h2>
	  <h6 class="mb-0 mt-3 fw-normal col_oran"><a class="text-light" href="#">Home</a> <span class="mx-2 col_light">/</span> Login</h6>
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
	 <h3 class="col_oran">Login</h3>
	 <p>login with your account</p>
   <?php 
      if (isset($error_message) && $error_message != '') {
          echo '<div class="error red" style="color: red; font-size: 14px;">' . $error_message . '</div>';
      }
      if (isset($success_message) && $success_message != '') {
        echo '<div class="error red" style="color: green; font-size: 14px;">' . $success_message . '</div>';
      }
    ?>

   <form action="" method="post">
      <h6 class="mt-4">Email Address</h6>
      <input type="email" name="email" class="form-control" placeholder="Your Email">
      <h6 class="mt-4">Password</h6>
      <input type="password" name="password" class="form-control" placeholder="Your Password">
      <div class="d-flex justify-content-between mt-4">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="remember">
          <label class="form-check-label" for="remember">
          Remember Me
          </label>
        </div>
        <a class="col_oran" href="#">Forgot Password?</a>
      </div>
      <button type="submit" name="form1" class="button">Login<i class="fa fa-sign-in ms-1"></i></button>
  </form>
   	<p class="mt-4 mb-0">Don't have an account? <a class="col_oran" href="register.php">Register</a></p>
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