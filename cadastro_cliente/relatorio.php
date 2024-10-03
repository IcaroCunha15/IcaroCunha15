<?php
require_once 'conexao.php';
try{
$query = '
SELECT * FROM  tb_clientes
';
$retorno = $conexao->query($query);
$lista = $retorno->fetchAll();
}catch (PDOException $erro) {
    echo "erro:" . $erro->getCode();
    echo "<br>";
    echo "Mensagem:" . $erro->getMessage();
}
if (isset($_GET['edit_id'])) {
    $edit_id = $_GET['edit_id'];
        
    header("Location: edit.php?id=$edit_id");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatorio</title>
    <link rel="stylesheet" href="styleFormulario.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
          <div class="container-fluid">
               <a class="navbar-brand">Relatório de clientes</a>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"></button>
          </div>
     </nav>
     <div class="d-flex">
            <a href="login.php" class="btn btn-danger">Sair</a>
        </div>
    </nav>
    <div class="m-5">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Genero</th>
                    <th scope="col">Data de Nascimento</th>
                    <th scope="col">Cidade</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Endereço</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($lista as $cliente) {
                    echo "<tr>";
                    echo "<td>" . $cliente['id'];
                    echo "<td>" . $cliente['nome'];
                    echo "<td>" . $cliente['email'];
                    echo "<td>" . $cliente['telefone'];
                    echo "<td>" . $cliente['genero'];
                    echo "<td>" . $cliente['data_nascimento'];
                    echo "<td>" . $cliente['cidade'];
                    echo "<td>" . $cliente['estado'];
                    echo "<td>" . $cliente['endereco'];
                    echo  "td>
                    <a class='btn btn-sm btn-primary' href='edit.php?id=$cliente[id]'>
                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                    <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.46tímido325'/>
                  </svg>
                    </a>";
                    echo "</tr>";
                };
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>