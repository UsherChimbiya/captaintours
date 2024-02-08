<?php
  session_start();
      // Check if the session variable is set
      if(isset($_SESSION['customer_id'])) {
        $customer_id = $_SESSION['customer_id'];
        // Proceed with using $customer_id
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