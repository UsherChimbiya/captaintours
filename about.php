<?php
	 session_start();    // Check if the session variable is set
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
	<link href="css/about.css" rel="stylesheet">
	
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<script src="js/bootstrap.bundle.min.js"></script>

</head>
<body>
	<!-- <div class="container">
		<div class="row mt-4">
			<div class="col-sm-7">
			<a href="index.html"> <img src="img/companylogo.png" alt="Italian Trulli"></a>
			</div>
			<div class="col-sm-5">
			  <h3 style="font-weight:bold;color:rgb(60, 59, 110);font-family:Arial;font-size: 20px;" >Uk</h3>
			  <h2 style="font-weight:bold;color:rgb(248, 202, 18);font-family:Arial;font-size: 26px;">Do you need help?</h1>
			  <h3 style="color:rgb(60, 59, 110);font-weight:bold;font-family:Arial;font-size: 26px;">0208-157-1111</h3>
			  <h4 style="color:rgb(60, 59, 110);font-weight:bold;font-family:Arial;font-size: 18px;">info@captain.tours</h4>
			  <a href="index.html"> <img src="img/whatsapp.png" width="5%" alt="Italian Trulli" class="mx-2"></a>
			  <a href="index.html"> <img src="img/facebook.png"  width="4%" alt="Italian Trulli"  class="mx-2"></a>
			  <a href="index.html"> <img src="img/instagram.png"  width="4%" alt="Italian Trulli"  class="mx-2"></a>
		</div>
		  </div>
		</div> -->
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
      <h2 class="text-white">About</h2>
	  <h6 class="mb-0 mt-3 fw-normal col_oran"><a class="text-light" href="index.html">Home</a> <span class="mx-2 col_light">/</span> About</h6>
   </div>
  </div>
 </div>
   </div>
 </section>
 </div>
 
</div>

<section id="about_pg" class="p_3">
 <div class="container-xl">
  <div class="about_pg1 row">
    <div class="col-md-6">
	 <div class="about_pgl clearfix">
	   <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="img/car22.jpg" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
	 </div>
	</div>
	<div class="col-md-6">
	 <div class="about_pgr clearfix">
	  <h4 class="col_oran">ABOUT US</h4>
	  <h2>We make sure that<br> every trip is comfortable </h2>
	  <p class="mt-3">Our standard ensures its client to Feel the difference and relaxation. Excellence is defined in taxi services. Providing the Best Chauffeur services with luxurious cars for everyone.</p>
	   <p><i class="fa fa-check-circle col_oran me-1"></i>Hire Out Chauffeur Servcies</p>
	   <p><i class="fa fa-check-circle col_oran me-1"></i>Hire Out Tour around London</p>
	   <p><i class="fa fa-check-circle col_oran me-1"></i>Hire Out Airport Transfers</p>
	   <p><i class="fa fa-check-circle col_oran me-1"></i>Hire Out Luxury Cars</p>
	   <p><i class="fa fa-check-circle col_oran me-1"></i>Hire Out our Coach</p>
	   <p><i class="fa fa-check-circle col_oran me-1"></i>Hire Out Helicopter service</p>
	   <h6 class="mb-0"><a class="button" href="#">Discover More <i class="fa fa-check-circle ms-1"></i> </a></h6>
	 </div>
	</div>
   </div>
 </div>	
</section>


