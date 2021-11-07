<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

$a = $_POST['username'];

if (isset($_POST['updateform'])) {
    mysqli_query($conn, "UPDATE datavaksin SET
    username = '$_POST[username]',
    namalengkap = '$_POST[namalengkap1]',
    kelas = '$_POST[kelas1]',
    jurusan = '$_POST[jurusan1]',
    nik = '$_POST[nik1]',
    dosis = '$_POST[dosis1]',
    sertifikat = '$_POST[sertifikat1]'
    WHERE username = '$a';

");

    echo "<script>
alert('Data Baru Berhasil Diupdate!');
</script>";
}


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <title>EDIT FORM DATA VAKSIN</title>
    <link rel="stylesheet" type="text/css" href="utama.css">
    <meta name="Viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="center">
        <h1>EDIT DATA VAKSIN</h1>
        <form action="" method="POST">
            <div class="txt-field">
                <input type="text" name="username" id="username" required>
                <label for="username">Username </label>
            </div>
            <div class="txt-field">
                <input type="text" name="namalengkap1" id="namalengkap1" required>
                <label for="namalengkap1">Nama Lengkap </label>
            </div>
            <div class="txt-field">
                <input type="text" name="kelas1" id="kelas1" required>
                <label for="kelas1">Kelas </label>
            </div>
            <div class="txt-field">
                <input type="text" name="jurusan1" id="jurusan1" required>
                <label for="jurusan1">Jurusan </label>
            </div>
            <div class="txt-field">
                <input type="text" name="nik1" id="nik1" required>
                <label for="nik1">NIK </label>
            </div>
            <div class="selaintext">
                <label for="dosis1">Pilih Dosis </label>
                <select name="dosis1" id="dosis1" required>
                    <option>Pilih Dosis</option>
                    <option value="Dosis 1">Dosis 1</option>
                    <option value="Dosis 2">Dosis 2</option>
                </select>
            </div>
            <br>
            <div class="selaintext">
                <label for="sertifikat1">Upload Sertifikat Vaksin </label>
                <input type="file" name="sertifikat1" id="sertifikat1">
            </div>
            <br>
            <input type="submit" name="updateform" value="PERBARUI DATA"></input>
            <br>
            <input type="reset" value="RESET FORM"></input>
            <div class="signup_link">
                Kembali ke menu? <a href="index.php">MENU!</a>
                <br>
                LOGOUT? <a href="logout.php">LOGOUT!</a>
            </div>
        </form>
    </div>
</body>

</html>