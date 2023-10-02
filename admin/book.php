<?php
include "../koneksi.php";
include "edit.php";
if (isset($proses_ambil)) {
  $proses_update_data = mysqli_fetch_assoc($proses_ambil);
}
?>
<!DOCTYPE html>
<html lang="en">

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

  <!-- Jquery -->
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <!-- Icons -->
  <script src="https://unpkg.com/feather-icons"></script>
  <title>Book Badminton</title>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70">
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
            <a class="nav-link active" aria-current="page" href="#">Booking</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="jadwal_book.php">Jadwal Booking</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="laporan.php">Laporan</a>
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
          <h2 class="judul">Pemesanan Booking</h2>
        </div>
      </div>
      <hr width="200rem" />
      <div class="row fs-5 mb-3">
        <div class="col-md-6">
          <?php
          if (isset($_GET['id']) != '') {
            ?>
            <form action="edit.php?id=<?php echo $proses_update_data['id']; ?>&proses=1" method="POST">
              <?php
          } else {
            ?>
              <form action="proses.php" method="POST" class="form-horizontal" autocomplete="off">
                <?php
          }
          ?>
              <div class="col-12">
                <i data-feather="user"></i>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Penyewa" Required
                  value="<?php echo isset($proses_update_data['nama']) ? $proses_update_data['nama'] : ''; ?>">
              </div>
              <div class="col-12">
                <i data-feather="phone"></i>
                <input type="number" class="form-control" id="phone" name="phone" placeholder="No. HP" Required
                  value="<?php echo isset($proses_update_data['phone']) ? $proses_update_data['phone'] : ''; ?>">
              </div>
              <div class="col-12">
                <label for="">Lapangan</label>
                <br>
                <select name="lapangan" id="lapangan">
                  <option value="" disabled selected>Pilih Lapangan</option>
                  <option value="Lapangan 1" <?php echo (isset($proses_update_data['lapangan']) && $proses_update_data['lapangan'] == 'Lapangan 1') ? 'selected' : ''; ?>>Lapangan 1</option>
                  <option value="Lapangan 2" <?php echo (isset($proses_update_data['lapangan']) && $proses_update_data['lapangan'] == 'Lapangan 2') ? 'selected' : ''; ?>>Lapangan 2</option>
                </select>
                <br><br>
              </div>
              <div class="col-12">
                <i data-feather="calendar"></i>
                <input type="text" id="datepicker" name="datepicker" required placeholder="Pilih Tanggal"
                  value="<?php echo isset($proses_update_data['tanggal']) ? $proses_update_data['tanggal'] : ''; ?>">
              </div>
              <br>
              <div class="col-12">
                <i data-feather="clock"></i>
                <select id="jam_mulai" name="jam_mulai" required>
                  <option value="" disabled selected>Waktu Mulai</option>
                  <?php
                  for ($hour = 7; $hour < 24; $hour++) {
                    $start_time = str_pad($hour, 2, '0', STR_PAD_LEFT) . ':00';
                    $selected = isset($proses_update_data['jam_mulai']) && $proses_update_data['jam_mulai'] == $start_time ? 'selected' : '';
                    echo "<option value='$start_time' $selected>$start_time</option>";
                  }
                  ?>
                </select>

                <input id="waktu_main" type="text" name="waktu_main" placeholder="Waktu Main (dalam jam)" required>

                <script>
                  // Mendapatkan elemen select dan input menggunakan ID
                  var jamMulaiSelect = document.getElementById('jam_mulai');
                  var waktuMainInput = document.getElementById('waktu_main');

                  // Fungsi untuk mengubah jam selesai berdasarkan inputan waktu main
                  function updateJamSelesai() {
                    var jamMulai = jamMulaiSelect.value; // Mendapatkan jam mulai yang dipilih
                    var waktuMain = parseInt(waktuMainInput.value); // Mendapatkan inputan waktu main dalam jam

                    if (jamMulai && waktuMain) {
                      var jamMulaiArray = jamMulai.split(':'); // Memecah jam mulai menjadi array [jam, menit]
                      var jamSelesai = parseInt(jamMulaiArray[0]) + waktuMain; // Menambahkan waktu main ke jam mulai
                      var end_time = ("0" + jamSelesai).slice(-2) + ':00'; // Format jam selesai dalam bentuk 00:00

                      // Memvalidasi jika jam selesai melebihi 24
                      if (jamSelesai > 24) {
                        alert('Waktu bermain hanya sampai 24:00');
                        waktuMainInput.value = ''; // Mengosongkan input waktu main
                        return; // Menghentikan eksekusi fungsi
                      }

                      // Menghapus semua opsi jam selesai sebelum menggantinya
                      var jamSelesaiOptions = document.querySelectorAll('#jam_selesai option');
                      jamSelesaiOptions.forEach(function (option) {
                        option.remove();
                      });

                      // Menambahkan opsi jam selesai baru berdasarkan waktu yang dihitung
                      var jamSelesaiOption = document.createElement('option');
                      jamSelesaiOption.text = end_time;
                      jamSelesaiOption.value = end_time;
                      document.getElementById('jam_selesai').add(jamSelesaiOption);
                    }
                  }

                  // Memanggil fungsi updateJamSelesai ketika ada perubahan pada jam mulai atau waktu main
                  jamMulaiSelect.addEventListener('change', updateJamSelesai);
                  waktuMainInput.addEventListener('input', updateJamSelesai);
                </script>

                <select id="jam_selesai" name="jam_selesai" required>
                  <option value="" disabled selected>Waktu Selesai</option>
                </select>
              </div>
              <div class="col-12">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="gridCheck" required>
                  <label class="form-check-label" for="gridCheck">
                    Pastikan Sudah Sesuai
                  </label>
                </div>
              </div>
              <div class="form-actions">
                <button type="submit" class="btn btn-brand ms-lg-3">Proses</button>
                <button type="reset" class="btn btn-brand ms-lg-3">Cancel</button>
              </div>
            </form>
            <br>
            <a class="btn btn-dark btn-lg" href="jadwal_book.php" role="button" type="submit">Lihat Jadwal</a>
        </div>
        <div class="col-md-6"><img src="../img/gambar2.jpg" alt="Court" /></div>
      </div>
    </div>
  </section>
  <!-- Akhir Konten -->
  <!-- Footer -->
  <hr width="1300rem" />
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
  <!-- Akhir Footer -->
  <script>
    $(function () {
      $("#datepicker").datepicker({
        dateFormat: "yy-mm-dd", // Format tanggal yang diinginkan
        minDate: 0, // Batasi tanggal minimal, misalnya 0 untuk hari ini
        maxDate: "+1M" // Batasi tanggal maksimal, misalnya +1M untuk 1 bulan ke depan
      });
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <script>
    feather.replace()
  </script>
</body>

</html>