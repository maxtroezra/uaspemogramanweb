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
    <title>About Us</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body> 

    <?php include 'navbar.php'; ?>

    <div class="container content">
        <div class="container" id="kampus"> 
        </div>    

        <h3>Profile Singkat Universitas Sam Ratulangi</h3>
        <p>
            Universitas Sam Ratulangi sering disingkat dengan sebutan UNSRAT adalah salah satu perguruan tinggi negeri di Indonesia yang berlokasi di Kota Manado, Provinsi Sulawesi Utara. Universitas Sam Ratulangi dipimpin oleh seorang Rektor Universitas Sam Ratulangi yang sekarang adalah Prof. Dr. Ir. Octovian Berty Alexander Sompie, M.Eng.
        </p>

    </div>

</body>

<footer>
        <p>&copy; Copyright by Kelompok Survey UTS</p>
    </footer>
    
</html>
