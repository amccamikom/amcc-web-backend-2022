<?php

// Menyisipkan file koneksi
include './connection.php';

// Mengambil nilai username dari url
$username = $_GET['username'];

// jika username kosong, maka akan dialihkan ke list useer
if (empty($username)) {
    header('location: list_user.php');
}

// Membuat perintah query
$query = "SELECT * FROM users WHERE username = '$username'";

// Menjalankan perintah query
$sql = mysqli_query($conn, $query);

// Mengambil data dari query
$data = mysqli_fetch_assoc($sql);

if (!$data) { // jika data tidak ditemukan
    die('Data tidak ditemukan');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
        }        
        input {
            padding: 2px 5px;
            width: 250px;
        }
        input[type=submit] {
            width: auto;
            float: right;
        }
    </style>
</head>
<body>
    <h1>Edit User <?= $data['username'] ?></h1>
    <form action="edit_user_action.php" method="post">
        <input type="hidden" name="username" value="<?= $data['username'] ?>">
        <table>
            <tr>
                <td>
                    <label for="name">Name</label>
                </td>
                <td>
                    <input type="text" name="name" id="name" value="<?= $data['name'] ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="email">Email</label>
                </td>
                <td>
                    <input type="email" name="email" id="email" value="<?= $data['email'] ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="password">Password</label>
                </td>
                <td>
                    <input type="password" name="password" id="password">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="Edit">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>