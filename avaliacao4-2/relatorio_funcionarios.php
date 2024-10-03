<?php
require_once 'conexao.php';

$query = '
     SELECT * FROM  tb_funcionarios ORDER BY id ASC
';
$retorno = $conexao->query($query);
$lista = $retorno->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand">Relatório de clientes</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"></button>
            <div class="text-right mb-3">
                <a href="principal.php" class="btn btn-danger"><i class="fas fa-sign-out-alt"></i> Voltar</a>
            </div>
        </div>
    </nav>
    <div class="m-5">
        <table class="table table-striped">
            <thead>
                <tr class="text-start">
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Funcao</th>
                    <th scope="col">Salario</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($lista as $cliente) {
                    echo "<tr class=\"text-start\">";
                    echo "<td>" . $cliente['id'] . "</td>";
                    echo "<td>" . $cliente['nome'] . "</td>";
                    echo "<td>" . $cliente['email'] . "</td>";
                    echo "<td>" . $cliente['telefone'] . "</td>";
                    echo "<td>" . $cliente['funcao'] . "</td>";;
                    echo "<td>" . $cliente['salario'] . "</td>";                  
                    echo "</tr>";
                };
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>