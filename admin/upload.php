<?php
include "../koneksi.php";
$foto = $_FILES['foto']['name'];
$file_tmp = $_FILES['foto']['tmp_name'];
move_uploaded_file($file_tmp, 'fotopost/' . $foto);
$nama = $_POST['nama'];
$deskripsi = $_POST['deskripsi'];

if (isset($_FILES['foto'])) {
    $foto = $_FILES['foto']['name'];
    $file_tmp = $_FILES['foto']['tmp_name'];

    if (isset($_POST['proses'])) {
        mysqli_query($koneksi, "insert into upload set foto='$foto', nama='$nama', deskripsi='$deskripsi'
            ");
    }
}
header('location:postingan.php');
?>