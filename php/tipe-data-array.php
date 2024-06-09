<?php
$blogPosts = ["Judul Post 1", "Judul Post 2", "Judul Post 3"];
echo "<pre>";
print_r($blogPosts);
echo "</pre>";

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

echo "<pre>";
print_r($blogPosts2D);
echo "</pre>";


// Mengakses elemen pertama dari array
echo $blogPosts[0]; // Output: Judul Post 1

// Mengakses elemen kedua dari array
echo $blogPosts[1]; // Output: Judul Post 2

// Mengakses elemen ketiga dari array
echo $blogPosts[2]; // Output: Judul Post 3

// Mengakses judul dari post pertama
echo $blogPosts2D[0]['judul']; // Output: Judul Post 1

// Mengakses konten dari post kedua
echo $blogPosts2D[1]['konten']; // Output: Konten untuk post kedua terdapat di sini.

// Mengakses tanggal dari post ketiga
echo $blogPosts2D[2]['tanggal']; // Output: 2024-06-11
