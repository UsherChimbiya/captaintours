<?php
 session_start();
   include("conf.php");
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $entered_email = $_POST['email'];
        $entered_password = $_POST['password'];
        $entered_username = $_POST['fullname'];
        $sql = "SELECT * FROM users WHERE email = '$entered_email' AND password = '$entered_password'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $_SESSION['email'] = $entered_email;
            $_SESSION['fullname'] = $entered_username;
            header("location:main.php");
            exit();
        } else {
            echo 'Invalid username or password. Please try again.';
        }
    }
    $conn->close();
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Car Lease</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet" >
	<link href="../css/font-awesome.min.css" rel="stylesheet" >
	<link href="../css/global.css" rel="stylesheet">
	<link href="../css/login.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<script src="../js/bootstrap.bundle.min.js"></script>

</head>
<body>
<section id="login" class="p_3">
 <div class="container-xl">
    <form action="" method="post">
  <div class="row">
   <div class="col-md-12">
    <div class="login_1 p-4 m-auto">
	 <h3 class="col_oran">Login</h3>
	 <p>login with your account</p>
	 <h6 class="mt-4">Email Address</h6>
	 <input type="email" class="form-control" name="email" placeholder="Your Email" autocomplete="off" >
	 <h6 class="mt-4">Password</h6>
	 <input type="password" class="form-control" name="password" placeholder="Your Password" autocomplete="off">
	 <div class="d-flex justify-content-between mt-4">
<div class="form-check">
<input class="form-check-input" type="checkbox" value="" id="remember">
<label class="form-check-label" for="remember">
Remember Me
</label>
</div>
<a class="col_oran" href="#">Forgot Password?</a>
</div>
    <h6 class="mt-4 mb-0"><button type="submit" class="btn btn-danger">Login <i class="fa fa-sign-in ms-1"></i></button></h6> 
	<p class="mt-4 mb-0">Don't have an account? <a class="col_oran" href="register.html">Register</a></p>
	</div>
   </div>
  </div> 
  </form> 
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