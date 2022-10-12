<?php
    session_start();
    unset($_SESSION['email']);
    unset($_SESSION['cpf']);
    header("location: home.php");
?>