<?php

include_once('config.php');

if(isset($_POST['update']))
{
    $id_u = $_POST['id_u'];
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $sexo = $_POST['sexo'];
    $email = $_POST['email']; 
    $senha = $_POST['senha'];     
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $estado = $_POST['estado'];
    $cidade = $_POST['cidade'];
    $bairro = $_POST['bairro'];

    $sqlUpdate = "UPDATE usuario SET nome='$nome',cpf='$cpf',sexo='$sexo',email='$email',senha='$senha',telefone='$telefone',endereco='$endereco',estado='$estado',cidade='$cidade',bairro='$bairro'
    WHERE id_u='$id_u'";

    $result = $conexao->query($sqlUpdate);

}
header('Location: listap.php');

?>