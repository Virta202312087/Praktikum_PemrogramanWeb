<?php
$nilai_ujian = 82;
if ($nilai_ujian >= 85) {
    echo "Sangat Baik (A)<br>";
} elseif ($nilai_ujian >= 75) {
    echo "Baik (B)<br>";
} else {
    echo "Cukup (C)<br>";
}

// Pemeriksaan angka positif, negatif, atau nol
$angka = -5;

if ($angka > 0) {
    echo "Angka $angka adalah positif.";
} elseif ($angka < 0) {
    echo "Angka $angka adalah negatif.";
} else {
    echo "Angka $angka adalah nol.";
}
?>
