<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $lista_estados = array(
        'SP' => 'São Paulo',
        'RJ' => 'Rio de Janeiro',
        'DF' => 'Brasilia',
    );
    echo '<pre>';
    print_r($lista_estados);

    $lista_estados['AC'] = 'Rio Branco';

    echo '<pre>';
    print_r($lista_estados);
    echo '<pre>';
    echo $lista_estados['AC'];
    ?>
</body>
</html>