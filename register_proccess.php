<?php

    session_start();

    include_once("./connect.php");

    if (isset($_POST['email']) && isset($_POST['password'])) {

        $email = $_POST['email'];

        $password = password_hash ($_POST['password'], PASSWORD_DEFAULT);

        $sql = "SELECT * FROM user_data WHERE email='$email'";
        $result = mysqli_query($db, $sql);

        if (mysqli_num_rows($result) > 0) { 
            echo "Email sudah terdaftar.";
        } else {
            $sql = "INSERT INTO user_data (email, password) VALUES ('$email', '$password')";

            if (mysqli_query($db, $sql)) {
                echo "Registrasi  berhasil. Silakan <a href='./login.php'>LOGIN</a>.";
            } else {
                echo "Registrasi Gagal";
            }
        }
    }