<?php
    if(!isset($_SESSION)) {
        session_start();
    }

    if(!isset($_SESSION['id'])) {
        die("Faça login para acessar está página. <a href='index.php'>Login</a>");
    }
?>