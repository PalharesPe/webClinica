<?php
include_once('config.php');
$sql = "SELECT * FROM medico";

$result = $conexao->query($sql);

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebClinica | PH</title>
</head>
<style>
  body{
    background-color: #1891a3;
    color: white;
    
    }
    .voltar{
      
      color: white;
      
      text-decoration: none;
    }
    .top{
    
    margin: -21px;
    width: auto;
    height: 100px;
    background-color: #c7c7c7;
}
h1{
text-align: center;
font-family: Arial, Helvetica, sans-serif;
color: #1891a3;
margin-top: 20px;
}
    
.menu {
    position: absolute;
    margin-top: -22px;
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
  .lista{
    position: absolute;
    border-radius: 10px;
    background-color: rgba(0, 0, 0, 0.3);
    margin-top: 50px;
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
    font-family: Arial, Helvetica, sans-serif;
    

}
.bnt-danger:hover{
background-color: #c72e2e;
}
</style>
<body>
<div class="top">
    <br>
<h1>Sistema WebClinca</h1>
</div>
<a class="voltar" href="sistema.php">Voltar</a>
<br><br>
<div class="lista" >
        <table class="table">
  <thead>
    
    <tr>
      <th scope="col">ID</th>
      
      <th scope="col">CRM</th>
      <th scope="col">Especialidade</th>
      

      <!-- <th scope="col">E-mail</th>
      <th scope="col">Telefone</th>
      <th scope="col">Endereço</th>
      <th scope="col">Estado</th>
      <th scope="col">Cidade</th>
      <th scope="col">Bairro</th> -->
    </tr>
    
  </thead>
  <tbody>
    <?php
    
        while($user_data = mysqli_fetch_assoc($result))
        {
        
             echo "<tr>";
             echo "<td>".$user_data['id']."</td>";
             echo "<td>".$user_data['crm']."</td>";
             echo "<td>".$user_data['especialidade']."</td>";
             echo "<td>
             <a class='btn btn-sm btn-primary' href='editm.php?id=$user_data[id]'>
             <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-fill' viewBox='0 0 16 16'>
             <path d='M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z'/>
           </svg>
           </a>
             <a class='btn btn-sm btn-danger' href='deletem.php?id=$user_data[id]'>
           <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
           <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
           </svg>
           </a>
             </td>";
             /*
             echo "<td>".$user_data['email']."</td>";
             echo "<td>".$user_data['telefone']."</td>";
             echo "<td>".$user_data['endereco']."</td>";
             echo "<td>".$user_data['estado']."</td>";
             echo "<td>".$user_data['cidade']."</td>";
             echo "<td>".$user_data['bairro']."</td>";*/
             echo "</tr>";
        }
    ?>
  </tbody>
</table>
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