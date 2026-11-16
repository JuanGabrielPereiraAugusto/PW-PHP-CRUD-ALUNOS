<?php

    require 'conexao.php';

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $codigo = (int)$_POST["codigo"];
        $nome = isset($_POST["nome"]) ? $_POST["nome"] : null;
        $idade = isset($_POST["idade"]) ? (int)$_POST["idade"] : null;
        $email = isset($_POST["email"]) ? $_POST["email"] : null;

        $campos = [];
        $valores = [];
        $tipos = "";

        if(!empty($nome))
        {
            $campos[] = "NOME = ?";
            $valores[] = $nome;
            $tipos .= "s";
        }

        if(!empty($idade))
        {
            $campos[] = "IDADE = ?";
            $valores[] = $idade;
            $tipos .= "i";
        }

        if(!empty($email))
        {
            $campos[] = "EMAIL = ?";
            $valores[] = $email;
            $tipos .= "s";
        }

        if(empty($campos))
            die("Nenhum campo foi atualizado!");

        $sql = "UPDATE ALUNO SET " . implode(", ",$campos) . " WHERE CODIGO = ?";
        $valores[] = $codigo;
        $tipos .= "i";
        $stm = $conexao->prepare($sql);
        $stm->bind_param($tipos, ...$valores);

        if($stm->execute())
            echo "Usuário $codigo atualizado com sucesso";
        else
            echo "Erro ao atualizar usuário $stm->error";

        $stm->close();

        $conexao->close();
    }

    echo "<br><br>";
    echo '<a href="index.php">Voltar</a>';



