<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar User</title>
</head>
<body>
    <h1>List User</h1>

    <a href="add_user.php">[ Add User ]</a>
    <a href="questions/">[ Questions ]</a>
    <br><br>

    <table border="1" cellpadding="5">
        <thead>
            <tr>
                <th width="50">No</th>
                <th width="150">Username</th>
                <th width="250">Name</th>
                <th width="250">Email</th>
                <th width="500">Password</th>
                <th width="100">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Menyisipkan file koneksi database
            include './connection.php';

            // Membuat query sql untuk mengambil data di tabel
            $query = 'SELECT * FROM users';

            // Menjalankan query
            $rows = mysqli_query($conn, $query);

            // Menuliskan setiap baris data ke dalam tabel menggunakan perulangan
            $no = 0;
            while ($row = mysqli_fetch_assoc($rows)){
                $no++;
                echo "
                <tr>
                    <td>$no</td>
                    <td>$row[username]</td>
                    <td>$row[name]</td>
                    <td>$row[email]</td>
                    <td>$row[password]</td>
                    <td>
                        <a href='edit_user.php?username=$row[username]'>Edit</a> |
                        <a href='delete_user.php?username=$row[username]' 
                            onclick='return confirm(`Apakah anda ingin menghapus user $row[username]?`)'>Delete</a>
                    </td>
                </tr>
                ";
            }

            if ($no == 0) {
                echo '<tr><td colspan="6" align="center">Data masih kosong</td></tr>';
            }
            ?>
        </tbody>
    </table>
</body>
</html>