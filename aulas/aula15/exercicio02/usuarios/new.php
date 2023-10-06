<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01 - Adicionando Usuario</title>
</head>
<body>
    <h1>Novo Usuário</h1>
    <form action="usuarioadd.php" method="post">
        <label>E-mail</label><br>
        <input type="email" name="email" placeholder="Informe seu e-mail." size="80" required autofocus><br>
        <label>Nome</label><br>
        <input type="text" name="nome" placeholder="Informe seu nome." size="80" required><br>
        <label>Password</label><br>
        <input type="password" name="password" placeholder="Informe sua senha." required><br><br>

        <button type="submit">Salvar</button>
    </form>
</body>
</html>