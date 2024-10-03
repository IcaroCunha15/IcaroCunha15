<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $salario = $_POST["salario"];
    function impostoderenda($salario){
        $imposto=0;
        if($salario <= 1903.98){
            $imposto=0;
        } else if($salario <= 2826.65){
            $imposto = ($salario*7.5)/100;
        } else if($salario <= 3751.05){
            $imposto = ($salario*15)/100;
    } else if($salario <= 4664.68){
        $imposto = ($salario*22.5)/100;
    }else{
        $imposto = ($salario*27.5)/100;
    }
    return $imposto;

}
    echo"O imposto é de 1.000";
    echo impostoderenda($salario);
    echo"O imposto é de 2.000";
    echo impostoderenda($salario);
    echo"O imposto é de 3.000";
    echo impostoderenda($salario);
    echo"O imposto é de 4.000";
    echo impostoderenda($salario);
    echo"O imposto é de 5.000";
    echo impostoderenda($salario);
    ?>
</body>
</html>