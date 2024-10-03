<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>Pós-incremento</h3>
    <?php
    $num = 7;
    echo " O valor contido na variável num é: $num";
    echo "<br>";
    echo " O valor contido na variável num após o incremento é: " . $num++;
    echo "<br>";
    echo " O valor atualizado contido na variável num é: " . $num;    
    ?>
    <h3>Pré-incremento</h3>
    <?php 
    $num = 7;
    echo " O valor contido na variável num é: $num";
    echo "<br>";
    echo " O valor contido na variável num após o incremento é: " . ++$num;
    echo "<br>";
    echo " O valor atualizado contido na variável num é: " . $num;    
    ?>
    <h3>Pós-decremento</h3>
    
    <?php
    $num = 7;
    echo " O valor contido na variável num é: $num";
    echo "<br>";
    echo " O valor contido na variável num após o incremento é: " . $num--;
    echo "<br>";
    echo " O valor atualizado contido na variável num é: " . $num;    
    ?>
    
    <h3>Pré-decremento</h3>
    
    <?php
    $num = 7;
    echo " O valor contido na variável num é: $num";
    echo "<br>";
    echo " O valor contido na variável num após o incremento é: " . --$num;
    echo "<br>";
    echo " O valor atualizado contido na variável num é: " . $num;    
    ?>
    ?>
</body>
</html>