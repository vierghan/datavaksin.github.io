<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KONFIRMASI USERNAME</title>
    <link rel="stylesheet" href="utama.css">
</head>

<body>
    <div class="center">
        <h1>KONFIRMASI PENGEDITAN DENGAN MEMASUKKAN USERNAME</h1>
        <form action="out.php" method="POST">
            <div class="txt-field">
                <input type="text" name="username" id="username" required>
                <span></span>
                <label for="username">Username </label>
            </div>
            <input type="submit" name="lanjut" id="lanjut" value="LANJUT"></input>
            <br>
            <input type="reset" value="BATAL"></input>
            <div class="signup_link">
                Kembali ke menu? <a href="index.php">HOME!</a>
                <br>
                LOGOUT? <a href="logout.php">LOGOUT!</a>
            </div>
        </form>
    </div>
</body>

</html>