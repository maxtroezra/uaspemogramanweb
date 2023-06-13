<?php
// login.php

session_start();

// Periksa apakah pengguna sudah login atau belum
if (isset($_SESSION['username'])) {
    // Jika sudah login, alihkan ke halaman utama (dashboard.php)
    header("Location: index.php");
    exit();
}

// Periksa apakah pengguna mengirimkan formulir login
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Proses login
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Periksa kredensial login
    // Misalnya, Anda bisa menggunakan database untuk memeriksa kredensial pengguna

    // Jika kredensial benar, simpan username dalam session
    $_SESSION['username'] = $username;

    // Alihkan ke halaman utama (dashboard.php) setelah login berhasil
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login - Web Survey</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
    <main>
        <div class="container">
            <h2>Login</h2>
            <form action="login.php" method="POST">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
                <br>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <br>
                <input type="submit" value="Login">
            </form>
        </div>
    </main>
</body>
</html>
