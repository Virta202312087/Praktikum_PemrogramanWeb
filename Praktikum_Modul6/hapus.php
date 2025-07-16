<?php
include 'koneksi.php';

// Ambil ID dari parameter URL (GET)
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = intval($_GET['id']); // konversi ke integer agar aman

    // Jalankan query DELETE
    $sql = "DELETE FROM karyawan WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        // Jika berhasil, kembali ke halaman utama
        header("Location: index.php");
        exit();
    } else {
        echo "Error saat menghapus data: " . $conn->error;
    }

} else {
    echo "ID tidak valid atau tidak tersedia.";
}
$conn->close();
?>
