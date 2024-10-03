<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Tipo String
    $nome = "icaro cunha de souza";
    //TIpo int
    $idade = 20;
    //Tipo float
    $peso = 76.5;
    //boolean
    $fumante_sn = true; //(true == 1) ou (false= vazio)
    ?>
    <h1>Ficha Cadastral</h1>
    <br>
    <p>Nome: <?= $nome ?></p>
    <p>Idade de: <?= $nome ?> é: <?= $idade ?></p>
    <p>Peso de: <?= $nome ?> é: <?= $peso ?></p>
    <p>Fumante: <?= $fumante_sn ?></p>

</body>
</html>