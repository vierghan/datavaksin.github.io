<?php
require 'functions.php';

if (isset($_POST["register"])) {
	if (registrasi($_POST) > 0) {
		echo "<script>
				alert('User Baru Berhasil Didaftarkan!');
			</script>";
	} else {
		echo mysqli_error($conn);
	}
}


?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<title>REGISTRASI FORM</title>
	<link rel="stylesheet" type="text/css" href="logres.css">
	<meta name="Viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<div class="center">
		<h1>REGISTRASI</h1>
		<form action="" method="POST">
			<div class="txt-field">
				<input type="text" name="username" id="username" required>
				<label for="username">Username </label>
			</div>
			<div class="txt-field">
				<input type="password" name="password" id="password" required>
				<label for="password">Password </label>
			</div>
			<div class="txt-field">
				<input type="password" name="password2" id="password2" required>
				<label for="password2">Konfirmasi Password </label>
			</div>
			<div class="txt-field">
				<input type="text" name="namalengkap" id="namalengkap" required>
				<label for="namalengkap">Nama Lengkap </label>
			</div>
			<div class="txt-field">
				<input type="text" name="email" id="email" required>
				<label for="email">Email </label>
			</div>
			<input type="submit" name="register" value="REGISTRASI"></input>
			<div class="signup_link">
				Memiliki Akun? <a href="login.php">LOGIN!</a>
			</div>
		</form>
	</div>
</body>

</html>