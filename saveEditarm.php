<?php

include_once('config.php');

if(isset($_POST['update']))
{
    $id_m = $_POST['id_m'];
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $crm = $_POST['crm'];
    $especialidade = $_POST['especialidade'];
    $email = $_POST['email'];
    $sexo = $_POST['sexo'];
    $telefone = $_POST['telefone'];
    

    $sqlUpdate = "UPDATE medico SET nome='$nome',cpf='$cpf',crm='$crm',especialidade='$especialidade',email='$email',sexo='$sexo',telefone='$telefone'
    WHERE id_m='$id_m'";

    $result = $conexao->query($sqlUpdate);

}
header('Location: listam.php');

?>