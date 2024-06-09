<?php 
// Operator aritmatika
$a = 10;
$b = 5;

// Penjumlahan
$hasilTambah = $a + $b;
echo "Hasil penjumlahan: " . $hasilTambah . "<br>"; // Output: 15

// Pengurangan
$hasilKurang = $a - $b;
echo "Hasil pengurangan: " . $hasilKurang . "<br>"; // Output: 5

// Operator perbandingan
$x = 10;
$y = "10";

// Sama dengan
if ($x == $y) {
    echo "$x sama dengan $y<br>"; // Output: 10 sama dengan 10
} else {
    echo "$x tidak sama dengan $y<br>";
}

// Tidak sama dengan
if ($x != 20) {
    echo "$x tidak sama dengan 20<br>"; // Output: 10 tidak sama dengan 20
} else {
    echo "$x sama dengan 20<br>";
}