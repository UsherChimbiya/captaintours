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
	<?php include 'header.php'; ?>
 </div>
 <div class="main_2 clearfix">
 <section id="center" class="center_dt">
   <div class="center_om clearfix">
     <div class="container-xl">
  <div class="row center_o1">
   <div class="col-md-12">
      <h2 class="text-white">Blog Detail</h2>
	  <h6 class="mb-0 mt-3 fw-normal col_oran"><a class="text-light" href="#">Home</a> <span class="mx-2 col_light">/</span> Blog Detail</h6>
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
			<h6 class="mb-0 mt-4"><a class="button" href="#">Subscribe <i class="fa fa-check-circle ms-1"></i> </a></h6>
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
		 <div class="blog_1rdt">
	   <div class="blog_1rdt1">
	      <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="img/2.jpg" height="450" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
	   </div>
	   <div class="blog_1rdt2">
		    <h6 class="mt-3 font_14"><i class="fa fa-calendar col_oran me-1"></i> 03 Feb, 2022 <i class="fa fa-user col_oran me-1 ms-3"></i> Admin <i class="fa fa-comments col_oran me-1 ms-3"></i> 3 Comments</h6>
			<h2 class="mt-3"><a href="#">Nanotech Immersion Along The Highway</a></h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem rerum voluptas harum provident fugiat tempora architecto mollitia quos maiores perspiciatis, obcaecati, placeat aut. Architecto eaque accusamus minima quis in earum dignissimos suscipit esse, saepe repudiandae similique, expedita sed quam dolore impedit deleniti atque, dolorum quasi repellendus quos sapiente.</p>
			<blockquote class="blockquote bg_light p-4">
									<p>Provident fugiat tempora architecto mollitia quos maiores perspiciatis obcaecati placeat aunty koi thako Architecto eaque accusamus minima in earum impedit atque</p>
									<h6 class="fw-normal mb-0"><strong>- Dapibus Diam </strong>of Google Inc.</h6>
								</blockquote>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus dolor eaque officia impedit corporis exercitationem vel nulla iure sequi ipsam.</p>	
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem rerum voluptas harum provident fugiat tempora architecto mollitia quos maiores perspiciatis, obcaecati, placeat aut. Architecto eaque accusamus minima quis in earum dignissimos suscipit esse, saepe repudiandae similique, expedita sed quam dolore impedit deleniti atque.
</p>		
    <hr>	
	    <div class="blog_1rdt2i row">
		 <div class="col-md-7">
		  <div class="blog_1rdt2il">
		    <h4>Related Tags:</h4>
			<ul class="mb-0">
		 <li class="d-inline-block"><a href="#">Consulting</a></li>
		 <li class="d-inline-block"><a href="#">Finance</a></li>
		 <li class="d-inline-block"><a href="#">Corporate</a></li>
		</ul>
		  </div>
		 </div>
		 <div class="col-md-5">
		  <div class="blog_1rdt2ir text-end">
		   <h4>Social Share:</h4>
		   <ul class="social-network social-circle mb-0">
					<li><a href="#" class="icoRss" title="Rss"><i class="fa fa-pinterest"></i></a></li>
					<li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
				</ul>
		  </div>
		 </div>
		</div>	
	   </div><hr>
	   <div class="blog_1rdt3 mt-4">
	    <h2>Recent post</h2>
		<div class="row blog_h_1 mt-3">
     <div class="col-md-6">
	  <div class="blog_h_1m position-relative clearfix">
	   <div class="blog_h_1mi clearfix">
	     <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="img/16.jpg" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
	   </div>
	   <div class="blog_h_1mi1 position-absolute clearfix top-0 w-100 p-3">
	    <h6 class="mb-0 fw-normal"><a href="#" class="button_1">Driving</a></h6>
	   </div>
	  </div>
	  <div class="blog_h_1m1 bg-white">
	    <h4><a href="#">Which Corporate tool is to choose?</a></h4>
		<p>Our offices are located on the traditional, unced.</p>
		<h6 class="mb-0"><a class="button" href="#">Read More <i class="fa fa-check-circle ms-1"></i></a></h6>
	  </div>
	 </div>
	 <div class="col-md-6">
	  <div class="blog_h_1m position-relative clearfix">
	   <div class="blog_h_1mi clearfix">
	     <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="img/18.jpg" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
	   </div>
	   <div class="blog_h_1mi1 position-absolute clearfix top-0 w-100 p-3">
	    <h6 class="mb-0 fw-normal"><a href="#" class="button_1">Car Rent</a></h6>
	   </div>
	  </div>
	  <div class="blog_h_1m1 bg-white">
	    <h4><a href="#">How will you know success when it shows</a></h4>
		<p>Our offices are located on the traditional, unced.</p>
		<h6 class="mb-0"><a class="button" href="#">Read More <i class="fa fa-check-circle ms-1"></i></a></h6>
	  </div>
	 </div>
	 
  </div>
	   </div>
	   
	   <div class="blog_1rdt3 mt-4 bg_light p-4">
	    <div class="blog_1rdt3it row">
		 <div class="col-md-12">
		  <h2 class="mb-4">(03) Comments:</h2>
		 </div> 
		</div>
	    <div class="blog_1rdt3i row">
		 <div class="col-md-2 col-sm-2">
		  <div class="blog_1rdt3il">
		   <img src="img/33.jpg" class="w-100 rounded-circle" alt="abc">
		  </div>
		 </div>
		 <div class="col-md-10 col-sm-10">
		  <div class="blog_1rdt3il">
		   <h4>Eget Nulla <span class="pull-right"><a class="button_1 pt-2 pb-2 ps-3 pe-3 font_14 fw-normal" href="#">Reply</a></span></h4>
		   <h6 class="font_14 mt-3"><a href="#"><i class="fa fa-calendar col_oran me-1"></i> 03 Feb, 2022</a> <a  href="#"><i class="fa fa-user col_oran me-1 ms-3"></i> Admin</a> <a href="#"><i class="fa fa-comments col_oran me-1 ms-3"></i> 3 Comments</a></h6>
		   <p class="mb-0 font_14">Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown type specimen book.</p>
		  </div>
		 </div>
		</div><hr>
		<div class="blog_1rdt3i row">
		 <div class="col-md-2 col-sm-2">
		  <div class="blog_1rdt3il">
		   <img src="img/34.jpg" class="w-100 rounded-circle" alt="abc">
		  </div>
		 </div>
		 <div class="col-md-10 col-sm-10">
		  <div class="blog_1rdt3il">
		   <h4>Semper Porta <span class="pull-right"><a class="button_1 pt-2 pb-2 ps-3 pe-3 font_14 fw-normal" href="#">Reply</a></span></h4>
		   <h6 class="font_14 mt-3"><a href="#"><i class="fa fa-calendar col_oran me-1"></i> 03 Feb, 2022</a> <a  href="#"><i class="fa fa-user col_oran me-1 ms-3"></i> Admin</a> <a href="#"><i class="fa fa-comments col_oran me-1 ms-3"></i> 3 Comments</a></h6>
		   <p class="mb-0 font_14">Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown type specimen book.</p>
		  </div>
		 </div>
		</div><hr>
		<div class="blog_1rdt3i row">
		 <div class="col-md-2 col-sm-2">
		  <div class="blog_1rdt3il">
		   <img src="img/35.jpg" class="w-100 rounded-circle" alt="abc">
		  </div>
		 </div>
		 <div class="col-md-10 col-sm-10">
		  <div class="blog_1rdt3il">
		   <h4>Nulla Quis <span class="pull-right"><a class="button_1 pt-2 pb-2 ps-3 pe-3 font_14 fw-normal" href="#">Reply</a></span></h4>
		   <h6 class="font_14 mt-3"><a href="#"><i class="fa fa-calendar col_oran me-1"></i> 03 Feb, 2022</a> <a  href="#"><i class="fa fa-user col_oran me-1 ms-3"></i> Admin</a> <a href="#"><i class="fa fa-comments col_oran me-1 ms-3"></i> 3 Comments</a></h6>
		   <p class="mb-0 font_14">Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown type specimen book.</p>
		  </div>
		 </div>
		</div><hr>
		<div class="blog_1rdt3it row">
		 <div class="col-md-12">
		  <h2 class="mb-4">Leave a Reply:</h2>
		 </div> 
		</div>
		<div class="blog_1rdt3i2 row">
		 <div class="col-md-6">
		  <div class="blog_1rdt3i2l">
		    <input class="form-control" placeholder="Name" type="text">
		  </div>
		 </div> 
		 <div class="col-md-6">
		  <div class="blog_1rdt3i2l">
		    <input class="form-control" placeholder="Email" type="text">
		  </div>
		 </div>
		</div>
		<div class="blog_1rdt3i2 row mt-3">
		 <div class="col-md-6">
		  <div class="blog_1rdt3i2l">
		    <input class="form-control" placeholder="Subject" type="text">
		  </div>
		 </div> 
		 <div class="col-md-6">
		  <div class="blog_1rdt3i2l">
		    <input class="form-control" placeholder="Website" type="text">
		  </div>
		 </div>
		</div>
		<div class="blog_1rdt3i2 row mt-3">
		 <div class="col-md-12">
		  <div class="blog_1rdt3i2l">
		    <textarea placeholder="Message" class="form-control form_text"></textarea>
			<h6 class="mb-0 mt-3"><a class="button" href="#">Post Comment <i class="fa fa-check-circle ms-1"></i> </a></h6>
		  </div>
		 </div> 
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