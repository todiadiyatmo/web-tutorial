<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
    <?php 
        if(isset($_POST['username']) && isset($_POST['password'])){
            if ($_POST['username'] == 'admin' && $_POST['password'] == '123456') {
                echo "Login berhasil!";
            } else {
                echo "Username atau password salah!";
            }
            exit;
        }
    ?>

    <h1>Login Form</h1>
    <form action="input-2.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <button type="submit">Login</button>
    </form>
</body>
</html>
