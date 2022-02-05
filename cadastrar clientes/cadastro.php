<?php

$link = mysqli_connect("localhost", "root", "", "hello_stock");
if (!$link) {
    die('Não foi possível conectar: ' . mysql_error());
}

$login = $_POST['login'];
$email = $_POST['email'];
$doc = $_POST['doc'];
$rsocial = $_POST['rsocial'];
$contato = $_POST['contato'];
$cep = $_POST['cep'];
$endereco = $_POST['endereco'];
$endnumero= $_POST['endnumero'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];

$select = mysqli_query($link,"SELECT * FROM cliente");
$array = mysqli_fetch_array($select);

  if($login == "" || $login == null){
    echo"<script language='javascript' type='text/javascript'>
    alert('O campo login deve ser preenchido');window.location.href='
    cadastro.html';</script>";

    }else{

      function gerar_senha($tamanho, $maiusculas, $minusculas, $numeros, $simbolos){
        $senha = "0"; // inicia a váriavel
        $ma = "ABCDEFGHIJKLMNOPQRSTUVYXWZ"; // $ma contem as letras maiúsculas
        $mi = "abcdefghijklmnopqrstuvyxwz"; // $mi contem as letras minusculas
        $nu = "0123456789"; // $nu contem os números
        $si = "!@#$%¨&*()_+="; // $si contem os símbolos

        if ($maiusculas){
                // se $maiusculas for "true", a variável $ma é embaralhada e adicionada para a variável $senha
                $senha .= str_shuffle($ma);
        }

            if ($minusculas){
                // se $minusculas for "true", a variável $mi é embaralhada e adicionada para a variável $senha
                $senha .= str_shuffle($mi);
            }

            if ($numeros){
                // se $numeros for "true", a variável $nu é embaralhada e adicionada para a variável $senha
                $senha .= str_shuffle($nu);
            }

            if ($simbolos){
                // se $simbolos for "true", a variável $si é embaralhada e adicionada para a variável $senha
                $senha .= str_shuffle($si);
            }

            // retorna a senha embaralhada com "str_shuffle" com o tamanho definido pela variável $tamanho
            return substr(str_shuffle($senha),0,$tamanho);
        }

        $senhainc = gerar_senha(10, true, true, true, true); // criar a senha sem criptografia MD5
        $senhafull = MD5($senhainc); // passando para o MD5

        $query = mysqli_query($link,"INSERT INTO cliente (nome, cpfcnpj, social, cep, endereco, bairro, contato, email, endumero, cidade, estado, senha) VALUES ('$login','$doc','$rsocial','$cep','$endereco','$bairro','$contato','$email','$endnumero','$cidade','$estado','$senhafull')");
      }

?>