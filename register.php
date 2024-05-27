<?php

    session_start();

    if(isset($_SESSION['email'])) {
        header("Location: index.php");
        exit;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2> Register </h2>

    <!-- FORM -->
    <!-- form method POST -->
    <!-- ACTION: register_proccess.php  -->
    <!-- action akan dijalankan setelah tombol sibmit diklik -->

    <form method="POST" action="./register_proccess.php">
        <label for="email">EMAIL : </label><br>
        <input type="type" id="email" name="email"><br>

        <label for="password">Password : </label><br>
        <input type="password" id="password" name="password"><br>

        <br>

        <input type="submit" value="Register">
    </form>
</body>
</html>