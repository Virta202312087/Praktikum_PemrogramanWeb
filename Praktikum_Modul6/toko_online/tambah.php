<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama  = $_POST['nama'];
    $harga = $_POST['harga'];
    $stok  = $_POST['stok'];

    $stmt = $conn->prepare("INSERT INTO produk (nama_produk, harga, stok) VALUES (?, ?, ?)");
    $stmt->bind_param("sii", $nama, $harga, $stok);
    $stmt->execute();
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Produk</title>
</head>
<body>
<h2>Tambah Produk Baru</h2>
<form method="post">
    <p>Nama Produk: <br><input type="text" name="nama" required></p>
    <p>Harga: <br><input type="number" name="harga" required></p>
    <p>Stok: <br><input type="number" name="stok" required></p>
    <button type="submit">Simpan</button>
</form>
<p><a href="index.php">Kembali ke Daftar</a></p>
</body>
</html>
