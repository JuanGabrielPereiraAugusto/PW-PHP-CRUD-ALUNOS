<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto CRUD com PHP</title>
</head>
<body>
    <h2>Cadastrar aluno</h2>
    <form method="POST" action="inserir.php">
        <label for="nome">Nome: </label>
        <input type="text" id="nome" name="nome" required><br><br>
        <label for="idade">Idade: </label>
        <input type="number" id="idade" name="idade" min="0" required><br><br>
        <label for="email">E-mail: </label>
        <input type="email" id="email" name="email" required><br><br>
        <button type="submit">Cadastrar</button>
    </form>
    <br>
    <a href="index.php">Voltar</a>
</body>
</html>
