<?php
require 'db.php'; // Panggil file koneksi database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = trim($_POST["password"]); // Ambil input & hapus spasi

    if (!empty($password)) {
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT); // Enkripsi sandi

        $stmt = $conn->prepare("INSERT INTO users (password) VALUES (?)");
        $stmt->bind_param("s", $password);

        if ($stmt->execute()) {
            echo "<script>alert('Success!'); window.location.href='index.html';</script>";
        } else {
            echo "<script>alert('Gagal menyimpan sandi!'); window.location.href='index.html';</script>";
        }

        $stmt->close();
    } else {
        echo "<script>alert('Sandi tidak boleh kosong!'); window.location.href='index.html';</script>";
    }
}
$conn->close();
?>
