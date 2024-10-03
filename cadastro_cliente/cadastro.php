<?php
require_once 'conexao.php';
if (isset($_GET['usuario']) && isset($_GET['senha'])) {
    $usuario = $_GET['usuario'];
    $senha = $_GET['senha'];

try{
    $query = '
    create table tb_users(
        id int not null primary key auto_increment,
        usuario varchar(50) not null,
        senha varchar(12) not null
        )
    ';
    $retorno = $conexao->exec($query);
    
    $query = 'INSERT INTO tb_users(
        usuario,senha
        ) VALUES(
            "' . $usuario . '","' . $senha . '"
        )
        ';
            
        $retorno = $conexao->exec($query);
        
}catch (PDOException $erro) {
    echo "Erro: " . $erro->getCode();
    echo "<br>";
    echo "Mensagem: " . $erro->getMessage();
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styleLogin.css">
</head>
<body>
    <div>
        <h4>Cadastro de usuário</h4>
        <form action="cadastro.php">
            <input type="text" name="usuario" placeholder="Novo Usuario">
            <br> <br>
            <input type="password" name="senha" placeholder="Nova Senha">
            <br> <br>
            <button>Cadastrar</button>
        </form>
        <a class="cadastro" href="login.php">Voltar</a>
    </div>
</body>
</html>