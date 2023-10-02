<?php
include "../koneksi.php";
$tanggal = date('Y-m-d');
$proses = mysqli_query($koneksi, "SELECT *from booking WHERE tanggal = '$tanggal'") or die(mysqli_error($koneksi));
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="favicon.ico">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/owl.carousel.min.css">
  <link rel="stylesheet" href="../css/owl.theme.default.min.css">
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="../css/style.css">

  <title>Abadi Badminton</title>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70">


  <!-- TOP NAV -->

  <!-- BOTTOM NAV -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">ABADI BADMINTON<span class="dot">.</span></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="book.php">Booking</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="jadwal_book.php">Jadwal Booking</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="postingan.php">Informasi Postingan</a>
          </li>
          <li class="nav-item">
            <a href="logout.php" class="btn btn-brand ms-lg-3">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- SLIDER -->
  <div class="owl-carousel owl-theme hero-slider">
    <div class="slide slide1">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center text-white">
            <h6 class="text-white text-uppercase">Abadi Badminton</h6>
            <h1 class="display-3 my-4">Champions are made, <br />not born.</h1>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- MILESTONE -->
  <section id="milestone">
    <div class="container">
      <div class="row text-center justify-content-center gy-4">
        <div class="col-lg-5 col-sm-6">
          <h1 class="display-4">JAM OPERASIONAL</h1>
          <p class="display-4">07:00 - 24:00
          <p>
        </div>
      </div>
    </div>
  </section>

  <section id="services" class="text-center">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="intro">
            <h6>Tentang Kami</h6>
            <h1>ABADI BADMINTON</h1>
            <p class="mx-auto">Abadi Badminton adalah Gor Badminton yang didirikan sejak tahun 1989 di Cibitung, Bekasi.
              Memiliki visi untuk sarana olahraga masyarakat Cibitung dan membangun
              komunitas badminton daerah Cibitung.
            </p>
            <div class="service">
              <a
                href="https://www.google.com/maps/dir//badminton+abadi+cibitung/@-6.2572952,107.0154349,12z/data=!3m1!4b1!4m9!4m8!1m1!4e2!1m5!1m1!1s0x2e698f36c0d7dea5:0x57b4dfe85ba7950d!2m2!1d107.0854771!2d-6.257294?entry=ttu"><img
                  src="../img/map.png" alt="" id="map"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-light" id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="intro">
            <h6>Kegiatan</h6>
            <h1>Abadi Badminton Club</h1>
          </div>
        </div>
      </div>
    </div>
    <div id="projects-slider" class="owl-theme owl-carousel">
      <div class="project">
        <div class="overlay"></div>
        <img src="../img/lap2.jpg" alt="">
        <div class="content">
          <h2>Lapangan</h2>
        </div>
      </div>
      <div class="project">
        <div class="overlay"></div>
        <img src="../img/lap3.jpg" alt="">
        <div class="content">
          <h2>Club Badminton</h2>
        </div>
      </div>
      <div class="project">
        <div class="overlay"></div>
        <img src="../img/lap4.jpg" alt="">
        <div class="content">
          <h2>Kegiatan Lomba</h2>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-light" id="reviews">

    <div class="owl-theme owl-carousel reviews-slider container">
      <div class="review">
        <div class="person">
          <img src="img/team_3.jpg" alt="">
          <h5>Reynaldi Dianputra</h5>
          <small>Web Dev</small>
        </div>
        <h3>2110631170099</h3>
        <div class="stars">
          <i class='bx bxs-star'></i>
          <i class='bx bxs-star'></i>
          <i class='bx bxs-star'></i>
          <i class='bx bxs-star'></i>
          <i class="bx bxs-star-half"></i>
        </div>
        <i class='bx bxs-quote-alt-left'></i>
      </div>
    </div>
  </section>

  <footer>
    <div class="footer-top text-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h4 class="navbar-brand">ABADI BADMINTON<span class="dot">.</span></h4>
            <p>Website Booking Lapangan</p>
            <div class="col-auto social-icons">
              <a href="#"><i class='bx bxl-facebook'></i></a>
              <a href="#"><i class='bx bxl-twitter'></i></a>
              <a href="#"><i class='bx bxl-instagram'></i></a>
              <a href="#"><i class='bx bxl-pinterest'></i></a>
            </div>
            <div class="col-auto conditions-section">
              <a href="#">privacy</a>
              <a href="#">terms</a>
              <a href="#">disclaimer</i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>



  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.bundle.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/app.js"></script>
</body>

</html>