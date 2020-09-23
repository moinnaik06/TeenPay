<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TeenPay</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!--Google Sign In-->
  <meta name="google-signin-scope" content="profile email">
  <meta name="google-signin-client_id" content="611194731817-s3riou7i727ivf017nvio29i06s8jdat.apps.googleusercontent.com">
  <script src="https://apis.google.com/js/platform.js" async defer></script>

  <!--Bootstrap and Icons-->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

  <link href="assets/css/style.css" rel="stylesheet">
  <style type="text/css">
      .container i {
      cursor: pointer;
      }
  </style>
</head>

<body>
  <div class="wrap">

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
      <div class="container d-flex align-items-center">

        <div class="logo mr-auto">
          <a href="home.php"><img src="/TeenPay/assets/img/logo.png" alt="" class="img-fluid"></a>
        </div>

        <nav class="nav-menu d-none d-lg-block">
          <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="passbook.php">PassBook</a></li>
            <li><a href="profile.php">Profile</a></li>
            <li><a style="color: #83f52c" href="#">
              <?php 
                session_start();
                $email = $_SESSION['email'];
                include 'php/dbcon.php';
                $sql= "SELECT fname , lname FROM user WHERE `email` ='$email'"; 
                $query = mysqli_query($conn, $sql); 
                $row=mysqli_fetch_array($query); 
                $fname = $row["fname"]; 
                $lname = $row["lname"]; 
                echo "Hello ".$fname." ".$lname ;
              ?></a></li>
          </ul>
        </nav><!-- .nav-menu -->

      </div>
    </header><!-- End Header -->

    <main id="main">
      <div class="container">
        <div align="center">
          <img src="/TeenPay/assets/img/uc.gif" width="800">
        </div>
      </div>
    </main>
    <!-- ======= Footer ======= -->
    <footer id="footer">
      <div class="container py-4">
        <div class="copyright">
          &copy; Copyright <strong><span>TeenPay</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          Designed by <a href="https://tsec.edu">TSECites</a>
        </div>
      </div>
    </footer><!-- End Footer -->

  </div>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>