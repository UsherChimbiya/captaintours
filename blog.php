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
	<link href="css/blog.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<script src="js/bootstrap.bundle.min.js"></script>

</head>
<body>

<div class="main_o clearfix position-relative">
 <div class="main_1 clearfix position-absolute top-0 w-100">
   <section id="header">
<nav class="navbar navbar-expand-md navbar-light" id="navbar_sticky">
  <div class="container-xl">
    <a class="navbar-brand fs-3 p-0 fw-bold text-white" href="index.html"><i class="fa fa-car col_oran me-1 fs-2 align-middle"></i> CAR <br> <span class="fs-5 span_1">Lease</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mb-0 ">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.html">Home</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="about.php">About </a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="models.html">Vehicle Models </a>
        </li>
		<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Blog
          </a>
          <ul class="dropdown-menu drop_1" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="blog.html"> Blog</a></li>
            <li><a class="dropdown-item border-0" href="blog_detail.html"> Blog Detail</a></li>
          </ul>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="team.html">Team</a>
        </li>
		<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Pages
          </a>
          <ul class="dropdown-menu drop_1" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="login.html"> Login</a></li>
            <li><a class="dropdown-item border-0" href="register.php"> Register</a></li>
          </ul>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="contact.html">Contact</a>
        </li>
      </ul>
	  <ul class="navbar-nav mb-0 ms-auto">
		<li class="nav-item">
          <a class="nav-link" href="login.html">Sign In</a>
        </li>
		<li class="nav-item">
          <a class="nav-link button_2 ms-2 me-2" href="register.php">Register <i class="fa fa-check-circle ms-1"></i></a>
        </li>
		
      </ul>
    </div>
  </div>
</nav>
</section>
 </div>
 <div class="main_2 clearfix">
 <section id="center" class="center_blog">
   <div class="center_om clearfix">
     <div class="container-xl">
  <div class="row center_o1">
   <div class="col-md-12">
      <h2 class="text-white">Blog</h2>
	  <h6 class="mb-0 mt-3 fw-normal col_oran"><a class="text-light" href="#">Home</a> <span class="mx-2 col_light">/</span> Blog</h6>
   </div>
  </div>
 </div>
   </div>
 </section>
 </div>
 
</div>

