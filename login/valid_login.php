<?php

$login = $_POST['nome'];
$senha = $_POST['senha'];

$link = mysqli_connect("localhost", "root", "", "hello_stock");

$verifica = mysqli_query($link,"SELECT * FROM funcionario WHERE nome =
    '$login' AND senha = '$senha'") or die("erro ao selecionar");
      if (mysqli_num_rows($verifica)<=0){
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='login.html';</script>";
        die();
      }else{
        setcookie("login",$login);
        header("Location:estoque.php");
      }

?>