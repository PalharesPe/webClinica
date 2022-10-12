<?php

include_once('config.php');

if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $crm = $_POST['crm'];
    $especialidade = $_POST['especialidade'];
    

    $sqlUpdate = "UPDATE medico SET crm='$crm',especialidade='$especialidade'
    WHERE id='$id'";

    $result = $conexao->query($sqlUpdate);

}
header('Location: listam.php');

?>