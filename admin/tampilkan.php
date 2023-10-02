<?php

include "../koneksi.php";
$proses = mysqli_query($koneksi, "select * from upload order by id DESC");

?>