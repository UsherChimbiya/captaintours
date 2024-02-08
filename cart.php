<?php
  session_start();
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