<?php

  require 'conexao.php';

  // só aceita envio pelo formulário (POST)
  if($_SERVER["REQUEST_METHOD"] != "POST")
  {
    header("Location: index.php");
    exit;
  }

  $nome = $_POST["nome"];
  $idade = (int)$_POST["idade"];
  $email = $_POST["email"];

  $sql = "INSERT INTO ALUNO (NOME, IDADE, EMAIL) VALUES (?, ?, ?);";

  $stm = $conexao->prepare($sql);

  $stm->bind_param("sis", $nome, $idade, $email);

  if($stm->execute())
    echo "Aluno cadastrado com sucesso!";
  else
    echo "Erro ao cadastrar aluno.";

  $stm->close();

  $conexao->close();

  echo "<br><br>";
  echo '<a href="index.php">Voltar</a>';
