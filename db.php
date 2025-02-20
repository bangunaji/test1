<?php
$host = "localhost"; // Server database
$user = "root"; // Username default XAMPP
$pass = ""; // Password default kosong
$dbname = "support_db"; // Nama database

$conn = new mysqli($host, $user, $pass, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
