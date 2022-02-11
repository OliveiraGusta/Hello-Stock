<?php

//Variaveis para conexão com o Banco de dados
$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'hello_stock';

//$connection recebe a conexão com o Banco de dados
$connection = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);


//Teste de conexão com o Banco de dados
if($connection -> connect_errno){
  echo "Erro na conexão com o Banco de Dados";
  }
  else
  {
    echo "<h1>ERRO 404<h1> <br> Algo não esta funcionando :(";
  }
      ?>