<?php
include 'koneksi.php';
$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama  = $_POST['nama'];
    $harga = $_POST['harga'];
    $stok  = $_POST['stok'];

    $stmt = $conn->prepare("UPDATE produk SET nama_produk=?, harga=?, stok=? WHERE id_produk=?");
    $stmt->bind_param("siii", $nama, $harga, $stok, $id);
    $stmt->execute();
    header("Location: index.php");
}

$result = $conn->query("SELECT * FROM produk WHERE id_produk=$id");
$data = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Produk</title>
</head>
<body>
<h2>Edit Produk</h2>
<form method="post">
    <p>Nama Produk: <br><input type="text" name="nama" value="<?= $data['nama_produk'] ?>" required></p>
    <p>Harga: <br><input type="number" name="harga" value="<?= $data['harga'] ?>" required></p>
    <p>Stok: <br><input type="number" name="stok" value="<?= $data['stok'] ?>" required></p>
    <button type="submit">Update</button>
</form>
<p><a href="index.php">Kembali ke Daftar</a></p>
</body>
</html>
