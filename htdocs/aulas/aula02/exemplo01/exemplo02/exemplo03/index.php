<?php
date_default_timezone_set('America/Sao_Paulo');
$dataAtual = date('d-m-Y');
$horaAtual = date('H:i:s');
$dataComHora = date('d-m-Y H:i:s');
?>
<!Doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viweport" content="widht=devide-widht, initial-scale=1.0">
    <title>Trabalhando com datas</title>
</head>
<body>
    <h1>Trabalhando com data e hora em php</h1>
    <P>A data atual é: <b><?=$dataAtual;?></b></p>
    <p>A hora atual é: <b><?=$horaAtual;?></b></p>
    <p>Data e hora atual: <b><?=$dataComHora;?></b></p>

</body>
</html>