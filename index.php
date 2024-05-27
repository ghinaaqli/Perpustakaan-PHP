<?php

    session_start();

    if(isset($_SESSION['email'])) {
        header("Location: login.php");
        exit;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Perpustakaan</title>
</head>
<body>
    <h1>Aplikasi Perpustakaan</h1>

    <a href="./buku.php">Lihat Daftar buku</a>
    <br>
    <a href="./staff.php">Lihat Daftar Staff</a>

    <!-- form, method: POST, action: logout_proccess.php --
    <form action="logout_proccess.php" method="POST">
        <button type="submit">LOGOUT</button>
    </form>
</body>
</html>