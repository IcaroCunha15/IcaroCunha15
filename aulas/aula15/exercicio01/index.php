<?php
    include_once 'src/conexao.php';

    $dbh = Conexao::getConexao();

    $query = "SELECT * FROM escolabd.usuarios;";

    $stmt =$dbh->query($query);

    $usuarios = $stmt->fetchAll();
    $quantidadeUsuarios = (int) $stmt->rowCount();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercíco 01 - CRUD</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <main>
        <h1>Usuários</h1>
        <nav>
            <a href="#">Novo</a>            
        </nav>
        <hr>
        <section>
            <table >
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Status</th>
                </tr>
                <tr>
                    <?php if ($quantidadeUsuarios >0) :?>
                        <?php foreach($usuarios as $usuario): ?>
                            <tr>
                                <td><?= $usuario['id']?></td>
                                <td><?= $usuario['nome']?></td>
                                <td><?= $usuario['email']?></td>
                                <td><?= ($usuario['status'] == "1" ? "Ativo" : "Inativo")?></td>
                            </tr>
                        <?php endforeach ?>
                    <?php else: ?>
                        <td colspan="4">Não existem usuários cadastrados.</td>
                    <?php endif ?>
                </tr>
            </table>
        </section>
    </main>
</body>
</html>