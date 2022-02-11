<?php
//Teste de Funcionamento
//Verificar se a variavel entrar existe e Verificar se login e senha estiverem preenchidos
  if(isset($_POST['entrar']) && !empty($_POST['nome'])  && !empty($_POST['senha'])) 
  {
    //Conexão com o Banco de Dados 
    include_once('../config.php');

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    //Verificar se existe o nome e senha
    $sql = "SELECT * FROM cliente WHERE nome = '$nome' and senha = '$senha' ";

    //verifica recebe connection da pagina config.php
    $verifica = $connection->query($sql);

    //Caso o numero de linhas do $verifica for menor que 1
    if(mysqli_num_rows($verifica) < 1)
    {
      //Caso < que 1, mostre o alerta e volte para tela login.html
      echo (
        "<script language='JavaScript'>
        window.alert('Nome e/ou senha incorretos')
        window.location.href='login.html';
        </script>");
    } 
    else
    {
      //Caso igual ou maior que 1, entre na tela estoque.php
      header('Location: ../estoque/estoque.php');
    }


  }

  else
    {
      echo (
        "<script language='JavaScript'>
        window.alert('Por favor, preencha todos os campos')
        window.location.href='login.html';
        </script>");
    }

?>