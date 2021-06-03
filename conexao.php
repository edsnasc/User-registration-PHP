<?php

    $servidor   = "localhost";
    $usuario   = ""; //Configurar usuário do banco para conexão
    $senha     = ""; //Configurar senha do usuário para conexão
    $dbname    = "DBcadUsuario"; //Informar nome do Banco

    //Criar Conexão com Banco

    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

    if(!$conn){
        die("Conexão falhou: " . mysqli_connect_error());
    }
    
    echo "<h1>Conexão bem sucedida</h1>"
?>