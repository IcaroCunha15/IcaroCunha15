<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $peso = $_POST["peso"];
    $idade = $_POST["idade"];
    $nome = $_POST["nome"];
    $altura = $_POST["altura"];
    
    echo"<h1>Resultado</h1>";
    
    if($idade >= 16 & 69 && $peso >=  50 && $altura >=1.65){
        $peso = 69;
        $idade= 16 & 69;
        echo"$nome atende os requisitos";
    }else{
        echo" $nome não atende requisitos";
    }
    ?>
</body>
</html>