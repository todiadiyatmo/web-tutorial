<?php 

// Contoh 2 Umur

echo "<br>Umur adik 4 tahun";

$umur = 5;
echo "<br>Umur adik ".$umur." tahun";

// Tahun kelahiran adik
$tahun_lahir = 2017;

// Mendapatkan tahun saat ini
$tahun_sekarang = date("Y");

// Menghitung umur
$umur_sekarang = $tahun_sekarang - $tahun_lahir;

// Menampilkan umur
echo "<br>Adik lahir tahun " . $tahun_lahir;
echo "<br>Umur adik tahun ini adalah " . $umur_sekarang . " tahun";