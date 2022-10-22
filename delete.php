<?php

    if(!empty($_GET['id_u']))
    {
        include_once('config.php');

        $id_u = $_GET['id_u'];
    
        $sqlSelect = "SELECT * FROM usuario WHERE id_u=$id_u";
    
        $result = $conexao->query($sqlSelect);
        
        if($result->num_rows > 0)
        {
                $sqlDelete = "DELETE FROM usuario WHERE id_u=$id_u";
                $resultDelete = $conexao->query($sqlDelete);
    
            }
            
        }
    
    header('Location: listap.php');

?>
