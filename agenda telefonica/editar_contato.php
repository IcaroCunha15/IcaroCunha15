<?php
$dsn = "mysql:host=localhost;dbname=db_lista_telefonica;charset=utf8";
$usuario = "root";
$senha = "";
 try{
    $conexao = new PDO($dsn,$usuario,$senha);
    if (isset($_GET['edit_id'])){
        $edit_id = $_GET['edit_id'];

        $query = 'SELECT * FROM tb_contatos WHERE id =:edit_id';
        $stmt = $conexao->prepare($query);
        $stmt->bindParam(':edit_id' , $edit_id);
        $stmt->execute();
        $contato = $stmt->fetch(PDO::FETCH_ASSOC);
    }
        If(!$contato){
            echo "numero não encontrado";
            exit();
        }

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $nome = $_POST['nome_agenda'];
            $telefone = $_POST['nome_telefone'];

            $query = 'UPDATE tb_contatos SET nome = :nome_agenda, telefone = :nome_telefone WHERE id = :edit_id';
            $stmt = $conexao->prepare($query);
            $stmt->bindParam(':nome_agenda' , $nome);
            $stmt->bindParam(':nome_telefone' , $telefone);
            $stmt->bindParam(':edit_id' , $edit_id);
            $stmt->execute();

            header("Location: principal.php");
            exit();
        }else{
            echo "nao encontrado";
            exit();
        }
    }catch (PDOException $e) {
        echo  "Erro: " . $e->getCode();
        echo "<br>";
    
        echo  "Mensagem: " . $e->getMessage();
    }

    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Editar Contato</h1>
        </div>
        <div class="form">
            <form action="editar_contato.php?id=<?php echo $id_contato;?>" method="post">
            <label for="descricao">Nova Descrição</label>
            <input type="text" name="nome" value="<?php echo $nome['nome']; ?>">
            <input type="text" name="telefone" value="<?php echo $telefone['telefone']; ?>">
            <button type="submit">Atualizar</button>
            </form>
        </div>
        <div class="footer">
            <p>Desenvolvido por Icaro Cunha</p>
        </div>
    </div>
</body>
</html>