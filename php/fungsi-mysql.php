<?php 

function koneksiMysql() {

    $koneksi = new mysqli('127.0.0.1', 'root', '', 'wordpress');
    if ($koneksi->connect_error) {
        die("Koneksi gagal: " . $koneksi->connect_error);
    }

    return $koneksi;
}

