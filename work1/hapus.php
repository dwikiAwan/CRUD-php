<?php
require 'functions.php';

$id = $_GET["id"];

// Cek apakah data berhasil dihapus
if (hapus($id) > 0) {
    echo "
    Data Berhasil DiHAPUS !!!<br>
    <a href='index.php'>Kembali ke index.php</a>
    ";
} else {
    echo "
    GAGAL ! Menghapus Data.
    <a href='index.php'>Kembali ke index.php</a>
    ";
}
?>
