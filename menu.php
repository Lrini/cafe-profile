 <?php 
session_start();
include("koneksi.php");
 if(!isset($_SESSION['id_user'])){
    ?>
    <script type="text/javascript">
      alert('login dulu');window.location='index.php';
    </script>
    <?php
  }else{
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Rumah Selingkuhan Cafe</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
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
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.php">Rumah Selingkuhan</a></h1>
     

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="home.php">Home</a></li>
          <li><a class="nav-link scrollto active" href="menu.php">Menu</a></li>
          <li><a class="nav-link scrollto" href="catering.php">Order</a></li>
          <li><a class="nav-link scrollto" href="Keranjang.php">Cart</a></li>
          <li><a class="nav-link scrollto" href="index.php">Logout</a></li>
        </ul>
      </nav>
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section>
    
  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Menu</h2>
          <p>Check Our Tasty Menu</p>
        </div>

        <?php
                            $conn = new mysqli("localhost", "root", "", "cafe");
                            $user = $_SESSION['id_user'];
                            if ($conn->connect_errno) {
                              echo "Failed to connect to MySQL: " . $conn->connect_error;
                            }
                            
                            $no = 1;
                            $res = $conn->query("select * from menu");
                            while($row = $res->fetch_assoc()){
                            echo '
                            <div class="col-lg-12 menu-item filter-starters">
                              <img src="admin/menu/'.$row['gambar'].'" class="menu-img">
                              <div class="menu-content">
                                '.$row['menu'].'</a><span> Rp.'.$row['harga'].' <a href ="pesan.php?id_menu='.$row['id_menu'].'&id_user='.$user.'&harga='.$row['harga'].'"><i class="btn  btn-primary">Pesan</i></a> </span>
                              </div>
                              <div class="menu-ingredients">
                                 Menu makanan
                              </div>
                          </div> 
                                ';
                                $no++;
                              }
                              ?>

        </div>
        

      </div>
    </section><!-- End Menu Section -->
    

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
  

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Rumah Selingkuhan Cafe</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">Lrini</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

<?php
  }
?>