<section id="blog" class="p_3">
   <div class="container-xl">
	 <div class="row blog_1">
	    <div class="col-md-4">
		 <div class="blog_1l">
		    <div class="blog_1l1">
		   <div class="input-group">
				<input type="text" class="form-control" placeholder="Search Here...">
				<span class="input-group-btn">
					<button class="btn btn-primary bg_oran" type="button">
						<i class="fa fa-search"></i></button>
				</span>
		</div>
		 </div>
		    <div class="blog_1l2 mt-4  p-3 clearfix">
			<h4>Archives</h4>
			<hr class="line mb-4">
			<h6><i class="fa fa-chevron-right font_14 me-1 col_oran"></i> <a href="blog_detail.html">May 2020</a></h6><hr>
			<h6><i class="fa fa-chevron-right font_14 me-1 col_oran"></i> <a href="blog_detail.html">June 2020</a></h6><hr>
			<h6><i class="fa fa-chevron-right font_14 me-1 col_oran"></i> <a href="blog_detail.html"> July 2020</a></h6><hr>
			<h6><i class="fa fa-chevron-right font_14 me-1 col_oran"></i> <a href="blog_detail.html"> Aug 2020</a></h6><hr>
			<h6><i class="fa fa-chevron-right font_14 me-1 col_oran"></i> <a href="blog_detail.html"> Sep 2020</a></h6><hr>
			<h6 class="mb-0"><i class="fa fa-chevron-right font_14 me-1 col_oran"></i> <a href="blog_detail.html"> Oct 2020</a></h6>
	        </div>
			<div class="blog_1l2 mt-4  p-3 clearfix">
			<h4>Categories</h4>
			<hr class="line mb-4">
			<h6><i class="fa fa-chevron-right font_14 me-1 col_oran"></i> <a href="blog_detail.html">Driving News (10)</a></h6><hr>
			<h6><i class="fa fa-chevron-right font_14 me-1 col_oran"></i> <a href="blog_detail.html"> Rent Update (12)</a></h6><hr>
			<h6><i class="fa fa-chevron-right font_14 me-1 col_oran"></i> <a href="blog_detail.html"> Today News (14)</a></h6><hr>
			<h6><i class="fa fa-chevron-right font_14 me-1 col_oran"></i> <a href="blog_detail.html"> Blog Update (16)</a></h6><hr>
			<h6><i class="fa fa-chevron-right font_14 me-1 col_oran"></i> <a href="blog_detail.html"> Instagram News (18)</a></h6><hr>
			<h6 class="mb-0"><i class="fa fa-chevron-right font_14 me-1 col_oran"></i> <a href="blog_detail.html"> Inspiration (17)</a></h6>
	        </div>
			<div class="blog_1l2 mt-4  p-3 clearfix">
			<h4>Newsletters</h4>
			<hr class="line mb-4">
		    <p>Sign Up For Our Newsletter!</p>
			<input class="form-control" placeholder="Subscribe" type="text">
			<h6 class="mb-0 mt-4"><a class="button" href="blog_detail.html">Subscribe <i class="fa fa-check-circle ms-1"></i> </a></h6>
	        </div>
			<div class="blog_1l2 mt-4  p-3 clearfix">
			<h4>Popular Tags</h4>
			<hr class="line">
		     <ul class="mb-0">
		 <li class="d-inline-block"><a href="blog_detail.html">Consulting</a></li>
		 <li class="d-inline-block"><a href="blog_detail.html">Finance</a></li>
		 <li class="d-inline-block"><a href="blog_detail.html">Law</a></li>
		 <li class="d-inline-block"><a href="blog_detail.html">Corporate</a></li>
		 <li class="d-inline-block"><a href="blog_detail.html">Taxes</a></li>
		 <li class="d-inline-block"><a href="blog_detail.html">Meeting</a></li>
		 <li class="d-inline-block"><a href="blog_detail.html">Business</a></li>
		 <li class="d-inline-block"><a href="blog_detail.html">Investment</a></li>
		</ul>
	        </div>
		 </div>
		</div>
		<div class="col-md-8">
		 <div class="blog_1r">
		    <div class="row blog_h_1">
     <div class="col-md-6">
	  <div class="blog_h_1m position-relative clearfix">
	   <div class="blog_h_1mi clearfix">
	     <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="blog_detail.html"><img src="img/11.jpg" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
	   </div>
	   <div class="blog_h_1mi1 position-absolute clearfix top-0 w-100 p-3">
	    <h6 class="mb-0 fw-normal"><a href="blog_detail.html" class="button_1">Driving</a></h6>
	   </div>
	  </div>
	  <div class="blog_h_1m1 bg-white">
	    <h4><a href="blog_detail.html">Which Corporate tool is to choose?</a></h4>
		<p>Our offices are located on the traditional, unced.</p>
		<h6 class="mb-0"><a class="button" href="blog_detail.html">Read More <i class="fa fa-check-circle ms-1"></i></a></h6>
	  </div>
	 </div>
	 <div class="col-md-6">
	  <div class="blog_h_1m position-relative clearfix">
	   <div class="blog_h_1mi clearfix">
	     <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="blog_detail.html"><img src="img/12.jpg" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
	   </div>
	   <div class="blog_h_1mi1 position-absolute clearfix top-0 w-100 p-3">
	    <h6 class="mb-0 fw-normal"><a href="blog_detail.html" class="button_1">Car Rent</a></h6>
	   </div>
	  </div>
	  <div class="blog_h_1m1 bg-white">
	    <h4><a href="blog_detail.html">How will you know success when it shows</a></h4>
		<p>Our offices are located on the traditional, unced.</p>
		<h6 class="mb-0"><a class="button" href="blog_detail.html">Read More <i class="fa fa-check-circle ms-1"></i></a></h6>
	  </div>
	 </div>
	 
  </div>
            <div class="row blog_h_1 mt-4">
     <div class="col-md-6">
	  <div class="blog_h_1m position-relative clearfix">
	   <div class="blog_h_1mi clearfix">
	     <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="blog_detail.html"><img src="img/16.jpg" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
	   </div>
	   <div class="blog_h_1mi1 position-absolute clearfix top-0 w-100 p-3">
	    <h6 class="mb-0 fw-normal"><a href="blog_detail.html" class="button_1">Driving</a></h6>
	   </div>
	  </div>
	  <div class="blog_h_1m1 bg-white">
	    <h4><a href="blog_detail.html">Which Corporate tool is to choose?</a></h4>
		<p>Our offices are located on the traditional, unced.</p>
		<h6 class="mb-0"><a class="button" href="blog_detail.html">Read More <i class="fa fa-check-circle ms-1"></i></a></h6>
	  </div>
	 </div>
	 <div class="col-md-6">
	  <div class="blog_h_1m position-relative clearfix">
	   <div class="blog_h_1mi clearfix">
	     <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="blog_detail.html"><img src="img/18.jpg" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
	   </div>
	   <div class="blog_h_1mi1 position-absolute clearfix top-0 w-100 p-3">
	    <h6 class="mb-0 fw-normal"><a href="blog_detail.html" class="button_1">Car Rent</a></h6>
	   </div>
	  </div>
	  <div class="blog_h_1m1 bg-white">
	    <h4><a href="blog_detail.html">How will you know success when it shows</a></h4>
		<p>Our offices are located on the traditional, unced.</p>
		<h6 class="mb-0"><a class="button" href="blog_detail.html">Read More <i class="fa fa-check-circle ms-1"></i></a></h6>
	  </div>
	 </div>
	 
  </div>
            <div class="row blog_h_1 mt-4">
     <div class="col-md-6">
	  <div class="blog_h_1m position-relative clearfix">
	   <div class="blog_h_1mi clearfix">
	     <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="blog_detail.html"><img src="img/19.jpg" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
	   </div>
	   <div class="blog_h_1mi1 position-absolute clearfix top-0 w-100 p-3">
	    <h6 class="mb-0 fw-normal"><a href="blog_detail.html" class="button_1">Driving</a></h6>
	   </div>
	  </div>
	  <div class="blog_h_1m1 bg-white">
	    <h4><a href="blog_detail.html">Which Corporate tool is to choose?</a></h4>
		<p>Our offices are located on the traditional, unced.</p>
		<h6 class="mb-0"><a class="button" href="blog_detail.html">Read More <i class="fa fa-check-circle ms-1"></i></a></h6>
	  </div>
	 </div>
	 <div class="col-md-6">
	  <div class="blog_h_1m position-relative clearfix">
	   <div class="blog_h_1mi clearfix">
	     <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="blog_detail.html"><img src="img/20.jpg" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
	   </div>
	   <div class="blog_h_1mi1 position-absolute clearfix top-0 w-100 p-3">
	    <h6 class="mb-0 fw-normal"><a href="blog_detail.html" class="button_1">Car Rent</a></h6>
	   </div>
	  </div>
	  <div class="blog_h_1m1 bg-white">
	    <h4><a href="blog_detail.html">How will you know success when it shows</a></h4>
		<p>Our offices are located on the traditional, unced.</p>
		<h6 class="mb-0"><a class="button" href="blog_detail.html">Read More <i class="fa fa-check-circle ms-1"></i></a></h6>
	  </div>
	 </div>
	 
  </div>
            <div class="pages mt-4  text-center">
		 <div class="col-md-12">
		   <ul class="mb-0">
			<li><a href="blog_detail.html"><i class="fa fa-chevron-left"></i></a></li>
			<li><a class="act" href="blog_detail.html">1</a></li>
			<li><a href="blog_detail.html">2</a></li>
			<li><a href="blog_detail.html">3</a></li>
			<li><a href="blog_detail.html">4</a></li>
			<li><a href="blog_detail.html">5</a></li>
			<li><a href="blog_detail.html">6</a></li>
			<li><a href="blog_detail.html"><i class="fa fa-chevron-right"></i></a></li>
		   </ul>
		 </div>
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