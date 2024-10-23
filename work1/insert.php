<?php
require "functions.php";

// Koneksi ke DBMS
$conn = mysqli_connect("localhost", "root", "", "web_sekolah");

// Cek apakah tombol submit sudah ditekan
if (isset($_POST["submit"])) {

    // Memanggil fungsi tambah() dan cek apakah berhasil atau tidak
    if (tambah($_POST) > 0) {
    echo "
    Data Berhasil Ditambahkan<br>
    <a href='index.php'>Kembali ke index.php</a>
    ";
} else {
        echo "
        Gagal Menambahkan Data
        ";
        
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data</title>
</head>
<body>
    <h1>Insert Data Mahasiswa</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="nim">NIM: </label>
                <input type="text" name="nim" id="nim" required>
            </li>
            <li>
                <label for="nama">Nama: </label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <button type="submit" name="submit">Insert Data</button>
            </li>
        </ul>
    </form>
</body>
</html>
