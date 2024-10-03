<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style (3).css">
</head>
<body>
    <header>
        <h1>Resultado</h1>
    </header>
    <?php
    $variavelNome = $_GET["nome"];
    $variavelSobrenome = $_GET["sobrenome"];
    $variavelSenha = $_GET["senha"];
    echo "Bem vindo $variavelNome $variavelSobrenome  sua senha é $variavelSenha"
    ?>
</body>
</html>