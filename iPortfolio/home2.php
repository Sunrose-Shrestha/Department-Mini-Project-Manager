<?php
session_start();
if (isset($_SESSION["memberemail"])) {
    $membername = $_SESSION["membername"];
    session_write_close();
} else {
    // since the username is not set in session, the user is not-logged-in
    // he is trying to access this page unauthorized
    // so let's clear all session variables and redirect him to index
    session_unset();
    session_write_close();
    $url = "./index.php";
    header("Location: $url");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Student Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="assets/img/CMRIT logo.png">
        <h1 class="text-light"><?php echo $membername;?></h1>
        
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="../index.php" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>

           <li><a href="student_pro_select.html" class="nav-link scrollto"><i class="bi bi-graph-up"></i> <span>List of Projects</span></a></li>

          <li><a href="#" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>Hi!</h1>
      <p>Scroll the page <span class="typed" data-typed-items=" for your project updates, to view your marks, to upload your report"></span></p>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">
        <div class="container">
                      
                                
          <div class="row">
          <div class="col-12">
              <div class="card">
                  <div class="card-body text-center">
                      <h5 class="card-title m-b-0">DETAILS OF YOUR  MINI PROJECT</h5>
                  </div>
                      <div class="table-responsive">
                          <table class="table">
                              <thead class="thead-light">
                                  <tr>
                                      <th>
                                          
                                      </th>
                                      <th scope="col">Project ID</th>
                                      <th scope="col">Project Description</th>
                                      <th scope="col">Team No</th>
                                      <th scope="col">Project Guide</th>
                                      <th scope="col">Review 1</th>
                                      <th scope="col">Review 2</th>
                                      <th scope="col">Review 3</th>
                                      <th scope="col">Report </th>
                                  </tr>
                              </thead>
                              <tbody class="customtable">
                                  <tr>
                                    <th>
                                          
                                    </th>
                                      <td>ss1</td>
                                      <td>Bankers algorithm</td>
                                      <td>3</td>
                                      <td>Navneetha</td>
                                      <td>0</td>
                                      <td>0</td>
                                      <td>0</td>
                                      <td><input type="string"></td>
                                  </tr>

                                  <tr>
                                    <th>
                                          
                                    </th>
                                    <td>ss2</td>
                                    <td>Deadlocks</td>
                                    <td>5</td>
                                    <td>ABC</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td><input type="string"></td>
                                </tr>

                                <tr>
                                  <th>
                                        
                                  </th>
                                  <td>ss3</td>
                                  <td>Shopping </td>
                                  <td>4</td>
                                  <td>XYZ</td>
                                  <td>0</td>
                                  <td>0</td>
                                  <td>0</td>
                                  <td><input type="string"></td>
                              </tr>
                                  
                              </tbody>
                          </table>
                      </div>
              </div>
          </div>
      </div>

         </div> 

        

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>CMRIT</span></strong>
      </div>
      <div class="credits">
        
        Designed by Sreya Reddy N</a>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>