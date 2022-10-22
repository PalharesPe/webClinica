<?php
include_once('config.php');
$sql = "SELECT * FROM medico";

$result = $conexao->query($sql);

?>

<?php

if(!empty($_GET['id_a']))
{
  
    include_once('config.php');

    $id_a = $_GET['id_a'];

    $sqlSelect = "SELECT * FROM agendamento WHERE id_a=$id_a";

    $result = $conexao->query($sqlSelect);
    
    if($result->num_rows > 0)
    {

        while($user_data = mysqli_fetch_assoc($result))
        {
            
            $data = $user_data['data']; 
            

        }
        
    }
    else
    {
        header('Location: sistema.php');
    }



   


}
?> 






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRO DE USUARIO | PH</title>
    <style>
body {
    font-family: Arial, Helvetica, sans-serif;
    background-color: #1891a3;
}
.box{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: rgba(0, 0, 0, 0.6);
    padding: 15px;
    border-radius: 2px;
    width: 20%;
}
fieldset{
    border: 3px solid rgb(18, 163, 55);
}
legend {
    border: 1px solid rgb(18, 163, 55);
    padding: 10px;
    text-align: center;
    background-color: rgb(18, 129, 46);
    border-radius: 8px;
    color: white;

}
/*
.inputbox{
    position: relative;
}
.inputUser {
    background: none;
    border: none;
    border-bottom: 1px solid white;
    outline: none;
    color: white;
    font-size: 15px;
    width: 100%;
    letter-spacing: 2px;
}
*/
p{
    color: white;
}
label{
    color: white;
}
#update {
    background-image: linear-gradient(to right, rgb(187, 187, 187),rgb(122, 122, 122));
    width: 100%;
    border: none;
    padding: 10px;    
    font-size: 20px;
    cursor: pointer;
    border-radius: 20px;
}
#update:hover{
    background-image: linear-gradient(to right, rgb(122, 122, 122),rgb(187, 187, 187));
}
.top{
    
    margin: -21px;
    width: auto;
    height: 100px;
    background-color: #c7c7c7;
}
.voltar{
      
      color: white;
      font-family: 'Times New Roman', Times, serif;
      text-decoration: none;
    }
h1{
text-align: center;
color: #1891a3;

margin-top: 20px;
}
    </style>
</head>
<body>
<div class="top">
    <br>
<h1>Sistema WebClinca</h1>
</div>
    <a class="voltar" href="sistema.php">Voltar</a>
    <div class="box">
<form action="saveEditara.php" method="POST" >
    <legend>Editar Cadastro</legend>
    <br>
    <div class="inputbox">
    <label for="nome" class="labelInput">Nome Completo</label>
        <input type="text" name="nome" id="nome" value="<?php echo $nome  ?>" class="inputUser" required >
    
    </div>
    <div class="inputbox">
    <label for="nome" class="labelInput">Nome Completo</label>
        <input type="text" name="nome" id="nome" value="<?php echo $nome  ?>" class="inputUser" required >
    
    </div>
    <br>
    
    
    <br> 
    <input type="hidden" name="id_a" value="<?php echo $id_a  ?>">
    <br><br>
    <input type="submit" name="update" id_a="update" >
    
    


</form>

 </div>

</body>
</html>