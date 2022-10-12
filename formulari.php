<?php

if(isset($_POST['submit']))
{
  
    include_once('config.php');

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];      
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $estado = $_POST['estado'];
    $cidade = $_POST['cidade'];
    $bairro = $_POST['bairro'];
   

    $result = mysqli_query($conexao, "INSERT INTO usuario(nome,cpf,email,telefone,endereco,estado,cidade,bairro)
    VALUES ('$nome','$cpf','$email','$telefone','$endereco','$estado','$cidade','$bairro')");
    header('location: login.php');
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


    <a class="voltar" href="home.php">Voltar</a>
    <div class="box">
<form action="formulari.php" method="POST" >
    
        <legend><b> Cadastro de Usuário</b></legend>
    <br>
    <div class="inputbox">
        <input type="text" name="nome" id="nome" class="inputUser" required >
    <label for="nome" class="labelInput">Nome Completo</label>
    </div>
    <br><br>
    <div class="inputbox">
        <input type="text" name="cpf" id="cpf" class="inputUser" required >
    <label for="cpf" class="labelInput">CPF</label>
    </div>
    <br><br>
    <div class="inputbox">
        <input type="text" name="email" id="email" class="inputUser" required >
    <label for="email" class="labelInput">Email</label>
    </div>
    <br><br>
    <div class="inputbox">
        <input type="tel" name="telefone" id="telefone" class="inputUser" required >
    <label for="telefone" class="labelInput">Telefone</label>
    </div>
    <br><br>
               
    <div class="inputbox">
        <input type="text" name="endereco" id="endereco" class="inputUser" required >
    <label for="endereco" class="labelInput">Endereço</label>
    </div>
    <br><br><br>
    <div class="inputbox">
        <input type="text" name="cidade" id="cidade" class="inputUser" required >
    <label for="cidade" class="labelInput">Cidade</label>
    </div>
    <br><br>
    <div class="inputbox">
        <input type="text" name="estado" id="estado" class="inputUser" required >
    <label for="estado" class="labelInput">Estado</label>
    </div>  
    <br><br>
    <div class="inputbox">
        <input type="text" name="bairro" id="bairro" class="inputUser" required >
    <label for="bairro" class="labelInput">Bairro</label>
    </div>  
    <br><br>  
    
    <br><br>
    <input type="submit" name="submit" id="submit" >
    
    


</form>

 </div>


</body>
</html>