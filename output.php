<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}


require 'functions.php';

$username = $_POST['username'];
$namalengkap = $_POST['namalengkap'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];
$nik = $_POST['nik'];
$dosis = $_POST['dosis'];
$sertifikat = $_POST['sertifikat'];

if (isset($_POST['kirimform'])) {
    mysqli_query($conn, "INSERT INTO datavaksin set
	username = '$_POST[username]',
	namalengkap = '$_POST[namalengkap]',
	kelas = '$_POST[kelas]',
	jurusan = '$_POST[jurusan]',
	nik = '$_POST[nik]',
	dosis = '$_POST[dosis]',
	sertifikat = '$_POST[sertifikat]'
	");

    echo "<script>
alert('Data Baru Berhasil Didaftarkan!');
</script>";
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM DATA SAYA</title>
    <link rel="stylesheet" href="utama.css">
</head>

<body>
    <div class="center">
        <h1>FORM DATA SAYA</h1>
        <div class="outputnya">
            Username &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <?= $username; ?>
        </div>
        <div class="outputnya">
            Nama Lengkap &nbsp;: <?= $namalengkap; ?>
        </div>
        <div class="outputnya">
            Kelas &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?= $kelas; ?>
        </div>
        <div class="outputnya">
            Jurusan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?= $jurusan; ?>
        </div>
        <div class="outputnya">
            NIK &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?= $nik; ?>
        </div>
        <div class="outputnya">
            Dosis &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?= $dosis; ?>
        </div>
        <div class="outputnya">
            Sertifikat &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?= $sertifikat; ?>
        </div>
        <div class="signup_link">
            Edit form ulang? <a href="perantara.php">EDIT!</a>
            <br>
            LOGOUT? <a href="logout.php">LOGOUT!</a>
        </div>
    </div>
</body>

</html>