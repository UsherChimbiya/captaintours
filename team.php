<?php
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

<?php include('head.php'); ?>
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
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Blog
          </a>
          <ul class="dropdown-menu drop_1" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="blog.html"> Blog</a></li>
            <li><a class="dropdown-item border-0" href="blog_detail.html"> Blog Detail</a></li>
          </ul>
        </li>
		<li class="nav-item">
          <a class="nav-link active" href="team.html">Team</a>
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
 <section id="center" class="center_team">
   <div class="center_om clearfix">
     <div class="container-xl">
  <div class="row center_o1">
   <div class="col-md-12">
      <h2 class="text-white">Our Team</h2>
	  <h6 class="mb-0 mt-3 fw-normal col_oran"><a class="text-light" href="#">Home</a> <span class="mx-2 col_light">/</span> Our Team</h6>
   </div>
  </div>
 </div>
   </div>
 </section>
 </div>
 
</div>

<section id="team" class="p_3">
  <div class="container-xl">
   <div class="row team_1">
   <div class="col-md-3 col-sm-6">
    <div class="team_1i text-center">
	  <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="img/27.jpg" class="w-100" alt="abc"></a>
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
					<a href="#"><img src="img/28.jpg" class="w-100" alt="abc"></a>
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
					<a href="#"><img src="img/29.jpg" class="w-100" alt="abc"></a>
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
					<a href="#"><img src="img/30.jpg" class="w-100" alt="abc"></a>
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
   <div class="row team_1 mt-4">
   <div class="col-md-3 col-sm-6">
    <div class="team_1i text-center">
	  <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="img/38.jpg" class="w-100" alt="abc"></a>
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
					<a href="#"><img src="img/39.jpg" class="w-100" alt="abc"></a>
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
					<a href="#"><img src="img/40.jpg" class="w-100" alt="abc"></a>
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
					<a href="#"><img src="img/41.jpg" class="w-100" alt="abc"></a>
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