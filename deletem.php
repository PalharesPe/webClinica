<<?php

if(!empty($_GET['id']))
{
    include_once('config.php');

    $id_m = $_GET['id_m'];

    $sqlSelect = "SELECT * FROM medico WHERE id_m=$id_m";

    $result = $conexao->query($sqlSelect);
    
    if($result->num_rows > 0)
    {
            $sqlDelete = "DELETE FROM medico WHERE id_m=$id_m";
            $resultDelete = $conexao->query($sqlDelete);

        }
        
    }

header('Location: listam.php');

?>
