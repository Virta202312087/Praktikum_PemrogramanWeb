<!DOCTYPE html>
<html>
<head>
  <title>Data Karyawan</title>
  <style>
    table {
      border-collapse: collapse;
      width: 80%;
    }
    th, td {
      padding: 8px 12px;
      border: 1px solid #ccc;
      text-align: left;
    }
    th {
      background-color: #f2f2f2;
    }
    a {
      text-decoration: none;
    }
  </style>
</head>
<body>
  <h2>Daftar Karyawan Perusahaan</h2>
  <a href="form_tambah.html">+ Tambah Karyawan Baru</a>
  <br><br>

  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Nama Lengkap</th>
        <th>Jabatan</th>
        <th>Email</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php
      include 'koneksi.php'; // menyambungkan koneksi

      $sql = "SELECT id, nama, jabatan, email FROM karyawan";
      $result = $conn->query($sql);

      if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          echo "<tr>";
          echo "<td>" . $row['id'] . "</td>";
          echo "<td>" . htmlspecialchars($row['nama']) . "</td>";
          echo "<td>" . htmlspecialchars($row['jabatan']) . "</td>";
          echo "<td>" . htmlspecialchars($row['email']) . "</td>";
          echo "<td>
                  <a href='form_edit.php?id=" . $row['id'] . "'>Edit</a> | 
                  <a href='hapus.php?id=" . $row['id'] . "' onclick='return confirm(\"Apakah Anda yakin 
                  ingin menghapus data ini?\")'>Hapus</a>
                </td>";
          echo "</tr>";
        }
      } else {
        echo "<tr><td colspan='5'>Tidak ada data</td></tr>";
      }

      $conn->close();
      ?>
    </tbody>
  </table>
</body>
</html>
