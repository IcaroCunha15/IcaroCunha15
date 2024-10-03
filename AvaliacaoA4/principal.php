<?php
require_once 'conexao.php';
session_start();

if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
    exit();
}
?>
   <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Página Principal</title>
        <!-- Bootstrap CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <!-- FontAwesome CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
        <link rel="stylesheet" href="logout.php">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    </head>

    <body>
        <div class="container mt-4 text-center">
            <h1>Cadastro de Jogadores</h1>
            <div class="text-right mb-3">
                <a href="" class="btn btn-danger"><i class="fas fa-sign-out-alt"></i> Sair</a>
            </div>
            <img src="logo.jpg" style=" width:600px" margin-bottom: 40px;" alt="Logomarca da Loja" class="logo">
        </div>
        <div class="container mt-4">

            <div class="row">

                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="fas fa-user-plus fa-3x mb-3"></i>
                            <h5 class="card-title">Cadastrar Jogador</h5>
                            <a href="cadastro_jogador.php" class="btn btn-primary">Cadastrar</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="fas fa-clipboard-list fa-3x mb-3"></i>
                            <h5 class="card-title">Relatório de Jogadores</h5>
                            <a href="relatorio_jogador.php" class="btn btn-primary">Ver Relatório</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="fas fa-chart-bar fa-3x mb-3"></i>
                            <h5 class="card-title">Relatório de Usuários</h5>
                            <a href="relatorio_usuario.php" class="btn btn-primary">Ver Relatório</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <footer class="footer mt-auto py-3">
            <div class="container text-center">
                ETC - Escola Técnica de Ceilândia
            </div>
        </footer>
    </body>

    </html>