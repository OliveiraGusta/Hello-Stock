<?php
    //Iniciando Sessão
    session_start();

    //Se não existir uma variavel nome e não existir uma variavel senha
    if((!isset($_SESSION['nome']) == true) and (!isset($_SESSION['senha']) == true))
    {   
        //Caso não exista
            //Destrua qualquer variavel com nome e senha
        unset($_SESSION ['nome']);
        unset($_SESSION ['senha']);

             //Mostre o alert e volte para tela de login
        echo ("<script language='JavaScript'>
          window.alert('Faça seu login primeiro')
         window.location.href='../login/login.html';
          </script>");
    }
    else
    {
        echo ("<script language='JavaScript'>
        window.alert('Acesso permitido);
        </script>");

        $nome = $_SESSION['nome'];

    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estoque</title>
</head>
<body>
    
    <?php 
    echo "<h1>Seja Bem-vindo(a) " .$nome. ", a plataforma Hello Stock</h1>
    <br>
    <h2>Sessão de Estoque</h2>";  
    ?>

    <div>
        <a href='../deslogar.php'>Deslogar</a>
    </div>
</body>
</html>

