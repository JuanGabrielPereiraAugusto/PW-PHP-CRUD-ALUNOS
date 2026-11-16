<?php

  require 'conexao.php';

  // só aceita envio pelo formulário (POST)
  if($_SERVER["REQUEST_METHOD"] != "POST")
  {
    header("Location: index.php");
    exit;
  }

  $codigo = (int)$_POST["codigo"];

  $sql = "DELETE FROM ALUNO WHERE CODIGO = ?;";

  $stm = $conexao->prepare($sql);

  $stm->bind_param("i", $codigo);

  if($stm->execute() && $stm->affected_rows > 0)
    echo "Aluno removido com sucesso!";
  elseif($stm->affected_rows == 0)
    echo "Nenhum aluno encontrado com o código $codigo.";
  else
    echo "Erro ao remover aluno.";

  $stm->close();

  $conexao->close();

  echo "<br><br>";
  echo '<a href="index.php">Voltar</a>';
