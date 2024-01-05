<?php
// koneksi ke database
$connection = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data dari tabel mahasiswa / query data mahasiswa
function query($query) {
    global $connection;
    $result = mysqli_query($connection, $query);
    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
};


?>