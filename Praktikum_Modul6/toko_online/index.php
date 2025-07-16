<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Produk - Toko Online</title>
    <style>
        body { font-family: Arial; margin: 40px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: center; }
        th { background-color: #f2f2f2; }
        a.button { padding: 8px 12px; background: green; color: white; text-decoration: none; border-radius: 4px; }
        .btn-danger { background: red; }
    </style>
</head>
<body>

<h2>Daftar Produk</h2>
<a class="button" href="tambah.php">+ Tambah Produk Baru</a>

<table>
    <tr>
        <th>No</th>
        <th>Nama Produk</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Aksi</th>
    </tr>
    <?php
    $no = 1;
    $result = $conn->query("SELECT * FROM produk");
    while ($row = $result->fetch_assoc()) :
    ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= htmlspecialchars($row['nama_produk']) ?></td>
        <td>Rp<?= number_format($row['harga']) ?></td>
        <td><?= $row['stok'] ?></td>
        <td>
            <a class="button" href="edit.php?id=<?= $row['id_produk'] ?>">Edit</a>
            <a class="button btn-danger" href="hapus.php?id=<?= $row['id_produk'] ?>" onclick="return confirm('Yakin hapus produk ini?')">Hapus</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>

</body>
</html>
