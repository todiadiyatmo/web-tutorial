<?php
// Contoh Login

$username = "admin";
$password = "123";

// dalam dunia nyata hal ini dilakukan di dalam database
if ($username == "admin" && $password == "123") {
    echo "Selamat datang Admin!";
} else {
    echo "Username atau Password salah!";
}

// Contoh validasi 

// Mengatur zona waktu
date_default_timezone_set('Asia/Jakarta');

// Variabel untuk tahun kelahiran
$tahun_lahir = 2024;

// Mendapatkan tahun saat ini
$tahun_sekarang = date('Y');

// Menghitung umur
$umur = $tahun_sekarang - $tahun_lahir;

// Memeriksa umur dan menampilkan pesan
if ($umur < 5) {
    echo "Tidak boleh register karena umur Anda adalah " . $umur . " tahun.";
} else {
    echo "Anda boleh register.";
}