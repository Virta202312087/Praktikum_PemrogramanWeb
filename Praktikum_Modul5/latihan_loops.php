<?php
// Perulangan for
for ($i = 0; $i < 5; $i++) {
    echo "Perulangan ke-" . ($i + 1) . "<br>";
}

// Perulangan while
$angka = 5;
while ($angka > 0) {
    echo "Hitung mundur: $angka <br>";
    $angka--;
}

// Perulangan foreach untuk array
$buah = ["Apel", "Jeruk", "Mangga", "Pisang"];

echo "Daftar buah:<br>";
foreach ($buah as $item) {
    echo "- $item<br>";
}
?>
