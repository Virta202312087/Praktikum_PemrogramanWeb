<?php
$ukuran_baju = "M"; // Ubah nilai ini ke "S", "L", atau "XL" untuk mencoba

switch ($ukuran_baju) {
    case "S":
        echo "Ukuran Small - cocok untuk badan kecil.";
        break;
    case "M":
        echo "Ukuran Medium - ukuran sedang yang pas.";
        break;
    case "L":
        echo "Ukuran Large - cocok untuk badan besar.";
        break;
    case "XL":
        echo "Ukuran Extra Large - untuk ukuran ekstra.";
        break;
    default:
        echo "Ukuran tidak dikenali.";
}
?>
