<?php

    require_once 'conexao.php';

    $sql = "SELECT * FROM ALUNO;";
    $resultado = $conexao->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar</title>
</head>
<body>
    <h3>Lista de pessoas cadastradas</h3>
    <?php if($resultado->num_rows > 0) : ?>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Idade</th>
            <th>E-mail</th>
        </tr>
        <?php while($linha = $resultado->fetch_assoc()): ?>
        <tr>
            <td><?php echo $linha['CODIGO']; ?></td>
            <td><?php echo htmlspecialchars($linha['NOME']); ?></td>
            <td><?php echo $linha['IDADE']; ?></td>
            <td><?php echo htmlspecialchars($linha['EMAIL']); ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
    <?php else: ?>
        <p>Nenhuma pessoa cadastrada</p>
    <?php endif; ?>
    <?php $conexao->close(); ?>
    <br>
    <a href="index.php">Voltar</a>
</body>
</html>
