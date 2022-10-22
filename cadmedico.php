<?php

if(isset($_POST['submit']))
{
  
    include_once('config.php');
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf']; 
    $especialidade = $_POST['especialidade'];
    $crm = $_POST['crm'];
    $email = $_POST['email'];
    $sexo = $_POST['sexo'];
    $telefone = $_POST['telefone'];
       
    
   

    $result = mysqli_query($conexao, "INSERT INTO medico(nome,cpf,especialidade,crm,email,sexo,telefone)
    VALUES ('$nome','$cpf','$especialidade','$crm','$email','$sexo','$telefone')");
    header('location: listam.php');
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
}*/
.inputUser {
    outline: none;
}

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
    
    margin-top: -8px;
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
    margin-top: -25px;
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

    <a class="voltar" href="sistema.php">Voltar</a>
    <div class="box">
<form action="cadmedico.php" method="POST" >
    
        <legend><b> Cadastro de Médico</b></legend>
    <br>
    <div class="inputbox">
    <label for="nome" class="labelInput">Nome Completo</label>
        <input type="text" name="nome" id="nome" class="inputUser" required >
    
    </div>
    <br>
    <div class="inputbox">
    <label for="especialidade" class="labelInput">Especialidade</label>
        <input type="text" name="especialidade" id="especialidade" class="inputUser" required >
     </div>
    <br>
    <div class="inputbox">
    <label for="cpf" class="labelInput">CPF</label>
        <input type="text" name="cpf" id="cpf" class="inputUser" required >
    
    </div>    
    <br>
    <div class="inputbox">
    <label for="crm" class="labelInput">CRM</label>
        <input type="text" name="crm" id="crm" class="inputUser" required >
    
    </div>
    <br>
    
    <div class="inputbox">
    <label for="email" class="labelInput">Email</label>
        <input type="text" name="email" id="email" class="inputUser" required >
    
    </div>
       
    <p>Genero:</p>
    <input type="radio" id="feminino" name="sexo" value="feminino" required>
    <label for="feminino">Feminino</label>
    <br>
    <input type="radio" id="masculino" name="sexo" value="masculino" required>
    <label for="masculino">Masculino</label>
    <br>
    <input type="radio" id="outro" name="sexo" value="outro" required>
    <label for="outro">Outro</label>
    <br><br>
    <div class="inputbox">
    <label for="telefone" class="labelInput">Telefone</label>
        <input type="tel" name="telefone" id="telefone" class="inputUser" required >
    
    </div>
    <br>
    
    <div class="inputbox">
    <label for="estado" class="labelInput">Estado</label>
        <input type="text" name="estado" id="estado" class="inputUser" required >    
    </div> 
    <br>
    <div class="inputbox">
    <label for="cidade" class="labelInput">Cidade</label>
        <input type="text" name="cidade" id="cidade" class="inputUser" required >    
    </div>    
    <br>      
    <br>
    <input type="submit" name="submit" id="submit" >
    
    


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
        <li><a href="agendamento.php">Agendamento</a
    </ul>

</div>

</body>
</html>