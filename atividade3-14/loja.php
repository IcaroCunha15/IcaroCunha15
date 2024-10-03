<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja</title>
    <link rel="stylesheet" href="style (3).css">
</head>
<body>
    <header><h1>Detalhes da compra</h1></header>
    <main>
        <section>
            <?php
            $cartao = $_GET["cartao"];
            $valor = $_GET["valor"];
            $valor_frete = 50;
            $recebeu_frete;

            if($valor >= 100 && $cartao == "sim"){
                $valor_frete = 0;
                $recebeu_frete = true;
            }
            ?>
            <p>Possui cartão da loja?</p>
            <?php
            if($cartao == "sim"){
                echo "sim";
            } else{
                echo "nao";
            }
            ?>
            <p>valor da compra: <?= $valor ?></p>

            <p>Recebeu desconto de frete</p>
            <?php
            if($recebeu_frete == "sim"){
                echo "sim";
            } else{
                echo "nao";
            }
            ?>
            <p>valor do frete: <?= $valor?></p>
        </section>
    </main>
</body>
</html>