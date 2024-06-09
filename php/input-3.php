<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
    <h1>Login Form</h1>
    <?php 
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            include "fungsi-mysql.php";
            $koneksi = koneksiMysql();

            // Sanitasi input untuk mencegah SQL Injection
            $username = $_POST['username'];
            $email = $_POST['email'];

            $query = "SELECT * FROM wp_users WHERE user_login = '$username' AND user_email = '$email'";
            $hasil = mysqli_query($koneksi, $query);

            if (mysqli_num_rows($hasil) > 0) {
                echo "<p>Login berhasil!</p>";
            } else {
                echo "<p>Username atau email salah!</p>";
            }

            mysqli_close($koneksi);
            exit;
        }
    ?>

    <form action="" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="email">email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <button type="submit">Login</button>
    </form>
</body>
</html>
