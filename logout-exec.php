<?php
    session_start();
    setcookie("shopLoggedEmail", "", time() - 10, "/");
    setcookie("shopLoggedName", "", time() - 10, "/");
    header('location:index.php');
?>