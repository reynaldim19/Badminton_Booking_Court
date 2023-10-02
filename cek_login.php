<?php
session_start();

include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];


$login = mysqli_query($koneksi, "select * from user where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);

if ($cek > 0) {

	$data = mysqli_fetch_assoc($login);

	if ($data['level'] == "admin") {

		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		header("location:admin/index.php");

		// cek jika user login sebagai penyewa
	} else if ($data['level'] == "penyewa") {
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "penyewa";
		// alihkan ke halaman dashboard penyewa
		header("location:penyewa/index.php");
	} else {

		// alihkan ke halaman login kembali
		header("location:login.php?pesan=gagal");
	}


} else {
	header("location:../index.php?pesan=gagal");
}

?>