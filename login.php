<?php
session_start();

if (isset($_SESSION["login"])) {
	header("Location: index.php");
	exit;
}

require 'functions.php';


if (isset($_POST["login"])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

	//cek username
	if (mysqli_num_rows($result) === 1) {
		//cek password
		$row = mysqli_fetch_assoc($result);
		if (password_verify($password, $row["password"])) {
			//set session
			$_SESSION["login"] = true;
			header("Location: index.php");
			exit;
		}
	}
	$error = true;
}

?>



<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<title>LOGIN FORM DATA VAKSIN</title>
	<link rel="stylesheet" type="text/css" href="logres.css">
	<meta name="Viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<div class="center">
		<h1>LOGIN</h1>
		<div class="errornya">
			<?php if (isset($error)) : ?>
				<div class="errorlogin">
					<p>Username / Password Salah, ULANGI!</p>
				</div>
			<?php endif; ?>
		</div>
		<form action="" method="POST">
			<div class="txt-field">
				<input type="text" name="username" id="username" required>
				<span></span>
				<label for="username">Username </label>
			</div>
			<div class="txt-field">
				<input type="password" name="password" id="password" required>
				<span></span>
				<label for="password">Password </label>
			</div>
			<input type="submit" name="login" value="LOGIN"></input>
			<div class="signup_link">
				Tidak memiliki akun? <a href="registrasi.php">REGISTRASI!</a>
			</div>
		</form>
	</div>
</body>

</html>