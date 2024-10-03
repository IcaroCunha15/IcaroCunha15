<?php
require_once 'conexao.php';

if (!isset($_SESSION)) {
    session_start();
}
try{
$query = '
create table tb_jogador(
         id int not null primary key auto_increment,
          nome varchar(255) not null,
          email varchar (100) not null,
          telefone varchar (20) not null,
          Esporte varchar(50) not null,
          Modalidade varchar(16) not null
);
';
$retorno = $conexao->exec($query);
if (
       
    isset($_GET['nome']) &&
    isset($_GET['email']) &&
    isset($_GET['telefone']) &&
    isset($_GET['Esporte']) &&
    isset($_GET['Modalidade']) &&
    !empty($_GET['nome']) &&
    !empty($_GET['email']) &&
    !empty($_GET['telefone']) &&
    !empty($_GET['Esporte']) &&
    !empty($_GET['Modalidade']) 
){
    $nome = $_GET['nome'];
    $email = $_GET['email'];
    $telefone = $_GET['telefone'];
    $Esporte = $_GET['Esporte'];
    $Modalidade = $_GET['Modalidade'];

    $query = '
    insert into tb_jogador(
        nome, email, telefone, Esporte, Modalidade
    )value(
        "' . $nome . '", "' . $email . '", "' . $telefone . '", "' . $Esporte . '",
        "' . $Modalidade . '"
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
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Jogador</title>
    <link rel="stylesheet" href="styleCadastroJogador.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <div class="text-right mb-3">
        <a href="principal.php" class="btn btn-danger"><i class="fas fa-sign-out-alt"></i> Voltar</a>
    </div>
    
    <div class="box">
        <form action="cadastro_jogador.php" method="get">
            <fieldset>
                <legend><b>Cadastro de Jogador</b></legend>
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
                    <input type="text" name="Esporte" id="esporte" class="inputUser" required> <!-- Corrigido o id -->
                    <label for="funcao" class="labelInput">Esporte</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="Modalidade" id="modalidade" class="inputUser" required> <!-- Corrigido o id -->
                    <label for="salario" class="labelInput">Modalidade:</label>
                </div>
              
                <br><br>
                <input type="submit" name="submit" id="submit"><br><br>
            </fieldset>
        </form>
    </div>
</body>
</html>