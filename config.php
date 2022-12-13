<?php

use LDAP\Result;

    include_once("conexao.php");

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $date = $_POST['date'];


    $Result_user = "INSERT INTO user (nome, email, senha, nascimento) VALUES ('$nome', '$email', '$senha', '$date', NOW())";
    $save = mysqli_query($conn, $Result_user);

    if($save):
        echo "Nome:" .$nome."<br>";
        echo "E-mail: $email <br>";
        echo "Senha: $senha <br>";
        echo "Nascimento: $date <br>";
    endif;
?>