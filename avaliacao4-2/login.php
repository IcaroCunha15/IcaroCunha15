<?php
require_once 'conexao.php';
if(isset($_GET['nome'],$_GET['senha']) && !empty($_GET['nome']) && !empty($_GET['senha'])){
    $usuario = $_GET['nome'];
    $senha = $_GET['senha'];
  
    $query = '
    SELECT * FROM tb_usuario WHERE usuario = "' . $usuario . '" AND senha = "' . $senha . '"
   ';
  
    $retorno = $conexao->query($query);
    $lista = $retorno->fetchAll(PDO::FETCH_ASSOC);
  
    $quantidade = count($lista);
    
    if($quantidade >=1){
        
        if(!isset($_SESSION)){
            session_start();
        }
        $_SESSION['usuario'] = $usuario;
        
        header('Location: principal.php');
        exit();
    }else {
        echo "<p>";
        echo "Falha na autenticação";
        echo "</p>";
      }
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
 
   <div>
   <h1>Login</h1>
    <form action="login.php" method="get">
      <input type="text" name="nome" placeholder="Nome">
      <br><br>
      <input type="password" name="senha" placeholder="Senha">
      <br><br>
      <button>Enviar</button>
    </form>
    <a class="cadastro" href="cadastro_usuario.php">Cadastre-se</a>
   </div>
</body>
</html