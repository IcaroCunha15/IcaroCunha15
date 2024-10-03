<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section>
<?php
    $escolha = $_GET["escolha"];
    switch ($escolha) {
        case 1:
            echo 'Bom Dia!';
            break;


        case 2:
            echo 'Bood Morning';
        break;


        case 3:
            echo 'Benvenuto';
            break;

        default:
            echo 'Opção Inválida';
    }


    ?></section>

</body>
</html>
