<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data yang dikirim melalui form
    $name = $_POST["name"];
    $nim = $_POST["nim"];
    $alamat = $_POST["alamat"];
    $question1 = $_POST["question1"];
    $question2 = $_POST["question2"];
    $question3 = $_POST["question3"];
    $question4 = $_POST["question4"];
    $question5 = $_POST["question5"];
    $question6 = $_POST["question6"];
    $question7 = $_POST["question7"];
    $question8 = $_POST["question8"];

    // Lakukan sesuatu dengan data yang diterima, misalnya simpan ke database
    // ...
    
    // Contoh tampilan setelah data berhasil disimpan
    echo "<h1>Data survey berhasil disimpan</h1>";
    echo "<p>Terima kasih, $name, telah mengisi survey.</p>";
} else {
    // Jika akses langsung ke file submit_survey.php tanpa melalui form, redirect ke halaman lain atau tampilkan pesan error
    echo "Error: Invalid request";
}
?>
