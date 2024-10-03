<?php
require_once('conexao.php');
try{
    
    $query = '
    create table tb_clientes(
        id int not null primary key auto_increment,
        nome varchar(50) not null,
        email varchar(50) not null,
        telefone int(15) not null,
        genero varchar(8) not null,
        data_nascimento int(12) not null,
        cidade varchar(100) not null,
        estado char(2) not null,
        endereco varchar(20) not null
       )
    ';
    $retorno = $conexao->exec($query);
    if (
       
        isset($_GET['nome']) &&
        isset($_GET['email']) &&
        isset($_GET['telefone']) &&
        isset($_GET['genero']) &&
        isset($_GET['data_nascimento']) &&
        isset($_GET['cidade']) &&
        isset($_GET['estado']) &&
        isset($_GET['endereco']) &&
        !empty($_GET['nome']) &&
        !empty($_GET['email']) &&
        !empty($_GET['telefone']) &&
        !empty($_GET['genero']) &&
        !empty($_GET['data_nascimento']) &&
        !empty($_GET['cidade']) &&
        !empty($_GET['estado']) &&
        !empty($_GET['endereco']) 
    ) {
    $nome = $_GET['nome'];
    $email = $_GET['email'];
    $telefone = $_GET['telefone'];
    $genero = $_GET['genero'];
    $data_nascimento = $_GET['data_nascimento'];
    $cidade = $_GET['cidade'];
    $estado = $_GET['estado'];
    $endereco = $_GET['endereco'];

    if (!empty($nome) && !empty($email) && !empty($telefone)
    && !empty($genero) && !empty($data_nascimento) && !empty($cidade)
&& !empty($estado) && !empty($endereco)){

    $query = 'INSERT INTO tb_clientes(
        nome,email,telefone,genero,data_nascimento,cidade,estado,endereco
    )VALUES(
        "'.$nome. '" , "'.$email. '" , "'.$telefone. '" , "'.$genero. '" ,
         "'.$data_nascimento. '" , "'.$cidade. '" , "'.$estado. '" , "'.$endereco. '"  
    )
    ';
    $retorno = $conexao->exec($query);
    }
    header("Location: formulario.php");
    exit();
}
    
}catch (PDOException $erro) {
    echo "Erro: " . $erro->getCode();
    echo "<br>";
    echo "Mensagem: " . $erro->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="box">
        <form action="" method="get">
            <fieldset>
                <legend><b>Formulario de Clientes</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome">Nome Completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="email" name="email" id="email" class="inputUser" required>
                    <label for="email">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone">Telefone</label>
                </div>
                <br><br>
                <p>Sexo</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="feminino">Masculino</label>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="feminino">Outro</label>
                <div class="inputBox">
                    <label for="">Data de Nascimento</label>
                    <input type="data" name="data_nascimento" id="data_nascimento" class="inputUser" required>
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="">Cidade</label>
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="">Estado</label>
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="">Endereco</label>
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>