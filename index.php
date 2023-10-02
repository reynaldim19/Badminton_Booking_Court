<?php

include "koneksi.php";
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
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/style.css">

    <title>Abadi Badminton</title>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70">


    <!-- TOP NAV -->

    <!-- BOTTOM NAV -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">ABADI BADMINTON<span class="dot">.</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#milestone">Jam Operasional</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Cek Jadwal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio">Kegiatan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#blog">Informasi</a>
                    </li>
                </ul>
                <a href="login.php" class="btn btn-brand ms-lg-3">Login</a>
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
                        <h6>Cek Jadwal</h6>
                        <h1>Jadwal Hari Ini</h1>
                        <div class="service">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama Penyewa</th>
                                        <th>No. HP</th>
                                        <th>Lapangan</th>
                                        <th>Tanggal</th>
                                        <th>Waktu Main</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $nomor = 1;
                                    while ($row = mysqli_fetch_assoc($proses)) {
                                        ?>
                                        <tr>
                                            <td>
                                                <?php echo $nomor ?>
                                            </td>
                                            <td>
                                                <?php echo $row['nama'] ?>
                                            </td>
                                            <td>
                                                <?php echo $row['phone'] ?>
                                            </td>
                                            <td>
                                                <?php echo $row['lapangan'] ?>
                                            </td>
                                            <td>
                                                <?php echo $row['tanggal'] ?>
                                            </td>
                                            <td>
                                                <?php echo $row['jam_mulai'] . "-" . $row['jam_selesai'] ?>
                                            </td>
                                        </tr>
                                        <?php
                                        $nomor++;
                                    }
                                    ?>
                                </tbody>
                            </table>
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
                <img src="img/lap2.jpg" alt="">
                <div class="content">
                    <h2>Lapangan</h2>
                </div>
            </div>
            <div class="project">
                <div class="overlay"></div>
                <img src="img/lap3.jpg" alt="">
                <div class="content">
                    <h2>Club Badminton</h2>
                </div>
            </div>
            <div class="project">
                <div class="overlay"></div>
                <img src="img/lap4.jpg" alt="">
                <div class="content">
                    <h2>Kegiatan Lomba</h2>
                </div>
            </div>
        </div>
    </section>

    <section id="blog">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="intro">
                        <h6>Informasi</h6>
                        <h1>Blog Posts</h1>
                        <p class="mx-auto">Informasi Postingan Yang berisi tentang Lomba dan Berita</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <article class="blog-post">
                        <img src="img/lomba2.jpg" alt="">
                        <a href="#" class="tag">Lomba</a>
                        <div class="content">
                            <small>1 Desember 2023</small>
                            <h5>Badminton Abadi Cup</h5>
                            <p>Lomba yang diselenggarakan oleh pihak Abadi Badminton</p>
                        </div>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="blog-post">
                        <img src="img/lomba3.jpg" alt="">
                        <a href="#" class="tag">Lomba</a>
                        <div class="content">
                            <small>16 Agustus, 2023</small>
                            <h5>UNSIKA Cup 2023</h5>
                            <p>Lomba yang diselenggarakan oleh UNSIKA dalam menyambut hari Kemerdekaan Republik
                                Indonesia</p>
                        </div>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="blog-post">
                        <img src="img/lomba1.jpeg" alt="">
                        <a href="#" class="tag">Berita</a>
                        <div class="content">
                            <small>1 Januari 2023</small>
                            <h5>Indonesia di ASIAN Games</h5>
                            <p>Penampilan dan Jadwal para atlet Indonesia pada Asian Games 2023</p>
                        </div>
                    </article>
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



    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/app.js"></script>
</body>

</html>