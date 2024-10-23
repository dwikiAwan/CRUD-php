<?php
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "web_sekolah");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    global $conn;

    // Ambil data dari form dan lakukan sanitasi
    $nim = mysqli_real_escape_string($conn, htmlspecialchars($data["nim"]));
    $nama = mysqli_real_escape_string($conn, htmlspecialchars($data["nama"]));

    // Query INSERT data
    $query = "INSERT INTO mahasiswa (nim, nama) 
              VALUES ('$nim', '$nama')";
              
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id) {
    global $conn;
    
    // Query DELETE berdasarkan ID
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
    
    return mysqli_affected_rows($conn);
}


function ubah($data) {
    global $conn;

    // Ambil data dari form dan lakukan sanitasi
    $id = ($data["id"]);
    $nim = mysqli_real_escape_string($conn, htmlspecialchars($data["nim"]));
    $nama = mysqli_real_escape_string($conn, htmlspecialchars($data["nama"]));

    // Query UPDATE data
    $query = "UPDATE mahasiswa SET 
                nim = '$nim',
                nama = '$nama'
              WHERE id = $id";
              
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


?>

