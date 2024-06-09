<?php 

function tampilkanPost($post, $nomor) {
    echo "Post ke-" . $nomor . "<br>";
    echo "Judul: " . $post['judul'] . "<br>";
    echo "Konten: " . $post['konten'] . "<br>";
    echo "Tanggal: " . $post['tanggal'] . "<br>";
    echo "<hr>";
}