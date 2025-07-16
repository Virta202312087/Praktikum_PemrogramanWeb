<?php
$umur = 18;
$sudah_punya_sim = true; // Diubah dari false ke true agar memenuhi syarat

if ($umur >= 17 && $sudah_punya_sim == true) {
    echo "Anda boleh mengemudi.";
} else {
    echo "Anda tidak boleh mengemudi.";
}
?>
