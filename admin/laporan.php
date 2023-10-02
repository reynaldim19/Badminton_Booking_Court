<?php

include "../koneksi.php";
$proses = mysqli_query($koneksi, "SELECT *from booking")
    or die(mysqli_error($koneksi));
?>
<!DOCTYPE html <html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/style.css">

    <!-- Icon Title -->
    <link rel="icon" href="../img/logo.jpg" type="image/gif" sizes="16x16" />

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>
    <title>Book Badminton</title>
</head>

<body>
    <!-- Navbar -->
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
                        <a class="nav-link active" aria-current="page" href="#">Laporan</a>
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
    <!-- Akhir Navbar -->
    <!-- Konten -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="judul">Jadwal Booking Lapangan</h2>
                </div>
            </div>
            <hr width="200rem" />
            <div class="row fs-5 mb-3">
                <div>
                    <div class="row">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Penyewa</th>
                                    <th>No. HP</th>
                                    <th>Lapangan</th>
                                    <th>Tanggal</th>
                                    <th>Waktu Main</th>
                                    <th>Pemasukan</th>
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
                                        <td>
                                            <?php echo "RP. " . $row['harga'] ?>
                                        </td>
                                    </tr>
                                    <?php
                                    $nomor++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <br><br>
                    <div class="col-md-6">
                        <a class="btn btn-dark btn-lg" href="book.php" role="button" type="submit">Booking Sekarang</a>
                    </div>
    </section>
    <!-- Akhir Konten -->
    <!-- Footer -->
    <hr width="1300rem" />
    <!-- Akhir Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
    <script>
        feather.replace()
    </script>
</body>

</html>