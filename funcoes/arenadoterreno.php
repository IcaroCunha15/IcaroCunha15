<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>area do terreno</title>
</head>
<body>
    <?php
    function areadoterreno($altura,$base){
        $area = ($base * $altura);
        return ($area);
    }

    echo areadoterreno(10,100);
    ?>
</body>
</html>