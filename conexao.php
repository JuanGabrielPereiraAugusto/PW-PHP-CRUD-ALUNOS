<?php

    // Conexão com o MySQL local (XAMPP).
    // Para publicar em uma hospedagem, troque pelos dados do seu servidor,
    // mas NUNCA envie a senha real para o GitHub.
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "BDALUNO";

    $conexao = new mysqli($servidor, $usuario, $senha, $banco);

    if($conexao->connect_error)
    {
        die("Erro de conexão: ".$conexao->connect_error);
    }
