<?php
include "fungsi-library.php";

$blogPosts2D = [
    [
        "judul" => "Judul Post 1",
        "konten" => "Ini adalah konten dari post pertama.",
        "tanggal" => "2024-06-09"
    ],
    [
        "judul" => "Judul Post 2",
        "konten" => "Konten untuk post kedua terdapat di sini.",
        "tanggal" => "2024-06-10"
    ],
    [
        "judul" => "Judul Post 3",
        "konten" => "Ini adalah isi dari post ketiga.",
        "tanggal" => "2024-06-11"
    ]
];

for ($counter = 0; $counter < count($blogPosts2D); $counter++) {
    tampilkanPost($blogPosts2D[$counter], $counter + 1);
}
?>
