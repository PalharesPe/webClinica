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
        div{
        background-color: rgba(0, 0, 0, 0.3);
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 50px;
        border-radius: 5px;
        color: white;
    }
    input{
        padding: 15px;
        border: none;
        outline: none;
        font-size: 15px;

    }
    .inputSubmit{
        color: white;
    background-color: #198191;
    width: 100%;
    border: none;
    padding: 10px;    
    font-size: 20px;
    cursor: pointer;
    border-radius: 20px;
    }
    .inputSubmit:hover {
        background-color: #1aa5ba;
        cursor: pointer;
    }
    .voltar{
      
      color: white;
      font-family: 'Times New Roman', Times, serif;
      text-decoration: none;
    }

    </style>
</head>
<body>
    <a class="voltar" href="home.php">Voltar</a>
<div>
<h1>Login</h1>
        <form action="testelogin.php" method="POST" >

        
    <input type="text" name="email" placeholder="Email">
    <br><br>
    <input type="text" name="cpf" placeholder="CPF">
    <br><br>
    <input class="inputSubmit" type="submit" name="submit" value="Enviar">
    </form>
</div>



</body>
</html>