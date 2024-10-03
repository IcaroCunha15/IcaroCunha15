<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Resultado</h1>
    <section>
    <?php
    $variavelNota1 = $_GET["Nota1"];
    $variavelNota2 = $_GET["Nota2"];
    $variavelNota3 = $_GET["Nota3"];
    $variavelNota4 = $_GET["Nota4"];
    
    $media = ($variavelNota1 + $variavelNota2 + $variavelNota3 + $variavelNota4) / 4;
    
    if($media >=10){
        echo"parabens";
    } else{
        echo"deu ruim";
    }
    ?>
    </section>
</body>
</html>
