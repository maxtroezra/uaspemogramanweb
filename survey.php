<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey</title>
    <link rel="stylesheet" href="css/survey.css">
</head>
<body>

    <nav class="nav">
        <div class="container">
            <h1 class="logo"> <a href="index.php"> <img src="picture/logo.png" width="50%" alt=""></a> </h1>
            <ul>
                <li><a href="index.php" class="current">Dashboard</a></li>
                <li><a href="profile.php">Profile</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="login.php">Log Out</a></li>
            </ul>
        </div>
    </nav>

    <div class="gambar">
        <br>
        <br>

        <h1>Website Survey Mahasiswa</h1>
        <h2>Website ini dibuat untuk mengetahui pengalaman mahasiswa selama belajar di Universitas Sam Ratulangi</h2>

        <form action="submit_survey.php" method="POST">
            <label for="name">Nama</label><br>
            <input type="text" id="name" name="name" required><br>

            <label for="nim">NIM</label><br>
            <input type="text" id="nim" name="nim" required><br>

            <label for="alamat">Alamat Email</label><br>
            <input type="text" id="alamat" name="alamat" required><br>

            <label for="question1">1. Apakah anda akan merekomendasikan Unsrat kepada orang lain?</label><br>
            <input type="text" id="question1" name="question1" required><br>

            <label for="question2">2. Apakah anda puas dengan metode pengajarannya?</label><br>
            <input type="text" id="question2" name="question2" required><br>

            <label for="question3">3. Apakah anda puas dengan fasilitas yang diberikan oleh kampus?</label><br>
            <input type="text" id="question3" name="question3" required><br>

            <label for="question4">4. Apakah anda mudah mendapatkan sumber daya yang diperlukan di perpustakaan pada perguruan tinggi?</label><br>
            <input type="text" id="question4" name="question4" required><br>

            <label for="question5">5. Bagaimana pendapat anda terkait kebersihan lingkungan kampus?</label><br>
            <input type="text" id="question5" name="question5" required><br>

            <label for="question6">6. Apakah menurut anda fakultas dan staf pendukung di perguruan tinggi sangat membantu anda?</label><br>
            <input type="text" id="question6" name="question6" required><br>

            <label for="question7">7. Menurut anda, apakah saudara atau teman anda akan diuntungkan dengan belajar di Unsrat?</label><br>
            <input type="text" id="question7" name="question7" required><br>

            <label for="question8">8. Bagaimana pengalaman anda secara keseluruhan selama berkuliah di Unsrat?</label><br>
            <input type="text" id="question8" name="question8" required><br>

            <button type="submit">Submit</button>
        </form>

    </div>

</body>

<footer>
        <p>&copy; Copyright by Kelompok Survey UTS</p>
    </footer>

</html>
