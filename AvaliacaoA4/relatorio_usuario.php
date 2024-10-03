<?php
require_once 'conexao.php';

if (!isset($_SESSION)) {
  session_start();
}
$query = '
   SELECT * FROM  tb_usuario 
';
$retorno = $conexao->query($query);
$lista = $retorno->fetchAll();

if(isset($_GET['delete_id'])){
    $delete_id = $_GET['delete_id'];

    $query = 'DELETE FROM tb_usuario WHERE id = :delete_id';
    $retorno = $conexao->prepare($query);
                $retorno->bindParam(':delete_id', $delete_id);
                $retorno->execute();

                header("Location: relatorio_usuario.php");
                exit();
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=], initial-scale=1.0">

    <title>Relatorio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="styleRelatorio.css">



</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand">Relatório de Usuários</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"></button>
            <div class="text-right mb-3">
                <a href="" class="btn btn-danger"><i class="fas fa-sign-out-alt"></i> Voltar</a>
            </div>
        </div>


    </nav>

    <div class="m-5">
        <table class="table table-striped">
            <thead>
                <tr class="text-start">
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
      echo "<td>
      <a class='btn btn-sm btn-danger' href='?delete_id={$usuario['id']}'>
      <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
              <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0'/>
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