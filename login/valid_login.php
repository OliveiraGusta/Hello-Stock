<?php
//Teste de Funcionamento
//Verificar se a variavel entrar existe e Verificar se login e senha estiverem preenchidos
  if(isset($_POST['entrar']) && !empty($_POST['nome'])  && !empty($_POST['senha'])) 
  {
    include_once('../config.php');

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    
    //print_r('<br>Nome: ' . $nome);
    //print_r( '<br>Senha: ' .$senha);

    //Verificar se existe o nome e senha
    $sql = "SELECT * FROM cliente WHERE nome = '$nome' and senha = '$senha' ";

    //result recebe connection da pagina config.php
    $verifica = $connection->query($sql);

    //print_r  ($result);
    //print_r  ($sql);

    //Caso o numero de linhas do $verifica for menor que 1
    if (mysqli_num_rows($verifica) < 1)
    {
      //Caso menor que 1, mostre o alerta

      $alerta = "Nome e/ou senha incorretos";
      echo "<script type='text/javascript'>alert('$alerta');</script>";

      // LEMBRAR LEMBRAR
      // LEMBRAR Criar sistema para voltar para essa tela  login.html
      header('Location: login.html');
    } 
    else
    {
      header('Location: ../estoque/estoque.php');
    }

  }

  else
    {
      header('Location: login.html');
    }

?>