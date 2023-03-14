<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
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
    <h1>Add User</h1>
    <form action="add_user_action.php" method="post">
        <table>
            <tr>
                <td>
                    <label for="username">Username</label>
                </td>
                <td>
                    <input type="text" name="username" id="username">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="name">Name</label>
                </td>
                <td>
                    <input type="text" name="name" id="name">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="email">Email</label>
                </td>
                <td>
                    <input type="email" name="email" id="email">
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
                    <input type="submit" value="Tambah">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>