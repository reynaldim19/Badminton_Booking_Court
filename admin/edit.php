<?php
include "../koneksi.php";
error_reporting(E_ERROR | E_PARSE);
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
$apakah_proses = $_GET['proses'];
$proses_ambil = mysqli_query($koneksi, "SELECT * FROM booking WHERE id = '" . $_GET['id'] . "'")
    or die(mysqli_error($koneksi));

if ($apakah_proses == 1) {
    $nama = $_POST['nama'];
    $phone = $_POST['phone'];
    $lapangan = $_POST['lapangan'];
    $tanggal = $_POST['datepicker'];
    $jam_mulai = $_POST['jam_mulai'];
    $waktu_main = $_POST['waktu_main'];
    $jam_selesai = $_POST['jam_selesai'];
    $proses_update_data = mysqli_query($koneksi, "UPDATE booking SET 
                                            nama = '$nama',
                                            phone = '$phone',
                                            lapangan = '$lapangan',
                                            tanggal = '$tanggal',
                                            jam_mulai = '$jam_mulai',
                                            waktu_main ='$waktu_main',
                                            jam_selesai = '$jam_selesai'  
                                            WHERE id = '" . $id . "'")
        or die(mysqli_error($koneksi));
    if ($proses_update_data) {
        echo "<script>
                alert('Data Berhasil Diupdate');
                window.location.href = 'jadwal_book.php';
              </script>";
    } else
        echo "<script>
                    alert('Data Gagal Diupdate');
                    window.location.href = 'book.php';
                </script>";
}
?>