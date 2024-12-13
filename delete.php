<?php
// Pastikan ada parameter ID yang dikirimkan
if (isset($_GET['id']) && !empty($_GET['id'])) {
    // Informasi koneksi database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "uas_firman";

    // Buat koneksi
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Cek koneksi
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Ambil ID dari parameter GET
    $id = $_GET['id'];

    // Query untuk menghapus data berdasarkan ID
    $sql = "DELETE FROM rating WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil dihapus.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    echo "ID tidak valid.";
}
?>
