<?php 

// tanpa looping
echo "Judul Post 1";
echo "<br>Judul Post 2";
echo "<br>Judul Post 3";

// dengan looping
$blogPosts = ["Judul Post 1", "Judul Post 2", "Judul Post 3"];
echo "<pre>";
foreach ($blogPosts as $post) {
    echo $post . "<br>";
}
echo "</pre>";


// Looping data (2)
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
foreach ($blogPosts2D as $post) {
    echo "Judul: " . $post['judul'] . "<br>";
    echo "Konten: " . $post['konten'] . "<br>";
    echo "Tanggal: " . $post['tanggal'] . "<br>";
    echo "<hr>"; // Menambahkan garis pemisah antar post
}
echo "</pre>";

// Index dinamis

echo "<pre>";
for ($counter = 0; $counter < count($blogPosts2D); $counter++) {
    echo "Post ke-" . ($counter + 1) . "<br>"; 
    echo "Judul: " . $blogPosts2D[$counter]['judul'] . "<br>";
    echo "Konten: " . $blogPosts2D[$counter]['konten'] . "<br>";
    echo "Tanggal: " . $blogPosts2D[$counter]['tanggal'] . "<br>";
    echo "<hr>";
}
echo "</pre>";

?>
