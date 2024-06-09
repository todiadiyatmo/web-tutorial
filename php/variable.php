<?php 

echo "Sekarang hari Jumat 10 Mei 2024";

$date = "Sabtu 11 Mei 2024";

echo "<br>Sekarang hari ".$date;

// Set timezone ke Jakarta (Indonesia)
date_default_timezone_set('Asia/Jakarta');

// Set locale ke Bahasa Indonesia
setlocale(LC_TIME, 'id_ID.utf8', 'Indonesian_Indonesia.1252');

// Buat objek DateTime  
$date = new DateTime();

// Format sesuai dengan kebutuhan
// https://www.w3schools.com/php/func_date_date_format.asp
echo "<br>Sekarang : " . strftime('%A, %d %B %Y', $date->getTimestamp());
