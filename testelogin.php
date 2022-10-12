<?php
session_start();
//print_r($_REQUEST);

if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['cpf']))
{
//acessa
    include_once('config.php');
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    // print_r('Email: ' . $email);
    // print_r('<br>');
    // print_r('cpf: ' . $cpf);
    $sql = "SELECT * FROM usuario WHERE email = '$email' and cpf = '$cpf'";
    
    $result = $conexao->query($sql);

    // print_r($result);
    // print_r($sql);
    if(mysqli_num_rows($result) <1)
    {
        unset($_SESSION['email']);
        unset($_SESSION['cpf']);
        header('Location: login.php');
    }
    else{
        $_SESSION['email'] = $email;
        $_SESSION['cpf'] = $cpf;
        header('Location: sistema.php');
    }
}
else
{
    header('Location: login.php');
}
?>