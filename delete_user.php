<?php 
    // Menyisipkan file koneksi
    include './connection.php';

    // Mengambil nilai username dari url
    $username = $_GET['username'];

    // Membuat perintah query
    $query = "DELETE FROM users where username='$username'";

    // Menjalankan perintah query
    $sql = mysqli_query($conn, $query);
    echo 'Berhasil menghapus data. Klik <a href="list_user.php">di sini</a> untuk kembali';
?>