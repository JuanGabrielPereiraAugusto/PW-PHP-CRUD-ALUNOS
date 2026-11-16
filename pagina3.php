<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto CRUD com PHP</title>
</head>
<body>
    <h2>Atualizar aluno</h2>
    <p>Preencha o código e apenas os campos que deseja alterar.</p>
    <form method="POST" action="atualizar.php">
        <label for="codigo">Código: </label>
        <input type="number" id="codigo" name="codigo" min="1" required><br><br>
        <label for="nome">Nome: </label>
        <input type="text" id="nome" name="nome"><br><br>
        <label for="idade">Idade: </label>
        <input type="number" id="idade" name="idade" min="0"><br><br>
        <label for="email">E-mail: </label>
        <input type="email" id="email" name="email"><br><br>
        <button type="submit">Atualizar</button>
    </form>
    <br>
    <a href="index.php">Voltar</a>
</body>
</html>
