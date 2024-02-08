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
	<link href="css/contact.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<script src="js/bootstrap.bundle.min.js"></script>

</head>
<body>

<div class="main_o clearfix position-relative">
 <div class="main_1 clearfix position-absolute top-0 w-100">
   <?php include 'header.php'; ?>
 </div>
 <div class="main_2 clearfix">
 <section id="center" class="center_contact">
   <div class="center_om clearfix">
     <div class="container-xl">
  <div class="row center_o1">
   <div class="col-md-12">
      <h2 class="text-white">Contact</h2>
	  <h6 class="mb-0 mt-3 fw-normal col_oran"><a class="text-light" href="index.html">Home</a> <span class="mx-2 col_light">/</span> Contact</h6>
   </div>
  </div>
 </div>
   </div>
 </section>
 </div>
 
</div>

<section id="contact" class="p_3">
 <div class="container-xl">
   <div class="contact_1 row">
    <div class="col-md-4 col-sm-4">
	 <div class="contact_1i row bg_light ms-1 me-1 ps-2 pe-2 pt-4 pb-4">
	  <div class="col-md-3">
	   <div class="contact_1il">
	    <span class="d-inline-block bg_oran text-white text-center rounded-circle fs-2"><i class="fa fa-map"></i></span>
	   </div>
	  </div>
	  <div class="col-md-9">
	   <div class="contact_1ir">
	    <h5>Our Address</h5>
		<p class="mb-0 fs-6">408-333 25th Street E  Saskatoon SK S7K 0L4</p>
	   </div>
	  </div>
	 </div>
	</div>
	<div class="col-md-4 col-sm-4">
	 <div class="contact_1i row bg_light ms-1 me-1 ps-2 pe-2 pt-4 pb-4">
	  <div class="col-md-3">
	   <div class="contact_1il">
	    <span class="d-inline-block bg_oran text-white text-center rounded-circle fs-2"><i class="fa fa-phone"></i></span>
	   </div>
	  </div>
	  <div class="col-md-9">
	   <div class="contact_1ir">
	    <h5>Phone Number</h5>
		<p class="mb-0 fs-6">0208-157-1111</p>
	   </div>
	  </div>
	 </div>
	</div>
	<div class="col-md-4 col-sm-4">
	 <div class="contact_1i row bg_light ms-1 me-1 ps-2 pe-2 pt-4 pb-4">
	  <div class="col-md-3">
	   <div class="contact_1il">
	    <span class="d-inline-block bg_oran text-white text-center rounded-circle fs-2"><i class="fa fa-envelope"></i></span>
	   </div>
	  </div>
	  <div class="col-md-9">
	   <div class="contact_1ir">
	    <h5>Email Us</h5>
		<p class="mb-0 fs-6">info@captain.tours</p>
	   </div>
	  </div>
	 </div>
	</div>
   </div>
   <div class="contact_2 row mt-5">
    <div class="col-md-5">
	 <div class="contact_2l">
	   <h5 class="col_oran">Get In Touch</h5>
	   <h1 class="font_50 mt-3">Have Any <br> Questions?</h1>
	   <p class="mt-3">To hire a captain in USA, Canada or UK,Call us at the given phone given
		Phone Number:</p>
		<p class="mt-3">0208-157-1111</p>
		<p class="mt-3">306-242-0000</p>
	   <ul class="social-network social-circle mb-0 mt-3">
					<li><a href="#" class="icoRss" title="Rss"><i class="fa fa-pinterest"></i></a></li>
					<li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
				</ul>
	 </div>
	</div>
	<form action="assets/contact_process.php" method="post">
	<div class="col-md-7">
	 <div class="contact_2r">
	   <div class="blog_1rdt3i2 row">
		 <div class="col-md-6">
		  <div class="blog_1rdt3i2l">
		    <input class="form-control" name="full_name" placeholder="Full Name" type="text">
		  </div>
		 </div> 
		 <div class="col-md-6">
		  <div class="blog_1rdt3i2l">
		    <input class="form-control" name="email" placeholder="Email" type="text">
		  </div>
		 </div>
		</div>
		<div class="blog_1rdt3i2 row mt-3">
		 <div class="col-md-6">
		  <div class="blog_1rdt3i2l">
		    <input class="form-control" name="subject" placeholder="Subject" type="text">
		  </div>
		 </div> 
		 <div class="col-md-6">
		  <div class="blog_1rdt3i2l">
		    <input class="form-control" name="website" placeholder="Website" type="text">
		  </div>
		 </div>
		</div>
		<div class="blog_1rdt3i2 row mt-3">
		 <div class="col-md-12">
		  <div class="blog_1rdt3i2l">
		    <textarea placeholder="Message" name="message" class="form-control form_text"></textarea>
			<h6 class="mt-3 mb-0"><input type="submit" class="button" name="submit">Submit Now <i class="fa fa-check-circle ms-1"></i></a></h6>
		  </div>
		 </div> 
		</div>
	 </div>
	</div>
   </div>
</form>
   <div class="contact_3 row mt-4">
    <div class="col-md-12">
	  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d114964.53925916665!2d-80.29949920266738!3d25.782390733064336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9b0a20ec8c111%3A0xff96f271ddad4f65!2sMiami%2C+FL%2C+USA!5e0!3m2!1sen!2sin!4v1530774403788" height="450" style="border:0; width:100%;" allowfullscreen=""></iframe>
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
   <div class="ride_1r  text-end">
     <h6 class="text-white"><i class="fa fa-phone me-1"></i> Call to book</h6>
     <h6 class="mb-0 mt-3"><a class="button_2" href="#">Book Ride <i class="fa fa-check-circle ms-1"></i> </a></h6>
	 <h3 class="col_oran mt-3 mb-0">0208-157-1111</h3>
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