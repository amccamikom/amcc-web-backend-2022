<?php

    // Mendeskripsikan alamat server sql / database
    $database_host = 'localhost';
    $database_user = 'root';
    $database_pass = '';
    $database_name = 'pelatihan_backend';

    // Membuat koneksi ke database
    $conn = mysqli_connect($database_host, $database_user, $database_pass, $database_name);

    // Check koneksi jika gagal
    if (!$conn) {
        // Menampilkan pesan error
        die('Gagal terhubung ke server. ' . mysqli_connect_error());
    }
?>