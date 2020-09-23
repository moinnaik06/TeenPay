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
    <section id="hero">
      <div class="hero-container" data-aos="fade-up">
        <h1>Digital Payments for Teens<br> made easy</span></h1>
        <h2>With TeenPay</h2>
        <div class="row">
        <a href="#login" class="btn-login scrollto">Login / Sign Up</a>
      </div>
      </div>
    </section>

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
      <div class="container d-flex align-items-center">

        <div class="logo mr-auto">
          <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
        </div>

      </div>
    </header><!-- End Header -->
    <main id="main">

      <!-- ======= Login Section ======= -->
      <section id="login" class="contact">
        <div class="container">
        <div class="row">
          <!--Login section-->
          <div class="col-md-6">
            <div class="section-title" data-aos="fade-down">
              <h2>Login</h2>
            </div>
            <form action="php/login.php" method="post" role="form" class="php-email-form mt-4"  data-aos="fade-up" data-aos-delay="400">
                <div class="col-md-12 form-group">
                  <input type="email" name="email" class="form-control" id="email" placeholder="Email" data-rule="email" data-msg="Enter your email"/>
                  <div class="validate"></div>
                </div>
                <div class="col-md-12 form-group row">
                  <div class="col-md-11">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" data-rule="minlen:8" data-msg="Enter your password"></input>
                  </div>
                  <div class="col-md-1"> 
                    <i class="far fa-eye" id="togglePassword"></i>
                  </div>
                  <div class="validate"></div>
                </div>

                <div class="row">
                  <div class="col-md-5">
                    <div class="text-center"><button type="submit">Login</button></div>
                  </div>
                  <div class="col-md-2">
                    <strong><span>OR</span></strong>
                  </div>
                  <div class="col-md-5">
                    <div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark"></div>                    
                  </div>  
                </div>
            </form>
          </div>
          <!--Signup section-->
          <div class="col-md-6">
            <div class="section-title" data-aos="fade-down">
              <h2>Sign Up</h2>
            </div>
            <form action="php/signup.php" method="post" role="form" class="php-email-form mt-4"  data-aos="fade-up" data-aos-delay="400">
                <div class="col-md-12 form-group">
                  <input type="text" name="fname" class="form-control" id="fname" placeholder="First Name" data-rule="minlen:3" data-msg="Enter your first name"/>
                  <div class="validate"></div>
                </div>
                <div class="col-md-12 form-group">
                  <input type="text" name="lname" class="form-control" id="lname" placeholder="Last Name" data-rule="minlen:3" data-msg="Enter your last name"/>
                  <div class="validate"></div>
                </div>
                <div class="col-md-12 form-group">
                  <input type="text" name="email" class="form-control" id="email" placeholder="Email" data-rule="email" data-msg="Enter your Email"/>
                  <div class="validate"></div>
                </div>
                <div class="col-md-12 form-group">
                  <input type="text" name="mobile" class="form-control" id="mobile" placeholder="Mobile Number" data-rule="minlen:10" data-msg="Enter your Mobile Number"/>
                  <div class="validate"></div>
                </div>                
              <div class="text-center"><button type="submit">Register</button></div>
            </form>
          </div>
        </div>
        </div>
      </section><!-- End Contact Us Section -->

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

    <script>
      const togglePassword = document.querySelector('#togglePassword');
      const password = document.querySelector('#password');
      togglePassword.addEventListener('click', function (e) {
          const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
          password.setAttribute('type', type);
          this.classList.toggle('fa-eye-slash');
      });


      function onSignIn(googleUser) {
        // Useful data for your client-side scripts:
        var profile = googleUser.getBasicProfile();
        console.log("ID: " + profile.getId()); // Don't send this directly to your server!
        alert('Full Name: ' + profile.getName());
        alert('Given Name: ' + profile.getGivenName());
        alert('Family Name: ' + profile.getFamilyName());
        alert("Image URL: " + profile.getImageUrl());
        alert("Email: " + profile.getEmail());

        // The ID token you need to pass to your backend:
        var id_token = googleUser.getAuthResponse().id_token;
        console.log("ID Token: " + id_token);
      }
    </script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/js/main.js"></script>

</body>

</html>