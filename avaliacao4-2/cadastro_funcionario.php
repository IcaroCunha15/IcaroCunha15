<?php
require_once 'conexao.php';

try{
$query = '
create table tb_funcionarios(
         id int not null primary key auto_increment,
          nome varchar(255) not null,
          email varchar (100) not null,
          telefone varchar (20) not null,
          funcao varchar(50) not null,
          salario varchar(16) not null
);
';
$retorno = $conexao->exec($query);


if (
       
    isset($_GET['nome']) &&
    isset($_GET['email']) &&
    isset($_GET['telefone']) &&
    isset($_GET['funcao']) &&
    isset($_GET['salario']) &&
    !empty($_GET['nome']) &&
    !empty($_GET['email']) &&
    !empty($_GET['telefone']) &&
    !empty($_GET['funcao']) &&
    !empty($_GET['salario']) 
){
    $nome = $_GET['nome'];
    $email = $_GET['email'];
    $telefone = $_GET['telefone'];
    $funcao = $_GET['funcao'];
    $salario = $_GET['salario'];

    $query = '
    insert into tb_funcionarios(
        nome, email, telefone, funcao, salario
    )value(
        "' . $nome . '", "' . $email . '", "' . $telefone . '", "' . $funcao . '",
        "' . $salario . '"
            )
        ';

$retorno = $conexao->exec($query);
}

}catch (PDOException $e) {
     echo "Erro: " . $e->getCode();
     echo "Mensagem: " . $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
<div class="text-right mb-3">
        <a href="principal.php" class="btn btn-danger"><i  class="fas fa-sign-out-alt"></i> Voltar</a>
    </div>
    <div class="box">
    <form action="cadastro_funcionario.php" method="get">
        <fieldset>
            <p>Cadastro de Funcionarios</p>
            <br>
            <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="funcao" id="funcao" class="inputUser" required>
                    <label for="funcao" class="labelInput">funcao</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="salario" id="salario" class="inputUser" required>
                    <label for="salario" class="labelInput">salario</label>
                </div>
                <br>
                <input type="submit" name="submit" id="submit">
        </fieldset>
    </form>
    </div>
</body>
</html>