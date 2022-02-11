<?php  
    //Iniciar Sessão
    session_start();
    //Destrua qualquer variavel com nome e senha
    unset($_SESSION ['nome']);
    unset($_SESSION ['senha']);
    //Redirecione para tela de login
    header("Location:./login/login.html")

?>