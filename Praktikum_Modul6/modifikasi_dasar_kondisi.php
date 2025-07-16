<?php
$nilai = 85;

echo "Nilai Anda: $nilai<br>";

if ($nilai > 90) {
    echo "Kategori: Sangat Baik";
} elseif ($nilai > 80) {
    echo "Kategori: Baik";
} elseif ($nilai > 70) {
    echo "Kategori: Cukup";
} else {
    echo "Kategori: Kurang";
}
?>
