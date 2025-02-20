<?php
require 'db.php';

$sql = "SELECT id, phone, password FROM users";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Sandi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Daftar Sandi Tersimpan</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Password (Terenkripsi)</th>
                    <th>phone</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>{$row['id']}</td>
                                <td>{$row['password']}</td>
                                 <td>{$row['phone']}</td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='2' class='text-center'>Belum ada sandi tersimpan</td></tr>";
                }
                ?>
            </tbody>
        </table>
        <a href="index.html" class="btn btn-primary w-100">Kembali</a>
    </div>
</body>
</html>

<?php
$conn->close();
?>
