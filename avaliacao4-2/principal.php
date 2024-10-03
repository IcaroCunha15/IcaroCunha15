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
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="logout.php">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>

<body>
    <div class="container mt-4 text-center">
        <div class="text-right mb-3">
            <a href="logout.php" class="btn btn-danger"><i class="fas fa-sign-out-alt"></i> Sair</a>
        </div>
        <img src="images.png" style="width:700px" margin-bottom: 40px;" alt="Logomarca" class="logo">
    </div>
    <div class="container mt-4">

        <div class="row">

            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="fas fa-user-plus fa-3x mb-3"></i>
                        <h5 class="card-title">Cadastrar Funcionario</h5>
                        <a href="cadastro_funcionario.php" class="btn btn-primary">Cadastrar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="fas fa-clipboard-list fa-3x mb-3"></i>
                        <h5 class="card-title">Relatorio Funcionarios</h5>
                        <a href="relatorio_funcionarios.php" class="btn btn-primary">Ver Relatorio</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="fas fa-chart-bar fa-3x mb-3"></i>
                        <h5 class="card-title">Relatorio usuarios</h5>
                        <a href="relatorio_usuario.php" class="btn btn-primary">Ver Relatorio</a>
                    </div>
                </div>
            </div>
