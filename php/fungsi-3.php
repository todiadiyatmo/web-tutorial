<?php 

include "fungsi-mysql.php";

$koneksi = koneksiMysql();
$sql = "SELECT post_title, post_content FROM wp_posts LIMIT 5";
$hasil = $koneksi->query($sql);

if ($hasil->num_rows > 0) {
    while ($row = $hasil->fetch_assoc()) {
        echo "Judul: " . $row['post_title'] . "<br>";
        echo "Konten: " . $row['post_content'] . "<br><hr>";
    }
} else {
    echo "Tidak ada post yang ditemukan.";
}
$koneksi->close();