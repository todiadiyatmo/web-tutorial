<?php
// Integer
$umur = 25;
echo "Umur: " . $umur . "<br>";  // Menampilkan nilai integer

// Float
$tinggi = 1.75;
echo "Tinggi: " . $tinggi . " meter<br>";  // Menampilkan nilai float

// String
$nama = "Andi";
echo "Nama: " . $nama . "<br>";  // Menampilkan string



// Array
$hobi = array("membaca", "berenang", "mendaki");
echo "Hobi: " . implode(", ", $hobi) . "<br>";  // Menampilkan array sebagai string

// Object
class Mobil {
    public $warna = "merah";
    public $merk = "Toyota";
}
$mobilAndi = new Mobil();
echo "Mobil Andi: " . $mobilAndi->merk . ", " . $mobilAndi->warna . "<br>";  // Menampilkan properties dari objek

// Resource (Sumber daya, seperti database connection)
$koneksi = mysqli_connect("127.0.0.1", "root", "", "wordpress");
if (!$koneksi) {
    echo "Koneksi database gagal: " . mysqli_connect_error();
} else {
    echo "Koneksi database berhasil<br>";
}
// Pastikan untuk mengganti "localhost", "username", "password", dan "database" dengan nilai yang sesuai

// Null
$nilaiTidakTentu = NULL;
echo "Nilai variabel ini adalah: " . $nilaiTidakTentu;  // Menampilkan null
?>
