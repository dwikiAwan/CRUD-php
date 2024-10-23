<?php
require "functions.php";

// Ambil data dari URL
$id = $_GET["id"];

// Query data mahasiswa berdasarkan ID
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

// Cek apakah tombol submit sudah ditekan
if (isset($_POST["submit"])) {

    // Memanggil fungsi ubah() dan cek apakah berhasil atau tidak
    if (ubah($_POST) > 0) {
        echo "
        Data Berhasil Diubah<br>
        <a href='index.php'>Kembali ke index.php</a>
        ";
    } else {
        echo "
        Gagal Mengupdate Data karena Data sama seperti sebelumnya
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
</head>
<body>
    <h1>Update Data Mahasiswa</h1>

    <form action="" method="post">
        <!-- Hidden input untuk mengirim ID -->
        <input type="hidden" name="id" value="<?= $mhs["id"]; ?>"> 
        <ul>
            <li>
                <label for="nim">NIM: </label>
                <input type="text" name="nim" id="nim" required 
                value="<?= $mhs["nim"]; ?>">
            </li>
            <li>
                <label for="nama">Nama: </label>
                <input type="text" name="nama" id="nama" required
                value="<?= $mhs["nama"]; ?>">
            </li>
            <li>
                <button type="submit" name="submit">Update Data</button>
            </li>
        </ul>
    </form>
</body>
</html>
