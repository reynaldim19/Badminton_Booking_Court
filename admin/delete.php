<?php

include "../koneksi.php";
if (isset($_GET['kode'])) {
    $data = mysqli_query($koneksi, "SELECT * FROM upload WHERE id = '" . $_GET['kode'] . "'");
    $row = mysqli_fetch_assoc($data);

    $foto = $row['foto'];
    if (file_exists('fotopost/' . $foto)) {
        unlink('fotopost/' . $foto);
    }
    $query = "DELETE FROM upload WHERE id = '" . $_GET['kode'] . "'";
    mysqli_query($koneksi, $query) or die("SQL Error: " . mysqli_error($koneksi));
    header('location: postingan.php');
}

?>