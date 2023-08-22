<?php
    require_once "usuario.php";

    $usuario01 = new Usuario();

    $usuario01->setcpf('123.456.789-00');
    $usuario01->setNome('Usuário 01');
    $usuario01->setEmail('usuario@email.com');
    $usuario01->setPassword('123');

    echo $usuario01->toString();