<?php
	$conn = mysqli_connect("localhost", "root", "", "vaksindone");

function registrasi($data){
	global $conn;

	$username = strtolower(stripcslashes($data['username']));
	$password = mysqli_real_escape_string($conn, $data['password']);
	$password2 = mysqli_real_escape_string($conn, $data['password2']);
	$namalengkap = ($data['namalengkap']);
	$email = ($data['email']);
	
	// cek username udah ada yang memakai atau belum
	$result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");

	if(mysqli_fetch_assoc($result)){
		echo "<script>
			alert('Username sudah terdaftar, ulangi!')
			</script>";
			return false;
	}

	//cek konfirmasi password
	if($password != $password2) {
		echo "<script>
			alert('Konfirmasi Password tidak sesuai, ulangi!')
			</script>";
		return false;
	}

	// enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);


	// insert data ke database
	mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password', '$namalengkap', '$email')");

	return mysqli_affected_rows($conn);
}
?>