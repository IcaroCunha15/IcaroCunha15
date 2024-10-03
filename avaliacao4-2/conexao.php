<?php 
$dsn = "mysql:host=localhost;dbname=revisao_a4";
$usuario="root";
$senha='';

try{
     $conexao = new PDO($dsn, $usuario, $senha);

}catch(PDOException $e){
     echo "Erro: ".$e->getCode();
     echo "Mensagem: ".$e->getMessage();
}
?>