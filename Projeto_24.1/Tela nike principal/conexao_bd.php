<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_projeto";

    $conexao = new mysqli($servername, $username, $password, $dbname);
    if($conexao->connect_error){
        die("Conexão com o banco de dados falhou: " . $conexao->connect_error);
    }
?>  