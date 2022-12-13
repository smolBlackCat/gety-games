<?php

    include_once("conexao.php");

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $nascimento = $_POST['nascimento'];


    $Result_user = "INSERT INTO user (nome, email, senha, nascimento) VALUES ('$nome', '$email', '$senha', '$nascimento')";
    $save = mysqli_query($conn, $Result_user);

    if($save):
        echo "Nome:" .$nome."<br>";
        echo "E-mail: $email <br>";
        echo "Senha: $senha <br>";
        echo "Nascimento: $nascimento <br>";
    endif;  
?>