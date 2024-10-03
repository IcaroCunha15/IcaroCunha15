<?php
require_once 'conexao.php';

if (isset($_GET['nome'], $_GET['senha']) && !empty($_GET['nome']) && !empty($_GET['nome'])) {
     $usuario = $_GET['nome'];
     $senha = $_GET['senha'];



try {
     $query = '
     CREATE TABLE if not exists tb_usuario(
          id int not null primary key auto_increment unique,
          usuario VARCHAR(50) not null,
          senha VARCHAR(50) not null
          )
';
     $retorno = $conexao->exec($query);

     $query = '
               INSERT into tb_usuario(
               usuario, senha
               ) values (
                    "' . $usuario . '", "' . $senha . '"     
               )
               
';
     $retorno = $conexao->exec($query);
     
     if($retorno == 1){
          
          echo"<p>";
          echo "Usuário cadastrado com SUCESSSO!";        
          echo"</p>";
          
     } else {
          echo"<p>";
          echo "Falha na autenticação";        
          echo"</p>";
     }
     

} catch (PDOException $e) {
     echo "Erro: " . $e->getCode();
     echo "<br>";
     echo "Mensagem: " . $e->getMessage();
}
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login</title>
     <link rel="stylesheet" href="styleLogin.css">
</head>

<body>
   <div>
     <h4>Cadastro de usuário</h4>
    <form action="cadastro_usuario.php">
    <input type="text" name="nome" placeholder="Novo Usuário">
     <br><br>
     <input type="password" name="senha" placeholder="Nova Senha">
     <br><br>
     <button>Cadastrar</button>
    </form>
     
     <a class="cadastro" href="login.php">Voltar</a>
   </div>
</body>


</html>