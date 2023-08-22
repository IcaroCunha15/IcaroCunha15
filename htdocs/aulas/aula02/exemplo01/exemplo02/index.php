<?php
date_default_timezone_Set('America/Sao_Paulo');
$nome = 'Icaro Cunha';
$dataAtual = date('d-m-y');
$horaAtual = date('H:i');
$datacomhora = date('d-m-y H:i:s');

echo "<p>A data e hora é;<strong>$datacomhora</strong></p>";

if ($horaAtual > 0 && $horaAtual <13)
{
    echo "Bom dia $nome.";

}elseif ($horaAtual >= 13 && $horaAtual <=18)
{
    echo "Boa tarde $nome.";
}else{
    echo "Boa noite $nome.";
}