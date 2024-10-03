<?php
$dsn = "mysql:host=localhost;dbname=db_lista_telefonica;charset=utf8";
$usuario = "root";
$senha = "";
try{
    $conexao = new PDO($dsn,$usuario,$senha);
    $query='
    create table tb_contatos(
        id int not null primary key auto_increment,
        nome varchar(100) not null,
        telefone varchar(20) not null
    )
    ';
    $retorno = $conexao->exec($query);
    if (isset($_GET['nome_agenda'],$_GET['nome_telefone'])&& !empty($_GET['nome_agenda'])&& !empty($_GET['nome_telefone'])){
        
        $nome = $_GET['nome_agenda'];
        $telefone = $_GET['nome_telefone'];
        
        if(!empty($nome) && !empty($telefone)){

            $query = '
            insert into tb_contatos(
                nome,telefone
            )values(
                "'. $nome.'", "'.$telefone.'"
            )
        ';
        $retorno= $conexao->exec($query);
            }
            header("Location: principal.php");
            exit();
        }
    
    $query='
    select * from tb_contatos
    ';
    $retorno = $conexao->query($query);
    
    $lista = $retorno->fetchAll(PDO::FETCH_NUM);
}catch (PDOException $e) {
    echo  "Erro: " . $e->getCode();
    echo "<br>";
    echo  "Mensagem: " . $e->getMessage();
}
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Sans:ital,wght@0,100..800;1,100..800&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title>Agenda Telefonica</title>
</head>
<body>
<div class="container">
    <div class="header">
        <h1>Agenda Telefonica</h1>
    </div>
    <div class="form">
        <form action="principal.php" method="get">
            <label for="nome_agenda">Nome</label>
            <input type="text" name="nome_agenda" placeholder="Digite o nome">
            <label for="nome_telefone">Telefone</label>
            <input type="text" name="nome_telefone" placeholder="Digite o telefone">
            <button type="submit">Cadastrar</button>
        </form>
    </div>
    <div class="separador"></div>
    <div class="lista-contatos">
        <?php
        echo "<ul>";
        foreach($lista as $contato){
            echo "<li>
            " . $contato[1] . "<div class ='icones'>
            <a href='principal.php?delete_id=" . $contato[0] . "'><i class='fa-solid fa-trash'></i></a>
            <a href='principal.php?edit_id=" . $contato[0] . "'><i class='fas fa-edit icone-editar'></i></a>
                </div>
     
                 </li>";
        }
        echo "</ul>";
        if (isset($_GET['delete_id'])) {
            $delete_id = $_GET['delete_id'];
            
            $query = 'DELETE FROM tb_contatos WHERE id = :delete_id';

            $retorno = $conexao->prepare($query);
            $retorno->bindParam(':delete_id', $delete_id);
            $retorno->execute();

            header("Location: principal.php");
            exit();
        }
         if (isset($_GET['edit_id'])) {
            $edit_id = $_GET['edit_id'];
                
            header("Location: editar_contato.php?id=$edit_id");
            exit();
        }
        ?>
    <div class="footer">
    <p>Desenvolvido por Icaro Cunha</p>
</div>
</div>
</body>
</html>