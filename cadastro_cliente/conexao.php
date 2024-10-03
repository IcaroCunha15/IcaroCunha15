<?php
$dsn = "mysql:host=localhost;dbname=db_cadastro_cliente;charset=utf8";
$usuario = "root";
$senha = "";

try {
    $conexao = new PDO($dsn, $usuario, $senha);
} catch (PDOException $erro) {
    echo "Erro: " . $erro->getCode();
    echo "<br>";
    echo "Mensagem: " . $erro->getMessage();
   // die(); //em caso de erro na conexão encerra o script!
}