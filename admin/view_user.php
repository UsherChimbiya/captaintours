<?php
include("conf.php");
$edit ="btn btn-primary";
$delete ="btn btn-danger";
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Car Lease </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link rel="stylesheet" href="./vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./vendor/owl-carousel/css/owl.theme.default.min.css">
    <link href="./vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">



</head>

<body>

<?php
include("header.php");



include("sidebar.php");
?>
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                <?php
            if (!empty($successMessage)) {
        echo "<div class='$alertClass'>$successMessage</div>";
    }
    ?>
                <div class="card">
                    <div class="card-header bg-primary p-3 text-white">
                        User Details
                    </div>
                    <div class="card-body">
        <section id="login" class="">
  <div class="container-xl">
      <div class="row">
          <div class="col-md-12">
              <div class="login_1 p-4 m-auto">
              <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Role</th>
      
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
   <?php
   $records_per_page = 10;
   $page = isset($_GET['page']) ? $_GET['page'] : 1;
   $offset = ($page - 1) * $records_per_page;
   $sql = "SELECT * FROM users LIMIT $offset, $records_per_page";
   $result = $conn->query($sql);
   if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['fullname']}</td>
                <td>{$row['email']}</td>
                <td>{$row['role']}</td>
                

                <td>
                    <a class='$edit' href='edit_user.php?id={$row['id']}'>Edit</a>
                    
                    <a class='$delete' href='delete_user.php?id={$row['id']}'>Delete</a>
                </td>
              </tr>";
    }

    echo "</table>";
      // Pagination links
      $sql = "SELECT COUNT(*) AS total FROM users";
      $result = $conn->query($sql);
      $row = $result->fetch_assoc();
      $total_pages = ceil($row['total'] / $records_per_page);
  
      echo "<nav aria-label='Page navigation'>
              <ul class='pagination'>";
  
      for ($i = 1; $i <= $total_pages; $i++) {
          echo "<li class='page-item " . ($i == $page ? 'active' : '') . "'>
                  <a class='page-link' href='reservation.php?page=$i'>$i</a>
                </li>";
      }
  
      echo "</ul>
            </nav>";
} else {
    echo "No users found.";
}
$conn->close();
   ?>
  </tbody>
</table>
              </div>
          </div>
      </div>
  </div>
</section>
</div>
</div>
</div>
</div>
        <!--**********************************
            Footer start
        ***********************************-->
   
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
    <script src="./js/quixnav-init.js"></script>
    <script src="./js/custom.min.js"></script>


    <!-- Vectormap -->
    <script src="./vendor/raphael/raphael.min.js"></script>
    <script src="./vendor/morris/morris.min.js"></script>


    <script src="./vendor/circle-progress/circle-progress.min.js"></script>
    <script src="./vendor/chart.js/Chart.bundle.min.js"></script>

    <script src="./vendor/gaugeJS/dist/gauge.min.js"></script>

    <!--  flot-chart js -->
    <script src="./vendor/flot/jquery.flot.js"></script>
    <script src="./vendor/flot/jquery.flot.resize.js"></script>

    <!-- Owl Carousel -->
    <script src="./vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <!-- Counter Up -->
    <script src="./vendor/jqvmap/js/jquery.vmap.min.js"></script>
    <script src="./vendor/jqvmap/js/jquery.vmap.usa.js"></script>
    <script src="./vendor/jquery.counterup/jquery.counterup.min.js"></script>


    <script src="./js/dashboard/dashboard-1.js"></script>

</body>

</html>
