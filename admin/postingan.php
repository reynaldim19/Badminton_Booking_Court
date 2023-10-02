<?php
include "tampilkan.php"
  ?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Book Badminton</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/owl.carousel.min.css">
  <link rel="stylesheet" href="../css/owl.theme.default.min.css">
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="../css/style.css">
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70">
  <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm navbar fixed-top">
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
            <a class="nav-link" href="laporan.php">Laporan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Informasi Postingan</a>
          </li>
          <li class="nav-item">
            <a href="logout.php" class="btn btn-brand ms-lg-3">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="m-auto pt-5" style="width: 60%;">
    <br><br>
    <h1 class="text-center">Informasi</h1>
    <?php
    while ($data = mysqli_fetch_assoc($proses)) {
      ?>
      <div class="card mb-5" style="width: 100%;">
        <img src="fotopost/<?php echo $data['foto']; ?>" height="300" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">
            <?php echo $data['nama']; ?>
          </h5>
          <p class="card-text">
            <?php echo $data['deskripsi']; ?>
          </p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
      <?php
    }
    ?>
  </div>
  <footer>
    <div class="footer-top text-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h4 class="navbar-brand">Prixima<span class="dot">.</span></h4>
            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
              classical Latin literature from</p>
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
    <div class="footer-bottom text-center">
      <p class="mb-0">Copyright vicpra 2022. All rights Reserved</p> Distributed By <a
        hrefs="https://themewagon.com">ThemeWagon</a>
    </div>
  </footer>

  <a href="managemen.php" class="btn btn-danger" style="position: fixed; bottom: 5%; right: 5%;">Edit</a>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/zdist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
</body>

</html>