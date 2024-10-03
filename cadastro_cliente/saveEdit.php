<?php 
require_once 'conexao.php';

if(isset($_GET['submit'])){
     $id = $_GET['id'];
     $nome = $_GET['nome'];
     $email = $_GET['email'];
     $telefone = $_GET['telefone'];
     $genero = $_GET['genero'];
     $data_nascimento = $_GET['data_nascimento'];
     $cidade = $_GET['cidade'];
     $estado = $_GET['estado'];
     $endereco = $_GET['endereco'];
   
     $query = '
          UPDATE tb_clientes SET 
          nome = :nome,
          email = :email,
          telefone = :telefone,
          genero = :genero,
          data_nascimento = :data_nascimento,
          cidade = :cidade,
          estado = :estado,
          endereco = :endereco
          WHERE id = :id
     ';

     $retorno = $conexao->prepare($query);
     $retorno->bindParam(':nome', $nome);
     $retorno->bindParam(':id', $id);
     $retorno->bindParam(':email', $email);
     $retorno->bindParam(':telefone', $telefone);
     $retorno->bindParam(':genero', $genero);
     $retorno->bindParam(':data_nascimento', $data_nascimento);
     $retorno->bindParam(':cidade', $cidade);
     $retorno->bindParam(':estado', $estado);
     $retorno->bindParam(':endereco', $endereco);

     $retorno->execute();     
}

header('Location: relatorio.php');
exit();
?>