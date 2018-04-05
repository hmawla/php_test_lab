<?php
    session_start();
    setcookie("loggedEmail", "", time() - 10, "/");
    setcookie("loggedName", "", time() - 10, "/");
    header('location:index.php');
?>