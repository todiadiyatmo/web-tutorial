<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Percobaan belajar" />
    <title>Tutorial HMTL</title>
</head>

<body>
    <h1>
        Form Pendaftaran Kerja
    </h1>
    <?php
    // Cek apakah form telah dikirim dengan metode POST
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Output semua data yang dikirimkan
        print_r($_POST);
        die();
    }
    ?>


    <form action="lamar.php" method="post" enctype="multipart/form-data">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label>Jenis Kelamin:</label>
        <input type="radio" id="pria" name="jenis_kelamin" value="pria" required>
        <label for="pria">Pria</label>
        <input type="radio" id="wanita" name="jenis_kelamin" value="wanita" required>
        <label for="wanita">Wanita</label><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <label for="confirm_password">Konfirmasi Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" required><br><br>

        <label for="alasan">Alasan Melamar:</label>
        <textarea id="alasan" name="alasan" rows="4" required></textarea><br><br>

        <label for="cv">Upload CV:</label>
        <input type="file" id="cv" name="cv" accept=".pdf,.doc,.docx" required><br><br>

        <input type="checkbox" id="confirm" name="confirm" value="confirmed" required>
        <label for="confirm">Data yang saya isi sudah benar</label><br><br>

        <input type="submit" value="Daftar">
    </form>

</body>

</html>