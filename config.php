<?php
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = 'toor';
$dbName = 'projeto';

$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

/*if ($conexao -> connect_errno)
{
    echo "erro";
}
else{
    echo "Conexão Efetuada Com Sucesso";
}*/
?>