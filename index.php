<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Website Survey</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <?php include 'navbar.php'; ?>

    <div class="container content">
        <div class="container" id="kampus">
        </div>

        <h3>Selamat datang di website Survey Mahasiswa!!</h3>
        <p>Website ini dibuat untuk melihat pengalaman mahasiswa yang berkuliah di perguruan tinggi UNSRAT</p>

        <div class="button-container">
            <a href="survey.php" class="button">
                <span style='font-size:30px;'>&#10004;</span><br>
                Form Pengisian Survey Mahasiswa
            </a>
        </div>
    </div>

    <footer>
        <p>&copy; Copyright by Kelompok Survey UTS</p>
    </footer>
</body>
</html>
