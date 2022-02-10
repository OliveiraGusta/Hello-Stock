<?php

//Variaveis para c
$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'hello_stock';


$connection = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);


//If Else para Testar a conexão com o banco de dados
if($connection -> connect_errno){
  echo "Erro na conexão com o Banco de Dados";
  }
  else{
    echo "Conexão efetuada :)";
  }


      ?>