<<?php

if(!empty($_GET['id_a']))
{
    include_once('config.php');

    $id_a = $_GET['id_a'];

    $sqlSelect = "SELECT * FROM agendamento WHERE id_a=$id_a";

    $result = $conexao->query($sqlSelect);
    
    if($result->num_rows > 0)
    {
            $sqlDelete = "DELETE FROM agendamento WHERE id_a=$id_a";
            $resultDelete = $conexao->query($sqlDelete);

        }        
    }

header('Location: agendamento.php');

?>
