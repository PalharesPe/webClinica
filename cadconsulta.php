<?php

if(!empty($_GET['id_m']))
{
  
    include_once('config.php');

    $id_m = $_GET['id_m'];

    $sqlSelect = "SELECT * FROM medico WHERE id_m=$id_m";

    $result = $conexao->query($sqlSelect);
    
    if($result->num_rows > 0)
    {

        while($user_data = mysqli_fetch_assoc($result))
        {
            $nome = $user_data['nome'];
            $crm = $user_data['crm'];
            $especialidade = $user_data['especialidade'];

        }
        
    }
    

}

?> 
<?php

if(isset($_POST['submit']))
{
  
    include_once('config.php');
    $sql = "SELECT * FROM medico";

    $result = $conexao->query($sql);



    $nome = $_POST['nome'];
    $data = $_POST['data'];
    $especialidade = $_POST['especialidade'];      
    $crm = $_POST['crm'];
    
   

    $result = mysqli_query($conexao, "INSERT INTO agendamento(nome,data,especialidade,crm)
    VALUES ('$nome','$data','$especialidade','$crm')");
    header('location: agendamento.php');

    
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
.inputUser{
    outline: none;
}
    </style>
</head>
<body>

    <a class="voltar" href="listam.php">Voltar</a>
    <div class="box">
<form action="cadconsulta.php" method="POST" >
    
        <legend><b>Agendar Consulta</b></legend>
    <br>
    
    <div class="inputbox">
    <label for="nome" class="labelInput">Médico</label>
        <input type="" name="nome" id="nome" value="<?php echo $nome  ?>" readonly class="inputUser" required >
    
    </div>
    <br>    
    <div class="inputbox">
    <label for="especialidade" class="labelInput">Especialidade</label>
        <input type="" name="especialidade" id="especialidade" value="<?php echo $especialidade  ?>" readonly class="inputUser" required >
    
    </div>      
    <br>
    <div class="inputbox">
    <label for="data" class="labelInput">Datada Consulta </label>
        <input type="date" name="data" id="data" class="inputUser"  required >
    </div>
    <br>    
    <br>
    <input type="submit" name="submit" id="submit" >
    
    


</form>

 </div>


</body>
</html>