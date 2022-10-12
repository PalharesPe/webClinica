<?php

include_once('config.php');

if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];      
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $estado = $_POST['estado'];
    $cidade = $_POST['cidade'];
    $bairro = $_POST['bairro'];

    $sqlUpdate = "UPDATE usuario SET nome='$nome',cpf='$cpf',email='$email',telefone='$telefone',endereco='$endereco',estado='$estado',cidade='$cidade',bairro='$bairro'
    WHERE id='$id'";

    $result = $conexao->query($sqlUpdate);

}
header('Location: listap.php');

?>