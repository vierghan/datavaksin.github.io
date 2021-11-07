<?php
session_start();
if (!isset($_SESSION["login"])) {
	header("Location: login.php");
	exit;
}

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<title>FORM DATA VAKSIN</title>
	<link rel="stylesheet" type="text/css" href="utama.css">
	<meta name="Viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<div class="center">
		<h1>FORM DATA VAKSIN</h1>
		<form action="output.php" method="POST">
			<div class="txt-field">
				<input type="text" name="username" id="username" required>
				<span></span>
				<label for="username">Username </label>
			</div>
			<div class="txt-field">
				<input type="text" name="namalengkap" id="namalengkap" required>
				<span></span>
				<label for="namalengkap">Nama Lengkap </label>
			</div>
			<div class="txt-field">
				<input type="text" name="kelas" id="kelas" required>
				<span></span>
				<label for="kelas">Kelas </label>
			</div>
			<div class="txt-field">
				<input type="text" name="jurusan" id="jurusan" required>
				<span></span>
				<label for="jurusan">Jurusan </label>
			</div>
			<div class="txt-field">
				<input type="text" name="nik" id="nik" required>
				<span></span>
				<label for="nik">NIK </label>
			</div>
			<div class="selaintext">
				<label for="dosis">Pilih Dosis </label>
				<select name="dosis" id="dosis" required>
					<option>Pilih Dosis</option>
					<option value="Dosis 1">Dosis 1</option>
					<option value="Dosis 2">Dosis 2</option>
				</select>
			</div>
			<br>
			<div class="selaintext">
				<label for="sertifikat">Upload Sertifikat Vaksin </label>
				<input type="file" name="sertifikat" id="sertifikat">
			</div>
			<br>
			<input type="submit" name="kirimform" value="SUBMIT"></input>
			<br>
			<input type="reset" value="RESET FORM"></input>
			<div class="signup_link">
				LOGOUT? <a href="logout.php">LOGOUT!</a>
			</div>
		</form>
	</div>
</body>

</html>