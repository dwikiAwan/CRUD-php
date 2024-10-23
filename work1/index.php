<?php
    require 'functions.php';
    // Query untuk mengambil 1 data terbaru dari seluruh mahasiswa
    $mahasiswa = query("SELECT * FROM mahasiswa ORDER BY id DESC LIMIT 10");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <a href="insert.php">Tambah data mahasiswa</a>
    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>NIM</th>
            <th>Nama</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach($mahasiswa as $row) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="update.php?id=<?= $row['id']; ?>">Update</a> |
                <a href="hapus.php?id=<?= $row['id']; ?>">Delete</a>
            </td>
            <td><?= $row['nim']; ?></td>
            <td><?= $row['nama']; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>
