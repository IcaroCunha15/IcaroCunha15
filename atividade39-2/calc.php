
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
<?php
$n1 = $_POST["n1"];
$n2 = $_POST["n2"];

$op = $_POST["op"];
$resultado = $_POST["op"];

echo"<h1>Resultado: </h1>";
if ($op == "somar"){
    $resultado = $n1 + $n2;
    echo "<h3>A soma é: $resultado</h3>";
}
if ($op == "subtrair"){
    $resultado = $n1 - $n2;
    echo "<h3>A subtração é: $resultado</h3>";
}
if ($op == "dividir"){
    $resultado = $n1 / $n2;
    echo "<h3>A divisão é: $resultado</h3>";
}
if ($op == "multiplicar"){
    $resultado = $n1 * $n2;
    echo "<h3>A soma é: $resultado</h3>";
}
?>
</body>
</html>