<?php

function imprimirNome($nome,$sobrenome="Não informado")
{
    echo "<P>"Seu nome é: $nome e sobrenome é:$sobrenome";
}

$nome = "icaro";
$sobrenome = "cunha";

imprimirnome($nome, $sobrenome);
imprimierNome("Icaro");