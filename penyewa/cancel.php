<?php
include "../koneksi.php";
$id = $_GET['id'];
$proses = mysqli_query($koneksi, "DELETE from booking WHERE id = '" . $id . "'")
    or die(mysqli_error($koneksi));
if ($proses) {
    echo "<script>
                            alert('Data Booking Berhasil Dihapus');
                            window.location.href = 'book.php';
                          </script>";
} else
    echo "<script>
                                alert('Data Booking Gagal Dihapus');
                                window.location.href = 'pembayaran.php';
                            </script>";
?>