<section id="work" class="p_3 bg_light">
  <div class="container-xl">
   <div class="row trip_1 text-center mb-4">
   <div class="col-md-12">
    <h5 class="col_oran">Our  Work</h5>
	<h1>Why Captain Tours?</h1>
	<p class="mb-0">To contribute to positive change and achieve our sustainability <br>  goals with many extraordinary</p>
   </div>
  </div>
  <div class="work_1 row">
    <div class="col-md-3 col-sm-6">
	 <div class="work_i clearfix position-relative">
	  <div class="work_i1 clearfix">
	   <a href="#"><img alt="abc" src="img/city-cars-night-1283801 (1).jpg" style="width: 300px;height: 234px;" ></a>
	  </div>
	  <div class="work_i2 text-center clearfix position-absolute w-100">
	   <span class="fs-4 d-inline-block bg_oran text-white">1</span>
	  </div>
	 </div>
	 <div class="work_i_last text-center mt-5 clearfix">
	  <h5><a href="#">Choose a Service</a></h5>
	  <p class="mb-0">Aute irure dolor reprehenderit velit esse cillum dolore fugiat</p>
	 </div>
	</div>
	<div class="col-md-3 col-sm-6">
	 <div class="work_i clearfix position-relative">
	  <div class="work_i1 clearfix">
	   <a href="#"><img alt="abc" src="img/blackcar.jpg" style="width: 300px;height: 234px;"></a>
	  </div>
	  <div class="work_i2 text-center clearfix position-absolute w-100">
	   <span class="fs-4 d-inline-block bg_oran text-white">2</span>
	  </div>
	 </div>
	 <div class="work_i_last text-center mt-5 clearfix">
	  <h5><a href="#">Request a Rent</a></h5>
	  <p class="mb-0">Aute irure dolor reprehenderit velit esse cillum dolore fugiat</p>
	 </div>
	</div>
	<div class="col-md-3 col-sm-6">
	 <div class="work_i clearfix position-relative">
	  <div class="work_i1 clearfix">
	   <a href="#"><img alt="abc" src="img/blackvan.jpg" style="width: 300px;height: 234px;"></a>
	  </div>
	  <div class="work_i2 text-center clearfix position-absolute w-100">
	   <span class="fs-4 d-inline-block bg_oran text-white">3</span>
	  </div>
	 </div>
	 <div class="work_i_last text-center mt-5 clearfix">
	  <h5><a href="#">Receive Custom Plan</a></h5>
	  <p class="mb-0">Aute irure dolor reprehenderit velit esse cillum dolore fugiat</p>
	 </div>
	</div>
	<div class="col-md-3 col-sm-6">
	 <div class="work_i clearfix position-relative">
	  <div class="work_i1 clearfix">
	   <a href="#"><img alt="abc" src="img/mercedesblack.jpg" style="width: 300px;height: 234px;"></a>
	  </div>
	  <div class="work_i2 text-center clearfix position-absolute w-100">
	   <span class="fs-4 d-inline-block bg_oran text-white">4</span>
	  </div>
	 </div>
	 <div class="work_i_last text-center mt-5 clearfix">
	  <h5><a href="#">Let’s Make it Happen</a></h5>
	  <p class="mb-0">Aute irure dolor reprehenderit velit esse cillum dolore fugiat</p>
	 </div>
	</div>
   </div>
 </div>
</section>

<section id="team" class="p_3">
  <div class="container-xl">
   <div class="row trip_1 text-center mb-4">
   <div class="col-md-12">
    <h5 class="col_oran">Our  Team</h5>
	<h1>Best Tem Members</h1>
	<p class="mb-0">To contribute to positive change and achieve our sustainability <br>  goals with many extraordinary</p>
   </div>
  </div>
   <div class="row team_1">
   <div class="col-md-3 col-sm-6">
    <div class="team_1i text-center">
	  <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="img/i20.jpg" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
	  <div class="team_1i1 bg_light p-3">
	  <h4>Eget Nulla</h4>
	  <h5 class="col_oran fw-normal">Instructor</h5>
	  <ul class="social-network social-circle mb-0 mt-3">
                        <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
      </ul>
	  </div>
	</div>
   </div>
   <div class="col-md-3 col-sm-6">
    <div class="team_1i text-center">
	  <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="img/i21.jpg" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
	  <div class="team_1i1 bg_light p-3">
	  <h4>Dapibus Diam</h4>
	  <h5 class="col_oran fw-normal">Instructor</h5>
	  <ul class="social-network social-circle mb-0 mt-3">
                        <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
      </ul>
	  </div>
	</div>
   </div>
   <div class="col-md-3 col-sm-6">
    <div class="team_1i text-center">
	  <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="img/i22.jpg" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
	  <div class="team_1i1 bg_light p-3">
	  <h4>Lorem Ipsum</h4>
	  <h5 class="col_oran fw-normal">Instructor</h5>
	  <ul class="social-network social-circle mb-0 mt-3">
                        <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
      </ul>
	  </div>
	</div>
   </div>
   <div class="col-md-3 col-sm-6">
    <div class="team_1i text-center">
	  <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="img/i23.jpg" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
	  <div class="team_1i1 bg_light p-3">
	  <h4>Semp Port</h4>
	  <h5 class="col_oran fw-normal">Instructor</h5>
	  <ul class="social-network social-circle mb-0 mt-3">
                        <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
      </ul>
	  </div>
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