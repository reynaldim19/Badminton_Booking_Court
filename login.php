<!DOCTYPE html>
<html>

<head>
	<title>Login</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/login_style.css">
	<title>Abadi Badminton</title>
</head>

<body>

	<?php
	if (isset($_GET['pesan'])) {
		if ($_GET['pesan'] == "gagal") {
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>

	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>

		<form action="cek_login.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username .." required="required">

			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required">

			<input type="submit" class="tombol_login" value="LOGIN">

			<p>Belum mempunyai akun? <a href="register.php">Register</a></p>

			<br />
			<br />
		</form>

	</div>


</body>

</html>