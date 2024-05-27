<?php
    // mulai interaksi session
    session_start();

    // hilangkan session
    session_destroy();
    session_unset();

    // pindahkan ke halaman login
    header("Location: login.php");

?>