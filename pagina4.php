<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto CRUD com PHP</title>
</head>
<body>
    <h2>Excluir aluno</h2>
    <form method="POST" action="excluir.php">
        <label for="codigo">Código: </label>
        <input type="number" id="codigo" name="codigo" min="1" required><br><br>
        <button type="submit">Excluir</button>
    </form>
    <br>
    <a href="index.php">Voltar</a>
</body>
</html>
