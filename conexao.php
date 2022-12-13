<?php

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "getycadastro";

    //criar a conexão

    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
    if($conn){
        echo ("conexao on");
    }

    else{
        echo ("not coneted");
    }
 
?>