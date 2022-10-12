<?php

if(!empty($_GET['id']))
{
  
    include_once('config.php');

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM medico WHERE id=$id";

    $result = $conexao->query($sqlSelect);
    
    if($result->num_rows > 0)
    {

        while($user_data = mysqli_fetch_assoc($result))
        {
            $crm = $user_data['crm'];
            $especialidade = $user_data['especialidade'];
            

        }
        
    }
    else
    {
        header('Location: listam.php');
    }



   


}

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebClinica | PH</title>
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
    background-color: rgba(0, 0, 0, 0.3);
    padding: 15px;
    border-radius: 2px;
    width: 20%;
}
fieldset{
    border: 3px solid #1891a3;
}
legend {
    border: 1px solid #1891a3;
    padding: 10px;
    text-align: center;
    background-color: #1891a3;
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
#submit {
    color: white;
    background-color: #198191;
    width: 100%;
    border: none;
    padding: 10px;    
    font-size: 20px;
    cursor: pointer;
    border-radius: 20px;
}
#submit:hover{
    background-color: #1aa5ba;
}
.voltar{
      
      color: white;
      font-family: 'Times New Roman', Times, serif;
      text-decoration: none;
    }
.top{
    
    margin: -21px;
    width: auto;
    height: 100px;
    background-color: #c7c7c7;
}
h1{
color: #1891a3;
text-align: center;
margin-top: 20px;
}
.menu {
    position: absolute;
    margin-top: -4px;
    background-color: #1891a3;
    width: 1024px;
    height: 50px;
    left: 50%;
    transform: translate(-50%,-22%);
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
    </style>
</head>
<body>
<div class="top">
    <br>
<h1>Sistema WebClinca</h1>
</div>

    <a class="voltar" href="listam.php">Voltar</a>
    <div class="box">
<form action="saveEditarm.php" method="POST" >
    
        <legend><b> Cadastro de Médico</b></legend>
    <br>
    <div class="inputbox">
        <input type="text" name="crm" id="crm" value="<?php echo $crm  ?>" class="inputUser" required >
    <label for="crm" class="labelInput">CRM</label>
    </div>
    <br><br>
    <div class="inputbox">
        <input type="text" name="especialidade" id="especialidade" value="<?php echo $especialidade  ?>" class="inputUser" required >
    <label for="especialidade" class="labelInput">Especialidade</label>
    </div>
    <br><br>    
    <input type="hidden" name="id" value="<?php echo $id  ?>">
    <br><br>
    <input type="submit" name="update" id="update" >
    
    


</form>

 </div>
 <div class="flex">
<a href="sair.php" class="bnt-danger me-5">Sair</a>
</div>
<br>
 <div class="menu">
    <ul>
        <li><a href="sistema.php">Home</a></li>
        <li><a href="cadmedico.php">Cadastrar Médico</a></li>
        <li><a href="formulario.php">Cadastrar Usuario</a></li>
        <li><a href="listap.php">Listar Usuarios</a></li>
        <li><a href="listam.php">Listar Médicos</a></li>
    </ul>

</div>

</body>
</html>