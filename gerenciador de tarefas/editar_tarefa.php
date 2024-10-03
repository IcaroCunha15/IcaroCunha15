<?php
$dsn = "mysql:host=localhost;dbname=db_lista_tarefas2;charset=utf8";
$usuario = "root";
$senha = "";
if (isset($_GET['id']) && !empty($_GET['id'])){
    $id_tarefa = $_GET['id'];
    try{
        $conexao = new PDO($dsn,$usuario,$senha);

        $query = 'SELECT * FROM tb_tarefas WHERE id = :id';
        $retorno = $conexao->prepare($query);
        $retorno->bindParam(':id',$id_tarefa);
        $retorno->execute();
        
        $tarefa= $retorno->fetch(PDO::FETCH_ASSOC);

    }catch (PDOException $e) {
        echo  "Erro: " . $e->getCode();
        echo "<br>";
        echo  "Mensagem: " . $e->getMessage();
        die(); 
    }
    }else{
        header("Location: principal2.php");
        exit();
    }
    if (isset($_POST['descricao'])&& !empty($_POST['descricao'])){
        $descricao = $_POST['descricao'];
        
        try{
            $query = 'UPDATE tb_tarefas SET descricao = :descricao WHERE id = :id';
            $retorno = $conexao->prepare($query);
            $retorno->bindParam(':descricao',$descricao);
            $retorno->bindParam(':id',$id_tarefa);
            $retorno->execute();
            
            header("Location: principal2.php");
            exit();

        }catch (PDOException $e) {
            echo  "Erro: " . $e->getCode();
            echo "<br>";
            echo  "Mensagem: " . $e->getMessage();
            die(); 
    }
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
            <h1>Editar Tarefa</h1>
        </div>
        <div class="form">
            <form action="editar_tarefa.php?id=<?php echo $id_tarefa;?>" method="post">
            <label for="descricao">Nova Descrição</label>
            <input type="text" name="descricao" value="<?php echo $tarefa['descricao']; ?>">
            <button type="submit">Atualizar</button>
            </form>
        </div>
        <div class="footer">
            <p>Desenvolvido por Icaro Cunha</p>
        </div>
    </div>
</body>
</html>