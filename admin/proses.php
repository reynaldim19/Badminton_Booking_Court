<?php
include "../koneksi.php";
$nama = $_POST['nama'];
$phone = $_POST['phone'];
$lapangan = $_POST['lapangan'];
$tanggal = $_POST['datepicker'];
$jam_mulai = $_POST['jam_mulai'];
$waktu_main = $_POST['waktu_main'];
$jam_selesai = $_POST['jam_selesai'];
$harga_per_jam = 25000;
$harga = $harga_per_jam * $waktu_main;

// Melakukan sanitasi pada lapangan, tanggal, dan jam yang dipilih
$lapangan = mysqli_real_escape_string($koneksi, $lapangan);
$tanggal = mysqli_real_escape_string($koneksi, $tanggal);
$jam_mulai = mysqli_real_escape_string($koneksi, $jam_mulai);
$waktu_main = mysqli_real_escape_string($koneksi, $waktu_main);
$jam_selesai = mysqli_real_escape_string($koneksi, $jam_selesai);

// Melakukan query pencocokan jadwal
$query = "SELECT * FROM booking WHERE lapangan = '$lapangan' 
                                AND tanggal = '$tanggal' 
                                AND jam_mulai = '$jam_mulai' 
                                AND waktu_main = '$waktu_main' 
                                AND jam_selesai = '$jam_selesai'";
$result = mysqli_query($koneksi, $query);
if (mysqli_num_rows($result) > 0) {
  echo "<script>
    alert('Jadwal Sudah di Book');
    window.location.href = 'book.php';
  </script>";
} else {
  $proses = mysqli_query($koneksi, "INSERT INTO booking 
  (nama, phone, lapangan, tanggal, jam_mulai, waktu_main, jam_selesai, harga) 
  VALUES('$nama', '$phone', '$lapangan', '$tanggal', '$jam_mulai', '$waktu_main','$jam_selesai','$harga') ");
}


if ($proses) {
  echo "<script>
                alert('Data Booking Berhasil Dibuat');
                window.location.href = 'pembayaran.php';
              </script>";
} else
  echo "<script>
                    alert('Data Booking Gagal Disimpan');
                    window.location.href = 'book.php';
                </script>";

?>