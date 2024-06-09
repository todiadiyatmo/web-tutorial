<?php
function hitungUmur($tahunLahir) {
    $tahunSekarang = date('Y');
    return $tahunSekarang - $tahunLahir;
}

// Contoh menggunakan fungsi
$umur = hitungUmur(1990);
echo "Umur adalah: " . $umur . " tahun"; // Keluaran: Umur adalah: 34 tahun (per 2024)
?>
