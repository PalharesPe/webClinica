<?php
session_start();
include_once('config.php');
//print_r($_SESSION);
if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['cpf']) == true))
{
    unset($_SESSION['email']);
    unset($_SESSION['cpf']);
    header('Location: login.php');

}
$logado = $_SESSION['email'];

$sql = "SELECT * FROM usuario ORDER BY id DESC";

$result = $conexao->query($sql);

if(isset($_SESSION['logado'])){
    session_destroy();
    header("Location:home.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebClinica | PH</title>
</head>
<style>

body {
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
            background-color: #1891a3;
        }
        
        .table-bg{
            
            background: rgba(0,0,0,0.3);
            border-radius:  15px 15px 0 0;
        }
        .table{
          
            padding: 15px;
            color: white;
            text-align: center;
            
        }
    
        .box{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    background-color: rgba(0, 0, 0, 0.6);
    padding: 30px;
    border-radius: 10px;
}
.box a{
    text-decoration: none;
    color: white;
    border: 3px solid dodgerblue;
    border-radius: 10px;
    padding: 10px;
}
.box a:hover {
    background-color: dodgerblue;
}
.bnt-danger{
    text-decoration: none;
    color: white;
    padding: 3px;
    border-radius: 5px;
    background-color: red;
    position: absolute;
    top: 3%;
    left: 97.7%;
    

}
.bnt-danger:hover{
background-color: #c72e2e;
}
.top{
    
    margin-top: -8px;
    width: 100%;
    height: 100px;
    background-color: #c7c7c7;
}
h1{
color: #1891a3;
margin-top: 20px;
}


.menu {
    position: absolute;
    margin-top: -25px;
    background-color: #1891a3;
    width: 1024px;
    height: 50px;
    left: 49.4%;
    transform: translate(-50%,14%);
    }
    .menu ul li {
        margin-top: -100px;
        padding: 15px;
        display: inline-block;
        
    }
    ul li a {
       
      
        font-family: Arial, Helvetica, sans-serif;
        font-size: 20px;
        color: white;
        text-decoration: none;
    }
    ul li a:hover{
        color: #144a52;
    }
h5{
    float: left;
    margin-top: 10px;
}
h5{
    position: absolute;
    margin-top: -18px;
    color: white;
}
h3{
    color: white;
    margin-top: 100px;
}
</style>
<body>
<div class="top">
    <br>
<h1>Sistema WebClinca</h1>
</div>
<!-- <div class="box">
        
        <a href="listap.php">Lista de Pacientes</a>
        <a href="listam.php">Lista de Médicos</a>
    </div> -->
<div class="flex">
<a href="sair.php" class="bnt-danger me-5">Sair</a>
</div>
<br>

<?php
echo "<h5> Bem Vindo <u>$logado</u></h5>";
?>

<div class="menu">
    <ul>
        <li><a href="sistema.php">Home</a></li>
        <li><a href="cadmedico.php">Cadastrar Médico</a></li>
        <li><a href="formulario.php">Cadastrar Usuario</a></li>
        <li><a href="listap.php">Listar Usuarios</a></li>
        <li><a href="listam.php">Listar Médicos</a></li>
        <li><a href="agendamento.php">Agendamento</a></li>
    </ul>

</div>

<h3>.'. . .' Banco de Dados '. . .'.</h3>
</body>
</html>