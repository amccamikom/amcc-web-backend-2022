<?php

    // Mengambil data yang dikirim
    $username = $_POST['username'] ?? '';
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    $error = [];
    // Check input data
    if (empty($username)) {
        $error[] = "Username tidak boleh kosong";
    }

    if (empty($name)) {
        $error[] = "Name tidak boleh kosong";
    }

    if (empty($email)) {
        $error[] = 'Email tidak boleh kosong';
    }

    if (empty($password)) {
        $error[] = 'Password tidak boleh kosong';
    }

    // Menampilkan pesan error
    if (count($error) > 0) {
        echo 'Error<ul>';
        foreach ($error as $message) {
            echo "<li>$message</li>";
        }
        echo '</ul>';
        echo '<a href="add_user.php">Kembali ke halaman input</a>';
        die();
    }

    // Menyisipkan koneksi
    include './connection.php';

    // Meng-enkripsi password
    // $password = password_hash($password, PASSWORD_DEFAULT);


    // Membuat query insert data
    $query = "INSERT INTO users (username, name, email, password, created_at, updated_at) 
                VALUES ('$username', '$name', '$email', '$password', now(), now())";

    // Menjalankan query
    $sql = mysqli_query($conn, $query);

    // jika query gagal dijalankan
    if (!$sql) {
        die('Failed insert data. ' . mysqli_error($conn));
    }

    echo '
        Berhasil menambahkan data. klik <a href="list_user.php">di sini</a> untuk melihat daftar user
    ';
?>