<?php
  session_start();
      // Check if the session variable is set
      if(isset($_SESSION['customer_id'])) {
        $customer_id = $_SESSION['customer_id'];
        // Proceed with using $customer_id
    } else {
        // Handle the case where the user is not logged in
        // For example, you could redirect them to the login page
        header("Location: login.php");
        exit(); // Ensure script stops executing after redirection
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Car Lease</title>
	<link href="css/bootstrap.min.css" rel="stylesheet" >
	<link href="css/font-awesome.min.css" rel="stylesheet" >
	<link href="css/global.css" rel="stylesheet">
	<link href="css/cart.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<script src="js/bootstrap.bundle.min.js"></script>

</head>
<body>
  <div class="main_o clearfix position-relative">
    <div class="main_1 clearfix position-absolute top-0 w-100">
      <?php include 'header.php'; ?>
    </div>
    <div class="main_2 clearfix">
    <section id="center" class="center_about">
      <div class="center_om clearfix">
        <div class="container-xl">
     <div class="row center_o1">
      <div class="col-md-12">
         <h2 class="text-white">Cart</h2>
       <h6 class="mb-0 mt-3 fw-normal col_oran"><a class="text-light" href="index.html">Home</a> <span class="mx-2 col_light">/</span>Cart</h6>
      </div>
     </div>
    </div>
      </div>
    </section>
    </div>
    
   </div>
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