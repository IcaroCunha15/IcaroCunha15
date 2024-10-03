<?php
require_once 'conexao.php';


$query = '
   SELECT * FROM  tb_usuario ORDER BY id ASC
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
            <a class="navbar-brand">Relatório de usuarios</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"></button>
            <div class="text-right mb-3">
                <a href="principal.php" class="btn btn-danger"><i class="fas fa-sign-out-alt"></i> Voltar</a>
            </div>
        </div>
</nav>
<div>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Senha</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($lista as $usuario){
      echo "<tr class=\"text-start\">";
      echo "<td>$usuario[1]</td>";
      echo "<td>$usuario[2]</td>";
      echo "</tr>";
    };
    ?>
  </tbody>
</table>
</div>
</body>
</html>