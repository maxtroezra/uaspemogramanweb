<?php
// Menghubungkan ke database
$servername = "localhost";
$username = "username_db";
$password = "password_db";
$dbname = "nama_database";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

// Mengambil data dari formulir survey
$name = $_POST['name'];
$nim = $_POST['nim'];
$alamat = $_POST['alamat'];
$question1 = $_POST['question1'];
$question2 = $_POST['question2'];
$question3 = $_POST['question3'];
$question4 = $_POST['question4'];
$question5 = $_POST['question5'];
$question6 = $_POST['question6'];
$question7 = $_POST['question7'];
$question8 = $_POST['question8'];

// Menyimpan data ke tabel dalam database
$sql = "INSERT INTO survey_results (name, nim, alamat, question1, question2, question3, question4, question5, question6, question7, question8)
        VALUES ('$name', '$nim', '$alamat', '$question1', '$question2', '$question3', '$question4', '$question5', '$question6', '$question7', '$question8')";

if ($conn->query($sql) === TRUE) {
    echo "Data survey berhasil disimpan";
} else {
    echo "Terjadi kesalahan: " . $conn->error;
}

$conn->close();
?>
