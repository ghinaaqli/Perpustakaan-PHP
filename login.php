<?php

    include_once("./connect.php");


    session_start();

    // kalo user udah login
    // (punya SESSION["email"])
    if(isset($_SESSION['email'])) {

        // PINDAHIN KE HALAMAN index.php
        header("Location: index.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1> Login Admin </h1>

    <form method="POST" action = "./login_proccess.php">
        <div> 
        <label for="email"> Email:</label><br>
        <input type = "email" id="email" name="email"> 
</div>
<br>
<div>
        <label for = "password"> Password:</label><br>
        <input type = "password" id="password" name="password"> 
</div>
<br>

    <button type = "submit" name = "submit"> LOGIN </button> 
    </form>
</body>
</html>