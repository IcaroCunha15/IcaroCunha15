<?php
require_once 'conexao.php';

try {
    $conexao = new PDO($dsn, $usuario, $senha);
    
if (isset($_POST['usuario']) && isset($_POST['senha'])) {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

     

    $query = 'SELECT * FROM tb_users WHERE usuario = "' . $usuario . '" AND senha = "' . $senha . '"';
   
    $retorno = $conexao->query($query);
    $lista = $retorno->fetchAll(PDO::FETCH_ASSOC);

    $qtd = count($lista);
    if ($qtd == 1) {
        echo"<section>Acessando Página de Cadastro</section>";
        header('location:cadastro.php');
    }else{
        echo"<section>Usuário ou senha incorretos!!</section>";
    }

  
}

} catch (PDOException $erro) {
    echo "Erro: " . $erro->getCode();
    echo "<br>";
    echo "Mensagem: " . $erro->getMessage();
    die();//em caso de erro na conexão encerra o script!
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
        <h1>Login</h1>
        <form action="tela-login.php" method="get">
            <input type="text" name="usuario" placeholder="Nome">
            <br><br>
            <input type="password" name="senha" placeholder="Senha">
            <br> <br>
            <button>Enviar</button>
        </form>
        <a class="cadastro" href="cadastro.php">Cadastre-se</a>
    </div>
</body>
</html>