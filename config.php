<?php

use LDAP\Result;

    include_once("conexao.php");

    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
    $date = filter_input(INPUT_POST, 'nascimento', FILTER_SANITIZE_STRING);
    echo "Nome:" .$nome."<br>";
    echo "E-mail: $email <br>";
    echo "Senha: $senha <br>";
    echo "Nascimento: $date <br>";

    $Result_user = "INSERT INTO user (nome, email, senha, nascimento) VALUES ('$nome', '$email', '$senha', '$date', NOW())";
    mysqli_query($conn, $Result_user);
?>