<?php
$dsn = "mysql:host=localhost;dbname=avaliacao4_turmab";
$usuario="root";
$senha='';

try{
     $conexao = new PDO($dsn, $usuario, $senha);

}catch(PDOException $e){
     echo "Erro: ".$e->getCode();
     echo "Mensagem: ".$e->getMessage();
}
?>
