<?php

if(!empty($_GET['id_u']))
{
  
    include_once('config.php');

    $id_u = $_GET['id_u'];

    $sqlSelect = "SELECT * FROM usuario WHERE id_u=$id_u";

    $result = $conexao->query($sqlSelect);
    
    if($result->num_rows > 0)
    {

        while($user_data = mysqli_fetch_assoc($result))
        {
            $nome = $user_data['nome'];
            $cpf = $user_data['cpf'];
            $sexo = $user_data['sexo'];
            $email = $user_data['email']; 
            $senha = $user_data['senha'];     
            $telefone = $user_data['telefone'];
            $endereco = $user_data['endereco'];
            $estado = $user_data['estado'];
            $cidade = $user_data['cidade'];
            $bairro = $user_data['bairro'];

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
<form action="saveEditar.php" method="POST" >
    <legend>Editar Cadastro</legend>
    <br>
    <div class="inputbox">
    <label for="nome" class="labelInput">Nome Completo</label>
        <input type="text" name="nome" id="nome" value="<?php echo $nome  ?>" class="inputUser" required >
    
    </div>
    <br>
    <div class="inputbox">
    <label for="cpf" class="labelInput">CPF</label>
        <input type="text" name="cpf" id="cpf" value="<?php echo $cpf  ?>" class="inputUser" required >
    
    </div>
    
    <p>Genero:</p>
    <input type="radio" id="feminino" name="sexo" value="feminino" <?php echo $sexo == 'feminino' ? 'checked' : '' ?> required>
    <label for="feminino">Feminino</label>
    <br>
    <input type="radio" id="masculino" name="sexo" value="masculino" <?php echo $sexo == 'masculino' ? 'checked' : '' ?> required>
    <label for="masculino">Masculino</label>
    <br>
    <input type="radio" id="outro" name="sexo" value="outro" <?php echo $sexo == 'outro' ? 'checked' : '' ?> required>
    <label for="outro">Outro</label>
    <br><br>



    <div class="inputbox">
    <label for="email" class="labelInput">Email</label>
        <input type="text" name="email" id="email" value="<?php echo $email  ?>" class="inputUser" required >
    
    </div>
    <br>
    <div class="inputbox">
    <label for="senha" class="labelInput">Senha</label>
        <input type="password" name="senha" id="senha" value="<?php echo $senha  ?>" class="inputUser" required >
    
    </div>
    <br>
    <div class="inputbox">
    <label for="telefone" class="labelInput">Telefone</label>
        <input type="tel" name="telefone" id="telefone" value="<?php echo $telefone  ?>" class="inputUser" required >
    
    </div>
    <br>
               
    <div class="inputbox">
    <label for="endereco" class="labelInput">Endereço</label>
        <input type="text" name="endereco" id="endereco" value="<?php echo $endereco  ?>" class="inputUser" required >
    
    </div>
    <br>
    <div class="inputbox">
    <label for="cidade" class="labelInput">Cidade</label>
        <input type="text" name="cidade" id="cidade" value="<?php echo $cidade  ?>" class="inputUser" required >
    
    </div>
    <bR>
    <div class="inputbox">
    <label for="estado" class="labelInput">Estado</label>
        <input type="text" name="estado" id="estado" value="<?php echo $estado  ?>" class="inputUser" required >
    
    </div>  
    <br>
    <div class="inputbox">
    <label for="bairro" class="labelInput">Bairro</label>
        <input type="text" name="bairro" id="bairro" value="<?php echo $bairro  ?>" class="inputUser" required >
    
    </div>  
    <br> 
    <input type="hidden" name="id" value="<?php echo $id_u  ?>">
    <br><br>
    <input type="submit" name="update" id="update" >
    
    


</form>

 </div>

</body>
</html>